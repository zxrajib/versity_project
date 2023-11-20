@extends('frontend.master')
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
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div id="user_photo_update">
                <div class="text-center">
                    <picture>
                        @if($customerData)
                         <source srcset="{{$customerData->image}}" media="(min-width: 200px)">
                        <img src="{{asset('frontend/img/profile/'.$customerData->image ?? '')}}"
                             class="avatar img-circle img-thumbnail" onerror="this.src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'">
                        @endif
                    </picture>
                </div>
                <br>
                <div class="form-group row text-center">
                    <b>Upload/Update Photo</b>
                </div>
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('profile.photo.update', auth()->id())}}">
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

            @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                <ul class="list-group">
                    <li class="list-group-item text-body"><i class="fa fa-dashboard fa-1x"><b>Activity</b></i></li>
                    <li class="list-group-item text-right">
                        <a href="#" id="orderList">
                            <span class="pull-left"><strong>Orders List</strong></span>
                                {{count($orders) ?? ''}}
                        </a>
                    </li>
                    <li class="list-group-item text-right">
                        <a href="#" id="cancelledOrder">
                            <span class="pull-left"><strong>Cancelled Orders</strong></span>
                            {{count($cancelledOrders) ?? ''}}
                        </a>
                    </li>
                </ul>
            @endif

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
                    <li class="active">
                        <a data-toggle="tab" href="#info">Profile</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#changePassword">Change Password</a>
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
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2">Shipping Address</label>
                                    <div class="col-md-6">
                                    <textarea rows="2" cols="3" class="form-control" type="text" name="shipping_address"
                                              placeholder="Enter your shipping address."
                                              id="example-text-input" required>{{$customerData->shipping_address ?? ''}}</textarea>
                                    </div>
                                    {{--                                <label for="example-text-input" class="col-md-2">Billing Address</label>--}}
                                    {{--                                <div class="col-md-3">--}}
                                    {{--                                    <textarea class="form-control" type="text" name="billing_address"--}}
                                    {{--                                              placeholder="Enter your billing address."--}}
                                    {{--                                              id="example-text-input" required>{{$customerData->billing_address ?? ''}}</textarea>--}}
                                    {{--                                </div>--}}
                                </div>
                            @endif
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
            <div class="user-order-list" id="user-order-list"  style="display: none;">
                <div class="row">
                    @foreach($orders as $key=>$order)
                        <div class="col-md-12" style="padding-bottom: 15px;">
                            <div class="card" style="width: 100%;">
                                <div class="card-header" style="background: repeating-linear-gradient(357deg, #669e29, transparent 100px); border-bottom: 1px solid crimson;">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4>Order #{{$order->uuid}}</h4>
                                            <h5>Placed on {{$order->created_at->format('d-M-Y')}}</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-sm btn-primary"  data-toggle="modal"
                                                    data-target="#orderEditModal{{ $order->id }}" data-id="{{ $order->id }}">
                                                Manage
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12" style="background: white;">
                                        <div class="col-md-8">
                                            @foreach($order->orderDetail as $singleOrder)
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img
                                                            src="{{asset('/backend/img/product/'.$singleOrder->product->image)}}"
                                                            alt="Product Image"
                                                            class="img-responsive" width="50px !important"
                                                            height="50px !important">
                                                    </div>
                                                    <div class="col-md-4" style="padding: 0.8em;">
                                                        <h5>{{$singleOrder->product->name}}</h5>
                                                    </div>
                                                    <div class="col-md-4" style="padding: 0.8em;">
                                                        <span class="badge badge-info">Qty-{{$singleOrder->quantity}}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-4" style="padding: .8em;">
                                                @if($order->status == 0)
                                                    <span class="badge badge-danger">Pending</span>
                                                @endif
                                                @if($order->status == 1)
                                                    <span class="badge badge-success">Completed</span>
                                                @endif
                                                @if($order->status == 2)
                                                    <span class="badge badge-info">Processing</span>
                                                @endif
                                            </div>
                                            <div class="col-md-8" style="padding: 1em;">
                                                @if($order->status == 1)
                                                    <h6>Delivered on {{$order->updated_at->format('d-M-Y')}}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.partials.modals.userorder.order_edit')
                    @endforeach
                </div>
            </div>
            <div class="user-cancelled-order" id="user-cancelled-order" style="display: none;">
                <div class="row">
                    @foreach($cancelledOrders as $key=>$order)
                        <div class="col-md-12" style="padding-bottom: 15px;">
                            <div class="card" style="width: 100%;">
                                <div class="card-header" style="background: repeating-linear-gradient(357deg, #669e29, transparent 100px); border-bottom: 1px solid crimson;">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4>Order #{{$order->uuid}}</h4>
                                            <h5>Placed on {{$order->created_at->format('d-M-Y')}}</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-sm btn-primary"  data-toggle="modal"
                                                    data-target="#orderEditModal{{ $order->id }}" data-id="{{ $order->id }}">
                                                Manage
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12" style="background: white;">
                                        <div class="col-md-8">
                                            @foreach($order->orderDetail as $singleOrder)
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img
                                                            src="{{asset('/backend/img/product/'.$singleOrder->product->image)}}"
                                                            alt="Product Image"
                                                            class="img-responsive" width="50px !important"
                                                            height="50px !important">
                                                    </div>
                                                    <div class="col-md-4" style="padding: 0.8em;">
                                                        <h5>{{$singleOrder->product->name}}</h5>
                                                    </div>
                                                    <div class="col-md-4" style="padding: 0.8em;">
                                                        <span class="badge badge-info">Qty-{{$singleOrder->quantity}}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-4" style="padding: .8em;">
                                                @if($order->status == 3)
                                                    <span class="badge badge-danger">Cancelled</span>
                                                @endif
                                            </div>
                                            <div class="col-md-8" style="padding: 1em;">
                                                @if($order->status == 1)
                                                    <h6>Delivered on {{$order->updated_at->format('d-M-Y')}}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.partials.modals.userorder.order_edit')
                    @endforeach
                </div>
            </div>
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
