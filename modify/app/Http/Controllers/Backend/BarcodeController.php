<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\StockDetail;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function barcode_list()
    {
        $products = StockDetail::with('stock.product')->get();
        $attributeValues = AttributeValue::with('attribute')->get();
         return view('backend.barcode.index', compact('products', 'attributeValues'));
    }

    public function barcode_details(Request $request, $id)
    {
        $number = $request->number;
        $products = [];
        for ($i=0; $i<$number; $i++){
            $products[] = StockDetail::with('stock.product')->where('id', $id)->first();
        }
        $attributeValues = AttributeValue::with('attribute')->get();
        return view('backend.barcode.barcode-preview', compact('products', 'attributeValues'));
    }
}
