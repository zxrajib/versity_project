<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\ProductReturn;
use App\Models\ProductReturnDetail;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\StockDetail;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    public function view_return()
    {
        $supplierData = Supplier::whereStatus(1)->get();
        return view('backend.return.index', compact( 'supplierData'));
    }

    public function search_by_barcode_ajax(Request $request)
    {
        $stockDetailsData = StockDetail::with('stock.product')->where('barcode', $request->barcode)->first();
        if ($stockDetailsData){
            $data['stockDetailsId'] = $stockDetailsData->id;
            $data['productName'] = $stockDetailsData->stock->product->name;
            $productId = $stockDetailsData->stock->product_id;
            $productAttrId = $stockDetailsData->attr_id;
            $attributeValueData = AttributeValue::with('attribute')->whereStatus(1)->get();
            $hyphen = ' :- ';
            $comma = '  ';
            $data['productAttributeName'] = '';
            foreach (json_decode($productAttrId) as $productAttribute){
                foreach ($attributeValueData as $attributeValue){
                    if ($attributeValue->id == $productAttribute){
                        $data['productAttributeName'].= $attributeValue->attribute->name . $hyphen . $attributeValue->value.$comma;
                    }
                }
            }
            $data['supplierId'] = $request->supplier_id;
            $purchaseDetailsData = PurchaseDetails::where('attr_val_id', $productAttrId)
                ->where('supplier_id', $data['supplierId'])->get();
            $data['productStock']= 0;
            $data['productBuyPrice'] = 0;
            foreach ($purchaseDetailsData as $purchaseData){
                $data['productStock']+= $purchaseData->quantity;
                $data['productBuyPrice'] = $purchaseData->buy_price;
            }
        }else{
            $data = [];
        }

        return response()->json($data);
    }

    public function search_supplier_by_product_ajax(Request $request)
    {
        $stockDetailsData = StockDetail::with('stock.product')->where('barcode', $request->barcode)->first();
        if ($stockDetailsData){
            $productId = $stockDetailsData->stock->product_id;
            $data['supplierList'] = Purchase::with('supplier')->select('product_id', 'supplier_id')->where('product_id', $productId)->distinct()->get();
        }else{
            $data = [];
        }

        return response()->json($data);
    }

    public function return_submit(Request $request)
    {
        DB::beginTransaction();
        try {

            $data = [
                'user_id'           => Auth::user()->id,
                'supplier_id'       => $request->supplier_id,
                'stock_details_id'  => $request->stockDetailsId,
                'purchase_price'    => $request->productPrice,
                'returned_quantity' => $request->returnQuantity,
                'remaining_quantity'=> $request->returnQuantity,
                'total_amount'      => $request->totalAmount,
            ];
            $insert = ProductReturn::create($data);

            $currentStockQuantity = StockDetail::where('id', $request->stockDetailsId)->select('total_in')->first();
            $updateStockQuantity = [
                'total_in' => $currentStockQuantity->total_in - $request->returnQuantity,
            ];
            $update = StockDetail::where('id', $request->stockDetailsId)->update($updateStockQuantity);

            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
            toastr()->error('Something Goes Wrong');
            return redirect()->back();
        }
        toastr()->success('Product Returned Successfully.');
        return redirect()->back();
    }

    public function return_list()
    {
        $returnList = ProductReturn::with('supplier','stockDetails.stock.product')
            ->where('remaining_quantity', '>', 0 )->get();
        $attrivalues = AttributeValue::with('attribute')->whereStatus(1)->get();
//        dd($returnList);
        return view('backend.return.return_list', compact('returnList', 'attrivalues'));
    }

    public function return_from_supplier(Request $request, $id)
    {
        $remainingQuantity = ProductReturn::select('remaining_quantity', 'id')->where('id', $id)->first();

        if ($remainingQuantity->remaining_quantity == 0){
            toastr()->warning('This Supplier Has Returned All Products Back. Remaining Quantity is 0.');
            return redirect()->back();
        }else{
            DB::beginTransaction();
            try {
                $currentStockQuantity = StockDetail::where('id', $request->stockDetailsId)->select('total_in')->first();
                $updateStockQuantity = $currentStockQuantity->total_in + $request->returned_quantity;
                $stockDetailInfo =[
                    'total_in'  => $updateStockQuantity,
                ];

                $updateStockDetails = StockDetail::where('id', $request->stockDetailsId)->update($stockDetailInfo);

                $updatedQuantity = $remainingQuantity->remaining_quantity - $request->returned_quantity;

                $data = [
                  'remaining_quantity'  => $updatedQuantity,
                ];

                 $update = ProductReturn::where('id', $id)->update($data);

                 $info = [
                     'product_return_id'   =>$id,
                     'returned_quantity'    =>$request->returned_quantity,
                 ];
                 $insert = ProductReturnDetail::create($info);

                DB::commit();
            }catch (\Exception $e){
                DB::rollBack();
                toastr()->error('Something Goes Wrong. Please Try again.');
                return redirect()->back();
            }
            toastr()->success('Product Stocked Back Successfully.');
            return redirect()->back();
        }
    }
}
