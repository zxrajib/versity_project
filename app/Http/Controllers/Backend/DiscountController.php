<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class DiscountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function discount_list()
    {
        $discounts = Discount::latest()->get();
        return view('backend.discount.index', compact('discounts'));
    }

    public function discount_store(Request $request)
    {
        $name = $request->input('name');
        $photo = $request->file('image');
        $photo_name = 'discount_' . md5($name) . time() . '.' . $photo->getClientOriginalExtension();
        try {
            $photo->move(public_path('backend/img/discount'), $photo_name);
        } catch (Exception $e) {
            return redirect()->back();
        }
        $discountData = [
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'name' => $name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->amount,
            'valid_till' => $request->valid_till,
            'image' => $photo_name
        ];
        $discount = Discount::create($discountData);
        toastr()->success('Discount Added Successfully', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function discount_update(Request $request, $id)
    {
        $name = $request->input('name');
        $photo = $request->file('image');
        if ($photo !== null) {
            $photo_name = 'category_' . md5($name) . time() . '.' . $photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('backend/img/discount'), $photo_name);
            } catch (Exception $e) {
                return redirect()->back();
            }
        } else {
            $photo_name = $request->input('old_image');
        }

        $discountData = [
            'user_id' => Auth::user()->id,
            'name' => $name,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->amount,
            'valid_till' => $request->valid_till,
            'image' => $photo_name
        ];
        $discount = Discount::find($id)->update($discountData);
        toastr()->success('Discount Updated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function discount_active($id)
    {
        $discountData = [
            'status' => 1,
        ];
        $discountData = Discount::find($id)->update($discountData);
        toastr()->success('Discount Activated', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function discount_inactive($id)
    {
        $discountData = [
            'status' => 0,
        ];

        $productList=Product::where('discount_id', $id)->get();
        foreach ($productList as $product){
            $product->update(['discount_id'=> null]);
        }

        $discountData = Discount::find($id)->update($discountData);
        toastr()->success('Discount Decactivated', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }


    public function product_list($id)
    {

        $discountData = $id;
        $products = Product::with(['category', 'brand', 'unit', 'stock.stockDetails' => function ($q) {
            return $q->orderBy('sell_price', 'ASC')->get();
        }])->has('stock')
            ->where('discount_id', null)
            ->whereStatus(1)
            ->latest()
            ->get();
//        $products = Product::with('category', 'brand', 'unit')->where('discount_id', null)->latest()->get();
        $categoryData = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $unitData = Unit::whereStatus(1)->get();

        return view('backend.discount.discount_assign', compact('products', 'categoryData', 'brandData', 'unitData', 'discountData'));


    }

/*    public function product_assign($id, $product_id)
    {
        $productData = [
            'discount_id' => $id,
        ];

        $productData = Product::find($product_id)->update($productData);
        toastr()->success('Discount Assigned Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }*/

    public function product_assign(Request $request)
    {
        $productData = [
            'discount_id' => $request->discount_id,
        ];

        $productData = Product::find($request->product_id)->update($productData);
        toastr()->success('Product Assign To Discount Successfully', 'Success', ['timeOut' => 2000]);
        if ($productData){
            $products = Product::with(['category', 'brand', 'unit', 'stock.stockDetails' => function ($q) {
                return $q->orderBy('sell_price', 'ASC')->get();
            }])->has('stock')
                ->where('discount_id', null)
                ->whereStatus(1)
                ->latest()
                ->get();
            return response()->json($products);
        }else{
            return "FAILED";
        }

    }

    public function product_unassign($id)
    {
        $productData = [
            'discount_id' => 0,
        ];
        $productData = Product::find($id)->update($productData);
        toastr()->success('Product Removed.', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function discounted_products($id)
    {
        $discountDetails=Discount::where('id' , $id)->first();
        $discountedProducts=Product::where('discount_id', $id)->get();
        return view('backend.discount.discounted_products', compact('discountedProducts','discountDetails'));
    }




}
