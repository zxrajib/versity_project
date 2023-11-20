@extends('master')
@section('title', 'POS')
@section('content_without_container')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 p-0 m-0">
                            <h3 class="card-title">Category</h3>
                            <button class="single_category p-2 mt-1 w-100 text-left overflow-hidden badge badge-soft-danger font-size-10" value="0">All Category</button>
                            @foreach($categories as $category)
                            <button class="single_category p-2 mt-1 w-100 text-left overflow-hidden badge badge-soft-success font-size-12" value="{{ $category->id }}">{{ $category->name }}</button>
                            @endforeach
                        </div>

                        <div class="col-md-9">
                            <h3 class="card-title">Products</h3>
                            <div id="all_product" class="row">
                                @foreach($productLists as $product)
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="snipcart-thumb" style="background:url({{ $product->image ? asset($_ENV['APP_DEV'].'backend/img/product/'.$product->image) : asset($_ENV['APP_DEV'].'backend/product.jpg')}}) no-repeat 0px 0px; background-size: cover; height: 100px; ">
                                                <div class="p_cont">
                                                    <marquee behavior="alternate" scrollamount="4" width="100%" direction="right" style="color: #000000">{{$product->name}}</marquee>
                                                    <p>{{ $product->stock->stockDetails ? $product->stock->stockDetails->first()->sell_price : '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <style>

    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function () {
            $('.single_category').click(function (){
                let id = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{route('product_category_ajax')}}",
                    dataType: "json",
                    data: {id: id},
                    success: function (dataResult) {
                        let allData = JSON.parse(JSON.stringify(dataResult));
                        let data_all = '';
                        $('#all_product').html('');
                        console.log(allData)
                        $.each(allData, function (index, data) {
                            data_all += `
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="snipcart-thumb" style="background:url( {{ asset($_ENV['APP_DEV'].'backend/img/product') }}/`+data.image+`) no-repeat 0px 0px; background-size: cover; height: 100px; ">
                                        <div class="p_cont">
                                            <marquee behavior="alternate" scrollamount="4" width="100%" direction="right" style="color: #000000">`+data.name+`</marquee>
                                            {{--<p>{{ value.stock.stockDetails ? value.stock.stockDetails.first().sell_price : '' }}</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        });

                        $("#all_product").append(data_all);
                    }

                });
            });

            // $('.input-images').imageUploader();
            $('#attrButton').hide();
            $('#product_id').change(function () {

                let id = $(this).val();
                $('#LoadAttrData').html('');
                let data_all = '';
                if (id > 0) {
                    // $('#attrButton').show();
                    $.ajax({
                        type: "GET",
                        url: "{{route('search.productCategory')}}",
                        dataType: "json",
                        data: {id: id},
                        success: function (dataResult) {
                            let allData = JSON.parse(JSON.stringify(dataResult));
                            $.each(allData['category']['attribute'], function (index, value) {
                            });

                            $("#LoadAttrData").append(data_all);
                        }

                    });
                } else {
                    data_all += `<h3 class="lead text-muted text-center">Please Select a Product</h3>`;
                    $("#LoadAttrData").append(data_all);
                }
            });
        });

    </script>
@endpush
