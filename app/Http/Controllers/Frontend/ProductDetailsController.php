<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Purchase;
use App\Models\Stock;
use App\Models\StockAttribute;
use App\Models\StockDetail;
use App\Models\UserReviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request as Req;

class ProductDetailsController extends Controller
{
    public function findPrice(Request $request, $id, $data)
    {
        $attr_array = json_decode($data);
        $stockAttributeData = StockAttribute::select('stock_details_id', 'product_id', 'attr_id')->where('product_id', $id)->whereIn('attr_id', $attr_array)->get()->groupBy('stock_details_id');
        $stockDetailsId = '';
        foreach ($stockAttributeData as $singleStockAttributeData) {
            if ($singleStockAttributeData->count() == count($attr_array)) {
                $stockDetailsId = $singleStockAttributeData->first()->stock_details_id;
            }
        }
        $stockDetails = StockDetail::find($stockDetailsId);
        return response()->json($stockDetails);
    }

    public function ajaxList(Request $request, $id)
    {
        $productData = Product::with([
            'category.attribute.attrValue',
            'stock.stockDetails' => function ($q) {
                return $q->orderBy('price', 'ASC')->get();
            }])->find($id);

        $productDataAttr = $productData->category->attribute;
        return response()->json($productDataAttr);
    }

    public function product_details($uuid)
    {
        try {
            $product_id = Product::where('uuid', $uuid)->first();
            $productData = Product::with([
                'category.attribute.attrValue',
                'brand',
                'unit',
                'image',
                'stock.stockDetails.stock_attribute_data',
                'stock.stockDetails' => function ($q) {
                    return $q->orderBy('price', 'ASC')->get();
                }])->find($product_id->id);
            $all_related_products = Product::where('category_id', $product_id->category_id)->where('id', '!=', $product_id->id)->get();
            $product_review = UserReviews::where('product_id', $product_id->id)->get();
            $total_review = count($product_review);
            if ($total_review == 0){
                $average_review = $product_review->sum('rating') / 1;
            } else{
                $average_review = $product_review->sum('rating') / $total_review;
            }
            if ($all_related_products->count() >= 4) {
                $related_products = $all_related_products->random(4);
            } else {
                $related_products = $all_related_products->random($all_related_products->count());
            }

            toastr()->success('Product Details');
            return view('frontend.product.single_product', compact('productData', 'related_products', 'total_review', 'average_review'));

        } catch (\Exception $e) {
            toastr()->error('Something Went Wrong. Please Try Again');
            return back();
        }
    }

}
