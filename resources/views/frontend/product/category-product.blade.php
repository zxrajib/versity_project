@extends('frontend.master')
@section('title', 'Category Products')
@section('content')
    <!---728x90--->


    <!--***********************************************Category Product Section Start Here***********************************************-->

    <div class="top-brands">
        <div class="container">
            <h3>{{ $all_products->first()->category->name }}</h3>
            <!---728x90--->
            <div class="agile_top_brands_grids">
                @foreach( $all_products as $product)
                    <div class="col-md-3 top_brand_left mb_10">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb text-center">
                                                <a href={{ route('product.details', $product->id) }}>
                                                    <img src="{{$product->image ? asset($_ENV['APP_DEV'].'backend/img/product/'.$product->image) : asset($_ENV['APP_DEV'].'backend/product.jpg') }}" width="200px" height="200px" alt="Product Image" class=""/>
                                                </a>
                                                <p>{{ \Illuminate\Support\Str::limit($product->name, 24) }}</p>
                                                <h4>{{ $product->stock->stockDetails ? $product->stock->stockDetails->first()->sell_price : '' }}</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <a href="{{ route('product.details', $product->id) }}">
                                                    <input type="submit" name="submit" value="{{ ($product->stock->total_in > 0) ? 'Details' : 'Out of Stock' }}" id="details" class="button"/>
                                                </a>
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
    <!--***********************************************Category Products Section End Here***********************************************-->

    <!--***********************************************Category Slider Section Start Here***********************************************-->
    <section class="section_padding">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="text-center py">Top Categories</h1>
                <hr style="width: 25%; border: 1px solid #FA1818;">
            </div>
            <div class="col-md-12">
                <div class="new_arrival_items">
                    @foreach( $allCategory as $category)
                        <div class="row text-center" style="margin: auto">
                            <div class="col-md-12 top_brand_left mb_10">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="{{route('category-wise.list', $category->uuid)}}">
                                                            <img src="{{$category->image ? asset($_ENV['APP_DEV'].'backend/img/category/'.$category->image) : asset($_ENV['APP_DEV'].'backend/category.jpg') }}" width="200px" height="200px" alt="Brand Image" class="" style="background: none;"/>
                                                        </a>
                                                        <br>
                                                        <h4>{{ \Illuminate\Support\Str::limit($category->name, 24) }}</h4>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--***********************************************Category Slider Section End Here***********************************************-->
@endsection
