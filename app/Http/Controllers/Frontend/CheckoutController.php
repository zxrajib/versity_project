<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Cart;
use App\Models\Charge;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Stock;
use App\Models\StockDetail;
use App\Models\User;
use App\Notifications\OrderNotification;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Exception;

class CheckoutController extends Controller
{
    public $cart, $product_order, $product_order_details;

    public function __construct()
    {
        $this->cart = new Cart();
        $this->product_order = new Order();
        $this->product_order_details = new OrderDetail();
    }

    public function checkout(Request $request)
    {
        $authUser = Auth::user();

        if ($authUser->user_type == "Customer") {

            if ($request->uuid) {
                foreach ($request->uuid as $key => $uuid) {
                    $column = "uuid";
                    $value = $uuid;
                    $find_data = $this->cart->find_exist_product_in_cart($column, $value);
                    $qty = (int)$request->qty[$key];
                    $sub_total = ($qty * $find_data->price);
                    $discount = (($find_data->discount / $find_data->quantity) * $qty);
                    $total = ($sub_total - $discount);
                    $update_data = [
                        "quantity" => $qty,
                        "sub_total" => $sub_total,
                        "discount" => $discount,
                        "total" => $total,
                    ];
                    $this->cart->data_update($column, $value, $update_data);
                }
            }
            $shippingCharge = Charge::where('status', 1)->latest()->first();
            $cart_data = $this->cart->single_user_cart();
            return view('frontend.product.checkout', compact('cart_data', 'authUser', 'shippingCharge'));
        } else {
            toastr()->error('You are not a Customer');
            return back();
        }
    }

    public function order(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->address) {
                $auth_user = Auth::user();
                $cart_data = $this->cart->single_user_cart();
                $total = $cart_data->sum('total');
                $sub_total = $cart_data->sum('sub_total');
                $discount = $cart_data->sum('discount');
                $order_data = [
                    'uuid' => $this->uuid(),
                    'user_id' => $auth_user->id,
                    'sub_total' => $sub_total,
                    'total_discount' => $discount,
                    'total' => $total,
                    'delivery_charge' => (float)$request->delivery_charge,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'order_note' => $request->order_note,
                    'payment_type' => $request->payment_type,
                ];

                $order = $this->product_order->data_store($order_data);

                if ($order) {
                    foreach ($cart_data as $cart_product) {
                        $order_details_data[] = [
                            'uuid' => $this->uuid(),
                            'order_id' => $order->id,
                            'product_id' => $cart_product->product_id,
                            'stock_details_id' => $cart_product->stock_details_id,
                            'attr_value' => $cart_product->attr_id,
                            'quantity' => $cart_product->quantity,
                            'price' => (float)$cart_product->price,
                            'discount' => (float)$cart_product->discount,
                            'sub_total' => (float)$cart_product->sub_total,
                        ];
                    }
                }
                $this->product_order_details->data_insert($order_details_data);

                $this->cart->cart_clear();
                DB::commit();
                toastr()->success('Order place Successfully.');
                return redirect()->route('home');
            } else {
                DB::rollback();
                toastr()->error('Please Enter Your Shipping Address.');
                return redirect()->route('checkout_get');
            }

        } catch (Exception $exception) {
            DB::rollback();
            toastr()->error('Something went wrong. Try again!!!!.');
            return back();
        }
    }
}
