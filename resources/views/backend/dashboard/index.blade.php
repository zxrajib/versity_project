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
                                        <h4 class="mb-0">{{count($orders)}} </h4>
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
                                       href="{{route('product.list')}}">Products</a>
                                    <h4 class="mb-0">{{count($products)}}</h4>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Billing Name</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>View Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a></td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2541</a></td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa mr-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2542</a></td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    $384
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2543</a></td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    $412
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2544</a></td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $404
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa mr-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2545</a></td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $392
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-toggle="modal" data-target=".exampleModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
