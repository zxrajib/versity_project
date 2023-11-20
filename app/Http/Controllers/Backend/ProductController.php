<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Stock;
use App\Models\StockAttribute;
use App\Models\StockDetail;
use App\Models\Unit;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function user()
    {
        $user = Auth::user();
        return $user;
    }

    public function product_list()
    {
        $user_id = $this->user()->id;
        $user_type = $this->user()->user_type;
        if ($user_type == 'Admin') {
            $products = Product::with('vendor.user', 'category', 'brand', 'unit')
                ->where('status', '!=', 3)->latest()->get();
        }else{
            $products = Product::with('vendor.user', 'category', 'brand', 'unit')->where('user_id', $user_id)
                ->where('status', '!=', 3)->latest()->get();
        }
        /*$products = Product::with('category', 'brand', 'unit')->where('user_id', $user_id)
            ->where('status', '!=', 3)->latest()->get();*/
        $categoryData = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $unitData = Unit::whereStatus(1)->get();

        return view('backend.product.index', compact('products', 'categoryData', 'brandData', 'unitData'));
    }

    public function product_create()
    {
        $categories = Category::whereStatus(1)->get();
        $brands = Brand::where('id','!=',1)->whereStatus(1)->get();
        $units = Unit::whereStatus(1)->get();

        return view('backend.product.create', compact('categories', 'brands', 'units'));
    }

    public function sku()
    {
        $sku = Str::random(16);
        $skuFind = Product::where('sku', $sku)->first();
        if ($skuFind) {
            return $this->sku();
        }

        return $sku;
    }

    public function product_store(Request $request)
    {
        DB::beginTransaction();
        try {
            $custom_messages = [
                'name.required' => 'Name Required.',
                'name.min' => 'Name Required Minimum 3 Latter.',
                'name.max' => 'Name Required Maximum 191 Latter.',
                'fileUpload.required' => 'Image Required.',
                'category_id.required' => 'Category Required.',
                'brand_id.required' => 'Brand Required.',
                'unit_id.required' => 'Unit Required.',
                'description.required' => 'Description Required.',
            ];

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:191',
                'fileUpload.*' => 'required|mimes:jpeg,jpg,png| max:5000',
                'category_id' => 'required',
                'brand_id' => 'required',
                'unit_id' => 'required',
                'description' => 'required| min: 10',
            ], $custom_messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $auth_user_id = Auth::id();
            $name = $request->input('name');
            $vendor_id = Vendor::where('user_id', $auth_user_id)->select('id')->first();

            $productData = [
                'uuid' => $this->uuid(),
                'user_id' => $auth_user_id,
                'vendor_id' => $vendor_id->id,
                'category_id' => $request->input('category_id'),
                'brand_id' => $request->input('brand_id'),
                'unit_id' => $request->input('unit_id'),
                'name' => $name,
                'description' => $request->input('description'),
                'slug' => Str::slug($name),
                'sku' => $this->sku(),
            ];
            $product = Product::create($productData);

            if ($product) {
                foreach ($request->image as $imageData) {
                    if ($imageData !== null) {
                        $photo_name = 'product_'.md5(Str::random(5).now()).'.'.$imageData->getClientOriginalExtension();
                        try {
                            $imageData->move(public_path('backend/img/product'), $photo_name);
                        } catch (Exception $e) {
                            return redirect()->back();
                        }
                    } else {
                        $photo_name = 'product.jpg';
                    }

                    $productImageData = [
                        'uuid' => $this->uuid(),
                        'product_id' => $product->id,
                        'image' => $photo_name,
                    ];

                    $productImage = ProductImage::create($productImageData);
                }
            }

            DB::commit();

            toastr()->success('Product Added Successfully', 'Success', ['timeOut' => 5000]);

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->warning('Something not working. Please try again.');

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function product_update(Request $request, $id)
    {
        $custom_messages = [
            'name.required' => 'Name Required.',
//            'name.min' => 'Name Required Minimum 3 Latter.',
//            'name.max' => 'Name Required Maximum 191 Latter.',
//            'image.required' => 'Image Required.',
//            'category_id.required' => 'Category Required.',
//            'brand_id.required' => 'Brand Required.',
//            'unit_id.required' => 'Unit Required.',
            'description.required' => 'Description Required.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:191',
//            'image*' => 'required|mimes:jpeg,jpg,png| max:1000',
//            'category_id' => 'required|numeric|min:1',
//            'brand_id' => 'required|numeric|min:1',
//            'unit_id' => 'required|numeric|min:1',
            'description' => 'required| min: 10',
        ], $custom_messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $auth_user_id = Auth::id();
        $name = $request->input('name');
        $vendor_id = Vendor::where('user_id', $auth_user_id)->select('id')->first();

        $productData = [
            'uuid' => $this->uuid(),
            'user_id' => $auth_user_id,
            'vendor_id' => $vendor_id->id,
//            'category_id' => $request->input('category_id'),
//            'brand_id' => $request->input('brand_id'),
//            'unit_id' => $request->input('unit_id'),
            'name' => $name,
            'description' => $request->input('description'),
            'slug' => Str::slug($name),
            'sku' => $this->sku(),
        ];
        $data = Product::find($id)->update($productData);
        toastr()->success('Product Updated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function product_active($id)
    {
        $productData = [
            'status' => 1,
        ];
        $productData = Product::find($id)->update($productData);
        toastr()->success('Product Activated', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function product_inactive($id)
    {
        $productData = [
            'status' => 0,
        ];
        $productData = Product::find($id)->update($productData);
        toastr()->success('Product Deactivated', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function ajax_product_list(Request $request)
    {
        $id = $request->id;
        $all_product = Product::with('vendor.user', 'category', 'brand', 'unit')->get();
        if ($id == 0) {
            $data = $all_product->where('status', 0);
        } elseif ($id == 1) {
            $data = $all_product->where('status', 1);
        } elseif ($id == 2) {
            $data = $all_product->where('status', 2);
        } elseif ($id == 3) {
            $data = $all_product->where('status', 3);
        } else {
            $data = $all_product->where('status', '!=', 3);
        }

        return response()->json($data);
    }

    public function ajax_product_approve(Request $request)
    {
        $id = $request->id;
        $data['productDetails'] = Product::where('id', $id)->with('category.attribute.attrValue', 'unit', 'brand', 'stock_product.stockDetails')->first();

        return response()->json($data);
    }

    public function ajax_stock_details_approve(Request $request)
    {
        $product_id = $request->id;
        $attr_array = $request->attr_val;
        $find_stock_Attribute = StockAttribute::where('product_id', $product_id)
            ->whereIn('attr_id', $attr_array)
            ->get()->groupBy('stock_details_id');
        if (count($find_stock_Attribute) == 1) {
            if (count($attr_array) == count($find_stock_Attribute->first())) {
                $stock_details_id = $find_stock_Attribute->first()->first()->stock_details_id;
                $data = StockDetail::find($stock_details_id);
            } else {
                $data = null;
            }
        } else {
            $data = null;
        }

        return response()->json($data);
    }

    public function ajax_product_status_change(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        Product::findOrFail($id)->update(['status'=>$status]);
        $data = Product::with('vendor.user', 'category', 'brand', 'unit')->where('status', '!=', 3)->get();

        return response()->json($data);


    }
}
