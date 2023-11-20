@extends('master')
@section('content_without_container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="card-title">Product List</h6>
                        </div>
                        <div class="col-md-8 text-right">
                            @if(auth()->user()->user_type=='Admin')
                            <button class="btn btn-sm badge-info" onclick="return product_list(0)">
                                Product for Approve
                            </button>
                            <button class="btn btn-sm badge-pink" onclick="return product_list(1)">
                                Approved Product
                            </button>
                            <button class="btn btn-sm badge-danger" onclick="return product_list(2)">
                                Not Approved Product
                            </button>
                            <button class="btn btn-sm badge-warning" onclick="return product_list(3)">
                                Rejected Product
                            </button>
                            <button class="btn btn-sm badge-warning" onclick="return product_list(4)">
                                All Product
                            </button>
                            @else
                                <button class="btn btn-sm badge-success">
                                    <a href="{{ route('product_create') }}" class="text-white">
                                        <i class="fas fa-plus"></i>
                                        Add
                                    </a>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display
                    nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Category Name</th>
                                <th>Unit</th>
                                @if (auth()->user()->user_type == 'Admin')
                                    <th>Vendor</th>
                                @endif
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody class="append_data">
                            @foreach($products as $key=>$product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name ?? '' }}</td>
                                    <td>{{ $product->category->name ?? ''}}</td>
                                    <td>{{ $product->unit->name ?? '' }}</td>
                                    @if (auth()->user()->user_type == 'Admin')
                                        <td>{{ $product->vendor->user->name ?? ''}}</td>
                                    @endif
                                    <td>{{ $product['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        @if($product->status == 0)

                                            <span class="pr-1 pl-1 rounded badge-success" onclick="return status_change
                                                ({{$product->id}},1)"
                                                  data-toggle="tooltip"
                                                  data-placement="top" title="Approve">
                                            <i class="fas fa-check"></i>
                                        </span>
                                            <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change
                                                ({{$product->id}},2)"
                                                  data-toggle="tooltip"
                                                  data-placement="top" title="Not Approve">
                                            <i class="fas fa-minus-circle"></i>
                                        </span>
                                            <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change
                                                ({{$product->id}},3)"
                                                  data-toggle="tooltip" data-placement="top" title="Reject">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                        @elseif($product->status == 1)
                                            <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change
                                                ({{$product->id}},2)" data-toggle="tooltip" data-placement="top"
                                                  title="Not Approve">
                                            <i class="fas fa-minus-circle"></i>
                                        </span>
                                            <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change
                                                ({{$product->id}},3)" data-toggle="tooltip"
                                                  data-placement="top" title="Reject">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                            <span class="" data-toggle="modal"
                                                  data-target="#productEdit{{ $product->id }}"
                                                  data-id="{{ $product->id }}">
                                            <a class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip"
                                               data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                        </span>

                                        @elseif($product->status == 2)

                                            <span class="pr-1 pl-1 rounded badge-success" onclick="return status_change
                                                ({{$product->id}},1)" data-toggle="tooltip" data-placement="top" title="Approve">
                                            <i class="fas fa-check"></i>
                                        </span>
                                            <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change
                                                ({{$product->id}},3)" data-toggle="tooltip"
                                                  data-placement="top" title="Reject">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                        @elseif($product->status == 3)
                                            <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change
                                                ({{$product->id}},3)" data-toggle="tooltip"
                                                  data-placement="top" title="Reject"><i
                                                    class="fas fa-trash-alt"></i></span>
                                        @else
                                        @endif
                                    </td>
                                </tr>
                                @include('partials.modals.product.edit')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
        div.dataTables_wrapper div.dataTables_filter {
            width: 50% !important;
            float: right !important;
        }
    </style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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

        $('.summernote').summernote({
            height: 300
        }).on('summernote.change', function (we, contents, $editable) {
            $(this).html(description);
        });

        function product_list(id) {
            $.ajax({
                type: "GET",
                url: "{{route('ajax_product_list')}}",
                dataType: "json",
                data: {id: id},
                success: function (dataResults) {
                    let allData = JSON.parse(JSON.stringify(dataResults));
                    console.log('allData', allData);
                    $('.append_data').html('');
                    let data_all = '';
                    let description = '';
                    let status = '';
                    let change_status = '';
                    all_option = `<option value=""> Please select </option>`;
                    $.each(allData, function (index, data) {
                        description = data.description.substring(0, 30);
                        if (data.status == 0) {
                            status = 'Pending';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded
                                    badge-success" data-toggle="tooltip" onclick="return status_change(${data.id},1)"
                                    data-placement="top" title="Approve"><i
                                    class="fas fa-check"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change(${data.id},2)"
                                    data-toggle="tooltip" data-placement="top" title="Not Approve"><i
                                    class="fas fa-minus-circle"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 1) {
                            status = 'Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change(${data.id},2)"
                                    data-toggle="tooltip" data-placement="top" title="Not Approve"><i class="fas
                                    fa-minus-circle"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 2) {
                            status = 'Not Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-success" onclick="return status_change(${data.id},1)"
                                    data-toggle="tooltip" data-placement="top" title="Approve"><i class="fas
                                    fa-check"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 3) {
                            status = 'Not Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></a>

                                    `;
                        } else {
                            status = 'Reject';
                            change_status = ``;
                        }

                        data_all += `
                                    <tr>
                                        <td>` + index + 1 + `</td>
                                        <td>` + data.name + `</td>
                                        <td>` + data.category.name + `</td>
                                        <td>` + data.unit.name + `</td>
                                        <td>` + data.vendor.user.name + `</td>
                                        <td>` + status + `</td>
                                        <td>` + change_status + `</td>
                                </tr>`;

                    });
                    $('.append_data').append(data_all);
                }
            });
        }

        function status_change(id, status) {
            $.ajax({
                type: "GET",
                url: "{{route('ajax_product_status_change')}}",
                dataType: "json",
                data: {id: id, status: status},
                success: function (dataResults) {
                    let allData = JSON.parse(JSON.stringify(dataResults));
                    console.log('allData', allData);
                    $('.append_data').html('');
                    let data_all = '';
                    let description = '';
                    let status = '';
                    let change_status = '';
                    $.each(allData, function (index, data) {
                        description = data.description.substring(0, 30);
                        if (data.status == 0) {
                            status = 'Pending';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded
                                    badge-success" data-toggle="tooltip" onclick="return status_change(${data.id},1)"
                                    data-placement="top" title="Approve"><i
                                    class="fas fa-check"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change(${data.id},2)"
                                    data-toggle="tooltip" data-placement="top" title="Not Approve"><i
                                    class="fas fa-minus-circle"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 1) {
                            status = 'Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-info" onclick="return status_change(${data.id},2)"
                                    data-toggle="tooltip" data-placement="top" title="Not Approve"><i class="fas
                                    fa-minus-circle"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 2) {
                            status = 'Not Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-success" onclick="return status_change(${data.id},1)"
                                    data-toggle="tooltip" data-placement="top" title="Approve"><i class="fas
                                    fa-check"></i></span>
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></span>

                                    `;
                        } else if (data.status == 3) {
                            status = 'Not Approved';
                            change_status = `
                                    <span class="pr-1 pl-1 rounded badge-danger" onclick="return status_change(${data.id},3)" data-toggle="tooltip"
                                    data-placement="top" title="Reject"><i class="fas fa-trash-alt"></i></a>

                                    `;
                        } else {
                            status = 'Reject';
                            change_status = ``;
                        }

                        data_all += `
                                        <tr>
                                            <td>` + index + `</td>
                                            <td>` + data.name + `</td>
                                            <td>` + data.category.name + `</td>
                                            <td>` + data.unit.name + `</td>
                                            <td>` + data.vendor.user.name + `</td>
                                            <td>` + status + `</td>
                                            <td>` + change_status + `</td>
                                    </tr>`;

                    });
                    $('.append_data').append(data_all);
                }
            });
        }

        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here

    </script>
@endpush
