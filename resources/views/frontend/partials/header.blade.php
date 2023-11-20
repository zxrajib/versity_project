<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Supermarket</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favourite_icon_01.png') }}">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/fontawesome.css') }}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick-theme.css') }}">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Toastr Css -->
    <link href="{{asset('/assets/css/toastr.min.css')}}" rel="stylesheet" />
    @stack('css')

</head>
<body class="home_supermarket">
<!-- backtotop - start -->
<div id="thetop"></div>
<div class="backtotop bg_supermarket_red">
    <a href="#" class="scroll">
        <i class="far fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader - start -->
<!-- <div id="preloader"></div> -->
<!-- preloader - end -->


<!-- header_section - start
================================================== -->
<header class="header_section supermarket_header bg-white clearfix">
    <div class="header_top text-white clearfix">
        <div class="container maxw_1460">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-5">
                    <p class="welcome_text mb-0">Welcome to Worldwide Online marketplace Store</p>
                </div>

                <div class="col-lg-7">
                    <ul class="info_list ul_li_right clearfix">
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fal fa-user"></i> Login</a></li>
                            <li><a href="{{ route('registration') }}"><i class="fal fa-user"></i> Register</a></li>
                        @endguest
                        @auth()
                        @if (auth()->user()->user_type == 'Customer')
                            <li><a href="{{ route('user_profile') }}"><i class="fal fa-user"></i>Profile</a></li>
                        @else
                            <li><a href="{{ route('dashboard') }}"><i class="fal fa-user"></i>DashBoard</a></li>
                        @endif
                                <li><a href="{{ route('logout') }}"><i class="fal fa-user"></i> Logout</a></li>
                        @endauth
                            <li><a href="{{ route('all_product') }}">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_middle clearfix">
        <div class="container maxw_1600">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ route('home') }}">
                            {{-- <img src="{{ file_exists(public_path('backend/img/logo/'.$footer->image ?? '')) ? asset('backend/img/logo/' . $footer->image ?? ) : asset('backend/brand.jpg') }}" alt="image_not_found" width="100px !important" height="50px !important"> --}}
                            <img src="{{ asset('frontend/'. $footer->image ) ?? '' }}" alt="image_not_found" width="145px !important" height="50px !important">
                        </a>

                        <ul class="mh_action_btns ul_li clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse"
                                        data-target="#search_body_collapse" aria-expanded="false"
                                        aria-controls="search_body_collapse">
                                    <i class="fal fa-search"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge">{{ $cart_count ? $cart_count : 0 }}</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{ route('search') }}" method="post">
                        @CSRF
                        <div class="medical_search_bar">
                            <div class="form_item">
                                <input type="search" name="search" placeholder="search here...">
                            </div>
                            <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <div class="supermarket_header_btns clearfix">
                        <ul class="action_btns_group ul_li_right clearfix">
                            {{--<li>
                                <button type="button">
                                    <span>Need</span>
                                    <strong>Help?</strong>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <span>Your</span>
                                    <strong>Account</strong>
                                </button>
                            </li>--}}
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge">{{ $cart_count ? $cart_count : 0 }}</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom clearfix">
        <div class="container maxw_1460">
            <nav class="main_menu clearfix">
                <ul class="ul_li clearfix">
                    {{--<li>
                        <button class="alldepartments_btn bg_supermarket_red text-uppercase" type="button"
                                data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false"
                                aria-controls="alldepartments_dropdown">
                            <i class="far fa-bars"></i> All Departments
                        </button>
                    </li>--}}
                    {{----------------------Shop Menu Start Here----------------------}}

{{--                    <li><a href="{{ route('all_product') }}">Shop</a></li>--}}

                    {{----------------------Shop Menu End Here----------------------}}

                    {{----------------------Shop Menu Start Here----------------------}}

{{--                    <li><a href="#!">About us</a></li>--}}

                    {{----------------------Shop Menu End Here----------------------}}

                </ul>
            </nav>
        </div>
    </div>

    <div id="search_body_collapse" class="search_body_collapse collapse">
        <div class="search_body">
            <div class="container-fluid prl_90">
                <form action="#">
                    <div class="form_item mb-0">
                        <input type="search" name="search" placeholder="Type here...">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- header_section - end
================================================== -->


<!-- main body - start
================================================== -->
<main>

    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="cart_sidebar">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
            <ul id="cart_items_list" class="cart_items_list ul_li_block mb_30 clearfix">
            </ul>

            <ul id="total_price" class="total_price ul_li_block mb_30 clearfix">
            </ul>
            <a href="{{ route('cart') }}" class="w-100 pb-1">
            <button class="btn btn-block btn-dark">
                    View Cart
            </button>
            </a>
            <form action="{{ route('checkout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-block btn-dark">
                    Checkout
                </button>
            </form>
        </div>

        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/assets/images/logo/logo_25_1x.png') }}" alt="logo_not_found">
                </a>
            </div>

            <div class="msb_widget mobile_menu_list clearfix">
                <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="ul_li_block dropdown-menu">
                            <li><a href="home_carparts.html">Carparts</a></li>
                            <li><a href="home_classic_ecommerce.html">Classic Ecommerce</a></li>
                            <li><a href="home_creative_onelook.html">Creative Onelook</a></li>
                            <li><a href="home_electronic.html">Electronic</a></li>
                            <li><a href="home_fashion.html">Fashion</a></li>
                            <li><a href="home_fashion_minimal.html">Fashion Minimal</a></li>
                            <li><a href="home_furniture.html">Furniture</a></li>
                            <li><a href="home_gadget.html">Gadget</a></li>
                            <li><a href="home_lookbook_creative.html">Lookbook Creative</a></li>
                            <li><a href="home_lookbook_slide.html">Lookbook Slide</a></li>
                            <li><a href="home_medical.html">Medical</a></li>
                            <li><a href="home_modern.html">Modern</a></li>
                            <li><a href="home_modern_minimal.html">Modern Minimal</a></li>
                            <li><a href="home_motorcycle.html">Motorcycle</a></li>
                            <li><a href="home_parallax_shop.html">Parallax Shop</a></li>
                            <li><a href="home_simple_shop.html">Simple Shop</a></li>
                            <li><a href="home_single_story_black.html">Single Story Black</a></li>
                            <li><a href="home_single_story_white.html">Single Story White</a></li>
                            <li><a href="home_sports.html">Sports</a></li>
                            <li><a href="home_supermarket.html">Supermarket</a></li>
                            <li><a href="home_watch.html">Watch</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown ul_li_block">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Carparts</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="carparts_shop.html">Shop Page</a></li>
                                    <li><a href="carparts_shop_grid.html">Shop Grid</a></li>
                                    <li><a href="carparts_shop_list.html">Shop List</a></li>
                                    <li><a href="carparts_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classic
                                    Ecommerce</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="classic_ecommerce_shop.html">Shop Page</a></li>
                                    <li><a href="classic_ecommerce_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="electronic_shop.html">Shop Page</a></li>
                                    <li><a href="electronic_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Fashion</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="fashion_shop.html">Shop Page</a></li>
                                    <li><a href="fashion_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion
                                    Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                    <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion
                                    Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                    <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Furniture</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="furniture_shop.html">Shop Page</a></li>
                                    <li><a href="furniture_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Gadget</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="gadget_shop.html">Shop Page</a></li>
                                    <li><a href="gadget_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Medical</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="medical_shop.html">Shop Page</a></li>
                                    <li><a href="medical_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modern
                                    Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="modern_minimal_shop.html">Shop Page</a></li>
                                    <li><a href="modern_minimal_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Modern</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="modern_shop.html">Shop Page</a></li>
                                    <li><a href="modern_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Motorcycle</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="motorcycle_shop_grid.html">Shop Grid</a></li>
                                    <li><a href="motorcycle_shop_list.html">Shop List</a></li>
                                    <li><a href="motorcycle_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Simple
                                    Shop</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="simple_shop.html">Shop Page</a></li>
                                    <li><a href="simple_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Sports</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="sports_shop.html">Shop Page</a></li>
                                    <li><a href="sports_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Lookbook</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="lookbook_creative_shop.html">Shop Page</a></li>
                                    <li><a href="lookbook_creative_shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop
                                    Other Pages</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="#!">
                                            <del>Shop Page</del>
                                        </a></li>
                                    <li><a href="shop_details.html">Shop Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop
                                    Inner Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop_cart.html">Shopping Cart</a></li>
                                    <li><a href="shop_checkout.html">Checkout Step 1</a></li>
                                    <li><a href="shop_checkout_step2.html">Checkout Step 2</a></li>
                                    <li><a href="shop_checkout_step3.html">Checkout Step 3</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404 Page</a></li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog_details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Compare</a>
                                <ul class="dropdown-menu">
                                    <li><a href="compare_1.html">Compare V.1</a></li>
                                    <li><a href="compare_2.html">Compare V.2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Register</a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Sign Up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Conatct</a></li>
                </ul>
            </div>
            <div class="user_info">
                <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                <div class="profile_info clearfix">
                    <div class="user_thumbnail">
                        <img src="{{ asset('frontend/assets/images/meta/img_01.png') }}" alt="thumbnail_not_found">
                    </div>
                    <div class="user_content">
                        <h4 class="user_name">Jone Doe</h4>
                        <span class="user_title">Seller</span>
                    </div>
                </div>
                <ul class="settings_options ul_li_block clearfix">
                    <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                    <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                    <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->
