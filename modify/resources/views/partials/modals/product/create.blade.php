<div class="modal fade bd-example-modal-lg" id="productCreate" tabindex="-1" role="dialog" aria-labelledby="productCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="productCreateTitle">Create Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Product Name"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Select Category</label>
                        <div class="col-md-9">
                            <select id="category_id" name="category_id" class="form-control" size="1" required>
                                <option value="">Please select Category</option>
                                @foreach($categoryData as $data)
                                    <option
                                        value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Select Unit</label>
                        <div class="col-md-9">
                            <select id="unit_id" name="unit_id" class="form-control" size="1" required>
                                <option value="">Please select Unit</option>
                                @foreach($unitData as $data)
                                    <option
                                        value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach

                            </select >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Brand</label>
                        <div class="col-md-9">
                            <select id="brand_id" name="brand_id" class="form-control" size="1" required>
                                <option value="">Please Select Brand</option>
                                @foreach($brandData as $data)
                                    <option
                                        value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea id="summernote" name="description" rows="2" class="form-control summernote"
                                      placeholder="Description...">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Image</label>
                        <div class="col-md-9">
                            <input id="gallery-photo-add" type="file" name="image" multiple required>
                            <div class="input-images"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </div>
            </form>

        </div>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

