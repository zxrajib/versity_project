@extends('master')
@section('content')
<div class="container bootstrap snippet">
    <div class="row" style="padding: 30px;">
        <div class="col-sm-10">
            <h1>
                @if($customerData) {{ $customerData->name ?? '' }}'s @endif Profile
            </h1>
        </div>
        <div class="col-sm-2" id="profile_information" style="display: none;">
            <a class="btn btn-sm btn-info" id="profile_info">
                <i class="fa fa-backward" aria-hidden="true"></i>
                Profile Info.
            </a>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-block btn-info" href="{{route('dashboard')}}">Dashboard   <i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div id="user_photo_update">
                <div class="text-center">
                    <img src="{{asset('frontend/img/profile/'.$customerData->image)}}"
                         class="avatar img-circle img-thumbnail" onerror="this.src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'">
                </div>
                <br>
                <div class="form-group row text-center">
                    <b>Upload/Update Photo</b>
                </div>
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('profile.photo.update', \Illuminate\Support\Facades\Auth::user()->id)}}">
                    @csrf
                    <div class="text-center row">
                        <div class="col-md-3 btn">
                            <input type="file" id="image" name="image" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <button class="btn btn-sm btn-success" type="submit">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <br><br><br><br>


            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i
                        class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                        class="fa fa-google-plus fa-2x"></i>
                </div>
            </div>
        </div><!--/col-3-->

        <div class="col-sm-9">
            <div class="user-profile-info" id="user-profile-info">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#changePassword">Change Password</a>
                    </li>
                </ul>
                <!--/tab-pane-->
                <div class="tab-content">
                    <div class="tab-pane active" id="info">
                        <hr>
                        <form class="form"
                              action="{{route('profile.info.update', \Illuminate\Support\Facades\Auth::user()->id)}}"
                              method="post" id="registrationForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2">Full Name</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="name" value="{{$customerData->name ?? ''}}"
                                           id="example-text-input" required>
                                </div>
                                <label for="example-text-input" class="col-md-2">Phone No</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="phone" placeholder="EX: 01xxxyyyyyy"
                                           value="{{$customerData->phone ?? ''}}" id="example-text-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button class="btn btn-sm btn-success" type="submit">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        Update Info
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>

                    <div class="tab-pane" id="changePassword">
                        <hr>
                        <form class="form"
                              action="{{route('profile.password.update',\Illuminate\Support\Facades\Auth::user()->id)}}"
                              method="post" id="registrationForm">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Old Password</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="old_password"
                                           placeholder="Enter your OLD PASSWORD." id="example-text-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">New Password</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="password"
                                           placeholder="Enter your NEW PASSWORD." id="example-text-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Re-Type Password</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="password_confirmation"
                                           placeholder="Re-Type your NEW PASSWORD." id="example-text-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-sm btn-success" type="submit"><i
                                            class="fa fa-check-square-o"></i> Update Password
                                    </button>
                                </div>
                            </div>

                        </form>

                        <hr>

                    </div>
                </div>
            </div><!--/tab-pane-->
        </div><!--/tab-pane-->
    </div><!--/tab-content-->

</div><!--/col-9-->
</div><!--/row-->


@endsection
@push('js')
    <script>
        $(document).ready(function () {


            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function () {
                readURL(this);
            });
        });

        $( "#orderList" ).click(function() {
            $("#user-profile-info").hide();
            $("#user-order-list").show();
            $("#profile_information").show();
            $("#user-cancelled-order").hide();
            $("#user_photo_update").hide();
        });
        $( "#cancelledOrder" ).click(function() {
            $("#user-profile-info").hide();
            $("#user-order-list").hide();
            $("#profile_information").show();
            $("#user-cancelled-order").show();
            $("#user_photo_update").hide();
        });
        $( "#profile_info" ).click(function() {
            $("#user-profile-info").show();
            $("#user-order-list").hide();
            $("#profile_information").hide();
            $("#user-cancelled-order").hide();
            $("#user_photo_update").show();
        });

        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
    </script>
@endpush
