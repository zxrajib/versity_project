@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Order Details</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row" style="color: white;">
                        <div class="col-md-12">
                            <div class="tile">
                                <section class="invoice">
                                    <div class="row mb-4">
                                        <div class="col-8">
                                            <h2 class="page-header"><i class="fa fa-globe"></i>{{$orderData->uuid ?? ''}}</h2>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-right">Date:{{$orderData->created_at->toFormattedDateString()}}</h5>
                                        </div>
                                    </div>
                                    <div class="row invoice-info">
                                        <div class="col-3">Placed By
                                            <address><strong> {{$orderData->name ?? ''}} </strong><br>Email: {{$orderData->email ?? ''}}</address>
                                        </div>
                                        <div class="col-4">Ship To
                                            <address><strong>{{ $orderData->address }}</strong></address>
                                        </div>
                                        <div class="col-5">
                                            <b>Order ID:</b> {{$orderData->uuid ?? ''}}<br>
                                            <b>Amount:</b> {{$orderData->total+$orderData->delivery_charge-$orderData->total_discount ?? ''}}<br>
                                            <b>Shipping Charge:</b> {{$orderData->delivery_charge ?? ''}}<br>
                                            <b>Payment Method:</b> {{$orderData->payment_type ?? ''}}<br>
                                            <b>Payment Status:</b>
                                            @if($orderData->payment_status==0)
                                                <span class="badge badge-danger">Pending</span>
                                            @else
                                                <span class="badge badge-success">Completed</span>
                                            @endif
                                            <br>
                                            <b>Order Status:</b>
                                            @if($orderData->order_status==0)
                                                <span class="badge badge-danger">Pending</span>
                                            @elseif($orderData->order_status==1)
                                                <span class="badge badge-success">Completed</span>
                                            @elseif($orderData->order_status==2)
                                                <span class="badge badge-info">Processing</span>
                                            @elseif($orderData->order_status==3)
                                                <span class="badge badge-danger">Canceled</span>
                                            @endif
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Product</th>
                                                    <th>Attribute</th>
                                                    <th>SKU #</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Discount</th>
                                                    <th class="text-center">Subtotal</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderData->orderDetail as $key=>$item)
                                                    <tr>
                                                        <td>{{ $key++ }}</td>
                                                        <td>{{ $item->product->name }}</td>
                                                        <td>
                                                            @foreach(json_decode($item->attr_value) as $value)
                                                                <span class="badge badge-success" style="background-color: {{ $value }}">
                                                                    <strong class="text-uppercase">{{ $value }}</strong>
                                                                </span>
                                                            @endforeach
                                                        </td>
                                                        <td>{{ $item->product->sku }}</td>
                                                        <td class="text-center">{{ $item->quantity }}</td>
                                                        <td class="text-center">{{ config('settings.currency_symbol') }}{{ round($item->price, 2) }}</td>
                                                        <td class="text-center">{{ config('settings.currency_symbol') }}{{ round($item->discount, 2) }}</td>
                                                        <td class="text-center">{{ config('settings.currency_symbol') }}{{ round($item->sub_total-$item->discount, 2) }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
