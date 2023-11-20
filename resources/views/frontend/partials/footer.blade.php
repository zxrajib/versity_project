</main>
<!-- main body - end
================================================== -->


<!-- footer_section - start
================================================== -->
<footer class="footer_section supermarket_footer clearfix">
    <div class="footer_widget_area sec_ptb_50 bg_white clearfix">
        <div class="container">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title">User</h3>
                        <ul class="ul_li_block clearfix">
                            @guest
                                <li><a href="{{ route('login') }}"><i class="fal fa-user"></i> Login</a></li>
                                <li><a href="{{ route('registration') }}"><i class="fal fa-user"></i> Register</a></li>
                            @endguest
                            @auth()
                                @if (auth()->user()->user_type == 'Customer')
                                    <li><a href="{{ route('login') }}"><i class="fal fa-user"></i>Profile</a></li>
                                @else
                                    <li><a href="{{ route('dashboard') }}"><i class="fal fa-user"></i>DashBoard</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}"><i class="fal fa-user"></i> Logout</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title">Information</h3>
                        <ul class="ul_li_block clearfix">
                            <li><a href="{{ route('about_us') }}">About Us</a></li>
                            <li><a href="#!">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_widget supermarket_footer_contact">
                        <h3 class="footer_widget_title">Contact info</h3>
                        <ul class="ul_li_block clearfix">
                            <li>
                                <div class="item_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="item_content">
                                    <p class="mb-0">
                                        {{ $footer->address ?? '' }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="item_icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="item_content">
                                    <p class="mb-0">
                                        Phone: {{ $footer->phone ?? '' }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="item_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="item_content">
                                    <p class="mb-0">
                                        Email: {{ $footer->email ?? '' }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer_bottom text-white clearfix" data-bg-color="#191e22">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p class="copyright_text mb-0 p-3">© <a href="#!" class="author_link text-white">NrB</a> - All
                        rights Reserved</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="circle_social_links ul_li_right clearfix">
                        @if($footer->fb_link)
                            <li><a href="{{ $footer->fb_link ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        @endif
                        @if($footer->tw_link)
                        <li><a href="{{ $footer->tw_link ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        @endif
                        @if($footer->google_link)
                        <li><a href="{{ $footer->google_link ?? '#' }}" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                        @endif
                        @if($footer->insta_link)
                        <li><a href="{{ $footer->insta_link ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        @endif
                        @if($footer->youtube_link)
                        <li><a href="{{ $footer->youtube_link ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_section - end
================================================== -->


<!-- fraimwork - jquery include -->
<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

<!-- mobile menu - jquery include -->
<script src="{{ asset('frontend/assets/js/mCustomScrollbar.js') }}"></script>

<!-- animation - jquery include -->
<script src="{{ asset('frontend/assets/js/parallaxie.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

<!-- nice select - jquery include -->
<script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>

<!-- carousel - jquery include -->
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

<!-- countdown timer - jquery include -->
<script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>

<!-- popup images & videos - jquery include -->
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>

<!-- filtering & masonry layout - jquery include -->
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- jquery ui - jquery include -->
<script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>

<!-- custom - jquery include -->
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
<!-- Toastr - jquery include -->
<script src="{{asset('/assets/js/toastr.min.js')}}"></script>

@toastr_render

@stack('js')

<script>

    function cartData(){
        $.ajax({
            type: "GET",
            url: "{{route('ajax_cart_data')}}",
            dataType: "json",
            success: function (dataResults) {
                let allData = JSON.parse(JSON.stringify(dataResults));
                let cart_data = '';
                let cart_summary = '';
                $('#cart_items_list').html('');
                $('#total_price').html('');
                if ($.isEmptyObject(allData.cart_data)){
                    cart_data = `
                    <li>
                        <span>
                            Cart Is Empty!!!!!!!!
                        </span>
                    </li>`;
                }else{
                    $.each(allData.cart_data, function(index, value) {
                        let product_name = value.product.name.substring(0, 20)+'...';
                        let image_url = '';
                        let base_url = ''
                        let img_check = value.product.image;
                        if ($.isEmptyObject(img_check)){
                            base_url = '{{ asset('backend') }}'
                            image_url = 'product.jpg';
                        }else {
                            base_url = '{{ asset('backend/img/product/') }}'
                            image_url = value.product.image[0].image;
                        }
                        let product_img = base_url+'/'+image_url;
                        let test = '{{ file_exists(`+product_img+`) }}';
                        console.log('product_img', test);
                        cart_data += `
                        <li>
                            <div class="item_image">
                                <img src="`+product_img+`" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">`+product_name+`</h4>
                                <span class="item_price">$`+value.price+`</span>
                            </div>
                            <button type="button" onclick="return remove('${value.uuid}')" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>`;
                    });

                    cart_summary = `
                    <li>
                        <span>Subtotal:</span>
                        <span>$`+allData.sub_total+`</span>
                    </li>
                    <li>
                        <span>Vat 0%:</span>
                        <span>$0.00</span>
                    </li>
                    <li>
                        <span>Discount 20%:</span>
                        <span>- $`+allData.discount+`</span>
                    </li>
                    <li>
                        <span>Total:</span>
                        <span>$`+allData.total+`</span>
                    </li>`;
                }

                $('#cart_items_list').append(cart_data);
                $('#total_price').append(cart_summary);
            }
        });
    }

    function remove(id){
        $.ajax({
            type: "GET",
            url: "{{route('ajax_cart_data_remove')}}",
            data:{id:id},
            dataType: "json",
            success: function (dataResults) {
                let allData = JSON.parse(JSON.stringify(dataResults));
                let cart_data = '';
                let cart_summary = '';
                let cart_btn = '';
                $('.cart_btn').html('');
                $('#cart_items_list').html('');
                $('#total_price').html('');
                if ($.isEmptyObject(allData.cart_data)){
                    cart_data = `
                    <li>
                        <span>
                            Cart Is Empty!!!!!!!!
                        </span>
                    </li>`;
                }else{

                    $.each(allData.cart_data, function(index, value) {
                        let product_name = value.product.name.substring(0, 20)+'...';
                        let image_url = '';
                        let base_url = ''
                        let img_check = value.product.image;
                        if ($.isEmptyObject(img_check)){
                            base_url = '{{ asset('backend') }}'
                            image_url = 'product.jpg';
                        }else {
                            base_url = '{{ asset('backend/img/product/') }}'
                            image_url = value.product.image[0].image;
                        }
                        let product_img = base_url+'/'+image_url;
                        cart_data += `
                        <li>
                            <div class="item_image">
                                <img src="`+product_img+`" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">`+product_name+`</h4>
                                <span class="item_price">$`+value.price+`</span>
                            </div>
                            <button type="button" onclick="return remove('${value.uuid}')" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>`;
                    });

                    cart_summary = `
                    <li>
                        <span>Subtotal:</span>
                        <span>$`+allData.sub_total+`</span>
                    </li>
                    <li>
                        <span>Vat 0%:</span>
                        <span>$0.00</span>
                    </li>
                    <li>
                        <span>Discount 20%:</span>
                        <span>- $`+allData.discount+`</span>
                    </li>
                    <li>
                        <span>Total:</span>
                        <span>$`+allData.total+`</span>
                    </li>`;
                }

                cart_btn = `
                    <i class="fal fa-shopping-cart"></i>
                    <span class="btn_badge">`+allData.cart_data.length+`</span>
                `;

                $('#cart_items_list').append(cart_data);
                $('#total_price').append(cart_summary);
                $('.cart_btn').append(cart_btn);
            }
        });

    }

/*    $( document ).ready(function (){
        $('.remove_btn').click(function (){
            console.log('test')
        });
    });*/


/*    let cartItemsCookie = getCookie('cartItems');
    let cookieData = cartItemsCookie ? JSON.parse(cartItemsCookie) : [];
    $("#myCart").html(cookieData.length);
    let items = []

    function setCookie(id, qty, dynamicName, price) {
        let item = {
            id, qty, dynamicName, price
        }
        items.push(item);
        console.log('item', item)
        console.log('items', items)
        localStorage.setItem('items', JSON.stringify(items));
        let exdays = 1;
        //check existing cart
        const newOptions = JSON.stringify(Object.entries(dynamicName));

        let findExisting = cookieData.findIndex(ele => (ele.id == id && newOptions == ele.options))
        if (findExisting > -1) {
            cookieData[findExisting].qty = parseInt(cookieData[findExisting].qty) + parseInt(qty);
        } else {
            let newCartData = {};
            newCartData['id'] = id;
            newCartData['options'] = newOptions;
            newCartData['qty'] = qty;
            newCartData['price'] = price;
            cookieData.push(newCartData)
        }

        let d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = "cartItems=" + JSON.stringify(cookieData) + ";" + expires + "; path=/";
        let totalItemCount = cookieData.length;
        $("#myCart").html(totalItemCount);
        // Get Item From Local Storage
        console.log('From Storage', localStorage.getItem('items'))
    }

    function getCookie(chkCoockie) {
        let name = chkCoockie + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }*/


    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>
</body>
</html>
