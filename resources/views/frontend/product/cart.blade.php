@extends('frontend.master')
@section('content')
    <!--==========================Cart Section Start Here========================-->
    <section class="cart_section clearfix">
        <form action="{{ route('checkout') }}" method="post">
            @csrf
            <div class="mb_50">
                <table class="table">
                    <thead class="text-uppercase">
                    <tr class="text-center">
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                        <th>Sub Total</th>
                        <th>Total Discount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="cart_tbl">
                    @forelse($cart_data as $data)
                        <input name="uuid[]" type="hidden" min="1" value="{{ $data->uuid ?? '' }}" readonly>
                        <tr class="text-center">
                            <td>
                                <div class="cart_product">
                                    <div class="item_image">
                                        @if($data->product->image)
                                            <img
                                                src="{{ file_exists(public_path('backend/img/product/'.$data->product->image->first()->image)) ? asset('backend/img/product/' . $data->product->image->first()->image) : asset('backend/product.jpg') }}"
                                                alt="image_not_found">
                                        @endif
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title">{{ $data->product->name ?? '' }}</h4>
                                        @if($data->stock_details->stock_attribute_data)
                                            @foreach($data->stock_details->stock_attribute_data as $attr)
                                                <span
                                                    class="badge badge-success text-white">{{ $attr->attr_value->value ?? '' }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" id="price_{{$data->uuid ?? 0}}" class="price_text text-center border-0 w-50" value="{{ $data->price ?? '' }}" readonly />
                            </td>
                            <td>
                                <input type="number" id="discount_{{$data->uuid ?? 0}}" class="price_text text-center border-0 w-50" value="{{ ($data->discount / $data->quantity) ?? '' }}" readonly />
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <span class="input_number_decrement" onclick="return decrement('{{$data->uuid ?? 0}}')">–</span>
                                    <input name="qty[]" id="qty_{{$data->uuid ?? 0}}" class="input_number" type="number" min="1" value="{{ $data->quantity ?? '' }}" readonly>
                                    <span class="input_number_increment" onclick="return increment('{{$data->uuid ?? 0}}')">+</span>
                                </div>
                            </td>
                            <td>
                                <input type="number" id="sub_total_{{$data->uuid ?? 0}}" class="price_text sub_total text-center border-0 w-50" value="{{ $data->sub_total ?? '' }}" readonly />
                            </td>
                            <td>
                                <input type="number" id="discount_sub_total_{{$data->uuid ?? 0}}" class="price_text discount_sub_total text-center border-0 w-50" value="{{ $data->discount ?? '' }}" readonly />
                            </td>
                            <td class="text-center">
                                <button type="button" class="remove_btn" onclick="return remove_cart('{{$data->uuid}}')">
                                    <i class="fal fa-trash-alt text-danger"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center"><p class="total_price">Cart Is Empty</p></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="row justify-content-lg-end">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
                        <h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
                        <ul class="ul_li_block clearfix">
                            <li><span>Subtotal</span> <span id="all_sub_total"></span></li>
                            <li><span>Discount</span> <span id="all_discount"></span></li>
                            <li><span>Total</span> <span id="all_total"></span></li>
                        </ul>
                        <button type="submit" class="custom_btn bg_success">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--==========================Cart Section End Here========================-->
@endsection

@push('css')
    <style>
        .cart_product .item_image img {
            height: 50px !important;
        }

        .cart_product .item_image {
            width: 50px !important;
            margin-right: 20px;
        }

        .cart_table td, .cart_table th {
            padding: 10px;
        }
    </style>
@endpush
@push('js')
    <script>
        function cart(uuid, qty){
            let price = $('#price_' + uuid).val();
            let discount = $('#discount_' + uuid).val();
            let new_sub_total = parseFloat(price * qty).toFixed(2);
            let new_discount_sub_total = parseFloat(discount * qty).toFixed(2);
            $('#sub_total_' + uuid).val(new_sub_total);
            $('#discount_sub_total_' + uuid).val(new_discount_sub_total);
            sub_total();
        }

        function increment(id) {
            let uuid = id;
            let qty = $('#qty_' + uuid).val();
            qty++;
            cart(uuid, qty);
        }

        function decrement(id) {
            let uuid = id;
            let main_qty = parseInt($('#qty_' + uuid).val());
            let qty = ''
            main_qty--;
            if(main_qty > 0){
                qty = main_qty;
            }else{
                qty = 1;
            }
            cart(uuid, qty);
        }

        //Increment Decrement End

        function remove_cart(id) {
            if (confirm("Are you Sure?")) {
                $.ajax({
                    type: "GET",
                    url: "{{route('ajax_cart_remove')}}",
                    data: {id: id},
                    dataType: "json",
                    success: function (dataResults) {
                        let allData = JSON.parse(JSON.stringify(dataResults));
                        let cart_data = '';
                        $('#cart_tbl').html('');
                        if ($.isEmptyObject(allData.cart_data)) {
                            cart_data = `
                        <tr>
                            <td colspan="6" class="text-center"><p class="total_price">Cart Is Empty</p></td>
                        </tr>`;
                        } else {
                            $.each(allData.cart_data, function (index, value) {
                                let product_name = value.product.name;
                                let image_url = '';
                                let base_url = ''
                                let attr = ''
                                let img_check = value.product.image;
                                let product_attr = value.stock_details.stock_attribute_data;
                                if ($.isEmptyObject(img_check)) {
                                    base_url = '{{ asset('backend') }}'
                                    image_url = 'product.jpg';
                                } else {
                                    base_url = '{{ asset('backend/img/product/') }}'
                                    image_url = value.product.image[0].image;
                                }
                                if($.isEmptyObject(product_attr)){
                                    $.each(product_attra, function (key, data) {
                                        attr +=`<span class="badge badge-success text-white">`+data.attr_value.value+`</span>`;
                                    })
                                }
                                let product_img = base_url + '/' + image_url;
                                let single_discount = (value.price / value.quantity);
                                cart_data += `
                            <tr>
                                <td>
                                    <div class="cart_product">
                                        <div class="item_image">
                                            <img src="`+product_img+`" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">`+value.product.name+`</h4>`+attr+`
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" id="price_`+value.uuid+`" class="price_text text-center border-0 w-50" value="`+value.price+`" readonly />
                                </td>
                                <td>
                                    <input type="number" id="discount_`+value.uuid+`" class="price_text text-center border-0 w-50" value="`+single_discount+`" readonly />
                                </td>
                                <td>
                                    <span class="price_text">$`+value.price+`</span>
                                </td>
                                <td>
                                    <div class="quantity_input">
                                        <span class="input_number_decrement" onclick="return decrement('`+value.uuid+`')">–</span>
                                        <input id="qty_`+value.uuid+`" class="input_number" type="text"
                                               value="`+value.quantity+`">
                                        <span class="input_number_increment" onclick="return increment('`+value.uuid+`')">+</span>
                                    </div>
                                </td>
                                <td id="total_price_td_`+value.uuid+`">
                                    <span class="total_price">$`+value.sub_total+`</span>
                                </td>
                                <td id="total_discount_td_`+value.uuid+`">
                                    <span class="total_discount">$`+value.discount+`</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="remove_btn" onclick="return remove_cart('`+value.uuid+`')">
                                        <i class="fal fa-trash-alt text-danger"></i>
                                    </button>
                                </td>
                            </tr>`;
                            });
                        }

                        $('#cart_tbl').append(cart_data);
                    }
                });
            }
            sub_total();
        }

        function sub_total() {
            let sub_total = 0.00;
            let discount_sub_total = 0.00;
            let total = 0.00;
            $('#all_sub_total').text('');
            $('#all_discount').text('');
            $('#all_total').text('');

            $('.sub_total').each(function () {
                sub_total += parseFloat($(this).val());
            });
            $('.discount_sub_total').each(function () {
                discount_sub_total += parseFloat($(this).val());
            });
            total = parseFloat(sub_total - discount_sub_total).toFixed(2);

            $('#all_sub_total').text(parseFloat(sub_total).toFixed(2));
            $('#all_discount').text(parseFloat(discount_sub_total).toFixed(2));
            $('#all_total').text(parseFloat(total).toFixed(2));
        }
        sub_total();

    </script>
@endpush
