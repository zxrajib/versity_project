@extends('master')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="text-center w-100 mb-0 font-size-18">Welcome to Admin Panel</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Welcome </h5>
                                        <p>Admin Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4">
{{--                                        {{dd($customerData)}}--}}

{{--                                        <img src="{{$customerData->image ? asset($_ENV['APP_DEV'].'frontend/img/profile/'.$customerData->image) : asset($_ENV['APP_DEV'].'frontend/default.jpg') }}"--}}
{{--                                             alt=""--}}
{{--                                             class="img-thumbnail rounded-circle"--}}
{{--                                             onerror="this.src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'">--}}
                                    </div>
                                    <h5 class="font-size-15 text-truncate">{{ auth()->user()->user_name ?? '' }}</h5>
                                    <p class="text-muted mb-0 text-truncate">{{ auth()->user()->role == 1 ? 'Admin' : '' }}</p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">125</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">$1245</h5>
                                                <p class="text-muted mb-0">Revenue</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="{{route('profile.index')}}"
                                               class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                                        class="mdi mdi-arrow-right ml-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Monthly Earning</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="text-muted">This month</p>
                                    <h3>$34,252</h3>
                                    <p class="text-muted"><span class="text-success mr-2"> 12% <i
                                                    class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i
                                                    class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-4 mt-sm-0">
                                        <div id="radialBar-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <a class="text-muted font-weight-medium" href="{{route('order.list')
                                    }}">{{\Illuminate\Support\Str::plural('Order',$orders->count())}}
                                <div class="media">
                                    <div class="media-body">
                                        @if(\Illuminate\Support\Facades\Auth::id()==1)
                                        <h4 class="mb-0">{{count($orders)}} </h4>
                                        @else
                                            <h4 class="mb-0">{{count($orders)}} </h4>
                                        @endif
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <a class="text-muted font-weight-medium"
                                       href="{{route('product.list')}}">Products
                                        @if(\Illuminate\Support\Facades\Auth::id()==1)
                                    <h4 class="mb-0">{{count($products)}}
                                    @else

                                            <h4 class="mb-0">{{count($vendor_products)}}
                                    @endif

                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Average Price</p>
                                    <h4 class="mb-0">$16.2</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->


    <!-- end row -->

@endsection
