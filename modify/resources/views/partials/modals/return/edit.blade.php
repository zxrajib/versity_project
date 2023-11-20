<div class="modal fade" id="sliderEdit{{ $singleReturn->id }}" tabindex="-1" role="dialog" aria-labelledby="sliderEditTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{route('return.from.supplier', $singleReturn->id)}}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="sliderEditTitle">Return Form Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-12 col-form-label">Returned Quantity(From Supplier)</label>
                        <div class="col-md-12">
                            <input class="form-control" type="number" name="returned_quantity" max="{{$singleReturn->remaining_quantity}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="stockDetailsId" value="{{$singleReturn->stock_details_id}}">

             <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
        </div>
        </form>
    </div><!-- /.modals-content -->
</div><!-- /.modals-dialog -->
</div>
