<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;
use App\Models\StockAttribute;
use App\Models\StockDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Exception;

class StockController extends Controller
{
    public $stock;
    public $stock_details;
    public $stock_attribute;

    public function __construct()
    {
//        $this->middleware(['auth', 'auth.admin']);
        $this->stock = new Stock();
        $this->stock_details = new StockDetail();
        $this->stock_attribute = new StockAttribute();
    }

    public function auth_user()
    {
        $data = Auth::user();
        return $data;
    }

    public function stock_list()
    {
        $user_id = $this->auth_user()->id;
        $stocks = $this->stock->stock_list($user_id);
        return view('backend.stock.index', compact('stocks'));
    }

    public function stock_in()
    {
        $approve_product = Product::where('user_id', Auth::id())->whereStatus(1)
            ->with('category', 'brand', 'unit')
            ->get();

        return view('backend.stock.stock_in', compact('approve_product'));
    }

    public function stock_in_store(Request $request)
    {
        DB::beginTransaction();
        try {
            $auth_id = $this->auth_user();
            $product_id = $request->product_id;
            $find_stock = $this->stock->product_find($product_id);

            if ($find_stock) {
                $update_stock_id = $find_stock->id;
                $update_qty = ($find_stock->total_in + array_sum($request->qty));
                $stockUpdateData = [
                    'total_in' => $update_qty,
                ];
                $update_stock_in = $this->stock->data_update($update_stock_id, $stockUpdateData);

                if ($request->has('attr_val_id')) {
                    foreach ($request->stock_details_id as $key => $singleData) {
                        $before_stock_details_data = $this->stock_details->data_show($singleData);

                        if ($singleData) {
                            $quantity = $request->qty[$key];
                            $price = $request->price[$key];
                            $discount = $request->discount[$key];
                            $before_stock_details_data = $this->stock_details->data_show($singleData);
                            $new_quantity = ($before_stock_details_data->quantity + $quantity);
                            $new_total_in = ($before_stock_details_data->total_in + $quantity);
                            $stockDetailsUpdateData = [
                                'quantity' => $new_quantity,
                                'total_in' => $new_total_in,
                                'price' => $price,
                                'discount' => $discount,
                                'discount_percentage' => (($discount * 100) / $price),
                            ];

                            $stock_attribute = $this->stock_details->data_update($singleData, $stockDetailsUpdateData);
                        } else {
                            $attr_value = array_column($request->attr_val_id, $key);
                            $attr_value_json = json_encode($attr_value);
                            $quantity = $request->qty[$key];
                            $price = $request->price[$key];
                            $discount = $request->discount[$key];
                            $stockDetailsData = [
                                'uuid' => $this->uuid(),
                                'stock_id' => $update_stock_id,
                                'user_id' => $auth_id->id,
                                'product_id' => $product_id,
                                'attr_id' => $attr_value_json,
                                'quantity' => $quantity,
                                'total_in' => $quantity,
                                'price' => $price,
                                'discount' => $discount,
                                'discount_percentage' => (($discount * 100) / $price),
                            ];

                            $stockDetails = $this->stock_details->data_create($stockDetailsData);

                            foreach ($request->attr_val_id as $single_attr_val_id) {
                                $stockDetailsAttributeData = [
                                    'uuid' => $this->uuid(),
                                    'user_id' => $auth_id->id,
                                    'stock_details_id' => $stockDetails->id,
                                    'product_id' => $product_id,
                                    'attr_id' => $single_attr_val_id[$key],
                                ];

                                $stock_attribute = $this->stock_attribute->data_create($stockDetailsAttributeData);
                            }
                        }
                    }
                } else {
                    $implodeQuantity = (($find_stock->stockDetails->first()->quantity) + (implode($request->input('qty'))));
                    $implodeTotalIn = (($find_stock->stockDetails->first()->total_in) + (implode($request->input('qty'))));
                    $implodePrice = implode($request->input('price'));
                    $implodeDiscount = implode($request->input('discount'));

                    $stockDetailsData = [
                        'quantity' => $implodeQuantity,
                        'total_in' => $implodeTotalIn,
                        'price' => $implodePrice,
                        'discount' => $implodeDiscount,
                        'discount_percentage' => (($implodeDiscount * 100) / $implodePrice),
                    ];

                    $stockDetails = $this->stock_details->data_update($find_stock->stockDetails->first()->id, $stockDetailsData);
                }
            } else {
                $stockData = [
                    'uuid' => $this->uuid(),
                    'user_id' => $auth_id->id,
                    'product_id' => $product_id,
                    'total_in' => array_sum($request->qty),
                    'total_out' => 0,
                ];

                $stock_in = $this->stock->data_create($stockData);

                if ($request->has('attr_val_id')) {
                    foreach (head($request->attr_val_id) as $key => $singleAttrValue) {
                        $attr_value = array_column($request->attr_val_id, $key);
                        $attr_value_json = json_encode($attr_value);
                        $quantity = $request->qty[$key];
                        $price = $request->price[$key];
                        $discount = $request->discount[$key];
                        $stockDetailsData = [
                            'uuid' => $this->uuid(),
                            'stock_id' => $stock_in->id,
                            'user_id' => $auth_id->id,
                            'product_id' => $product_id,
                            'attr_id' => $attr_value_json,
                            'quantity' => $quantity,
                            'total_in' => $quantity,
                            'price' => $price,
                            'discount' => $discount,
                            'discount_percentage' => (($discount * 100) / $price),
                        ];
                        $stockDetails = $this->stock_details->data_create($stockDetailsData);

                        foreach ($request->attr_val_id as $single_attr_val_id) {
                            $stockDetailsAttributeData = [
                                'uuid' => $this->uuid(),
                                'user_id' => $auth_id->id,
                                'stock_details_id' => $stockDetails->id,
                                'product_id' => $product_id,
                                'attr_id' => $single_attr_val_id[$key],
                            ];

                            $stock_attribute = $this->stock_attribute->data_create($stockDetailsAttributeData);
                        }
                    }
                } else {
                    $implodeQuantity = implode($request->input('qty'));
                    $implodePrice = implode($request->input('price'));
                    $implodeDiscount = implode($request->input('discount'));

                    $stockDetailsData = [
                        'uuid' => $this->uuid(),
                        'stock_id' => $stock_in->id,
                        'user_id' => $auth_id->id,
                        'product_id' => $product_id,
                        'quantity' => $implodeQuantity,
                        'total_in' => $implodeQuantity,
                        'price' => $implodePrice,
                        'discount' => $implodeDiscount,
                        'discount_percentage' => (($implodeDiscount * 100) / $implodePrice),
                    ];

                    $stockDetails = $this->stock_details->data_create($stockDetailsData);
                }
            }
            DB::commit();
            toastr()->success('Stock insert Successfully', 'Success', ['timeOut' => 5000]);
            return back();
        } catch (Exception $exception){
            DB::rollback();
            return back();
        }
    }
}
