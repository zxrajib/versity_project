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

    <!-- ====================================register_section - start==================================== -->
    <section class="register_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="{{ asset('frontend/assets/images/backgrounds/bg_22.jpg') }}">
        <div class="overlay" data-bg-color="rgba(55, 55, 55, 0.75)"></div>
        <div class="container">
            <div class="reg_form_wrap login_form" data-background="{{ asset('frontend/assets/images/reg_bg_01.png') }}">
                <form action="{{route('login.process')}}" method="post" class="login_form">
                    @csrf
                    <div class="reg_form">
                        <h2 class="form_title text-uppercase text-center">Login</h2>
                        <div class="form_item">
                            <input id="phone" type="text" name="login" placeholder="Email / Phone" required />
                            <label for="phone"><i class="fal fa-phone"></i></label>
                        </div>
                        <div class="form_item">
                            <input id="password" type="password" name="password" placeholder="password" required />
                            <label for="password"><i class="fal fa-unlock-alt"></i></label>
                        </div>
                        <a class="forget_pass text-uppercase mb_30" href="{{ route('getEmail') }}">Forgot password?</a>
                        <button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Login</button>

                        <div class="social_wrap mb_100">
                            <h4 class="small_title_text mb_15 text-center text-uppercase">Or Login With</h4>
                            <ul class="circle_social_links ul_li_center clearfix">
                                <li><a data-bg-color="#3b5998" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a data-bg-color="#1da1f2" href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a data-bg-color="#ea4335" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>

                        <div class="create_account text-center">
                            <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                            <a class="create_account_btn text-uppercase" href="{{ route('registration') }}">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ====================================register_section==================================== - end -->


@endsection
