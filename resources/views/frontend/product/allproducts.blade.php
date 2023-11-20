@extends('frontend.master')
@section('title', 'All Product')
@section('content')
    <!---728x90--->

    <!--***********************************************All Product Section Start Here***********************************************-->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">
            <div class="row mb_100 justify-content-lg-between">
                @forelse($allProducts as $products)
                    @php
                    $discount_check = isset($products->stock->stockDetails->sortByDesc('price')->first()->discount) ? (float) $products->stock->stockDetails->sortByDesc('price')->first()->discount : 0;
                    @endphp
                    <a href="">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <div class="row">
                                    <div class="col">
                                        @if( $discount_check > 0)
                                            <ul class="product_label product_label_1 ul_li clearfix">
                                                <li data-bg-color="#fb5d5d">
                                                    {{ number_format(((($products->stock->stockDetails->sortByDesc('price')->first()->discount ?? '0') * 100) /
                                                    ($products->stock->stockDetails->sortByDesc('price')->first()->price ?? '1')), 2) }}%
                                                </li>
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <ul class="product_label product_label_2 ul_li clearfix">
                                            <li data-bg-color="#82ca9c">NEW</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item_image">
                                    <a class="image_wrap" href="{{ route('product.details', $products->uuid) }}">
                                        @if($products->image->first())
                                            <img src="{{ file_exists(public_path('backend/img/product/'.$products->image->first()->image)) ? asset('backend/img/product/' . $products->image->first()->image) : asset('backend/product.jpg') }}"
                                                 alt="image_not_found">
                                        @endif
                                    </a>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="{{ route('product.details', md5($products->id).$products->id) }}">{{ substr($products->name, 0, 20) ?? '' }}</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price btn btn-success btn-block text-center">
                                        @if($discount_check > 0)
                                            <strong>
                                                {{ ($products->stock->stockDetails->sortByDesc('price')->first()->price ?? '') - ($products->stock->stockDetails->sortByDesc('price')->first()->discount ??
                                                '') }}
                                            </strong>
                                            <del>
                                                {{ $products->stock->stockDetails->sortByDesc('price')->first()->price ?? '' }}
                                            </del>
                                        @else
                                            <strong>
                                                {{ $products->stock->stockDetails->sortByDesc('price')->first()->price ?? '' }}
                                            </strong>
                                        @endif
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-md-12">
                        <h3 class="text-center">
                            No Product Found
                        </h3>
                    </div>
                    {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                                <span class="coming_soon text-uppercase">Coming Soon</span>
                                <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist"
                                   href="#!"><i class="fal fa-heart"></i></a>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!"
                                           data-toggle="modal" data-target="#quickview_modal"><i
                                                    class="fal fa-search"></i></a></li>
                                    <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i
                                                    class="far fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                    <ul class="item_color ul_li clearfix">
                                        <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                        <li><a href="#!" data-bg-color="#eede86"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                @endforelse
            </div>

        </div>
    </section>
@endsection
@push('css')
    <style>
        .fashion_minimal_product .product_label_1 {
            top: 0 !important;
            left: 9% !important;
        }

        .fashion_minimal_product .product_label_2 {
            top: 0 !important;
            left: 57% !important;
        }
    </style>
@endpush
