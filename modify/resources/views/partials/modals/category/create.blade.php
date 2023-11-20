<div class="modal fade" id="categoryCreate" tabindex="-1" role="dialog" aria-labelledby="categoryCreateTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="categoryCreateTitle">Create category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Category Name"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="parent_id">Parent ID :</label>
                        <div class="col-md-9">
                            <select id="parent_id" name="parent_id" class="form-control" size="1">
                                <option value="0">Please select</option>
                                @foreach($categories as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
