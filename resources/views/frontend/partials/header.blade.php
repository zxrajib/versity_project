<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Supermarket</title>
    <!-- <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favourite_icon_01.png') }}"> -->

    <!-- icon - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/fontawesome.css') }}"> -->

    <!-- animation - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}"> -->

    <!-- nice select - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}"> -->

    <!-- carousel - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick-theme.css') }}"> -->

    <!-- popup images & videos - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}"> -->

    <!-- jquery ui - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}"> -->
    <!-- fraimwork - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"> -->
    <!-- custom - css include -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}"> -->

    <!-- Toastr Css -->
    <!-- <link href="{{asset('/assets/css/toastr.min.css')}}" rel="stylesheet" /> -->




    <link rel="stylesheet" href="{{asset('/frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/spacing.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/icon-dukamarket.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/jquery-ui.css')}}">
      <link rel="stylesheet" href="{{asset('/frontend/assets/css/main.css')}}">



    @stack('css')

</head>

<body class="home_supermarket">


<!-- header-area-start -->
<header>
         <div class="header__top theme-bg-1 d-none d-md-block">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12">
                     <div class="header__top-left">
                        <span>Due to the <strong>COVID-19</strong> epidemic, orders may be processed with a slight delay.</span>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="header__top-right d-flex align-items-center">
                        <div class="header__top-link">
                           <a href="#">Store Location</a>
                           <a href="#">Order Tracking</a>
                           <a href="faq.html">FAQs</a>
                        </div>
                        <div class="header__lang">
                           <span class="header__lang-select">English <i class="far fa-angle-down"></i></span>
                           <ul class="header__lang-submenu">
                              <li>
                                 <a href="#">Australia</a>
                              </li>
                              <li>
                                 <a href="#">Spain</a>
                              </li>
                              <li>
                                 <a href="#">Brazil</a>
                              </li>
                              <li>
                                 <a href="#">English</a>
                              </li>
                              <li>
                                 <a href="#">France</a>
                              </li>
                              <li>
                                 <a href="#">United States</a>
                              </li>
                           </ul>
                        </div>
                        <div class="header__top-price">
                           <select>
                              <option>USD</option>
                              <option>ARS</option>
                              <option>AUD</option>
                              <option>BRL</option>
                              <option>GBP</option>
                              <option>DKK</option>
                              <option>EUR</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="header-sticky" class="header__main-area d-none d-xl-block">
            <div class="container">
               <div class="header__for-megamenu p-relative">
                  <div class="row align-items-center">
                     <div class="col-xl-3">
                        <div class="header__logo">
                           <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="header__menu main-menu text-center">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown has-homemenu">
                                    <a href="index.html">Home</a>
                                    <ul class="sub-menu home-menu-style">
                                       <li>
                                          <a href="index.html"><img src="assets/img//header/home1-1.jpg" alt=""> Home Page V1</a>
                                       </li>
                                       <li>
                                          <a href="index-2.html"><img src="assets/img//header/home2-1.jpg" alt=""> Home Page V2</a>
                                       </li>
                                       <li>
                                          <a href="index-3.html"><img src="assets/img//header/home3-1.jpg" alt=""> Home Page V3</a>
                                       </li>
                                       <li>
                                          <a href="index-4.html"><img src="assets/img//header/home4-1.jpg" alt=""> Home Page V4</a>
                                       </li>
                                       <li>
                                          <a href="index-5.html"><img src="assets/img//header/home5-1.jpg" alt=""> Home Page V5</a>
                                       </li>
                                       <li>
                                          <a href="index-6.html"><img src="assets/img//header/home6-1.jpg" alt=""> Home Page V6</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown has-megamenu" >
                                    <a href="course-grid.html">Shop</a>
                                    <ul class="sub-menu mega-menu" data-background="assets/img/banner/mega-menu-shop-1.jpg">
                                       <li>
                                          <a  class="mega-menu-title">Shop layout</a>
                                          <ul>
                                             <li><a href="shop-left-sidebar.html">Shop With Banner </a></li>
                                             <li><a href="shop-3.html">Shop Without Banner</a></li>
                                             <li><a href="shop-2.html">Shop Version</a></li>
                                             <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                             <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                                             <li><a href="shop-list-view.html">Shop List view</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a  class="mega-menu-title">Product layout</a>
                                          <ul>
                                             <li><a href="shop-details-3.html">Image scroll</a></li>
                                             <li><a href="shop-details-grid.html">Product grid</a></li>
                                             <li><a href="shop-details-top.html">Top Thumb Product</a></li>
                                             <li><a href="shop-details.html">Bottom Thumb Product</a></li>
                                             <li><a href="shop-details-4.html">Simple Product</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a  class="mega-menu-title">Product type</a>
                                          <ul>
                                             <li><a href="shop-details.html">Products Simple</a></li>
                                             <li><a href="shop-details-grid.html">Products Group</a></li>
                                             <li><a href="shop-details-3.html">Products Variable</a></li>
                                             <li><a href="shop-details-3.html">Special</a></li>
                                             <li><a href="shop-details-4.html">Decoration</a></li>
                                             <li><a href="shop-details-top.html">Contruction</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a  class="mega-menu-title">Product category</a>
                                          <ul>
                                             <li><a href="shop-details.html">Fresh bakery</a></li>
                                             <li><a href="shop-details-3.html">Fresh fruits</a></li>
                                             <li><a href="shop-details-4.html">Fresh meat</a></li>
                                             <li><a href="shop-details.html">Fruit drink</a></li>
                                             <li><a href="shop-details.html">Fresh bakery</a></li>
                                             <li><a href="shop-details-grid.html">Biscuits snack</a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                       <li><a href="blog.html">Big image</a></li>
                                       <li><a href="blog-right-sidebar.html">Right sidebar</a></li>
                                       <li><a href="blog-left-sidebar.html">Left sidebar</a></li>
                                       <li><a href="blog-details.html">Single Post</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="about.html">Pages</a>
                                    <ul class="sub-menu">
                                       <li><a href="shop-location.html">Shop Location One</a></li>
                                       <li><a href="shop-location-2.html">Shop Location Two</a></li>
                                       <li><a href="faq.html">FAQs</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       <li><a href="cart.html">Cart Page</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="log-in.html">Sign In</a></li>
                                       <li><a href="comming-soon.html">Coming soon</a></li>
                                       <li><a href="404.html">Page 404</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="header__info d-flex align-items-center">
                           <div class="header__info-search tpcolor__purple ml-10">
                              <button class="tp-search-toggle"><i class="icon-search"></i></button>
                           </div>
                           <div class="header__info-user tpcolor__yellow ml-10">
                              <a href="log-in.html"><i class="icon-user"></i></a>
                           </div>
                           <div class="header__info-wishlist tpcolor__greenish ml-10">
                              <a href="wishlist.html"><i class="icon-heart icons"></i></a>
                           </div>
                           <div class="header__info-cart tpcolor__oasis ml-10 tp-cart-toggle">
                              <button><i><img src="assets/img/icon/cart-1.svg" alt=""></i>
                                 <span>5</span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- header-search -->
         <div class="tpsearchbar tp-sidebar-area">
            <button class="tpsearchbar__close"><i class="icon-x"></i></button>
            <div class="search-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 pt-100 pb-100">
                            <h2 class="tpsearchbar__title">What Are You Looking For?</h2>
                            <div class="tpsearchbar__form">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Product...">
                                    <button class="tpsearchbar__search-btn"><i class="icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="search-body-overlay"></div>
         <!-- header-search-end -->

         <!-- header-cart-start -->
         <div class="tpcartinfo tp-cart-info-area p-relative">
         <button class="tpcart__close"><i class="icon-x"></i></button>
            <div class="tpcart">
               <h4 class="tpcart__title">Your Cart</h4>
               <div class="tpcart__product">
                  <div class="tpcart__product-list">
                     <ul>
                        <li>
                           <div class="tpcart__item">
                              <div class="tpcart__img">
                                 <img src="assets/img/product/products1-min.jpg" alt="">
                                 <div class="tpcart__del">
                                    <a href="#"><i class="icon-x-circle"></i></a>
                                 </div>
                              </div>
                              <div class="tpcart__content">
                                 <span class="tpcart__content-title"><a href="shop-details.html">Stacy's Pita Chips Parmesan Garlic & Herb From Nature</a>
                                 </span>
                                 <div class="tpcart__cart-price">
                                    <span class="quantity">1 x</span>
                                    <span class="new-price">$162.80</span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpcart__item">
                              <div class="tpcart__img">
                                 <img src="assets/img/product/products12-min.jpg" alt="">
                                 <div class="tpcart__del">
                                    <a href="#"><i class="icon-x-circle"></i></a>
                                 </div>
                              </div>
                              <div class="tpcart__content">
                                 <span class="tpcart__content-title"><a href="shop-details.html">Banana, Beautiful Skin, Good For Health 1Kg</a>
                                 </span>
                                 <div class="tpcart__cart-price">
                                    <span class="quantity">1 x</span>
                                    <span class="new-price">$138.00</span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpcart__item">
                              <div class="tpcart__img">
                                 <img src="assets/img/product/products3-min.jpg" alt="">
                                 <div class="tpcart__del">
                                    <a href="#"><i class="icon-x-circle"></i></a>
                                 </div>
                              </div>
                              <div class="tpcart__content">
                                 <span class="tpcart__content-title"><a href="shop-details.html">Quaker Popped Rice Crisps Snacks Chocolate</a>
                                 </span>
                                 <div class="tpcart__cart-price">
                                    <span class="quantity">1 x</span>
                                    <span class="new-price">$162.8</span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="tpcart__checkout">
                     <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                        <span> Subtotal:</span>
                        <span class="heilight-price"> $300.00</span>
                     </div>
                     <div class="tpcart__checkout-btn">
                        <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                        <a class="tpcheck-btn" href="checkout.html">Checkout</a>
                     </div>
                  </div>
               </div>
               <div class="tpcart__free-shipping text-center">
                  <span>Free shipping for orders <b>under 10km</b></span>
               </div>
            </div>
         </div>
         <div class="cartbody-overlay"></div>
         <!-- header-cart-end -->

         <!-- mobile-menu-area -->
         <div id="header-sticky-2" class="tpmobile-menu d-xl-none">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-lg-4 col-md-4 col-3 col-sm-3">
                     <div class="mobile-menu-icon">
                        <button class="tp-menu-toggle"><i class="icon-menu1"></i></button>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                     <div class="header__logo text-center">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-3 col-sm-5">
                     <div class="header__info d-flex align-items-center">
                        <div class="header__info-search tpcolor__purple ml-10 d-none d-sm-block">
                           <button class="tp-search-toggle"><i class="icon-search"></i></button>
                        </div>
                        <div class="header__info-user tpcolor__yellow ml-10 d-none d-sm-block">
                           <a href="#"><i class="icon-user"></i></a>
                        </div>
                        <div class="header__info-wishlist tpcolor__greenish ml-10 d-none d-sm-block">
                           <a href="#"><i class="icon-heart icons"></i></a>
                        </div>
                        <div class="header__info-cart tpcolor__oasis ml-10 tp-cart-toggle">
                           <button><i><img src="assets/img/icon/cart-1.svg" alt=""></i>
                              <span>5</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="body-overlay"></div>
         <!-- mobile-menu-area-end -->

         <!-- sidebar-menu-area -->
         <div class="tpsideinfo">
            <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
            <div class="tpsideinfo__search text-center pt-35">
               <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
               <form action="#">
                  <input type="text" placeholder="Search Products...">
                  <button><i class="icon-search"></i></button>
               </form>
            </div>
            <div class="tpsideinfo__nabtab">
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                     <div class="mobile-menu"></div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                     <div class="tpsidebar-categories">
                        <ul>
                           <li><a href="shop-details.html">Dairy Farm</a></li>
                           <li><a href="shop-details.html">Healthy Foods</a></li>
                           <li><a href="shop-details.html">Lifestyle</a></li>
                           <li><a href="shop-details.html">Organics</a></li>
                           <li><a href="shop-details.html">Photography</a></li>
                           <li><a href="shop-details.html">Shopping</a></li>
                           <li><a href="shop-details.html">Tips & Tricks</a></li>
                        </ul>
                     </div>
                  </div>
                </div>
            </div>
            <div class="tpsideinfo__account-link">							
               <a href="log-in.html"><i class="icon-user icons"></i> Login / Register</a>
            </div>
            <div class="tpsideinfo__wishlist-link">
               <a href="wishlist.html" target="_parent"><i class="icon-heart"></i> Wishlist</a>
            </div>
         </div> 
         <!-- sidebar-menu-area-end -->
      </header>
      <!-- header-area-end -->








<!-- backtotop - start -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="icon-chevrons-up"></i>
</button>
<!-- backtotop - end -->

<!-- preloader - start -->
<!-- <div id="preloader"></div> -->
<!-- preloader - end -->

<!-- header_section - start
================================================== -->
<!-- <header class="header_section supermarket_header bg-white clearfix"> -->
    <!-- <div class="header_top text-white clearfix">
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
    </div> -->

    <!-- <div class="header_bottom clearfix">
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
    </div> -->

    <!-- <div id="search_body_collapse" class="search_body_collapse collapse">
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
    </div> -->
<!-- </header> -->
<!-- header_section - end
================================================== -->


<!-- main body - start
================================================== -->
<main>

    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <!-- <div class="sidebar-menu-wrapper">
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
    </div> -->
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->
