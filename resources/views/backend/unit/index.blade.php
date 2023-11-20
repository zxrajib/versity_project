@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">unit List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#unitCreate">
                                <a href="#" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dt-responsive display nowrap"
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
                            @foreach($units as $key=>$unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unit['name'] ?? '' }}</td>
                                    <td>{{ $unit['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <button class="" data-toggle="modal" data-target="#unitEdit{{ $unit->id }}"
                                                data-id="{{ $unit->id }}">
                                            <a href="#" class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip" data-placement="top"
                                               title="Edit"><i class="fas fa-edit"></i></a>
                                        </button>
                                        @if($unit->status == 1)
                                            <a href="{{ route('unit.inactive', $unit->id) }}" class="pr-1 pl-1 rounded badge-danger"
                                               data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('unit.active', $unit->id) }}" class="pr-1 pl-1 rounded badge-success"
                                               data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                        @endif
                                    </td>
                                </tr>

                                @include('partials.modals.unit.edit')

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="float-right">
{{--                                        {{ $units->links() }}--}}
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    @include('partials.modals.unit.create')

                </div>
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
                ],
                paging: false,
            });
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });


        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here
    </script>


@endpush
