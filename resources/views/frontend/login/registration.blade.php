@extends('frontend.master')
@section('content')
    <!--************************************************* login/Register *************************************************-->
    {{--<div class="containers" id="container" style="margin: 5em 0 5em 0;">
        <div class="form-container sign-up-container">
            <form action="{{route('reg.store')}}" method="post" class="signup_form">
                @csrf
                <h1 style="color: #00ccff;">Sign Up</h1>
                <div class="social-container">
                    <a href="{{route('login.google')}}"><img src="https://img.icons8.com/cute-clipart/32/000000/google-logo.png"/></a>
                    <a href="{{route('login.facebook')}}"><img src="https://img.icons8.com/color/32/000000/facebook-circled--v5.png"/></a>
                </div>
                <span>or use your email for registration</span>
                <div class="signup_input">
                    <input type="text" name="name" placeholder="Name" required/>
                    <input type="email" name="email" placeholder="Email" required/>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                    <span id='warning'></span>
                    <div style="display: grid;">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type your password" required>
                        <span id='message'></span>
                        <span class="badge badge-danger password_not_matching" id="password_not_matching" style="display: none;"><i class="fa fa-times"></i></span>
                        <span class="badge badge-success password_matched" id="password_matched" style="display: none;"><i class="fa fa-check"></i></span>
                    </div>

                </div>
                <button id="signupButton" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('login.process')}}" method="post" class="login_form">
                @csrf
                <h2 style="color: #00ccff;">Sign In</h2>
                <div class="social-container">
                    <a href="{{route('login.google')}}"><img src="https://img.icons8.com/cute-clipart/32/000000/google-logo.png"/></a>
                    <a href="{{route('login.facebook')}}"><img src="https://img.icons8.com/color/32/000000/facebook-circled--v5.png"/></a>
                </div>
                <span>or use your account</span>
                <div class="login_input">
                    <input type="email" name="email" placeholder="Email" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                </div>
                <a href="{{route('getEmail')}}">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>Welcome Back!</h2>
                    <p>Please login with your personal info.</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal details and start your journey with us.</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>--}}
    <!--************************************************* login/Register *************************************************-->

    <!--==================================register_section - start==================================-->
    <section class="register_section sec_ptb_140 parallaxie clearfix" data-background="{{ asset('frontend/assets/images/backgrounds/bg_23.jpg') }}">
        <div class="container">
            <div class="reg_form_wrap signup_form" data-background="{{ asset('frontend/assets/images/reg_bg_02.png') }}">
                <form action="{{route('registration_process')}}" method="post" class="signup_form">
                    @csrf
                    <div class="reg_form">
                        <h2 class="form_title text-uppercase">Register Here</h2>
                        <div class="input-group mb-2">
                            <input class="form-control"  type="text" name="name" placeholder="Name" required/ />
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control"  type="email" name="email" placeholder="Email" required/ />
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control"  type="text" name="phone" placeholder="Phone Number" />
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control"  type="text" name="user_name" placeholder="User Name " />
                        </div>
                        <div class="input-group mb-2">
                            <select name="user_type" class="form-control" id="user_type">
                                <option value="Vendor">Vendor</option>
                                <option value="Customer">Customer</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <input class="form-control"  type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="checkbox_item mb_30">
                            <label for="agree_checkbox"><input id="agree_checkbox" type="checkbox"> I agree to the Terms of User</label>
                        </div>
                        <button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Create Account</button>

                        <div class="create_account text-center">
                            <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                            <a class="create_account_btn text-uppercase" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--==================================register_section - end==================================-->


@endsection
