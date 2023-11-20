@extends('frontend.master')
@section('content')
    <hr>
    <div class="container" style="margin-top: 5em;">
        <div class="row">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                                <div class="panel-body">

                                    <form action="{{route('post.email')}}" method="post" class="form">
                                        @csrf
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope color-blue"></i></span>

                                                    <input id="emailInput" name="email" placeholder="email address"
                                                           class="form-control" type="email"
                                                           oninvalid="setCustomValidity('Please enter a valid email address!')"
                                                           onchange="try{setCustomValidity('')}catch(e){}" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input class="btn btn-lg btn-primary btn-block" value="Send My Password"
                                                       type="submit">
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
