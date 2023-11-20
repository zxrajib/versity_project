<div class="modal fade bd-example-modal-lg" id="productEdit{{ $product->id }}" tabindex="-1" role="dialog"
     aria-labelledby="productEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('product.update', $product->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="productCreateTitle">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" value="{{$product->name}}" type="text" name="name"
                                   placeholder="Artisanal kale"
                                   id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Select Category</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$product->category->name}}" readonly>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Select Unit</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$product->unit->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Brand</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$product->brand->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                              <textarea id="summernote" name="description" rows="2" class="form-control summernote" required >
                                  {{$product->description}}
                            </textarea>
                        </div>
                    </div>    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image">
                            {{-- <img src="{{asset('backend/img/category/'.$category->image)}}" class="w-25 h-50" alt=""> --}}
                        </div>
{{--                        {{dd($product)}}--}}

                        <div class="col-md-3">
                            <input type="hidden" id="old_image" name="old_image" value="{{ $product->image }}">
                            <img src="{{ asset('/backend/img/product/' . $product->image->first()->image) }}" alt="Product Image"
                                 height="100px" width="100px">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
