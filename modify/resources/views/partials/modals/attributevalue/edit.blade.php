<div class="modal fade" id="attributevalueEdit{{ $attributevalue->id }}" tabindex="-1" role="dialog" aria-labelledby="attributeEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('attributevalue.update', $attributevalue->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="attributeEditTitle">Edit attribute</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="value_name" value="{{ $attributevalue['value'] }}" id="example-text-input">
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
