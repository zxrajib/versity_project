@extends('frontend.master')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 2em;">
            @auth()
            <div class="card" style="width: 100%; border-radius: 0;">
                <div class="card-body">
                    <form action="{{ route('placeOrder') }}" method="post">
                        @CSRF
                        <div class="text-center checkout_header">
                            <h1 class="card-title text-uppercase ch_h5">Checkout Information</h1>
                            <h6 class="card-subtitle mb-2 ch_h6">Please provide  correct information to complete the order.</h6>
                        </div>
                        <div class="col-md-7 p-0 m-0" style="padding-right: 5px;">
                            <div class="body_title text-center" style="width: 100%; border-radius: 0;">
                                <h5 class="card-title text-uppercase"
                                    style="color: #03bcc5; font-size: 30px;">
                                    BILLING DETAILS
                                </h5>
                                <br>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $authUser->email ?? '' }}" placeholder="Email address" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <input type="phone" id="phone" name="phone" class="form-control" value="{{ $authUser->phone ?? '' }}" placeholder="Phone Number" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <input type="name" id="name" name="name" class="form-control" value="{{ $authUser->name ?? '' }}" placeholder="Name" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <select class="form-control" id="shipping_charge" name="shippingCharge" rows="4" required>
{{--                                                <option value="">Select an option</option>--}}
                                                <option value="{{$shippingCharge->delivery_charge_in_city}}">Inside Dhaka</option>
                                                <option value="{{$shippingCharge->delivery_charge_around_city}}">Outside Dhaka</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <textarea class="form-control" id="address" name="address" rows="4" placeholder="Delivery address" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <!-- Material inline 1 -->
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="cash" name="delivery_type" value="Cash On Delivery" checked>
                                            <label class="form-check-label" for="cash">Cash On Delivery</label>
                                        </div>
                                        <!-- Material inline 2 -->
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="master_card" name="delivery_type" value="Master Card" >
                                            <label class="form-check-label" for="master_card">Master Card</label>
                                        </div>
                                        <!-- Material inline 3 -->
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="paypal" name="delivery_type" value="Paypal" >
                                            <label class="form-check-label" for="paypal">Paypal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 p-0 m-0" style="padding-left: 5px; margin: 0; border-left: 1px solid #03bcc5;">
                            <div class="body_title text-center" style="width: 100%; border-radius: 0;">
                                <h5 class="card-title text-uppercase"
                                    style="color: #03bcc5; font-size: 30px;">
                                    ORDER DETAILS
                                </h5>
                                <br>
                                <table class="table table-sm" style="border: 1px solid cyan;">
                                    <thead>
                                    <tr>
                                        <th style="color: #0b0b0b; border-bottom: 1px solid cyan;">PRODUCT</th>
                                        <th style="border-bottom: 1px solid cyan;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productData as $key=>$product)
                                        <input type="hidden" class="discount" value="{{$product['discount'] ?? ''}}">
                                        <tr class="border_bottom">
                                            <td class="text-left"  style="color: #0b0b0b;">
                                                {{ $product['item']->name ?? '' }}
                                            </td>
                                            <td class="subtotal"  style="font-weight: bold; color: #0b0b0b;">
                                                {{ ( $product['qty'] * $product['price'] ) ?? 0.00 }} TK
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="border_bottom">
                                        <td class="text-left"  style="color: #0b0b0b;">
                                            Discount
                                        </td>
                                        <input type="hidden" name="total_discount" id="totalDiscount">
                                        <td id="discount"  style="font-weight: bold; color: #0b0b0b;"></td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td class="text-left"  style="color: #0b0b0b;">
                                            Shipping Charge
                                        </td>
                                        <td id="shipping_crg"  style="font-weight: bold; color: #0b0b0b;">
                                            {{$shippingCharge->delivery_charge_in_city}}
                                        </td>
                                    </tr>
                                    <tr class="border_bottom">
                                        <td class="text-left"  style="color: #0b0b0b;">
                                            Total
                                        </td>
                                        <td id="total" style="font-weight: bold; color: #0b0b0b;"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 25px; margin-bottom: 2em;">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <button type="submit" class="btn btn-success submit_order_button">
                                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                        Back To Shopping
                                    </button>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-success submit_order_button">
                                        Place Order <i class="fa fa-truck" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endauth
            @guest()
                <div class="col-md-12 text-center">
                    <a href="{{ route('login') }}">
                        <button type="submit" class="btn btn-success login_check_checkout">
                            Login/Register first to Place Order
                        </button>
                    </a>
                </div>
            @endguest
        </div>
    </div>
@endsection
@push('css')
    <style>
        .border_bottom{
            border-bottom: 1px solid cyan;
        }
        .text-center.checkout_header {
            width: 100%;
            border-radius: 0;
            margin-bottom: 2em;
            background: repeating-linear-gradient(2deg, #00ff2b, #00d0ff 90px);
        }
        .ch_h5{
            /*font-size: 30px;*/
            letter-spacing: 10px;
            font-weight: 400;
            color: navy;
        }
        .ch_h6{
            color: white;
        }
        .submit_order_button{
            background: transparent;
            border: 2px solid teal;
            color: teal;
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 3px;
        }
        .submit_order_button:hover{
            transition: 1s;
            background: repeating-linear-gradient(2deg, #00ff2b, #00d0ff 90px);
            color: white;
        }
        .login_check_checkout{
            background: transparent;
            border: 2px solid #c600de;
            color: #c600de;
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 3px;
            margin-bottom: 6.6em;
        }
        .login_check_checkout:hover{
            transition: 1s;
            background: repeating-linear-gradient(-2deg, #9200ff, #ff0a0aba 100px);
            color: white;
            border-color: #c600de;
        }
    </style>
@endpush

@push('js')
    <script>

        $( "#shipping_charge" ).change(function() {
            let charge= $(this).val();
            $("#shipping_crg").text(charge);
            sum();
        });

        function discountSum(){
            let discountSum = 0;
            $('.discount').each(function(){
                discountSum += parseFloat($(this).val());
            });
            $("#discount").text(discountSum+' TK')
            $("#totalDiscount").val(discountSum)
        }

        function sum(){
            let sum = 0;
            let discountSum = 0;
            let charge = 0;
            let total = 0;
            $('.subtotal').each(function(){
                sum += parseFloat($(this).text());
            });

            $('.discount').each(function(){
                discountSum += parseFloat($(this).val());
            });

            charge = parseFloat($('#shipping_crg').text());

            total = ((sum + charge) - discountSum);
            $("#total").text(total+' TK');
        }

        sum();
        discountSum();

    </script>
@endpush
