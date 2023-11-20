<?php

namespace App\Providers;

use App\Models\AttributeValue;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Footer;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $cart;
    public function __construct($app)
    {
        $this->cart = new Cart();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.partials.*', function ($view) {
            $categories = Category::whereStatus(1)->with('child')->first();
            $view->with('categories', $categories);
        });
        view()->composer('frontend.partials.*', function ($view) {
            $footer = Footer::whereStatus(1)->first();
            $view->with('footer', $footer);
        });

        view()->composer('frontend.partials.*', function ($view) {
            $customerData=Customer::where('user_id', Auth::id())->first();
            $view->with('customerData', $customerData);
        });

        view()->composer('frontend.partials.header', function ($view) {
            $cart = $this->cart->single_user_cart();
            $cart_count = $cart->count();
            $view->with('cart_count', $cart_count);
        });

        Paginator::useBootstrap();
    }
}
