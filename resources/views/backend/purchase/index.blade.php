@extends('master')
@section('content')

    <form action="{{ route('purchase.store') }}" method="post" enctype="multipart/form-data">
        @CSRF
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="brandCreateTitle">Add Product</h5>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <div class="row">
                    <label for="name" class="col-md-12 col-form-label">Product Name</label>
                    <div class="col-md-12">
                        <input type="text" id="name" name="name" class="form-control" size="1" required>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <label for="quantity" class="col-md-12 col-form-label"> Quantity</label>
                    <div class="col-md-12">
                        <input type="number" min="0" id="quantity" name="quantity" class="form-control" size="1" required>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <label for="price" class="col-md-12 col-form-label"> Price</label>
                    <div class="col-md-12">
                        <input type="number" min="0" id="price" name="price" class="form-control" size="1" required>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <label for="discount" class="col-md-12 col-form-label">Discount</label>
                    <div class="col-md-12">
                        <input type="number" min="0" id="discount" name="discount" class="form-control" size="1" required>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <label for="price" class="col-md-12 col-form-label"> Price (After Discount)</label>
                    <div class="col-md-12">
                        <input type="number" id="price" name="price" class="form-control" size="1" readonly required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label for="brand_id" class="col-md-12 col-form-label">Brand</label>
                <select id="brand_id" name="brand_id" class="form-control" size="1" required>
                    <option value="" selected>Select Band</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="unit_id" class="col-md-3 col-form-label">Unit</label>
                <select id="unit_id" name="unit_id" class="form-control" size="1" required>
                    <option value="" selected> Select Unit</option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="category" class="col-md-12 col-form-label">Category</label>
                <select id="category_id" name="category_id" class="form-control" size="1" required>
                    <option value="" selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row append_data">
        </div>
        <div class="form-group row">

            <div class="col-md-12">
                <div class="row">
                    <label for="description" class="col-md-12 col-form-label"> Description</label>
                    <div class="col-md-12">
                        <textarea class="summernote" name="description"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
            <div class="col-md-9">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3">Upload Image</label>
                        <div id="image"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group form-actions">
            <div class="col-md-12 col-md-offset-6">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
            </div>
        </div>
    </form>

@endsection
@push('js')
    <script>
        $("#image").spartanMultiImagePicker({
            fieldName: 'fileUpload[]',
            rowHeight: '100 px',
            maxCount: 5,
            groupClassName: 'col-md-2 col-sm-2 col-xs-4',
            allowedExt: 'png|jpg|jpeg|gif',
            dropFileLabel: 'Drop file here',
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.summernote').summernote();
        });
    </script>

@endpush
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
        .gallery img {
            width: 20%;
            padding: 20px 5px;
            height: 250px;
        }

    </style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        << << << < HEAD

        $(document).ready(function() {
                    $("#category_id").change(function() {
                                ===
                                ===
                                =
                                $(document).ready(function() {
                                    $("#category_id").change(function() {
                                        >>>
                                        >>>
                                        >
                                        sumon
                                        $('.append_data').html('');
                                        let id = $(this).val();
                                        let data_all = '';
                                        $.ajax({
                                            type: "GET",
                                            url: "{{ route('search_productAttribute') }}",
                                            dataType: "json",
                                            data: {
                                                id: id
                                            },
                                            success: function(dataResults) {
                                                let allData = JSON.parse(JSON.stringify(
                                                    dataResults));
                                                let all_option = '';
                                                let all_label = '';
                                                all_option =
                                                    `<option value=""> Please select </option>`;
                                                $.each(allData, function(id, dataAttr) {
                                                    $.each(dataAttr.attr_value,
                                                        function(index,
                                                            data) {
                                                            console.log(
                                                                'data',
                                                                data);
                                                            all_option +=
                                                                `<option value="` +
                                                                data.id +
                                                                `">` + data
                                                        }
                                                    );
                                                    /*all_label += `<label for="attribute_id" class="col-md-3 col-form-label">` + dataAttr.name + `</label>`*/
                                                    data_all
                                                        += `
                                        <div class="col">
                                            <label for="attribute_id" class="col-md-3 col-form-label">` + dataAttr
                                                        .name + `</label>
                                            <select id="attribute_id" name="attribute_id" class="form-control" size="1" required>
                                                ` + all_option + `
                                            </select>
                                        </div>`;

                                                });
                                                console.log(
                                                    data_all
                                                );

                                                $('.append_data')
                                                    .append(
                                                        data_all
                                                    );
                                            }
                                        });
                                    });
                                });

                                /*$(document).ready(function () {
                            $("#attribute_id").change(function () {
                                $('#attribute_id').html('');
                                let id = $(this).val();
                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('search_productAttribute') }}",
                                    dataType: "json",
                                    data: {id: id},
                                    success: function (dataResults) {
                                        let allData = JSON.parse(JSON.stringify(dataResults));
                                        let all_option = '';
                                        all_option = `<option value="" selected> Please select Attribute </option>`;
                                        $.each(allData, function (id, data) {
                                            all_option += `<option value="` + data.id + `">` + data.name + `</option>`;
                                        });
                                        $('#attribute_id').append(all_option);
                                    }
                                });
                            });
                        });*/


                                //Toastr Alert Message Start Here
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                        toastr.error("{{ $error }}");
                                    @endforeach
                                @endif
                                //Toastr Alert Message End Here
    </script>
@endpush
