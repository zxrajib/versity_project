@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Website Control</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#webControlCreate">
                                <a href="javascript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @forelse($webControls as $key=>$webControl)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $webControl['address'] ?? '' }}</td>
                                <td>{{ $webControl['email'] ?? '' }}</td>
                                <td>{{ $webControl['phone'] ?? '' }}</td>
                                <td>{{ $webControl['link'] ?? '' }}</td>

                                <td>
                                    <button class="" data-toggle="modal" data-target="#webcontrolEdit{{
                                    $webControl->id }}"
                                            data-id="{{ $webControl->uuid }}">
                                        <a href="#" class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                    </button>

                                </td>
                            </tr>

                            @include('partials.modals.webControl.edit')
                            
                            @empty
                            <p>No Data Found</p>

                        @endforelse
                        </tbody>
                    </table>
                </div>

                @include('partials.modals.webControl.create')

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
        $(document).ready(function (){
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container().appendTo( $('div.eight.column:eq(0)', table.table().container()) );
        });
    </script>
@endpush
