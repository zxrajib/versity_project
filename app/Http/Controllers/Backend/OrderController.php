<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Stock;
use App\Models\StockDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class OrderController extends Controller
{
    public function order_list()
    {
        $orders = Order::with('orderDetail', 'users')->latest()->get();


//        $pending= Order::where('status', '0');

        return view('backend.order.index', compact('orders'));

    }


    public function order_update(Request $request, $uuid)
    {
        $order = Order::where('uuid', $uuid)->with('orderDetail')->first();
        if ($request->status == 1){
            foreach ($order->orderDetail as $single_order) {
                $stock_id = $single_order->stock_details_id;
                $stock_details = StockDetail::where('id', $stock_id)->with('stock')->first();
                $update_data = [
                    'quantity' => ($stock_details->quantity - $single_order->quantity),
                    'total_out' => ($stock_details->total_out + $single_order->quantity),
                ];
                $stock_details->update($update_data);

                $stock = Stock::where('id', $stock_details->stock_id)->first();
                $update_order_data = [
                    'total_out' => ($stock->total_out + $single_order->quantity),
                ];
                $stock->update($update_order_data);
            }
        }

        $status = [
            'status' => $request->status,
        ];
        $order->update($status);
        toastr()->success('Order Status updated successfully');
        return redirect()->back();

    }

    public function order_details($id)
    {
        $notification = Notification::find($id);
//        $notification->update(['read_at' => now()]);
        $notificationData = json_decode($notification->data);
        $order_id = $notificationData->order_id;
        $customerData = Customer::where('user_id', Auth::user()->id)->first();
        $orderData = Order::with('orderDetail.product')->where('id', $order_id)->first();

        return view('backend.order.order_details', compact('orderData', 'customerData'));
    }
}
