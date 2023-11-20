<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }
    public function payment_list()
    {
        $payments=Payment::all();
        return view('backend.payment.index',compact('payments'));
    }

    public function payment_store(Request $request)
    {
        $paymentData=[
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'supplier_id'=>'1',
            'payment_type_id'=>'1',
            'total_paid'=>$request->t_paid,
            'total_due'=>$request->t_due,
        ];
        $payments=Payment::create($paymentData);
        return redirect()->back();
    }

    public function payment_update(Request $request, $id)
    {
        $paymentData=[
            'user_id'=>'1',
            'supplier_id'=>'1',
            'payment_type_id'=>'1',
            'total_paid'=>$request->t_paid,
            'total_due'=>$request->t_due,
        ];
        $payments=Payment::find($id)->update($paymentData);
        return redirect()->back();
    }
}
