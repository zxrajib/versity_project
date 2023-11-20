<div class="modal fade" id="footerEdit{{ $footer_content->uuid }}" tabindex="-1" role="dialog"
     aria-labelledby="footerEditTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('footer.update', $footer_content->uuid ) }}" method="post"
                  enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="footerEditTitle">Edit Footer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="email" value="{{ $footer_content->email ?? '' }}" id="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="phone" value="{{ $footer_content->phone ?? '' }}" id="phone" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-3 col-form-label">Address</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="address" value="{{ $footer_content->address ?? '' }}" id="address" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fb_link" class="col-md-3 col-form-label">Facebook Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="fb_link" value="{{ $footer_content->fb_link ?? '' }}" id="fb_link" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tw_link" class="col-md-3 col-form-label">Twitter Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="tw_link" value="{{ $footer_content->tw_link ?? '' }}" id="tw_link" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="google_link" class="col-md-3 col-form-label">Google Plus Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="google_link" value="{{ $footer_content->google_link ?? '' }}" id="google_link" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="insta_link" class="col-md-3 col-form-label">Instagram Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="insta_link" value="{{ $footer_content->insta_link ?? '' }}" id="insta_link" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="youtube_link" class="col-md-3 col-form-label">Youtube Link</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="youtube_link" value="{{ $footer_content->youtube_link ?? '' }}" id="youtube_link" />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="image" name="image">
                    </div>

                    <div class="col-md-3">
                        <input type="hidden" id="old_image" name="old_image" value="{{ $footer_content->image }}">
                        <img src="{{ asset('/backend/img/logo/' . $footer_content->image) }}" alt="Logo Image"
                             height="50px" width="50px">
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
