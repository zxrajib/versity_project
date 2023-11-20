<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\Stock;
use App\Models\StockDetail;
use App\Models\Supplier;
use App\Models\SupplierPayment;
use App\Models\SupplierPaymentDetail;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Exception;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function purchase_list()
    {
        $categories = Category::whereStatus(1)->get();
        $brands = Brand::whereStatus(1)->get();
        $units = Unit::whereStatus(1)->get();
        $attributes = Attribute::whereStatus(1)->get();

        return view('backend.purchase.index', compact('attributes',  'categories', 'brands', 'units'));
    }

    public function auth_user()
    {
        $auth_user = Auth::user();

        return $auth_user;
    }

    public function search_productAttribute(Request $request)
    {

        $attributes=Attribute::with('attrValue')->where('category_id',$request->id)->get();
        return response()->json($attributes);
    }

    public function search_productCategory(Request $request)
    {
        $products = Product::with(['brand', 'unit', 'category' => function ($q) {
            $q->with(['attribute' => function ($query) {
                $query->with('attrValue');
            }]);
        }])->find($request->id);

        return response()->json($products);
    }

    public function stockDetailsCheck($id, $attr_value_json)
    {
        $stockDetailsCheck = StockDetail::where('stock_id', $id)->where('attr_id', $attr_value_json)->latest()->get();

        return $stockDetailsCheck;
    }

    public function purchase_store(Request $request)
    {
        $supplier_id = 1;
//        $supplier_id = $request->input('supplier_id');
        $product_id = $request->input('product_id');
        $chalan_no = $request->input('chalan_no');
        $discount = $request->input('discount');
        $total = $request->input('total');

//        Purchase Start Here
        $purchaseData = [
            'uuid' => $this->uuid(),
            'supplier_id' => $supplier_id,
            'product_id' => $product_id,
            'user_id' => $this->auth_user()->id,
            'chalan_no' => $chalan_no,
            'discount' => $discount,
            'total' => $total,
        ];

        $purchase = Purchase::create($purchaseData);

        //        Purchase Details Start Here

        $attr_value__array = $request->input('attr_val_id');

        if ($request->has('attr_val_id')) {
            $all_attr_value = array_values($attr_value__array);

            foreach ($all_attr_value[0] as $key => $attrValueData) {
                $attr_value = array_column($attr_value__array, $key);
                $attr_value_json = json_encode($attr_value);
                $qty = $request->input('quantity');
                $quantity = $qty[$key];
                $buy_price_array = $request->input('buy_price');
                $buy_price = $buy_price_array[$key];
                $sell_price_array = $request->input('sell_price');
                $sell_price = $sell_price_array[$key];

                $purchaseDetailsData = [
                    'supplier_id' => $supplier_id,
                    'purchase_id' => $purchase->id,
                    'attr_val_id' => $attr_value_json,
                    'quantity' => $quantity,
                    'buy_price' => $buy_price,
                    'sell_price' => $sell_price,
                ];

                $purchaseDetails = PurchaseDetails::create($purchaseDetailsData);

                $stockSearch = Stock::where('product_id', $product_id)->first();

                if ($stockSearch) {
                    $newStockQuantity = $stockSearch->total_in + $quantity;
                    $stockData = [
                        'uuid' => $this->uuid(),
                        'product_id' => $product_id,
                        'total_in' => $newStockQuantity,
                    ];
                    $stock = Stock::find($stockSearch->id)->update($stockData);
                    $stock_id = $stockSearch->id;
                } else {
                    $stockData = [
                        'uuid' => $this->uuid(),
                        'product_id' => $product_id,
                        'total_in' => $quantity,
                    ];
                    $stock = Stock::create($stockData);
                    $stock_id = $stock->id;
                }

                $barcode_array = $request->input('barcode');

                if ($barcode_array[$key] == null) {
                    $barcode = $this->barcode_number();
                } else {
                    $barcode = $barcode_array[$key];
                }

                $stockDetailsCheck = StockDetail::where('stock_id', $stock_id)->where('attr_id', $attr_value_json)->first();

                if ($stockDetailsCheck) {
                    $newStockDetailsQuantity = $stockDetailsCheck->total_in + $quantity;
                    $stockDetailsData = [
                        'stock_id' => $stock_id,
                        'purchase_id' => $purchase->id,
                        'supplier_id' => $supplier_id,
                        'attr_id' => $attr_value_json,
                        'total_in' => $newStockDetailsQuantity,
                        'sell_price' => $sell_price,
                    ];
                    $stockDetails = StockDetail::find($stockDetailsCheck->id)->update($stockDetailsData);
                } else {
                    $stockDetailsData = [
                        'barcode' => $barcode,
                        'stock_id' => $stock_id,
                        'purchase_id' => $purchase->id,
                        'supplier_id' => $supplier_id,
                        'attr_id' => $attr_value_json,
                        'total_in' => $quantity,
                        'sell_price' => $sell_price,
                    ];
                    $stockDetails = StockDetail::create($stockDetailsData);
                }
            }
        } else {
            $implodeQuantity = implode($request->input('quantity'));
            $implodeBuyPrice = implode($request->input('buy_price'));
            $implodeSellPrice = implode($request->input('sell_price'));

            if (implode($request->input('barcode')) == null) {
                $implodeBarcode = $this->barcode_number();
            } else {
                $implodeBarcode = implode($request->input('barcode'));
            }

            $purchaseDetailsData = [
                'supplier_id' => $supplier_id,
                'purchase_id' => $purchase->id,
                'quantity' => $implodeQuantity,
                'buy_price' => $implodeBuyPrice,
                'sell_price' => $implodeSellPrice,
            ];
            $purchaseDetails = PurchaseDetails::create($purchaseDetailsData);

            $stockSearch = Stock::where('product_id', $product_id)->first();

            if ($stockSearch) {
                $stockId = $stockSearch->id;
                $newStockQuantity = $stockSearch->total_in + $implodeQuantity;

                $stockData = [
                    'uuid' => $this->uuid(),
                    'product_id' => $product_id,
                    'total_in' => $newStockQuantity,
                ];
                $stock = Stock::find($stockSearch->id)->update($stockData);
                $stock_id = $stockSearch->id;
            } else {
                $stockData = [
                    'uuid' => $this->uuid(),
                    'product_id' => $product_id,
                    'total_in' => $implodeQuantity,
                ];
                $stock = Stock::create($stockData);
                $stock_id = $stock->id;
            }

            $stockDetailsCheck = StockDetail::where('stock_id', $stock_id)->first();

            if ($stockDetailsCheck) {
                $newStockDetailsQuantity = $stockDetailsCheck->total_in + $implodeQuantity;
                $stockDetailsData = [
                    'stock_id' => $stock_id,
                    'purchase_id' => $purchase->id,
                    'supplier_id' => $supplier_id,
                    'total_in' => $newStockDetailsQuantity,
                    'sell_price' => $implodeSellPrice,
                ];
                $stockDetails = StockDetail::find($stockDetailsCheck->id)->update($stockDetailsData);
            } else {
                $stockDetailsData = [
                    'barcode' => $implodeBarcode,
                    'stock_id' => $stock_id,
                    'purchase_id' => $purchase->id,
                    'supplier_id' => $supplier_id,
                    'total_in' => $implodeQuantity,
                    'sell_price' => $implodeSellPrice,
                ];
                $stockDetails = StockDetail::create($stockDetailsData);
            }
        }

        if ($request->pay_amount == null) {
            $pay_amount = 0.00;
            $paymentType = 'none';
        } else {
            $pay_amount = $request->pay_amount;
            $paymentType = $request->payment_type;
        }

        $due_amount = ($total - ($request->pay_amount));

        $supplierPaymentData = [
            'uuid' => $this->uuid(),
            'user_id' => $this->auth_user()->id,
            'supplier_id' => $supplier_id,
            'chalan_no' => $chalan_no,
            'purchase_amount' => $total,
            'pay_amount' => $pay_amount,
            'due_amount' => $due_amount,
            'discount' => $discount,
        ];

        $supplierPayment = SupplierPayment::create($supplierPaymentData);

        $supplierPaymentDetailsData = [
            'uuid' => $this->uuid(),
            'user_id' => $this->auth_user()->id,
            'supplier_payment_id' => $supplierPayment->id,
            'payment_no' => $this->supplierPaymentNo(),
            'chalan_no' => $chalan_no,
            'payment_type' => $paymentType,
            'amount' => $pay_amount,
        ];

        $supplierPaymentDetails = SupplierPaymentDetail::create($supplierPaymentDetailsData);

        toastr()->success('Product Purchased Successfully.');

        return redirect()->back();

//            Purchase Details End  Here
//            Image Upload Start  Here

        /*if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filePath = $this->UserImageUpload($file); //passing parameter to our trait method one after another using foreach loop
                try {
                    $imageData = [
                        'product_id' => $product_id,
                        'image' => $filePath,
                    ];

                    $this->imageRepository->storeImageRepository($imageData);

                } catch (Exception $e) {
                    return redirect()->back();
                }
            }
        }*/

//            Image Upload End  Here

        /*        $images=[];
                if($files=$request->file('fileUpload')){
                    foreach($files as $file){
                        $name='product_' . time() . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('backend/img/product/img'), $name);

                        $images[]=[
                            'product_id'=>$request->input('product_name'),
                            'image'=>$name,
                        ];
                    }
                }*/
    }
}
