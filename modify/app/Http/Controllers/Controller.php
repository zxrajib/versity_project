<?php

namespace App\Http\Controllers;

use App\Models\StockDetail;
use App\Models\SupplierPaymentDetail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function uuid()
    {
        $uuid = Str::uuid()->toString();

        return $uuid;
    }

    public function short_string($str) {
        $rest = substr($str, 0, 20);
        return $rest;
    }

    public function barcode_number()
    {
        $barcode_rand = mt_rand(100000000000, 999999999999);
        $barcodeNumbers = StockDetail::where('barcode', $barcode_rand)->select('barcode')->first();

        if ($barcodeNumbers !== null) {
            $this->barcode();
        }

        return $barcode_rand;
    }

    public function supplierPaymentNo()
    {
        $supplierPaymentNo = mt_rand(1000000, 9999999);
        $supplierPaymentNos = SupplierPaymentDetail::where('supplier_payment_id', $supplierPaymentNo)->select('supplier_payment_id')->first();
        if ($supplierPaymentNos !== null) {
            $this->supplierPaymentNo();
        }

        return $supplierPaymentNo;
    }
}
