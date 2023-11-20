@extends('frontend.master')
@section('title', 'Home')
@section('content')
    <!-- ==============================slider_section - start============================== -->
    <section class="slider_section supermarket_slider clearfix"
             data-background="assets/images/backgrounds/bg_13.jpg">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="alldepartments_menu_wrap">
                        <div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
                            <div class="card mt-5">
                                <ul class="alldepartments_menulist ul_li_block clearfix">
                                    @forelse($cates as $key=>$child)
                                        <li class="menu_item_has_child">
                                            <a href="{{ route('category-wise.list', $child->uuid) }}">
                                                <span class="icon">
                                                    <img
                                                        src="{{ asset('frontend/assets/images/icons/supermarket/icon_03.png') }}"
                                                        alt="icon_not_found">
                                                </span>
                                                <strong>{{ $child->name ?? '' }}</strong>
{{--                                                <strong>{{ $child->name ?? '' }}</strong>--}}
                                            </a>
                                            @if (count($child->child) > 0)
                                                @include('frontend.home.category_child',['childs' => $child->child])
                                            @endif
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main_slider clearfix" data-slick='{"arrows": false}'>
                        @if (count($sliders) > 0)
                            @forelse($sliders as $slider)
                                <div class="item clearfix" data-bg-color="#ffc156">
                                    <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                        <img
                                            src="{{ $slider->image ? asset('backend/img/slider/' . $slider->image) : asset('backend/slider.jpg') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="slider_content">
                                        <h4 data-animation="fadeInUp" data-delay=".4s">{{ $slider->description ?? '' }}
                                        </h4>
                                        <h3 data-animation="fadeInUp" data-delay=".6s">{{ $slider->title ?? '' }}</h3>
                                        <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                            <small>From</small>
                                            <sup>£</sup>749<sup>99</sup>
                                        </div>
                                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                            <a href="{{ $slider->button_link ?? '#' }}"
                                               class="custom_btn btn_round bg_supermarket_red">{{ $slider->button_text ?? '' }}</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="item clearfix" data-bg-color="#ffc156">
                                    <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                        <img src="{{ asset('frontend/assets/images/slider/supermarket/img_01.png') }}"
                                             alt="image_not_found">
                                    </div>
                                    <div class="slider_content">
                                        <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                        <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                        <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                            <small>From</small>
                                            <sup>£</sup>749<sup>99</sup>
                                        </div>
                                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                            <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start
                                                Buying</a>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        @endif
                    </div>
                </div>

                <div class="col-lg-3">
                    @forelse($productAds->take(3) as $single_ads)
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ file_exists(public_path('backend/img/product/'.$single_ads->product->image->first()->image)) ? asset('backend/img/product/' . $single_ads->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found" height="170px !important">
                            <div class="item_content" style="width: 100%; height: 170px">
                                <h3 class="item_title text-white">
                                    {{ $single_ads->product->name ?? '' }}
                                </h3>
                                <span class="item_price">Price: {{ $single_ads->product->stock->stockDetails->min('price') }} TK</span>
                                <a class="text_btn" href="{{ route('product.details', md5($single_ads->product->id) . $single_ads->product->id) }}">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_01.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_02.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_03.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- ==============================slider_section - end============================== -->


    {{--    <!-- ==============================policy_section - start============================== -->--}}
    <section class="policy_section pb-0 clearfix">
        <div class="container maxw_1600">
            <div class="supermarket_policy clearfix">
                <ul class="ul_li clearfix">
                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_12.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Free Delivery</h3>
                                <p>For all order over $120</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_13.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Safe payment</h3>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_14.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Shop with confidence</h3>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_15.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">24/7 help center</h3>
                                <p>Dedicated 24/7 support</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_16.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Friendly services</h3>
                                <p>30 day satisfaction guarantee</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================policy_section - end============================== -->--}}


    {{--    <!-- ==============================deals_section - start==============================-->--}}
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <h2 class="title_text bg_supermarket_red text-white mb-0">
                            <span data-bg-color="#e09e9c"><i class="fal fa-plug"></i></span> <strong>New </strong> Arrival
                        </h2>
                    </div>
                </div>
            </div>

            <div class="electronic_content_container">
                <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                    @forelse($new_arrivals as $new_arrival)
                        <li>
                            <a href="{{ route('product.details', $new_arrival->uuid) }}">
                                <div class="electronic_product_item">
                                    <div class="product_label badge badge-danger clearfix">
                                        New
                                    </div>
                                    <div class="item_image">
                                        @if($new_arrival->image->first())
                                        <img src="{{ file_exists(public_path('backend/img/product/'.$new_arrival->image->first()->image)) ? asset('backend/img/product/' . $new_arrival->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                        @endif
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="{{ route('product.details', $new_arrival->uuid) }}">{{ substr($new_arrival->name, 0, 20) ?? '' }}</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar"
                                                     data-wow-duration="0.5s" data-wow-delay=".1s"
                                                     aria-valuenow="{{ $new_arrival->stock->total_out ?? '' }}"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{ (($new_arrival->stock->total_out ?? '') * 100) / ($new_arrival->stock->total_in ?? '') }}% !important;">
                                                </div>
                                            </div>
                                            <span class="value_text">{{ $new_arrival->stock->total_out ?? '' }}
                                                Sold</span>
                                        </div>
                                        <span class="item_price">{{ $new_arrival->stock->stockDetails->min('price') ?? '' }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li>
                            <div class="electronic_product_item">
                                <ul class="product_label ul_li clearfix">
                                    <li>-$30 off</li>
                                </ul>
                                <div class="item_image">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                    </h3>
                                    <div class="progress_wrap">
                                        <div class="progress">
                                            <div class="progress_bar wow Rx_width_20 animated" role="progressbar"
                                                 data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <span class="value_text">796 Sold</span>
                                    </div>
                                    <span class="item_price">$685.00</span>
                                </div>
                            </div>
                        </li>
                    @endforelse
                </ul>

                <div class="abtn_wrap text-center clearfix">
                    <a href="{{ route('all_product') }}" class="custom_btn btn_border border_electronic">View All Products</a>
                </div>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}


    {{--    <!-- ==============================deals_section - start============================== -->--}}
    <section class="deals_section sec_ptb_50 clearfix">
        <div class="container maxw_1600">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="supermarket_section_title clearfix">
                        <span class="sub_title text-uppercase">A wide selection of items </span>
                        <h2 class="title_text mb-0">Top Flash Deal</h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="gray_line"></div>
                </div>

                <div class="col-lg-2">
                    <div class="carousel_nav align_right">
                        <button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
                        <button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="supermarket_deals_carousel position-relative clearfix">
                <div class="custom_slider row clearfix" data-slick='{"dots": false}'>
                    @if (count($top_flash_deal_products) > 0)
                        @forelse($top_flash_deal_products as $key=>$top_flash_deal_product)
                            <div class="item_{{$key}} col">
                                <div class="supermarket_deals_item text-center clearfix">
                                    <div class="offer_text">
                                        Flat
                                        {{ $top_flash_deal_product->first()->discount_percentage ?? '0.00' }}
                                        %
                                    </div>
                                    <a href="{{ route('discount-wise.list', $top_flash_deal_product->first()->discount_percentage) }}" class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/product/'.$top_flash_deal_product->first()->product->image->first()->image)) ? asset('backend/img/product/' . $top_flash_deal_product->first()->product->image->first()->image) : asset('backend/product.jpg') }}"
                                             alt="image_not_found">
                                    </a>
                                    <span class="item_instock">{{ count($top_flash_deal_product) }} Products</span>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    @endif
                </div>
            </div>

        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}

    {{--    <!-- ==============================product_section - start============================== -->--}}
    <section class="product_section sec_ptb_50 bg_white clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="supermarket_sidebar_tab mb_30">
                        <div class="wrap_heade bg_supermarket_red clearfix">
                            <h2>Top Flash Deal</h2>
                            <span>A wide selection of items</span>
                        </div>
                        <ul class="ul_li_block nav" role="tablist">
                            @forelse($brands as $key=>$brand)
                                <li>
                                    <a class="{{ $key==0?'active':'' }}" data-toggle="tab" href="#key_{{ $key ?? '' }}">
                                        {{ $brand->name }}
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        @forelse($brands as $key=>$brand)
                        <div id="key_{{ $key ?? '' }}" class="tab-pane {{ $key==0?'active':'' }}">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                @forelse($brand->product as $single_product)
                                    <li>
                                        <div class="supermarket_product_item">
                                            <ul class="product_label ul_li_block clearfix">
                                                <li data-bg-color="#cc1414">-70%</li>
                                                <li data-bg-color="#0062bd">NEW</li>
                                            </ul>
                                            <a class="item_image" href="#!">
                                                @if($single_product->image->first())
                                                <img src="{{ file_exists(public_path('backend/img/product/'.$single_product->image->first()->image)) ? asset('backend/img/product/' . $single_product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                                @endif
                                            </a>
                                            <div class="item_content">
                                                <span class="item_type text-uppercase">{{ $brand->name ?? '' }}</span>
                                                <h3 class="item_title">
                                                    <a href="#!">
                                                        {{ $single_product->name ?? '' }}
                                                    </a>
                                                </h3>
                                                @if($single_product->stock)
                                                @if($single_product->stock->stockDetails->count() > 0)
                                                    <div class="item_price">
                                                        <strong>{{ $single_product->stock->stockDetails->min('price') }}</strong>
                                                    </div>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}

    {{--    <!-- ==============================advertisement_section - start============================== -->--}}
        <section class="advertisement_section sec_ptb_50 pb-0 clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-center">
                    @forelse($productAds->skip(3) as $single_ads)
                        <div class="col-lg-4">
                            <div class="sm_offer_item offer_fullimage text-white">
                                <div class="img_before">
                                    <img src="{{ file_exists(public_path('backend/img/product/'.$single_ads->product->image->first()->image)) ? asset('backend/img/product/' . $single_ads->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found" height="170px !important">
                                     alt="image_not_found">
                                </div>
                                <div class="item_content" style="width: 86%; top: 50%; height: 170px;">
                                    <h3 class="item_title text-white">
                                        {{ $single_ads->product->name ?? '' }}
                                    </h3>
                                    <span class="item_price">Price: {{ $single_ads->product->stock->stockDetails->min('price') }} TK</span>
                                    <a class="text_btn" href="{{ route('product.details', md5($single_ads->product->id) . $single_ads->product->id) }}">
                                        <span>Pre - Order Now</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_06.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_07.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_08.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
    {{--    <!-- ==============================advertisement_section - end============================== -->--}}


    {{--    <!-- ==============================supermarket_feature_carousel - start============================== -->--}}
        <section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{--    <!-- ==============================supermarket_feature_carousel - end============================== -->--}}

    <!-- ==============================bestseller_section - start============================== -->
        <section class="bestseller_section sec_ptb_50 clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Products</h2>
                            </div>
                            @forelse($footerProduct->take(3) as $singleProduct)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        @if($singleProduct->first()->product->image)
                                            <img src="{{ file_exists(public_path('backend/img/product/'.$singleProduct->first()->product->image->first()->image)) ? asset('backend/img/product/' . $singleProduct->first()->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                        @endif
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">
                                                - {{ number_format((($singleProduct->first()->discount ?? '0') * 100) / ($singleProduct->first()->price ?? '1'), 2) }} %
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $singleProduct->first()->product->brand->name ?? '' }}</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('product.details', md5($singleProduct->first()->product->id).$singleProduct->first()->product->id) }}">{{ $singleProduct->first()->product->name ?? '' }}</a>
                                        </h3>
                                        @if($singleProduct->first()->product->stock)
                                            @if($singleProduct->first()->product->stock->stockDetails->count() > 0)
                                                <div class="item_price">
                                                    <strong>{{ $singleProduct->first()->product->stock->stockDetails->min('price') }}</strong>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_22.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_13.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_16.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Brands</h2>
                            </div>
                            @forelse($brands->random(3) as $brand)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/brand/'.$brand->image)) ? asset('backend/img/brand/' . $brand->image) : asset('backend/brand.jpg') }}" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $brand->product->count() ?? 0 }} Products</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('brand-wise.list', $brand->uuid) }}">{{ $brand->name ?? '' }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_11.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_19.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_21.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Category</h2>
                            </div>
                            @forelse($footerCategory->random(3) as $category)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/category/'.$category->image)) ? asset('backend/img/category/' . $category->image) : asset('backend/category.jpg') }}" alt="image Not Found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $category->product->count() ?? 0 }}</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('category-wise.list', $category->uuid) }}">{{ $category->name ?? '' }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_23.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_24.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_06.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <!-- ==============================bestseller_section - end============================== -->
@endsection

@push('css')
    <style>
        .electronic_product_item .product_label {
            top: 0 !important;
            right: 0 !important;
            z-index: 1;
            position: absolute;
            transform: rotate(45deg);
        }

        .menu_item_has_child .submenu {
            top: -3% !important;
            left: 110% !important;
        }

    </style>
@endpush
@push('js')
    <script>
        $('.custom_slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endpush
