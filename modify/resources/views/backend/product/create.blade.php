@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Add Product</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#brandCreate">
                                <a href="{{route('product.list')}}" class="text-white">
                                    Product List
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @CSRF
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label">Product Name</label>
                                <input type="text" id="name" name="name" class="form-control" size="1" required>
                            </div>
                            <div class="col-md-2">
                                <label for="category" class="col-md-12 col-form-label">Category</label>
                                <select id="category_id" name="category_id" class="form-control" size="1" required>
                                    <option value="" selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="unit_id" class="col-md-12 col-form-label">Unit</label>
                                <select id="unit_id" name="unit_id" class="form-control" size="1" required>
                                    <option value="" selected> Select Unit</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="brand_id" class="col-md-12 col-form-label">Brand</label>
                                <select id="brand_id" name="brand_id" class="form-control" size="1" required>
                                    <option value="" selected>Select Band</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    <option value="1">others</option>
                                </select>
                                <div class="append_data">

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="description" class="col-md-12 col-form-label"> Description</label>
                                    <div class="col-md-12">
                                        <textarea id="summernote" name="description" cols="30" rows="10"></textarea>
                                        {{--                        <textarea id="summernote" name="description"></textarea>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-12 control-label file_inp" for="image">Image Upload :</label>
                            <div class="col-md-12">
                                <div id="image"></div>
                            </div>
                        </div>

                        <div class="form-group form-actions">
                            <div class="col-md-12 col-md-offset-6">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
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
    <script type="text/javascript">

        $(document).ready(function () {
            $("#brand_id").change(function () {
                let id = $(this).val();
                $('.append_data').html('');
                let data = '';
                if (id == 1) {
                    data = `<input type="text" id="other_brand" name="other_brand" class="form-control mt-1"
                    placeholder="Other Brand"
                    required>`;
                    $('.append_data').append(data);
                } else {
                    $('.append_data').append(data);
                }

            });

            $("#image").spartanMultiImagePicker({
                fieldName: 'image[]',
                rowHeight: '100px',
                maxCount: 20,
                groupClassName: 'col-md-2 col-sm-2 col-xs-4 float-left',
                allowedExt: 'png|jpg|jpeg|gif',
                dropFileLabel: 'Drop file here',
            });

            $('#summernote').summernote({
                placeholder: '',
                tabsize: 2,
                height: 100
            });

            function loadSelect2() {
                setTimeout(function () {
                    $(".select2").select2();
                }, 1000);
            }

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
