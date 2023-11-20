@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Supplier Payment List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#categoryCreate">
                                <a href="javaScript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered dt-responsive display nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Supplier Name</th>
                                <th>Chalan No</th>
                                <th>Purchase Amount</th>
                                <th>Pay Amount</th>
                                <th>Due Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($payments as $key => $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->supplierPayment->name ?? '' }}</td>
                                    <td>{{ $payment->chalan_no ?? '' }}</td>
                                    <td>{{ $payment->purchase_amount ?? '' }}</td>
                                    <td>{{ $payment->pay_amount ?? '' }}</td>
                                    <td>{{ $payment->due_amount ?? '' }}</td>
                                    <td>{{ $payment->created_at->format('d M Y') ?? '' }}</td>
                                    <td></td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="float-right">
                                        {{ $payments->links() }}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                @include('partials.modals.supplierpayment.create')

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
        $(document).ready(function() {
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });


        //Toastr Alert Message Start Here
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
        //Toastr Alert Message End Here

    </script>
@endpush
