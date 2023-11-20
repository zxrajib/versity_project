@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Brand List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#brandCreate">
                                <a href="javaScript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered display nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $key=>$brand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($brand->description ?? '', 30) }}</td>
                                <td>
                                    <div class="text-center m-auto">
                                        <img src="{{asset('backend/img/brand/'.$brand->image)}}" class="img-responsive
                                    img-circle" style="width: 50px; margin: auto; " alt="brand_image">
                                    </div>

                                </td>


                                <td id="{{ $brand->id }}">
                                <span class="badge {{ ($brand->status == 1 ? 'badge-success' : 'badge-danger') ?? '' }} p-1">
                                    {{ ($brand->status == 1 ? 'Active' : 'Inactive') ?? '' }}
                                </span>
                                </td>


                                {{-- <td>{{ $brand->status === 0 ? 'Inactive' : 'Active' }}</td> --}}
                                <td>
                                    <button class="" data-toggle="modal" data-target="#brandEdit{{ $brand->id }}" data-id="{{ $brand->id }}">
                                        <a href="javaScript:void(0)" class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip" data-placement="top"
                                           title="Edit"><i class="fas fa-edit"></i></a>
                                    </button>

                                    <a id="btn{{ $brand->id }}" href="#" onclick="return status({{ $brand->id }})"
                                       class="btn {{ $brand->status == 1 ? 'btn-danger' : 'btn-success' }} btn-sm px-1 py-0">
                                        <i class="fa {{ $brand->status == 0 ? 'fa-check-square' : 'fa-minus-square' }}"></i>
                                    </a>


                                    {{-- @if($brand->status == 1)
                                        <a href="{{ route('brand.inactive', $brand->id) }}" class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ route('brand.active', $brand->id) }}" class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                    @endif --}}
                                </td>
                            </tr>

                            @include('partials.modals.brand.edit')

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="float-right">
                                    {{ $brands->links() }}
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                @include('partials.modals.brand.create')

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
        //DataTable Start here
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
        //DataTable End here
        //Status Change Without Load Start Here
        function status(id) {
            let url = "{{url('/brand-status')}}";
            let callBackUrl = url + '/' + id;
            $.get(callBackUrl, (data) => {
                if (data != 'FAILED') {
                    $("#" + id).html('');
                    if (data.status == 0) {
                        $("#btn" + id).html(`<i class="fa ${data.status == 0 ? 'fa-check-square' : 'fa-minus-square'}"></i>`);
                        toastr.success('Brand Inactive Successfully', 'Brand Setup');
                        let statusClass = data.status == 0 ? 'badge-danger' : 'badge-success';
                        let statusText = data.status == 0 ? 'Inactive' : 'Active';
                        let status = `<span class="badge ${statusClass} p-1">${statusText}</span>`;
                        $("#" + id).html(status);

                    } else {
                        $("#btn" + id).attr('class', '');
                        $("#btn" + id).addClass(`btn ${data.status == 1 ? 'fa-minus-square' : 'fa-check-square'}"btn-sm px-1
                         py-0`);
                        toastr.success('Brand Activated Successfully', 'Brand Setup');
                        let statusClass = data.status == 1 ? 'badge-success' : 'badge-danger';
                        let statusText = data.status == 1 ? 'Active' : 'Inactive';
                        let status = `<span class="badge ${statusClass} p-1">${statusText}</span>`;
                        $("#" + id).html(status);

                    }
                }
            });
        }

        //Status Change Without Load End Here
        // Image Upload Start Here
        const inputElement = document.querySelector('input[id="avatar"]');
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server:
                {
                    url: '/upload',
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    }
                }

        });
        // Image Upload End Here
        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here
    </script>
@endpush
