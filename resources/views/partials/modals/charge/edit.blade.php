<div class="modal fade" id="chargeEdit{{ $charge->id }}" tabindex="-1" role="dialog" aria-labelledby="brandEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('charge.update', $charge->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandEditTitle">Edit Charge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Inside city</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="charge_in_city" value="{{ $charge->delivery_charge_in_city }}" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Outside city</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="charge_around_city" value="{{ $charge->delivery_charge_around_city }}" id="example-text-input">
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
