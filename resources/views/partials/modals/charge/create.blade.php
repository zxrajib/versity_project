<div class="modal fade" id="chargeCreate" tabindex="-1" role="dialog" aria-labelledby="chargeCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('charge.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandCreateTitle">Create Delivery Charge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Inside city</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="charge_in_city"
                                   placeholder="Delivery charge in city"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Outside city</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="charge_around_city"
                                   placeholder="Delivery charge around city"
                                   id="example-text-input" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
