@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">attribute List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#attributeCreate">
                                {{--                                <a href="#" class="text-white">--}}
                                <i class="fas fa-plus"></i>
                                Add
                                {{--                                </a>--}}
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
                                <th>Assigned Category</th>
                                <th>Name</th>
                                <th>Values</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($attributes as $key=>$attribute)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attribute->attrCategory->name ?? '' }}</td>
                                    <td>{{ $attribute['name'] ?? '' }}</td>
                                    <td>
                                        @foreach($attribute->attrValue as $attrDataValue)
                                            <span class="badge badge-success">
                                    {{$attrDataValue->value}}

                                </span>
                                        @endforeach

                                    </td>

                                    <td>{{ $attribute['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <a href="" class="m-1 pl-1 rounded bg-info text-white" data-toggle="modal" data-placement="top" title="Edit"
                                           data-target="#attributeEdit{{ $attribute->id }}" data-id="{{ $attribute->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if($attribute->status == 1)
                                            <a href="{{ route('attribute.inactive', $attribute->id) }}" class="pr-1 pl-1 rounded badge-danger"
                                               data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('attribute.active', $attribute->id) }}" class="pr-1 pl-1 rounded badge-success"
                                               data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                        @endif
                                        <a href="{{route('attributevalue.list', $attribute->id)}}" class="pr-1 pl-1 rounded badge-warning"
                                           data-toggle="tooltip" data-placement="top" title="Edit Value"><i class="fa fa-edit"></i>Edit Value</a>
                                    </td>
                                </tr>

                                @include('partials.modals.attribute.edit')

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="float-right">
                                        {{ $attributes->links() }}
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    @include('partials.modals.attribute.create')
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

