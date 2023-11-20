<div class="modal fade" id="supplierCreate" tabindex="-1" role="dialog" aria-labelledby="supplierCreateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{route('supplier.store')}}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="supplierCreateTitle">Create supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" placeholder="Supplier Name"
                                   id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Email :</label>
                        <div class="col-md-9">
                        <input type="email" id="mail" name="mail" class="form-control"
                               placeholder="Please Enter Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="phone">Phone number:</label><br><br>
                        <div class="col-md-9">
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="123-45-678"
                               required><br><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="country">Country</label>
                        <div class="col-md-9">
                        <select id="country" name="country" class="form-control" >
                            <option value="0">Please select Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}" >{{$country->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label file_inp" for="address">Address</label>
                        <div class="col-md-9">
                                    <textarea id="address" name="address" rows="2" class="form-control"
                                              placeholder="Address.." required></textarea>
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
