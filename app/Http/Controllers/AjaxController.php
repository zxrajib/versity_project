<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Charge;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use App\Models\StockDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public $cart, $charge;
    public function __construct()
    {
        $this->cart = new Cart();
        $this->charge = new Charge();
    }

    public function auth_user()
    {
        $user = Auth::user();
        return $user;
    }
    /*Backend Ajax Request Start Here*/

    public function ajax_brand_product(Request $request)
    {
        $id = $request->id;
        $data = Product::where('brand_id', $id)
            ->whereStatus(1)
            ->has('stock')
            ->with('image', 'stock')
            ->whereHas('stock', function ($q) {
                return $q->whereColumn('total_in', '>', 'total_out');
            })
            ->get();

        return response()->json($data);

    }

    public function ajax_charge_status_change(Request $request)
    {
        $current_status = Charge::find($request->id);
        if ($current_status->status == 0){
            $status = 1;
        }else {
            $status = 0;
        }
        $update_data = [
            'status'    => $status
        ];
        Charge::where('id', $request->id)->update($update_data);
        $data = Charge::all();
        return response()->json($data);
    }

    /*Backend Ajax Request End Here*/

    /*Frontend Ajax Request Start Here*/


    public function ajax_product_image_change(Request $request)
    {
        $find_image = ProductImage::select('image')->where('id', $request->id)->first();
        if ($find_image) {
            $data = $find_image;
        } else {
            $data = null;
        }

        return response()->json($data);
    }

    public function ajax_add_to_cart(Request $request)
    {
        $stock_details_uuid = $request->id;
        $qty = (int)$request->qty;
        $stock_details_data = StockDetail::where('uuid', $stock_details_uuid)->first();
        $stock_details_id = (int)$stock_details_data->id;
        $product_id = (int)$stock_details_data->product_id;
        $attr_id = $stock_details_data->attr_id;
        $sub_total = ((float)$stock_details_data->price * $qty);
        $discount = ((float)$stock_details_data->discount * $qty);
        $total = ($sub_total - $discount);
        $stock_details_cart_column = 'stock_details_id';
        $find_exist_product_in_cart = $this->cart->find_exist_product_in_cart($stock_details_cart_column,
            $stock_details_id);

        if ($find_exist_product_in_cart){
            $new_qty = ($find_exist_product_in_cart->quantity + $qty);
            $new_sub_total = ((float)$stock_details_data->price * $new_qty);
            $new_discount = ((float)$stock_details_data->discount * $new_qty);
            $new_total = ($new_sub_total - $new_discount);
            $update_cart_data = [
                'quantity'    => $new_qty,
                'sub_total'    => $new_sub_total,
                'discount'    => $new_discount,
                'total'    => $new_total,
            ];
            $column = 'id';
            $value = $find_exist_product_in_cart->id;
            $this->cart->data_update($column, $value, $update_cart_data);
        }else{
            $cart_data = [
                'uuid'  =>$this->uuid(),
                'user_id'=> $this->auth_user()->id,
                'product_id'    => $product_id,
                'stock_details_id'    => $stock_details_id,
                'attr_id'    => $attr_id,
                'price'    => (float)$stock_details_data->price,
                'quantity'    => $qty,
                'sub_total'    => $sub_total,
                'discount'    => $discount,
                'total'    => $total,
            ];
            $this->cart->data_store($cart_data);
        }
        $data['find_cart'] = $this->cart->single_user_cart();
        $data['success'] = 'Product Added To Cart Successfully.';
        return response()->json($data);
    }

    public function ajax_cart_data()
    {
        $data['cart_data'] = $this->cart->single_user_cart();
        $data['sub_total'] = $data['cart_data']->sum('sub_total');
        $data['discount'] = $data['cart_data']->sum('discount');
        $data['total'] = $data['sub_total'] - $data['discount'];
        return response()->json($data);
    }

    public function ajax_cart_data_remove(Request $request)
    {
        $column = 'uuid';
        $value = $request->id;
        $this->cart->data_remove($column, $value);
        return $this->ajax_cart_data();
    }

    public function ajax_cart_remove(Request $request)
    {
        $data = $this->ajax_cart_data_remove($request);
        return $data;
    }

    public function ajax_cart_data_change(Request $request)
    {
        $column = 'uuid';
        $value = $request->id;
        $exist_cart = $this->cart->find_exist_product_in_cart($column, $value);
        $qty = (int)$request->qty;
        $sub_total = ((float)$exist_cart->price * $qty);
        $discount = (((float)$exist_cart->discount / $exist_cart->quantity) * $qty);
        $total = ($sub_total - $discount);
        $cart_data = [
            'quantity'      =>$qty,
            'sub_total'     =>$sub_total,
            'discount'      =>$discount,
            'total'         =>$total,
        ];
        $this->cart->data_update($column, $value, $cart_data);
        $data =  $this->cart->find_exist_product_in_cart($column, $value);
        return response()->json($data);
    }



    /*Frontend Ajax Request End Here*/
}
