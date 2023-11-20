@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Order List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>User Name</th>
                                <th>Order Number</th>
                                <th>Total Price</th>
                                <th>Payment Type</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key=>$order)
{{--                                {{dd($order)}}--}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->total+$order->delivery_charge-$order->total_discount }}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>
                                        @if($order->status == 0)
                                            <span class="badge badge-primary p-2">Pending</span>
                                        @elseif($order->status == 1)
                                            <span class="badge badge-info p-2">Processing</span>
                                        @elseif($order->status == 2)
                                            <span class="badge badge-success p-2">Collected</span>
                                        @elseif($order->status == 3)
                                            <span class="badge badge-danger p-2">Shipped</span>
                                        @elseif($order->status == 4)
                                            <span class="badge badge-danger p-2">Completed</span>
                                        @else
                                            <span class="badge badge-danger p-2">Cancel</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($order->payment_status == 0)
                                            <span class="badge badge-danger p-2">Unpaid</span>
                                        @else($order->payment_status == 1)
                                            <span class="badge badge-success p-2">Paid</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="" data-toggle="modal" data-target="#orderEdit{{ $order->id }}"
                                                data-id="{{ $order->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @include('partials.modals.order.edit')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            // table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });
    </script>

@endpush

@push('js')
    <script>
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
    </script>
@endpush
