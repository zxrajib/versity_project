<div class="modal fade" id="expenseEdit{{ $expense->id }}" tabindex="-1" role="dialog" aria-labelledby="expensecatEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('expense.update', $expense->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="expensecatEditTitle">Edit Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name"
                                   value="{{$expense->name}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="parent_id">Expense Categories :</label>
                        <div class="col-md-9">
                            <select id="parent_id" name="expense_category_id" class="form-control" size="1" required>
                                <option value="0">Please select</option>
                                @foreach($expenseCategories as $data)
                                    <option value="{{$data->id}}" {{$data->id == $expense->expense_category_id ? 'selected': null}}>{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Details</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="details"
                                   value="{{$expense->details}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" name="amount"
                                   value="{{$expense->amount}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Date</label>
                        <div class="col-md-9">
                            <input class="form-control" type="date" name="date"
                                   value="{{$expense->date}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Reference</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="reference"
                                   value="{{$expense->reference}}"
                                   id="example-text-input" required>
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
