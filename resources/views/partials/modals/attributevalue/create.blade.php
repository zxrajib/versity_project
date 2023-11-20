<div class="modal fade" id="attributevalueCreate" tabindex="-1" role="dialog" aria-labelledby="attributeCreateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('attributevalue.store',$attributevalue->attribute_id) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="attributeCreateTitle">Add Attribute Value</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Value</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="value_name" placeholder="Value Name"
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
@push('css')
    <style>
        .bootstrap-tagsinput{
            display: block;
            border-color: #27ae60;
        }

    </style>
@endpush
