<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Backend\AttributeController;
use App\Http\Controllers\Backend\AttributeValueController;
use App\Http\Controllers\Backend\BarcodeController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChargeController;
use App\Http\Controllers\Backend\DiscountController;
use App\Http\Controllers\Backend\ExpenseCategoryController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\PaymentTypeController;
use App\Http\Controllers\Backend\PosController;
use App\Http\Controllers\Backend\ProductAdsController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SupplierPaymentController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Backend\WebControlController;
use App\Http\Controllers\Frontend\AddToCartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\Login\LoginController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\ProductSearchController;
use App\Http\Controllers\Frontend\Profile\ProfileController;
use App\Http\Controllers\Frontend\Registration\RegistrationController;
use App\Http\Controllers\Frontend\UserReviewController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Artisan::call('optimize');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::post('upload', [HomeController::class, 'store']);

/***************************************************Cache Clear Start Here***************************************************/
Route::get('/cache', function () {
    Artisan::call('cache:clear');

    return redirect()->back();
})->name('cache');
/***************************************************Cache Clear Start End***************************************************/
/***************************************************route Clear Start Here***************************************************/
Route::get('/route', function () {
    Artisan::call('route:clear');

    return redirect()->back();
})->name('route');
/***************************************************route Clear Start Here***************************************************/
/***************************************************view Clear Start Here***************************************************/
Route::get('/view', function () {
    Artisan::call('view:clear');

    return redirect()->back();
})->name('view');
/***************************************************view Clear Start Here***************************************************/
/***************************************************config Clear Start Here***************************************************/
Route::get('/config', function () {
    Artisan::call('config:clear');

    return redirect()->back();
})->name('config');
/***************************************************config Clear Start Here***************************************************/
/***************************************************optimize Clear Start Here***************************************************/
Route::get('/optimize', function () {
    Artisan::call('optimize');

    return redirect()->back();
})->name('optimize');
/***************************************************optimize Clear Start Here***************************************************/

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'auth.admin');

Route::get('/admin-notification', [HomeController::class, 'admin_notification'])->name('admin_notification');

//LOGIN WITH SOCIAL ACCOUNTS
//GOOGLE
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
//FACEBOOK
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

//    login and Logout Routes
Route::post('/login/process', [LoginController::class, 'login_process'])->name('login.process');
Route::post('/login/process-model', [LoginController::class, 'login_modal_process'])->name('login_modal_process');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Registration controller
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration-process', [RegistrationController::class, 'registration_process'])->name('registration_process');
Route::get('/user-verify/{token}', [RegistrationController::class, 'user_verify'])->name('user.verify');

Route::get('/attribute/list/{id}', [ProductDetailsController::class, 'ajaxList'])->name('attributeAjaxList');
Route::get('/attribute/find-price/{id}/{data}', [ProductDetailsController::class, 'findPrice'])->name('findPrice');

// Forgot-Password Route
Route::get('/get-email', [LoginController::class, 'getEmail'])->name('getEmail');
Route::post('/forgot-password', [LoginController::class, 'password_reset'])->name('post.email');

Route::get('reset-password/{token}', [\App\Http\Controllers\Frontend\Login\ResetPasswordController::class, 'getPassword'])->name('reset.password');
Route::post('reset-password', [\App\Http\Controllers\Frontend\Login\ResetPasswordController::class, 'updatePassword'])->name('update.password');

//Welcome mail
Route::get('/welcome-mail', [RegistrationController::class, 'welcomeMail'])->name('welcomeMail');

//Searching Product With AutoComplete
Route::get('/auto-complete-search-product', [ProductSearchController::class, 'autocomplete_search'])->name('search.product.autocomplete');
Route::post('/search-product', [ProductSearchController::class, 'product_search'])->name('product.search');
Route::post('/search', [ProductSearchController::class, 'search'])->name('search');

Route::group(['namespace' => 'Backend', 'middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'profile_index'])->name('profile.index');
    Route::post('/profile/info/update/{id}', [ProfileController::class, 'profile_info_update'])->name('profile.info.update');
    Route::post('/profile/password/update/{id}', [ProfileController::class, 'profile_password_update'])->name('profile.password.update');
    Route::post('/profile/photo/update/{id}', [ProfileController::class, 'profile_photo_update'])->name('profile.photo.update');
    Route::post('/user-order-update/{id}', [ProfileController::class, 'user_order_update'])->name('user.order.update');
});

Route::group(['namespace' => 'Backend', 'middleware' => ['auth.admin', 'auth']], function () {
    //Attribute Route
    Route::get('/attribute', [AttributeController::class, 'attribute_list'])->name('attribute.list');
    Route::post('/attribute/store', [AttributeController::class, 'attribute_store'])->name('attribute.store');
    Route::post('/attribute/update/{id}', [AttributeController::class, 'attribute_update'])->name('attribute.update');
    Route::get('/attribute/active/{id}', [AttributeController::class, 'attribute_active'])->name('attribute.active');
    Route::get('/attribute/inactive/{id}', [AttributeController::class, 'attribute_inactive'])->name('attribute.inactive');

    //Attribute Value Controller
    Route::get('/attribute-value/{id}', [AttributeValueController::class, 'attributevalue_list'])->name('attributevalue.list');
    Route::post('/attribute-value/store/{id}', [AttributeValueController::class, 'attributevalue_store'])->name('attributevalue.store');
    Route::post('/attribute-value/update/{id}', [AttributeValueController::class, 'attributevalue_update'])->name('attributevalue.update');
    Route::get('/attribute-value/active/{id}', [AttributeValueController::class, 'attributevalue_active'])->name('attributevalue.active');
    Route::get('/attribute-value/inactive/{id}', [AttributeValueController::class, 'attributevalue_inactive'])->name('attributevalue.inactive');

    //Category Route
    Route::get('/category', [CategoryController::class, 'category_list'])->name('category.list');
    Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::post('/category/update/{id}', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/category/active/{id}', [CategoryController::class, 'category_active'])->name('category.active');
    Route::get('/category/inactive/{id}', [CategoryController::class, 'category_inactive'])->name('category.inactive');

    //Brand Route

    Route::get('/brand', [BrandController::class, 'brand_list'])->name('brand.list');
    Route::post('/brand/store', [BrandController::class, 'brand_store'])->name('brand.store');
    Route::post('/brand/update/{id}', [BrandController::class, 'brand_update'])->name('brand.update');
    Route::get('/brand/active/{id}', [BrandController::class, 'brand_active'])->name('brand.active');
    Route::get('/brand/inactive/{id}', [BrandController::class, 'brand_inactive'])->name('brand.inactive');
    Route::get('/brand-status/{id}', [BrandController::class, 'brand_status'])->name('brand.status');
    Route::get('/ajax-brand-product', [AjaxController::class, 'ajax_brand_product'])->name('ajax_brand_product');

    //Unit Route

    Route::get('/unit', [UnitController::class, 'unit_list'])->name('unit.list');
    Route::post('/unit/store', [UnitController::class, 'unit_store'])->name('unit.store');
    Route::post('/unit/update/{id}', [UnitController::class, 'unit_update'])->name('unit.update');
    Route::get('/unit/active/{id}', [UnitController::class, 'unit_active'])->name('unit.active');
    Route::get('/unit/inactive/{id}', [UnitController::class, 'unit_inactive'])->name('unit.inactive');

    // Product Route
    Route::get('/product', [ProductController::class, 'product_list'])->name('product.list');
    Route::get('/product-create', [ProductController::class, 'product_create'])->name('product_create');
    Route::get('/ajax-product-list', [ProductController::class, 'ajax_product_list'])->name('ajax_product_list');
    Route::get('/ajax-product-status-change', [ProductController::class, 'ajax_product_status_change'])->name('ajax_product_status_change');
    Route::get('/ajax-product-approve', [ProductController::class, 'ajax_product_approve'])->name('ajax_product_approve');
    Route::get('/ajax-stock-details-approve', [ProductController::class, 'ajax_stock_details_approve'])->name('ajax_stock_details_approve');

    Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::post('/product/update/{id}', [ProductController::class, 'product_update'])->name('product.update');
    Route::get('/product/active/{id}', [ProductController::class, 'product_active'])->name('product.active');
    Route::get('/product/inactive/{id}', [ProductController::class, 'product_inactive'])->name('product.inactive');

    //Discount Route
    Route::get('/discount', [DiscountController::class, 'discount_list'])->name('discount.list');
    Route::post('/discount/store', [DiscountController::class, 'discount_store'])->name('discount.store');
    Route::post('/discount/update/{id}', [DiscountController::class, 'discount_update'])->name('discount.update');
    Route::get('/discount/active/{id}', [DiscountController::class, 'discount_active'])->name('discount.active');
    Route::get('/discount/inactive/{id}', [DiscountController::class, 'discount_inactive'])->name('discount.inactive');
    Route::get('/discount/product/{id}', [DiscountController::class, 'product_list'])->name('discount.assign');
    Route::get('/discount/assign', [DiscountController::class, 'product_assign'])->name('assign.discount');
    Route::get('/discount/unassign/{id}', [DiscountController::class, 'product_unassign'])->name('unassign.discount');
    Route::get('/discounted-products/{id}', [DiscountController::class, 'discounted_products'])->name('discounted.product.list');

    // Charge Route
    Route::get('/charge', [ChargeController::class, 'charge_list'])->name('charge.list');
    Route::post('/charge/store', [ChargeController::class, 'charge_store'])->name('charge.store');
    Route::post('/charge/update/{id}', [ChargeController::class, 'charge_update'])->name('charge.update');
    Route::get('/charge/active/{id}', [ChargeController::class, 'charge_active'])->name('charge.active');
    Route::get('/charge/inactive/{id}', [ChargeController::class, 'charge_inactive'])->name('charge.inactive');
    Route::get('/ajax-charge-status-change', [AjaxController::class, 'ajax_charge_status_change'])->name('ajax_charge_status_change');

    //Expense Controller
    Route::get('/expense', [ExpenseController::class, 'expense_list'])->name('expense.list');
    Route::post('/expense/store', [ExpenseController::class, 'expense_store'])->name('expense.store');
    Route::post('/expense/update/{id}', [ExpenseController::class, 'expense_update'])->name('expense.update');
    Route::get('/expense/active/{id}', [ExpenseController::class, 'expense_active'])->name('expense.active');
    Route::get('/expense/inactive/{id}', [ExpenseController::class, 'expense_inactive'])->name('expense.inactive');
    //Expense Category Controller
    Route::get('/expense-category', [ExpenseCategoryController::class, 'expense_category_list'])->name('expense_category.list');
    Route::post('/expense-category/store', [ExpenseCategoryController::class, 'expense_category_store'])->name('expense_category.store');
    Route::post('/expense-category/update/{id}', [ExpenseCategoryController::class, 'expense_category_update'])->name('expense_category.update');
    Route::get('/expense-category/active/{id}', [ExpenseCategoryController::class, 'expense_category_active'])->name('expense_category.active');
    Route::get('/expense-category/inactive/{id}', [ExpenseCategoryController::class, 'expense_category_inactive'])->name('expense_category.inactive');

    //Supplier Route
    Route::get('/supplier', [SupplierController::class, 'supplier_list'])->name('supplier.list');
    Route::post('/supplier/store', [SupplierController::class, 'supplier_store'])->name('supplier.store');
    Route::post('/supplier/update/{id}', [SupplierController::class, 'supplier_update'])->name('supplier.update');
    Route::get('/supplier/active/{id}', [SupplierController::class, 'supplier_active'])->name('supplier.active');
    Route::get('/supplier/inactive/{id}', [SupplierController::class, 'supplier_inactive'])->name('supplier.inactive');

    // Payment Controller
    Route::get('/payment', [PaymentController::class, 'payment_list'])->name('payment.list');
    Route::post('/payment/store', [PaymentController::class, 'payment_store'])->name('payment.store');
    Route::post('/payment/update/{id}', [PaymentController::class, 'payment_update'])->name('payment.update');

    //  Payment Type Controller
    Route::get('/payment-type', [PaymentTypeController::class, 'paymenttype_list'])->name('paymenttype.list');
    Route::post('/payment-type/store', [PaymentTypeController::class, 'paymenttype_store'])->name('paymenttype.store');
    Route::post('/payment-type/update/{id}', [PaymentTypeController::class, 'paymenttype_update'])->name('paymenttype.update');
    Route::get('/payment-type/active/{id}', [PaymentTypeController::class, 'paymenttype_active'])->name('paymenttype.active');
    Route::get('/payment-type/inactive/{id}', [PaymentTypeController::class, 'paymenttype_inactive'])->name('paymenttype.inactive');

    //Purchase Controller
    Route::get('/purchase', [PurchaseController::class, 'purchase_list'])->name('purchase.list');
    Route::get('/search_productCategory', [PurchaseController::class, 'search_productCategory'])->name('search.productCategory');

    Route::get('/search-productAttribute', [PurchaseController::class, 'search_productAttribute'])->name('search_productAttribute');
    Route::post('/purchase/store', [PurchaseController::class, 'purchase_store'])->name('purchase.store');

    //Stock  Route
    Route::get('/stock', [StockController::class, 'stock_list'])->name('stock.list');
    Route::get('/stock-in', [StockController::class, 'stock_in'])->name('stock_in');
    Route::post('/stock-in', [StockController::class, 'stock_in_store'])->name('stock_in_store');

    //Review  Route
    Route::get('/review', [UserReviewController::class, 'review_list'])->name('review.list');
    Route::get('/review-remove/{uuid}', [UserReviewController::class, 'review_remove'])->name('review.remove');

    //Slider Route
    Route::get('/slider', [SliderController::class, 'slider_list'])->name('slider.list');
    Route::post('/slider/store', [SliderController::class, 'slider_store'])->name('slider.store');
    Route::post('/slider/update/{id}', [SliderController::class, 'slider_update'])->name('slider.update');
    Route::get('/slider/active/{id}', [SliderController::class, 'slider_active'])->name('slider.active');
    Route::get('/slider/inactive/{id}', [SliderController::class, 'slider_inactive'])->name('slider.inactive');

    //Product Ads Route
    Route::get('/product/ads', [ProductAdsController::class, 'product_ads_list'])->name('product_ads_list');
    Route::get('/product/ads/assign/{id}', [ProductAdsController::class, 'product_ads_assign'])->name('product_ads_assign');
    Route::post('/product/ads/assign/{id}', [ProductAdsController::class, 'product_ads_assign_update'])->name('product_ads_assign_update');
    Route::get('/product/ads/status/{id}', [ProductAdsController::class, 'product_ads_status'])->name('product_ads_status');

    /*Footer Content*/
    Route::get('/footer-content', [\App\Http\Controllers\Backend\FooterController::class, 'footer_list'])->name('footer.list');
    Route::post('/footer/store', [FooterController::class, 'footer_store'])->name('footer.store');
    Route::post('/footer/update/{id}', [FooterController::class, 'footer_update'])->name('footer.update');
    Route::get('/footer/status/{uuid}', [FooterController::class, 'status'])->name('footer.status');
//    Route::get('/slider/active/{id}', [SliderController::class, 'slider_active'])->name('slider.active');
//    Route::get('/slider/inactive/{id}', [SliderController::class, 'slider_inactive'])->name('slider.inactive');


    // About-us Controller
    Route::get('/about-us', [SliderController::class, 'slider_list'])->name('slider.list');

    // Admin Order Routes
    Route::get('/orders', [OrderController::class, 'order_list'])->name('order.list');
    Route::post('/orders/update/{id}', [OrderController::class, 'order_update'])->name('order.update');

    //Reports Route
    Route::get('/getReport', [ReportController::class, 'getReport'])->name('getReport');
    Route::get('/reports', [ReportController::class, 'report_list'])->name('reports.list');

    //POS Route
    Route::get('/product-category-ajax', [PosController::class, 'product_category_ajax'])->name('product_category_ajax');

    // Supplier-Payment Route
    Route::get('/supplier-payment', [SupplierPaymentController::class, 'supplierPayments'])->name('supplierPayments');
    Route::post('/supplier-payment/store', [SupplierPaymentController::class, 'supplierPaymentStore'])->name('supplierpayment.store');
    Route::get('/supplier-payment/chalan-search', [SupplierPaymentController::class, 'supplierChalanSearch'])->name('supplierChalanSearch');
    Route::get('/supplier-payment/search', [SupplierPaymentController::class, 'supplierPaymentSearch'])->name('supplierPaymentSearch');
    Route::get('/supplier-payment/due-search', [SupplierPaymentController::class, 'dueAmountSearch'])->name('dueAmountSearch');

    //Barcode Routes
    Route::get('/barcode', [BarcodeController::class, 'barcode_list'])->name('barcode.list');
    Route::post('/barcode/details/{id}', [BarcodeController::class, 'barcode_details'])->name('barcode.details');

    //Return Routes
    Route::get('/return', [ReturnController::class, 'view_return'])->name('return');
    Route::get('/return/search-by-barcode-ajax', [ReturnController::class, 'search_by_barcode_ajax'])->name('search.by.barcode.ajax');
    Route::get('/return/search-supplier-by-product-ajax', [ReturnController::class, 'search_supplier_by_product_ajax'])->name('search.supplier.by.product.ajax');
    Route::post('/return/submit', [ReturnController::class, 'return_submit'])->name('return.submit');
    Route::get('/return/list', [ReturnController::class, 'return_list'])->name('return.list');
    Route::post('/return/from-supplier/{id}', [ReturnController::class, 'return_from_supplier'])->name('return.from.supplier');

    //WebControl Routes
    Route::get('/web-controls', [WebControlController::class, 'webControl_list'])->name('webControl.list');
    Route::post('/web-controls/store', [WebControlController::class, 'webControl_store'])->name('webControl.store');
    Route::post('/web-controls/update/{id}', [WebControlController::class, 'webControl_update'])->name('webControl.update');
//    Route::get('/web-controls/active/{id}', [AttributeController::class, 'web-controls_active'])->name('webControl.active');
//    Route::get('/web-controls/inactive/{id}', [AttributeController::class, 'web-controls_inactive'])->name('webControl.inactive');

    Route::get('order-details/{id}', [OrderController::class, 'order_details'])->name('order.details');
    Route::get('pos', [PosController::class, 'pos'])->name('pos');
//    Route::get('/markAsRead', function () {
//        auth()->user()->unreadNotifications->markAsRead();
//        return redirect()->back();
//    })->name('mark');
});
Route::post('/registration/store', [RegistrationController::class, 'reg_store'])->name('reg.store');

/**************************************************FrontEnd Route**************************************************/
/****************************************Add to Cart Route****************************************/
Route::get('/cart', [AddToCartController::class, 'cart'])->name('cart')->middleware('auth');;
//Route::group(['namespace' => 'Frontend', 'middleware' => ['auth.admin', 'auth']], function () {
Route::group(['namespace' => 'Frontend'], function () {

    /****************************************Product Review Details****************************************/
    Route::post('/review', [UserReviewController::class, 'review'])->name('review.store');
    /****************************************Product Details****************************************/
    Route::get('/product-details/{uuid}', [ProductDetailsController::class, 'product_details'])->name('product.details');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout_get');
    Route::post('/order', [CheckoutController::class, 'order'])->name('order');
//    Route::post('/placeOrder', [CheckoutController::class, 'placeOrder'])->name('placeOrder');
    Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
    //Category-wise Products
    //    Route::get('/category-wise', [HomeController::class, 'category_wise'])->name('category-wise.list');
    Route::get('/category-wise/{uuid}', [HomeController::class, 'category_wise'])->name('category-wise.list');
    Route::get('/brand-wise/{uuid}', [HomeController::class, 'brand_wise'])->name('brand-wise.list');
    Route::get('/discount-wise/{discount}', [HomeController::class, 'discount_wise'])->name('discount-wise.list');
    Route::get('/user-profile', [HomeController::class, 'user_profile'])->name('user_profile');
    Route::get('/user-edit', [HomeController::class, 'user_edit'])->name('user_edit');
    Route::post('/user-update', [HomeController::class, 'user_update'])->name('user_update');

    // All products show
    Route::get('/all-product', [HomeController::class, 'all_product'])->name('all_product');
    // All products show
    Route::get('/discount-product/{id}', [HomeController::class, 'discount_product'])->name('discount.product');
    Route::get('/brand-product/{id}', [HomeController::class, 'brand_product'])->name('brand.product');




    Route::get('/ajax-product-image-change', [AjaxController::class, 'ajax_product_image_change'])->name('ajax_product_image_change');
    Route::get('/ajax-add-to-cart', [AjaxController::class, 'ajax_add_to_cart'])->name('ajax_add_to_cart');
    Route::get('/ajax-cart-data', [AjaxController::class, 'ajax_cart_data'])->name('ajax_cart_data');
    Route::get('/ajax-cart-data-remove', [AjaxController::class, 'ajax_cart_data_remove'])->name('ajax_cart_data_remove');
    Route::get('/ajax-cart-remove', [AjaxController::class, 'ajax_cart_remove'])->name('ajax_cart_remove');
    Route::get('/ajax-cart-data-change', [AjaxController::class, 'ajax_cart_data_change'])->name('ajax_cart_data_change');
});
