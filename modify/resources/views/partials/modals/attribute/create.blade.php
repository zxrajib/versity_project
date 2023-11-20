<div class="modal fade" id="attributeCreate" tabindex="-1" role="dialog" aria-labelledby="attributeCreateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('attribute.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="attributeCreateTitle">Create attribute</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Attribute Name"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="category_id">Category :</label>
                        <div class="col-md-9">
                        <select id="category_id" name="category_id" class="form-control" size="1" required>
                            @if(!empty($categoryData))
                                <option value="">Please Select Category</option>
                                @foreach($categoryData as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            @else
                                <option>Please Add Category First</option>
                            @endif
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="value">Values :</label>
                        <div class="col-md-9">
                            <input type="text" id="value" name="value" class="form-control" data-role="tagsinput"
                                   placeholder="Enter Values" required>
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
