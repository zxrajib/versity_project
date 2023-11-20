<div class="modal fade" id="paymentEdit{{ $payment->id }}" tabindex="-1" role="dialog"
     aria-labelledby="supplierEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('payment.update', $payment->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="supplierEditTitle">Edit Payment Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Total Paid</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="t_paid" value="{{ $payment['total_paid'] }}" id="example-text-input">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Total Due</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="t_due" value="{{ $payment['total_due'] }}" id="example-text-input">
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
