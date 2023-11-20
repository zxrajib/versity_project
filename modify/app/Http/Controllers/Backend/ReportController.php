<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function report_list()
    {
        $orders = Order::with('orderDetail', 'users')->latest()->get();
        return view('backend.report.report', compact('orders'));

    }


    public function getReport(Request $request)
    {
//        dd($request->all());
        $fromDate=$request->fromDate;
        $toDate=$request->toDate;
        $reportData=Order::whereDate('created_at','>=', $fromDate)->whereDate('created_at','<=', $toDate)->get();
        return response()->json($reportData);

    }

    public function checkReport(Request $request)
    {

    }


}
