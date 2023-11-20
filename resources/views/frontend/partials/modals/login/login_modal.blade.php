
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
{{--                <div class="login_form" data-background="{{ asset('frontend/assets/images/reg_bg_01.png') }}">--}}
                    <form action="{{route('login_modal_process')}}" method="post" class="login_form">
                        @csrf
                        <div class="reg_form">
                            <div class="form_group row">
                                <label class="col-md-1 form-control" for="phone"><i class="fal fa-phone"></i></label>
                                <input class="col-md-11 form-control" id="phone" type="text" name="login" placeholder="Email / Phone" required />
                            </div>
                            <div class="form_group row">
                                <label class="col-md-1 form-control" for="password"><i class="fal fa-unlock-alt"></i></label>
                                <input class="col-md-11 form-control" id="password" type="password" name="password" placeholder="password" required />
                            </div>
                            <a class="w-100 text-right" href="{{ route('getEmail') }}">
                                <span>Forgot password</span>
                            </a>
                            <button type="submit" class="btn btn-success btn-sm form-control text-uppercase">Login</button>

                            <div class="create_account text-center">
                                <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                                <a class="create_account_btn text-uppercase" href="{{ route('registration') }}">Sign Up</a>
                            </div>
                        </div>
                    </form>
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
