<div class="modal fade" id="categoryEdit{{ $category->id }}" tabindex="-1" role="dialog"
    aria-labelledby="categoryEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="categoryEditTitle">Edit category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{ $category['name'] }}"
                                id="example-text-input">
                        </div>
                    </div>
                    {{-- {{ dd($category->parent_id) }} --}}
                    <div class="form-group row">
                        <label class="control-label col-3" for="parent_id">Parent ID :</label>
                        <select id="parent_id" name="parent_id" class="form-control col-9">
                            <option value="">Please select</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id }}"
                                    {{ $data->id == $category->parent_id ? 'selected' : '' }}>
                                    {{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description"
                                rows="5">{{ $category['description'] }}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="image">Image Upload :</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image">
                            {{-- <img src="{{asset('backend/img/category/'.$category->image)}}" class="w-25 h-50" alt=""> --}}
                        </div>

                        <div class="col-md-3">
                            <input type="hidden" id="old_image" name="old_image" value="{{ $category->image }}">
                            <img src="{{ asset('/backend/img/category/' . $category->image) }}" alt="Category Image"
                                height="100px" width="100px">
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
