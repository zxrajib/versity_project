<div class="modal fade" id="discountEdit{{ $discount->id }}" tabindex="-1" role="dialog" aria-labelledby="discountEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('discount.update', $discount->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="brandEditTitle">Edit Discount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name"
                                   value="{{$discount->name}}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Code</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="code"
                                   value="{{$discount->code}}"
                                   id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Type</label>
                        <div class="col-md-9">
                            <select class="form-control"  name="type" id="type" required>
                                <option>Discount type</option>
                                <option value="percentage" {{ $discount->type == "percentage" ? 'selected' : ''}}>Percentage</option>
                                <option value="amount" {{ $discount->type == "amount" ? 'selected' : ''}}>Amount</option>
                            </select>
{{--                            <input class="form-control" type="text" name="type" value="{{$discount->type}}" id="example-text-input" required>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="number" min="0" name="amount"
                                   value="{{$discount->value}}"
                                   id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Valid Till</label>
                        <div class="col-md-9">
                            <input class="form-control" type="date" name="valid_till" value="{{$discount->valid_till}}"
                                   id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image">
                            {{--                            <img src="{{asset('backend/img/category/'.$category->image)}}" class="w-25 h-50" alt="">--}}
                        </div>

                        <div class="col-md-3">
                            <input type="hidden" id="old_image" name="old_image" value="{{$discount->image}}">
                            <img src="{{asset('/backend/img/discount/'.$discount->image)}}" alt="Category Image"
                                 height="100px" width="100px">
                        </div>
                    </div>


{{--                    <div class="form-group row">--}}
{{--                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="file" id="image"  name="image">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <input type="hidden" id="old_image" name="old_image" value="{{$discount->image}}">--}}
{{--                            <img src="{{asset('/backend/img/discount/'.$discount->image)}}" alt="Slider Image"--}}
{{--                                 height="100px" width="100px">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
