@extends('frontend.master')
@section('title', 'Product Details')
@section('content')
    {{--        {{dd($productData)}}--}}
    <!-- fm_details_section - start
			================================================== -->
    <section class="fm_details_section sec_ptb_50 clearfix">
        <div class="container mb_50">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-5 col-md-7">
                    <div class="details_image">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                @forelse($productData->image as $key=>$image)
                                    @if($image->image)
                                        <img id="image{{$key}}" style="display: none" class="imageHide" src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                    @endif
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-7">
                    <ul class="di_tab_nav ul_li" role="tablist">
                        @forelse($productData->image as $key=>$image)
                            <li onclick="return image_change('image{{ $key }}')">
                                @if($image->image)
                                    <img src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                @endif
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>

                <div class="col-lg-5 col-md-7">
                    <div class="details_content">
                        <span class="item_type">{{ $productData->brand->name ?? '' }}</span>
                        <h2 class="item_title mb_15">{{ $productData->name ?? '' }}</h2>
                        <input type="hidden" id="stock_id" value="{{ $productData->stock->stockDetails->first()->uuid }}" />
                        <input type="hidden" id="total_in" value="{{ $productData->stock->stockDetails->first()->total_in }}" />
                        <input type="hidden" id="total_out" value="{{ $productData->stock->stockDetails->first()->total_out }}" />
                        <span id="main_item_price" class="item_price mb_15">
                            @if($productData->stock->stockDetails->first()->discount > 0)
                                <strong>
                                    TK {{ number_format(($productData->stock->stockDetails->first()->price ?? '') - ($productData->stock->stockDetails->first()->discount ?? ''), 2 ) }}
                                </strong>
                                <del>
                                    TK {{ $productData->stock->stockDetails->first()->price ?? '' }}
                                </del>
                            @else
                                <input type="hidden" id="stock_id" value="{{ $productData->stock->stockDetails->first()->uuid }}" />
{{--                                <input type="hidden" id="price" value="{{ $productData->stock->stockDetails->first()->price ?? '' }}" />--}}
                                <strong>
                                    TK {{ $productData->stock->stockDetails->first()->price ?? '' }}
                                </strong>
                            @endif
                        </span>
                        <hr>
                        <span class="heading">User Rating</span>
                        <span class="fa fa-star {{ $average_review >= 1 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 2 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 3 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 4 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star" {{ $average_review >= 5 ? 'checked' : '' }}></span>
                        <p>{{ (int)$average_review ?? '' }} average based on {{ $total_review ?? '' }} reviews.</p>
                        <hr>
                        <p class="mb-0">
                            {!! substr($productData->description, 0, 100) ?? '' !!}
                        </p>
                        <hr>
                        @if($productData->category->attribute != null)
                            @foreach($productData->category->attribute as $key=>$attributeData)
                                <div class="card" style="margin: 0px;">
                                    <div class="rating-container">
                                        <div class="rating-text">
                                            <p>{{ $attributeData->name ?? '' }}</p>
                                        </div>
                                        {{--                                        {{ dd($productData->stock->stockDetails->first()->stock_attribute_data->pluck('attr_id')->toArray()) }}--}}
                                        <div id="{{ $attributeData->name ?? '' }}" class="radio-group{{$key}} rg">
                                            @foreach($attributeData->attrValue as $ke=>$attrValueData)
                                                <input type="radio" id="option{{$key.$ke}}" class="option"
                                                       name="{{ $attributeData->name }}"
                                                       value="{{ $attrValueData->id }}" {{ in_array($attrValueData->id, $productData->stock->stockDetails->first()->stock_attribute_data->pluck('attr_id')->toArray()) ? 'checked' : '' }}>
                                                <label for="option{{$key.$ke}}">{{ $attrValueData->value ?? '' }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <ul class="btns_group ul_li clearfix">
                            <li>
                                <div class="quantity_input">
                                    <span class="input_number_decrement">–</span>
                                    <input id="qty" class="input_number" type="text" value="1">
                                    <span class="input_number_increment">+</span>
                                </div>
                            </li>
                            @auth
                                <li>
                                    <button id="add_to_cart" value="{{ $productData->id }}"
                                            class="custom_btn btn_sm bg_fashion2_red text-uppercase">
                                        <i class="fal fa-shopping-cart mr-2"></i>
                                        Add To Cart
                                    </button>
                                </li>
                            @endauth
                            @guest
                            <!-- Button trigger modal -->
                                <button type="button" class="custom_btn btn_sm bg_fashion2_red text-uppercase" data-toggle="modal" data-target="#loginModal">
                                    <i class="fal fa-shopping-cart mr-2"></i>
                                    Add To Cart
                                </button>
                                @include('frontend.partials.modals.login.login_modal')
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fm_details_section - end
    ================================================== -->
    <!-- product_review_section - start
    ================================================== -->
    @auth
    <section class="product_section clearfix mb_50">
        <div class="container-fluid prl_100">
            <div class="fm_section_title text-center mb_15">
                <h6 class="title_text">Product Review</h6>
            </div>
            <div class="row justify-content-center">
                <form action="{{ route('review.store') }}" method="post" style="width: 100%;">
                    @CSRF
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id ?? '' }}" />
                    <input type="hidden" name="product_id" value="{{ $productData->uuid ?? '' }}" />
                    <div class="col-md-12">
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea name="comments" id="comments" rows="2" style="width: 100%;"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endauth
    <!-- product_review_section - end
    ================================================== -->
    <!-- product_section - start
    ================================================== -->
    <section class="product_section clearfix">
        <div class="container-fluid prl_100">
            <div class="fm_section_title text-center mb_15">
                <h4 class="title_text">Related Product</h4>
            </div>

            <div class="row justify-content-center">
                @forelse($related_products as $key=>$related_product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-{{ $related_product->stock->stockDetails->first()->discount_percentage ?? '' }}%</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="{{ route('product.details', $related_product->uuid) }}">
                                    {{-- <img src="{{ file_exists(public_path('backend/img/product/'.$related_product->image->first()->image)) ? asset('backend/img/product/' . $related_product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found"> --}}
                                    <img src="{{asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="{{ route('product.details', $related_product->uuid) }}">
                                        {{ $related_product->name ?? '' }}
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price">
                                        {{-- @if($related_product->stock->stockDetails->first()->discount > 0)
                                            <strong>
                                                TK {{ number_format(($related_product->stock->stockDetails->first()->price ?? '') - ($related_product->stock->stockDetails->first()->discount ?? ''), 2 ) }}
                                            </strong>
                                            <del>
                                                TK {{ $related_product->stock->stockDetails->first()->price ?? '' }}
                                            </del>
                                        @else
                                            <strong>
                                                TK {{ $related_product->stock->stockDetails->first()->price ?? '' }}
                                            </strong>
                                        @endif --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
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
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="addtocart_btn text-uppercase">Add To Cart</a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->
@endsection

@push('css')
    <style>

        .card {
            display: flex;
            margin: auto;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23);
            background-color: rgb(255, 255, 255);
            padding: 0.8rem;
            width: 33rem;
        }

        .rg > input[type=radio] {
            position: absolute;
            visibility: hidden;
            display: none;
        }

        .rg > label {
            color: #332f90;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;
            padding: 5px 20px;
            margin: 0;
        }

        .rg > input[type=radio]:checked + label {
            color: #ff00ff;
            background: greenyellow;
        }

        .rg > label + input[type=radio] + label {
            border-left: 1px solid #332f90;
        }

        .rg {
            border: 1px solid #332f90;
            display: inline-block;
            margin: 5px;
            border-radius: 10px;
            overflow: hidden;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }


        .rating > input{ display:none;}

        .rating > label {
            position: relative;
            width: 1.1em;
            font-size: 4vw;
            color: #FFD700;
            cursor: pointer;
        }

        .rating > label::before{
            content: "\2605";
            position: absolute;
            opacity: 0;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before {
            opacity: 1 !important;
        }

        .rating > input:checked ~ label:before{
            opacity:1;
        }

        .rating:hover > input:checked ~ label:before{ opacity: 0.4; }

        .checked {
            color: orange;
        }
    </style>
@endpush
@push('js')

    <script>
        $(document).ready(function () {

            $(".option").click(function () {
                $.get("{{ route('attributeAjaxList', $productData->id) }}", function (data) {
                    let strData = JSON.parse(JSON.stringify(data));
                    let attrdom = [];
                    let attrdomarray = [];

                    strData.forEach((attr, index) => {
                        attrdom[index] = document.getElementsByName(attr.name);
                        for (let i = 0; i < attrdom[index].length; i++) {
                            if (attrdom[index][i].checked) {
                                attrdomarray.push(attrdom[index][i].value);
                            }
                        }
                    });

                    $.get("{{ url('attribute/find-price') }}" + "/{{$productData->id}}/" + JSON.stringify(attrdomarray), (dataSet) => {
                        let allData = JSON.parse(JSON.stringify(dataSet));

                        if ($.isEmptyObject(allData)) {
                            let main_item_price = $('#main_item_price').html('')
                            item_price = `
                                <strong class="text-danger">
                                    Stock Unavailable
                                </strong>`;
                            main_item_price.append(item_price)
                        } else {
                            $('#stock_id').val('');
                            if (allData.quantity > 0) {
                                let main_item_price = $('#main_item_price').html('')
                                let item_price = '';
                                let st_id = allData.uuid;
                                if (allData.discount > 0) {
                                    let discount_price = (allData.price) - (allData.discount);
                                    item_price = `
                                        <input type="hidden" id="stock_id" value="` + st_id + `" />
                                        <strong>
                                            TK ` + discount_price.toFixed(2) + `
                                        </strong>
                                        <del>
                                            TK ` + allData.price + `
                                        </del>`;
                                } else {
                                    item_price = `
                                            <input type="hidden" id="stock_id" value="` + st_id + `" />
                                        <strong>
                                            TK ` + allData.price + `
                                        </strong>`;
                                }

                                main_item_price.append(item_price);
                            } else {
                                let main_item_price = $('#main_item_price').html('')
                                item_price = `
                                <strong class="text-danger">
                                    Stock Unavailable
                                </strong>`;
                                main_item_price.append(item_price)
                            }
                        }
                    });
                });
            });


            $('#add_to_cart').click(function () {
                let stock_details_id = $('#stock_id').val();
                let qty = parseInt($("#qty").val());
                let total_in = parseInt($("#total_in").val());
                let total_out = parseInt($("#total_out").val());
                let stock_limit = (total_in - total_out);
                let stock_check = (stock_limit - qty);
                console.log('total_in', total_in)
                console.log('total_out', total_out)
                console.log('stock_limit', stock_limit)
                console.log('stock_check', stock_check)
                if (stock_check > 0) {
                    $('.cart_btn').html('');
                    $.ajax({
                        type: "GET",
                        url: "{{route('ajax_add_to_cart')}}",
                        dataType: "json",
                        data: {id: stock_details_id, qty: qty},
                        success: function (dataResults) {
                            let allData = JSON.parse(JSON.stringify(dataResults));
                            let find_cart = allData.find_cart;
                            let cart = 0;
                            if (find_cart.length > 0){
                                cart = find_cart.length;
                            }
                            let cart_count = `<i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge myCart">`+cart+`</span>`;
                            $('.cart_btn').append(cart_count);
                            toastr.success(allData.success);
                        }
                    });
                } else{
                    let stock_limit_message = `Stock Limit `+stock_limit+`. Please Enter Limit Quantity.`
                    toastr.error(stock_limit_message);
                }
            });
        })

        /*Image Dynamic Start Here*/
        image_change('image0')
        function image_change(id) {
            $(".imageHide").css("display", "none")
            $("#"+id).css("display", "block")
        }
        /*Image Dynamic End Here*/

        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here
    </script>

@endpush
