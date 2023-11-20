<div class="modal fade" id="webControlEdit{{ $webControl->uuid }}" tabindex="-1" role="dialog"
     aria-labelledby="webControlEditTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="" method="post"
                  enctype="multipart/form-data">
                <form action="{{ route('webControl.update', $webControl->uuid) }}" method="post"
                  enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandEditTitle">Edit Unit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{--<div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{ $unit['name'] }}"
                                   id="example-text-input" required>
                        </div>
                    </div>

                </div>--}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
