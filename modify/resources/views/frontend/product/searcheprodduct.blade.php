@extends('frontend.master')
@section('content')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Searched Products</a><span>|</span></li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <div class="banner">
        <!---728x90--->
            {{--Product List Start--}}
            <div class="w3ls_w3l_banner_nav_right_grid">
                <div class="container">
                    <!---728x90--->
                    <div class="agile_top_brands_grids">
                        @foreach($productLists as $product)
                            <div class="col-md-3 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="{{route('product.details', $product->id)}}">
                                                            <img title=" " alt=" "
                                                                 src="{{asset('backend/img/product/'.$product->image)}}"
                                                                 class="img-responsive"
                                                                 style="height: 200px !important; width: 140px !important;"/>
                                                        </a>
                                                        <p>{{$product->name}}</p>
                                                        <h4>{{ $product->stock->stockDetails->first()->sell_price ?? '' }} &#2547;</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <fieldset>
                                                            <a href="{{ route('product.details', $product->id) }}">
                                                                <input type="submit" name="submit" value="{{ ($product->stock->total_in > 0) ? 'Details' : 'Out of Stock' }}" id="details" class="button"/>
                                                            </a>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
@endsection
