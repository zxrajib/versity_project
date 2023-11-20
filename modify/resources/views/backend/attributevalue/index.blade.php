@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Attribute Value List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#attributevalueCreate">
                                <i class="fas fa-plus"></i>
                                Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Values</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($attributevalues as $key=>$attributevalue)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attributevalue['value'] ?? '' }}</td>
                                    <td>{{ $attributevalue['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <a href="" class="m-1 pl-1 rounded bg-info text-white" data-toggle="modal" data-placement="top" title="Edit"
                                           data-target="#attributevalueEdit{{ $attributevalue->id }}" data-id="{{ $attributevalue->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if($attributevalue->status == 1)
                                            <a href="{{ route('attributevalue.inactive', $attributevalue->id) }}"
                                               class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip" data-placement="top" title="Inactive"><i
                                                    class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('attributevalue.active', $attributevalue->id) }}"
                                               class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip" data-placement="top" title="Active"><i
                                                    class="fas fa-check"></i></a>
                                        @endif
                                    </td>
                                </tr>

                                @include('partials.modals.attributevalue.edit')

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @include('partials.modals.attributevalue.create')
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
                ]
            });
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });
    </script>
@endpush
