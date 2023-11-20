@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Payments List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#paymentCreate">
                                    <i class="fas fa-plus"></i>
                                    Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons"
                           class="table table-striped table-bordered dt-responsive display nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User ID</th>
                            <th>Supplier ID</th>
                            <th>Payment Type ID</th>
                            <th>Total Paid</th>
                            <th>Total Due</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $key=>$payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment['user_id'] ?? '' }}</td>
                                <td>{{ $payment['supplier_id'] ?? '' }}</td>
                                <td>{{ $payment['payment_type_id'] ?? '' }}</td>
                                <td>{{ $payment['total_paid'] ?? '' }}</td>
                                <td>{{ $payment['total_due'] ?? '' }}</td>
                                <td>
                                    <button class="" data-toggle="modal" data-target="#paymentEdit{{ $payment->id }}"
                                            data-id="{{ $payment->id }}"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>

                            @include('partials.modals.payment.edit')

                        @endforeach
                        </tbody>
                    </table>
                </div>

                @include('partials.modals.payment.create')

            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        div.dataTables_wrapper div.dataTables_filter {
            width: 50% !important;
            float: right !important;
        }
    </style>
@endpush
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
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });
    </script>
@endpush
