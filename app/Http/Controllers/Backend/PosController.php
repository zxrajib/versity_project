<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosController extends Controller
{
    public $return_category = array();
    public function pos()
    {
        $categories = Category::whereStatus(1)->get();
        $productLists = Product::with(['category', 'stock.stockDetails' => function ($q) {
            return $q->orderBy('sell_price', 'ASC')->get();
        }])->has('stock')->whereStatus(1)->get();
        return view('backend.pos.index', compact('productLists', 'categories'));
    }

    public function category_id($allCategoryId)
    {
        $categoryData = Category::select('id')->whereIn('parent_id', $allCategoryId)->get();

        if ($categoryData->count() > 0){
            foreach($categoryData as $categoryDataId){
                array_push($this->return_category, $categoryDataId->id);
            }
            
            $this->category_id($categoryData);
        }

        return $this->return_category;
    }

    public function product_category_ajax(Request $request)
    {
        $id = (int)$request->id;
        $productLists = Product::with(['category', 'stock.stockDetails' => function ($q) {
            return $q->orderBy('sell_price', 'ASC')->get();
        }])->get();
        if ($id == 0){
            $productList = $productLists;
        }else{
            $allCategoryId = [$id];
            $allData = $this->category_id($allCategoryId);
            array_push($allData, $id);
            $productList = $productLists->whereIn('category_id', $allData);
        }
        return response()->json($productList);
    }

}
