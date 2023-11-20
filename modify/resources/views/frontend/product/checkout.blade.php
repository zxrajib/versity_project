@extends('frontend.master')
@section('content')
    <div class="container">
        <form action="{{ route('order') }}" method="POST">
            @CSRF
            <div class="row">
                <div class="col-md-6">
                    <div class="billing_form mb_50">
                        <h3 class="form_title mb_30">Shipping details</h3>
{{--                        {{ddd($authUser->customer)}}--}}
                        <div class="form_wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Ship to another address.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_item">
                                        <span class="input_title">Name<sup>*</sup></span>
                                        <input type="text" name="name" id="name" value="{{ $authUser->name ?? 'Please Write
                                    Your Name' }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form_item">
                                        <span class="input_title">Phone<sup>*</sup></span>
                                        <input type="text" name="phone" id="phone" value="{{ $authUser->phone ?? 'Please Write Your
                                    Phone' }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form_item">
                                        <span class="input_title">Email Address<sup>*</sup></span>
                                        <input type="email" name="email" id="email" value="{{ $authUser->email ?? 'Please Write Your
                                     Email' }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form_item">
                                <span class="input_title">Address<sup>*</sup></span>
                                <textarea name="address" id="address" required>
{{--                                    {{ddd($authUser->customer)}}--}}
                                {{ $authUser->customer->billing_address === null ? '' : $authUser->customer->billing_address }}
                            </textarea>
                            </div>
                            <hr>
                            <div class="form_item mb-0">
                                <span class="input_title">Order notes<sup>*</sup></span>
                                <textarea name="order_note" placeholder="Note about your order."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="billing_form">
                        <h3 class="form_title mb_30">Your order</h3>
                        <form action="#">
                            <div class="form_wrap">
                                <div class="checkout_table">
                                    <table class="table text-center mb_50">
                                        <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>{{ $cart_data->sum('sub_total') ?? 0.00 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Discount</td>
                                            <td>{{ $cart_data->sum('discount') ?? 0.00 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>{{ $cart_data->sum('sub_total') - $cart_data->sum('discount') }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="billing_payment_mathod">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Payment Options</h6>
                                            <ul class="ul_li_block clearfix">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_type" id="payment_type1" value="cash_on_delivery" checked>
                                                        <label class="form-check-label" for="payment_type1">
                                                            Cash On Delivery
                                                        </label>
                                                    </div>
                                                </li>
                                                {{--<li>
                                                    <div class="checkbox_item mb-0 pl-0">
                                                        <label for="paypal_checkbox"><input id="paypal_checkbox" type="checkbox"> Paypal <a href="#!"><img class="paypal_image" src="{{ asset('frontend/assets/images/payment_methods_03.png') }}" alt="image_not_found"></a></label>
                                                    </div>
                                                </li>--}}
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Delivery Charge</h6>
                                            <ul class="ul_li_block clearfix">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="delivery_charge" id="delivery_charge1" value="{{ $shippingCharge->delivery_charge_in_city ?? 50 }}" checked>
                                                        <label class="form-check-label" for="delivery_charge1">
                                                            Inside Dhaka ( {{ $shippingCharge->delivery_charge_in_city ?? 50 }} )
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="delivery_charge" id="delivery_charge2" value="{{ $shippingCharge->delivery_charge_around_city ?? 80 }}">
                                                        <label class="form-check-label" for="delivery_charge2">
                                                            Outside Dhaka ( {{ $shippingCharge->delivery_charge_around_city ?? 80 }} )
                                                        </label>
                                                    </div>
                                                </li>
                                                {{--<li>
                                                    <div class="checkbox_item mb-0 pl-0">
                                                        <label for="paypal_checkbox"><input id="paypal_checkbox" type="checkbox"> Paypal <a href="#!"><img class="paypal_image" src="{{ asset('frontend/assets/images/payment_methods_03.png') }}" alt="image_not_found"></a></label>
                                                    </div>
                                                </li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="custom_btn bg_default_red">PLACE ORDER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script>
        $("#flexCheckChecked").click(function (){
            if($("#flexCheckChecked").is(':checked')){
                $("#name").val('');
                $("#phone").val('');
                $("#email").val('');
                $("#address").val('');
            }
            else{
                let name = '{{ auth()->user()->name ?? '' }}';
                let phone = '{{ auth()->user()->phone ?? '' }}';
                let email = '{{ auth()->user()->email ?? '' }}';
                let address = '{{ $authUser->customer->billing_address ?? '' }}';
                $("#name").val(name);
                $("#phone").val(phone);
                $("#email").val(email);
                $("#address").val(address);
            }
        })
    </script>
@endpush
