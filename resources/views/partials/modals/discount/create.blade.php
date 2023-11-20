<div class="modal fade" id="discountCreate" tabindex="-1" role="dialog" aria-labelledby="discountCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('discount.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandCreateTitle">Create Discount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Discount name" id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Code</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="code" placeholder="Discount code" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label">Type</label>
                        <div class="col-md-9">
                            <select class="form-control"  name="type" id="type" required>
                                <option>Discount type</option>
                                <option value="percentage">Percentage</option>
                                <option value="amount">Amount</option>
                            </select>
{{--                            <input class="form-control" type="text" name="type" placeholder="Discount type" id="example-text-input" required>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="amount"
                                   placeholder="Discount amount"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Valid Till</label>
                        <div class="col-md-9">
                            <input class="form-control" type="date" name="valid_till"
                                   id="example-text-input" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" required>
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
