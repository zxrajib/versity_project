@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">category List</h6>
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

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Parent Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category['name'] ?? '' }}</td>
                                    <td>{{ $category['parent_id'] == 0 ? $category['name'] : $categories->where('id', $category['parent_id'])->first()->name }}
                                    </td>
                                    <td>{{ \Illuminate\Support\Str::limit($category['description'] ?? '', 30) }}</td>
                                    <td>
                                        <div class="text-center m-auto">
                                            <img src="{{ asset('backend/img/category/' . $category->image) }}" class="img-responsive
                                            img-circle" style="width: 50px; margin: auto; " alt="category_image">
                                        </div>
                                    </td>
                                    <td>{{ $category['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <button class="" data-toggle="modal"
                                            data-target="#categoryEdit{{ $category->id }}"
                                            data-id="{{ $category->id }}">
                                            <a class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                        </button>
                                        @if ($category->status == 1)
                                            <a href="{{ route('category.inactive', $category->id) }}"
                                                class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip"
                                                data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('category.active', $category->id) }}"
                                                class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip"
                                                data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                        @endif
                                    </td>
                                </tr>

                                @include('partials.modals.category.edit')

                            @endforeach
                        </tbody>
                    </table>
                </div>

                @include('partials.modals.category.create')

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
