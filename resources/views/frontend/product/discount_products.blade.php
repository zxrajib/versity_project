@extends('frontend.master')
@section('title', 'Discounted Products')
@section('content')

    <div class="top-brands">
        <div class="container">
            <h3>{{$products->first()->discount->name}}</h3>
            <!---728x90--->
            <div class="agile_top_brands_grids">
                @foreach( $products as $product)
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


@endsection
