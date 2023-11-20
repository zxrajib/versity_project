<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAds;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductAdsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function product_ads_list()
    {
        try {
            $product_ads = ProductAds::orderBy('rank', 'desc')->with('product', 'product.image')->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('backend.product_ads.index', compact('product_ads'));
    }

    public function product_ads_status($id)
    {
        try {
            $data = ProductAds::find($id);
            if ($data->status == 0) {
                $status = 1;
            } else{
                $status = 0;
            }
            $update_data = [
                'status' => $status,
            ];
            $data->update($update_data);
            toastr()->success('Status Change Successfully.', 'Status Change', ['timeOut' => 5000]);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->back();
    }

    public function product_ads_assign($id)
    {
        try {
            $data = ProductAds::select('id')->first();
            $product = Product::has('stock')->whereStatus(1)->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('backend.product_ads.assign', compact('data', 'product'));
    }

    public function product_ads_assign_update(Request $request, $id)
    {
        try {
            $data = ProductAds::find($id);
            $update_data = [
                'product_id'    =>$request->product_id
            ];
            $data->update($update_data);
            toastr()->success('Product Assign to Ads Successfully.', 'Product Assign Ads', ['timeOut' => 5000]);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->route('product_ads_list');
    }
}
