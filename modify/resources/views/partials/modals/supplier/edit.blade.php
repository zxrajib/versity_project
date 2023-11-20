<div class="modal fade" id="supplierEdit{{ $Supplier->id }}" tabindex="-1" role="dialog"
     aria-labelledby="supplierEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('supplier.update', $Supplier->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="supplierEditTitle">Edit supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{ $Supplier['name'] }}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="mail" value="{{ $Supplier['email'] }}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Phone No</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="phone" value="{{ $Supplier['phone'] }}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Address</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="address" value="{{ $Supplier['address'] }}"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Country</label>
                        <div class="col-md-9">
                            <select id="country" name="country" class="form-control" >
                                <option value="{{$Supplier->countryData->name}} selected ">Please select
                                    Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}"{{$country->id
                                    ==$Supplier->country_id?"selected":null}}
                                            >{{$country->name}}</option>
                                @endforeach
                            </select>

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
