<div class="modal fade" id="paymenttypeEdit{{ $paymenttype->id }}" tabindex="-1" role="dialog"
     aria-labelledby="supplierEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('paymenttype.update', $paymenttype->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="supplierEditTitle">Edit Payment Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{ $paymenttype['type_name'] }}" id="example-text-input">
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
