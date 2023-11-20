<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    public function autocomplete_search(Request $request)
    {
        $searchData= $request->get('term', '');
        $productsData=Product::where('name', 'LIKE', '%'.$searchData.'%' )
            ->with(['stock.stockDetails'=> function ($q){
                return $q->orderBy('sell_price', 'ASC')->get();
            }])->has('stock')->whereStatus(1)
            ->get();
        $data= [];
        foreach ($productsData as $product){
            $data[] =[
                'value'=>$product->name,
                'id'=>$product->id,
            ];
        }
        if(count($data)){
            return $data;
        }else{
            return ['value'=>'No Product Found', 'id'=>''];
        }
    }

    public function product_search(Request $request)
    {
        $searchData=$request->input('search_product');
        $productData=Product::with(['stock.stockDetails'=> function ($q){
        return $q->orderBy('sell_price', 'ASC')->get();
    }])->has('stock')->whereStatus(1)
            ->where('name', 'LIKE', '%'.$searchData.'%' )
            ->first();

        $productCategory=$productData->category_id;
        $catName=Category::where('id', $productCategory)->get();
        $parentCat=Category::where('id', $catName[0]->parent_id)->first();
        if ($productData){
            if (isset($_POST['searchbtn'])){
                $searchData=$request->input('search_product');
                $productLists=Product::with(['stock.stockDetails'=> function ($q){
                    return $q->orderBy('sell_price', 'ASC')->get();
                }])->has('stock')->whereStatus(1)
                    ->where('name', 'LIKE', '%'.$searchData.'%' )
                    ->get();
                if ($productData){
                    if ($productData->stock->stockDetails){
                        $stockProduct = $productData->stock->stockDetails->first();
                    }else{
                        toastr('!! Sorry , There is a problem in price', 'error');
                        return redirect()->back();
                    }
                }else{
                    toastr('Product is out of stock', 'error');
                    return redirect()->back();
                }
//                dd($productList);
                return view('frontend.product.searcheprodduct', compact('productLists', 'stockProduct'));
            }else{
                $categories = Category::where('parent_id', 0)
                    ->whereStatus(1)
                    ->with('child')
                    ->get();
                if ($productData){
                    if ($productData->stock->stockDetails){
                        $stockProduct = $productData->stock->stockDetails->first();
                    }else{
                        toastr('!! Sorry , There is a problem in price', 'error');
                        return redirect()->back();
                    }
                }else{
                    toastr('Product is out of stock', 'error');
                    return redirect()->back();
                }
                return view('frontend.product.single_product', compact('productData', 'catName', 'parentCat', 'categories','stockProduct'));
            }
        }

    }

    public function search(Request $request){
        $search_data = $request->search;
        config()->set('database.connections.mysql.strict', false);
        $allProducts = Product::where('name', 'LIKE', '%'.$search_data.'%' )
            ->with(['stock.stockDetails'])->has('stock')->whereStatus(1)
            ->get();
        $category_product = $allProducts->groupBy('category_id');
        $categories = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $unitData = Unit::whereStatus(1)->get();

        return view('frontend.product.allproducts', compact('category_product', 'allProducts', 'categories', 'brandData', 'unitData'));
    }
}
