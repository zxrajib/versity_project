<div class="modal fade" id="sliderEdit{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="sliderEditTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('slider.update', $slider->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="sliderEditTitle">Edit slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="title" value="{{$slider->title}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="description" value="{{$slider->description}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Button Text</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="button_text" value="{{$slider->button_text}}"
                                   id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Button Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="button_link" value="{{$slider->button_link}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Priority</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="priority" value="{{$slider->priority}}"
                                   id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image"  name="image">
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" id="old_image" name="old_image" value="{{$slider->image}}">
                            <img src="{{asset('/backend/img/slider/'.$slider->image)}}" alt="Slider Image"
                                 height="100px" width="100px">
                        </div>
                    </div>
                </div>


             <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
        </div>
        </form>
    </div><!-- /.modals-content -->
</div><!-- /.modals-dialog -->
</div>
