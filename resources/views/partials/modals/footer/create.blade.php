<div class="modal fade" id="footerCreate" tabindex="-1" role="dialog" aria-labelledby="footerCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="footerCreateTitle">Create Footer Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="email" placeholder="Email (EX: laradev.sumon@gmail.com)" id="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="phone" placeholder="Phone (EX: 01858721723)" id="phone" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-3 col-form-label">Address</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="address" placeholder="Address (EX: Uttara, Dhaka)" id="address" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fb_link" class="col-md-3 col-form-label">Facebook Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="fb_link" placeholder="" id="fb_link" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tw_link" class="col-md-3 col-form-label">Twitter Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="tw_link" placeholder="" id="tw_link" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="google_link" class="col-md-3 col-form-label">Google Plus Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="google_link" placeholder="" id="google_link" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="insta_link" class="col-md-3 col-form-label">Instagram Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="insta_link" placeholder="" id="insta_link" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="youtube_link" class="col-md-3 col-form-label">Youtube Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="youtube_link" placeholder="" id="youtube_link" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" required>
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
