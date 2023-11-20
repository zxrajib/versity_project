<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Middleware\frontend_auth;
use App\Models\AttributeValue;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class AddToCartController extends Controller
{
    public $cart;
    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function add_to_cart_ajax(Request $request, $id, $qty, $size)
    {
        $data['id'] = $id;
        $data['qty'] = $qty;
        $data['size'] = $size;

        return response()->json($data);
    }

    public function cart()
    {
        $cart_data = $this->cart->single_user_cart();
        if ($cart_data){
            return view('frontend.product.cart', compact('cart_data'));
        }else{
            toastr('Cart Is Empty', 'error');
            return redirect()->back();
        }
    }
}
