<?php

namespace App\Http\Controllers;

use App\Libraries\GetCookieData;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAds;
use App\Models\Slider;
use App\Models\Stock;
use App\Models\StockDetail;
use App\Models\TemporaryImage;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $stock;

    public function __construct()
    {
        $this->stock = new Stock();
    }

    public function home(Request $request)
    {
        $cookieData = GetCookieData::getCookieData();

        $allProducts = Product::with(['stock.stockDetails', 'image', 'stock'])->has('stock')->whereStatus(1)->latest()
            ->get();
        $allProductAds = ProductAds::whereStatus(1)->orderBy('rank', 'ASC')->with('product', 'product.image')->get();

        if ($allProductAds->count() >= 6) {
            $productAds = $allProductAds->random(6);
        } else {
            $productAds = $allProductAds->random($allProductAds->count());
        }

        if ($allProducts->count() >= 8) {
            $products = $allProducts->random(8);
        } else {
            $products = $allProducts->random($allProducts->count());
        }

        if ($allProducts->count() >= 12) {
            $brandsProducts = $allProducts->random(12);
        } else {
            $brandsProducts = $allProducts->random($allProducts->count());
        }

        $all_new_arrivals = $allProducts->take(20);
        if ($all_new_arrivals->count() >= 10) {
            $new_arrivals = $all_new_arrivals->random(10);
        } else {
            $new_arrivals = $all_new_arrivals->random($all_new_arrivals->count());
        }

        $all_top_flash_deal_products = StockDetail::where('quantity', '>', 0)
            ->where('discount', '>', 0)
            ->where('discount_percentage', '>', 0)
            ->with('product.image')
            ->orderBy('discount_percentage', 'DESC')
            ->get()
            ->groupBy('discount_percentage');

        if ($all_top_flash_deal_products->count() >= 8) {
            $top_flash_deal_products = $all_top_flash_deal_products->random(8);
        } else {
            $top_flash_deal_products = $all_top_flash_deal_products->random($all_top_flash_deal_products->count());
        }

        if ($all_top_flash_deal_products->count() >= 3) {
            $footerProduct = $all_top_flash_deal_products->random(3);
        } else {
            $footerProduct = $all_top_flash_deal_products->random($all_top_flash_deal_products->count());
        }
        $sliders = Slider::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->with(['product.stock.stockDetails'])->get();
        if ($brandData->count() >= 9) {
            $brands = $brandData->random(9);
        } else {
            $brands = $brandData;
        }
        $allCategory = Category::whereStatus(1)->with('child', 'product')->get();
        $withOutParentCategory = $allCategory->where('parent_id', 0);
        if ($withOutParentCategory->count() >= 10) {
            $categories = $withOutParentCategory->random(10);
        } else {
            $categories = $withOutParentCategory;
        }
        if ($allCategory->count() >= 10) {
            $footerCategory = $allCategory->random(10);
        } else {
            $footerCategory = $allCategory;
        }

        $categoryGroupProducts = Product::with('category')->with(['stock.stockDetails'])->has('stock')->whereStatus(1)->get();

        $categoryGroups = $categoryGroupProducts->groupBy('category_id');
        if ($categoryGroups->count() >= 3) {
            $categoryGroupBy = $categoryGroups->random(3);
        } else {
            $categoryGroupBy = $categoryGroups;
        }
        $cates = Category::where('parent_id', null)->orWhere('parent_id', 0)->with('child')->whereStatus(1)->get();
        return view('frontend.home.index', compact('brandsProducts', 'top_flash_deal_products', 'new_arrivals', 'productAds', 'products','footerProduct', 'brands', 'categories', 'footerCategory', 'sliders', 'categoryGroupBy', 'cates'));
    }

    public function category_wise($uuid)
    {
        $allCategory = Category::whereStatus(1)->get();
        $singleCategory = $allCategory->where('uuid', $uuid)->first();
        $categories = Category::whereStatus(1)->get();
        $allProducts = Product::with(['stock.stockDetails'])->has('stock')->whereStatus(1)
            ->where('category_id', $singleCategory->id)->get();
//        dd($allProducts);
        $category_product = $allProducts->groupBy('category_id');
        $brandData = Brand::whereStatus(1)->get();
        $unitData = Unit::whereStatus(1)->get();
//        dd($allProducts->count());
        if ($allProducts->count() > 0) {
            return view('frontend.product.allproducts', compact('category_product', 'allProducts', 'categories', 'brandData', 'unitData'));
        } else {
            toastr('No Product Found in This Category', 'error');
            return redirect()->back();
        }
    }

    public function brand_wise($uuid)
    {
        $categories = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $singleBrand = $brandData->where('uuid', $uuid)->first();
        $allProducts = Product::with(['stock.stockDetails'])->has('stock')->whereStatus(1)->where('brand_id', $singleBrand->id)->get();
        $category_product = $allProducts->groupBy('category_id');
        $unitData = Unit::whereStatus(1)->get();
        if ($allProducts->count() > 0) {
            return view('frontend.product.allproducts', compact('category_product', 'allProducts', 'categories', 'brandData', 'unitData'));
        } else {
            toastr('No Product Found in This Category', 'error');
            return redirect()->back();
        }
    }
    public function discount_wise($discount)
    {
        $categories = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $find_product = StockDetail::where('discount_percentage', $discount)->get()->pluck('product_id');
        $allProducts = Product::whereIn('id', $find_product)->with(['stock.stockDetails'])->has('stock')->whereStatus(1)->get();
        $category_product = $allProducts->groupBy('category_id');
        $unitData = Unit::whereStatus(1)->get();
        if ($allProducts->count() > 0) {
            return view('frontend.product.allproducts', compact('category_product', 'allProducts', 'categories', 'brandData', 'unitData'));
        } else {
            toastr('No Product Found in This Category', 'error');
            return redirect()->back();
        }
    }

    public function all_product()
    {
        config()->set('database.connections.mysql.strict', false);
        $allProducts = Product::with(['stock.stockDetails' => function ($q) {
            return $q->orderBy('price', 'ASC')->get();
        }])->has('stock')->whereStatus(1)->get();
        $category_product = $allProducts->groupBy('category_id');
        $categories = Category::whereStatus(1)->get();
        $brandData = Brand::whereStatus(1)->get();
        $unitData = Unit::whereStatus(1)->get();

        return view('frontend.product.allproducts', compact('category_product', 'allProducts', 'categories', 'brandData', 'unitData'));
    }

    public function about_us()
    {
        return view('frontend.aboutus.index');
    }

    public function user_profile()
    {
        $data = User::where('id', Auth::id())->with('customer')->first();
        return view('frontend.user_profile.index', compact('data'));
    }
    public function user_edit()
    {
        $data = User::where('id', Auth::id())->with('customer')->first();
        return view('frontend.user_profile.edit', compact('data'));
    }
    public function user_update(Request $request)
    {
        $find_user = User::where('id', $request->user_id)->with('customer')->first();
        $user_common_data = [
            'name'  => ($request->name == null ? $find_user->name : $request->name),
            'user_name'  => ($request->user_name == null ? $find_user->user_name : $request->user_name),
            'email'  => ($request->email == null ? $find_user->email : $request->email),
        ];
        User::where('id', $request->user_id)->update($user_common_data);

        $user_address_data = [
            'billing_address'  => ($request->billing_address == null ? $find_user->customer->billing_address : $request->billing_address),
            'shipping_address'  => ($request->shipping_address == null ? $find_user->customer->shipping_address : $request->shipping_address),
        ];
        Customer::where('id', $find_user->customer->id)->update($user_address_data);

        return redirect()->route('user_profile');
    }

    public function dashboard()
    {
        $products = Product::all();
        $orders = Order::all();
        $customerData = Customer::where('user_id', Auth::user()->id)->first();
//        dd(Auth::user());
        return view('backend.dashboard.index', compact('orders', 'products', 'customerData'));
    }

    public function admin_notification()
    {
//        $count = auth()->user()->unreadNotifications->count();
        $data = auth()->user()->unreadNotifications;

        return json_encode($data);
    }

    public function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = Product::where('name', 'like', "%{$query}%")->get();
            $output = '<div class="filter-box"><ul class="dropdown-menu" style="min-width: 26rem; border-top: none; display: block; position: relative;">';
            foreach ($data as $row) {
                $output .= '
       <li><a href="#">'.$row->title.'</a></li>
       ';
            }
        }
        $output .= '</ul></div>';
        echo $output;
    }

    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $name = $request->input('name');
            $file = $request->file('avatar');
            $filename = 'brand_'.md5($name).time().'.'.$file->getClientOriginalExtension();
            $folder = uniqid().'-'.now()->timestamp;
            $file->move(public_path('temp/temp_img/'.$folder), $filename);

            TemporaryImage::create([
                'folder' => $folder,
                'filename' => $filename,
            ]);

            return $folder;
        }

        return '';
    }

    public function discount_product($id)
    {
        $products = Product::with(['discount', 'stock.stockDetails' => function ($q) {
            return $q->orderBy('sell_price', 'ASC')->get();
        }])->has('stock')
            ->where('discount_id', $id)
            ->whereStatus(1)
            ->get();

        return view('frontend.product.discount_products', compact('products'));
    }

    public function brand_product($id)
    {
        $products = Product::with(['stock.stockDetails' => function ($q) {
            return $q->orderBy('sell_price', 'ASC')->get();
        }])->has('stock')
            ->with('brand')
            ->where('brand_id', $id)
            ->whereStatus(1)
            ->get();
        if ($products->count() <= 0) {
            toastr()->error('There is no product in this brand.');

            return redirect()->back();
        } else {
            return view('frontend.product.brand_products', compact('products'));
        }
    }
}
