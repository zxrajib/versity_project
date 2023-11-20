<div class="modal fade" id="webControlCreate" tabindex="-1" role="dialog" aria-labelledby="webControlCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('webControl.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="webControlCreateTitle">Create web Control</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Your Company Address</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="address" placeholder="Company Address"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="email" name="email" placeholder="Company Email"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Phone</label>
                        <div class="col-md-9">
                            <input class="form-control" type="tel" name="phone" placeholder="Company Phone No"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Link </label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="link" placeholder="Company Link"
                                   id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Upload Your Logo:</label>
                        <div class="col-md-9">
                            <input type="file" id="logo" name="logo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Upload Your Icon:</label>
                        <div class="col-md-9">
                            <input type="file" id="icon" name="icon" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
