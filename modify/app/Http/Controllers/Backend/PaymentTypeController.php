<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }
    public function paymenttype_list()
    {
        $paymenttypes=PaymentType::all();
        return view('backend.paymenttype.index',compact('paymenttypes'));
    }

    public function paymenttype_store(Request $request)
    {
        $paymentTypeData=[
            'uuid' => $this->uuid(),
            'type_name'=>$request->name,
        ];
        $paymentType=PaymentType::create($paymentTypeData);
        return redirect()->back();
    }

    public function paymenttype_update(Request $request, $id)
    {
        $paymentTypeData=[
            'type_name'=>$request->name,
        ];
        $paymentType=PaymentType::find($id)->update($paymentTypeData);
        return redirect()->back();
    }
    public function paymenttype_active($id)
    {
        $paymentTypeData = [
            'status' => 1,
        ];
        $paymentType = PaymentType::find($id)->update($paymentTypeData);
        return redirect()->back();
    }

    public function paymenttype_inactive($id)
    {
        $paymentTypeData = [
            'status' => 0,
        ];
        $paymentType = PaymentType::find($id)->update($paymentTypeData);
        return redirect()->back();
    }
}
