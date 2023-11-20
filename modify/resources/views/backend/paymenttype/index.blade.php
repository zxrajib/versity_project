@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Supplier List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#paymenttypeCreate">
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
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($paymenttypes as $key=>$paymenttype)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $paymenttype['type_name'] ?? '' }}</td>
                                <td>{{ $paymenttype['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                <td>
                                    <button class="" data-toggle="modal" data-target="#paymenttypeEdit{{ $paymenttype->id }}"
                                            data-id="{{ $paymenttype->id }}"><i class="fas fa-edit"></i>
                                    </button>
                                    @if($paymenttype->status == 1)
                                        <a href="{{ route('paymenttype.inactive', $paymenttype->id) }}" class="pr-1 pl-1 rounded
                                    badge-danger" data-toggle="tooltip" data-placement="top" title="Inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ route('paymenttype.active', $paymenttype->id) }}"
                                           class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip"
                                           data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                    @endif
                                </td>
                            </tr>

                            @include('partials.modals.paymenttype.edit')

                        @endforeach
                        </tbody>
                    </table>
                </div>

                @include('partials.modals.paymenttype.create')

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
