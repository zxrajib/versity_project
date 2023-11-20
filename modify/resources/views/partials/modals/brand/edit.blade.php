<div class="modal fade" id="brandEdit{{ $brand->id }}" tabindex="-1" role="dialog" aria-labelledby="brandEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('brand.update', $brand->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandEditTitle">Edit Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{ $brand->name }}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description"
                                      rows="5" required>{{ $brand['description'] }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image"  name="image">
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" id="old_image" name="old_image" value="{{$brand->image}}">
                            <img src="{{asset('/backend/img/brand/'.$brand->image)}}" alt="Slider Image"
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
