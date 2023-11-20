@extends('master')
@section('content_without_container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Stock In</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal"
                                    data-target="#brandCreate">
                                <a href="{{ route('stock.list') }}" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Stock List
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('stock_in_store') }}" method="post" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="product_id" class="col-md-12 col-form-label">Product Name</label>
                                <select id="product_id" name="product_id" class="form-control" size="1"
                                        required onchange="return addDataRow()">
                                    <option value="">Select Product</option>
                                    @foreach($approve_product as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="row product_info">
                                    <div class="col">
                                        <label for="category" class="col-form-label">Category</label>
                                        <input type="text" value="" id="category" class="form-control" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="brand" class="col-form-label">Brand</label>
                                        <input type="text" value="" id="brand" class="form-control" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="unit" class="col-form-label">Unit</label>
                                        <input type="text" value="" id="unit" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row append_data">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-sm badge-success">
                                    <i class="fas fa-save"></i>
                                    ADD STOCK
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script type="text/javascript">
        function addDataRow() {
            let id = $("#product_id").val();
            let data_all = '';
            let total_stock = '';
            let plus_btn = '';
            $('.total_stock').remove();
            let append_data = $('.append_data').html('');
            let category = $('#category').val('');
            let brand = $('#brand').val('');
            let unit = $('#unit').val('');
            $.ajax({
                type: "GET",
                url: "{{route('ajax_product_approve')}}",
                dataType: "json",
                data: {id: id},
                success: function (dataResults) {
                    let allData = JSON.parse(JSON.stringify(dataResults));

                    category.val(allData['productDetails'].category.name);
                    brand.val(allData['productDetails'].brand.name);
                    unit.val(allData['productDetails'].unit.name);
                    if (allData['productDetails'].stock_product) {
                        $('.product_info').append(`
                                <div class="col total_stock">
                                    <label for="stock" class="col-form-label">Total Stock</label>
                                    <input type="text" value="` + allData['productDetails'].stock_product.total_in + `" id="stock" class="form-control" readonly>
                                </div>`);
                    } else {
                        $('.total_stock').remove();
                    }

                    let attr_col = '';
                    let new_attr_col = '';
                    let before_without_attr_qty = '';
                    let before_without_attr_price = '';
                    let before_without_attr_discount = '';

                    let makeClass = Math.random().toString(36).substr(2, 10);

                    $.each(allData['productDetails'].category.attribute, function (index, attributeData) {
                        let options = `<option value="">Select ` + attributeData.name + `</option>`;
                        $.each(attributeData.attr_value, function (id, attributeValueData) {
                            options += `<option value="` + attributeValueData.id + `">` + attributeValueData
                                .value + `</option>`;
                        });

                        attr_col += `
                        <div class="col">
                            <label for="attribute_id" class="col-md-12 col-form-label">` + attributeData
                            .name + `</label>
                            <select name="attr_val_id[` + attributeData.id + `][]" class="form-control attribute_${makeClass}" onchange="return stock_data('${makeClass}')"
                                    required>
                                ` + options + `
                            </select>
                        </div>`;
                        new_attr_col += `
                        <div class="col">
                            <select name="attr_val_id[` + attributeData.id + `][]" class="form-control attribute_${makeClass}"  onchange="return stock_data('${makeClass}')"
                                    required>
                                ` + options + `
                            </select>
                        </div>`;
                    });
                    // console.log('test', allData['productDetails'].stock_product)
                    // console.log('test', allData['productDetails'].stock_product)
                    if ($.isEmptyObject(allData['productDetails'].category.attribute)){
                        if (allData['productDetails'].stock_product == null){
                            before_without_attr_qty = ``;
                            before_without_attr_price = ``;
                            before_without_attr_discount = ``;
                        }else {
                            before_without_attr_qty = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+allData['productDetails'].stock_product.stock_details['0'].quantity+`" class="form-control bg-soft-info" readonly />
                                                    </div>`;
                            before_without_attr_price = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+allData['productDetails'].stock_product.stock_details['0'].price+`" class="form-control bg-soft-info" readonly />
                                                    </div>`;
                            before_without_attr_discount = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+allData['productDetails'].stock_product.stock_details['0'].discount+`" class="form-control bg-soft-info" readonly />
                                                    </div>`;
                        }
                    }else {
                        before_without_attr_qty = ``;
                        before_without_attr_price = ``;
                        before_without_attr_discount = ``;
                    }

                    if (allData['productDetails'].category.attribute.length > 0) {
                        plus_btn = `
                                    <div class="col-md-1 text-center">
                                        <label for="discount" class="col-form-label w-100">Action</label>
                                        <button type="button"
                                        class="btn btn-sm badge-success addMore" onclick="return addStockRow()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>`;
                    } else {
                        plus_btn = ''
                    }

                    data_all = `
                                <div id="main_div" class="col-md-12">
                                    <input type="hidden" name="stock_details_id[]" id="stock_details_${makeClass}" value="" />
                                    <div id="${makeClass}" class="row">
                                        ` + attr_col + `
                                        <div class="col">
                                            <label for="qty" class="col-form-label">Qty</label>
                                            <div id="qty_${makeClass}" class="row">
                                                `+before_without_attr_qty+`
                                                <div class="col">
                                                    <input type="number" name="qty[]" min="0" value="" id="qty" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <label for="price" class="col-form-label">Price</label>
                                            <div id="price_${makeClass}" class="row">
                                                `+before_without_attr_price+`
                                                <div class="col">
                                                    <input type="number" step="any" min="0" name="price[]" value="" id="price"
                                                    class="form-control" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <label for="discount" class="col-form-label">Discount</label>
                                            <div id="discount_${makeClass}" class="row">
                                                `+before_without_attr_discount+`
                                                <div class="col">
                                                    <input type="number" name="discount[]" step="any" min="0" value="0" id="discount" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        ` + plus_btn + `
                                    </div>
                                </div>`;

                    append_data.append(data_all);
                }
            });

        };
        function addStockRow(){
            let id = $("#product_id").val();
            let data_all = '';
            let total_stock = '';
            $.ajax({
                type: "GET",
                url: "{{route('ajax_product_approve')}}",
                dataType: "json",
                data: {id: id},
                success: function (dataResults) {
                    let allData = JSON.parse(JSON.stringify(dataResults));
                    let attr_col = '';
                    let new_attr_col = '';

                    let makeClass = Math.random().toString(36).substr(2, 10);
                    // console.log('data', allData['productDetails'])

                    if (allData['productDetails'].category.attribute.length > 0) {
                        $.each(allData['productDetails'].category.attribute, function (index, attributeData) {
                            let options = `<option value="">Select ` + attributeData.name + `</option>`;
                            $.each(attributeData.attr_value, function (id, attributeValueData) {
                                options += `<option value="` + attributeValueData.id + `">` + attributeValueData
                                    .value + `</option>`;
                            });

                            attr_col += `
                            <div class="col">
                                <select name="attr_val_id[` + attributeData.id + `][]" class="form-control attribute_${makeClass}" onchange="return stock_data('${makeClass}')"
                                        required>
                                    ` + options + `
                                </select>
                            </div>`;
                            new_attr_col += `
                            <div class="col">
                                <select name="attr_val_id[` + attributeData.id + `][]" class="form-control attribute_${makeClass}"  onchange="return stock_data('${makeClass}')"
                                        required>
                                    ` + options + `
                                </select>
                            </div>`;
                        });
                    }

                    data_all = `
                                <div id="main_div" class="col-md-12 mt-1">
                                    <input type="hidden" name="stock_details_id[]" id="stock_details_${makeClass}" value="" />
                                    <div id="${makeClass}" class="row">
                                        ` + attr_col + `
                                        <div class="col">
                                            <div id="qty_${makeClass}" class="row">
                                                <div class="col">
                                                    <input type="number" name="qty[]" min="0" value="" id="qty" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div id="price_${makeClass}" class="row">
                                                <div class="col">
                                                    <input type="number" step="any" min="0" name="price[]" value="" id="price"
                                                    class="form-control" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div id="discount_${makeClass}" class="row">
                                                <div class="col">
                                                    <input type="number" name="discount[]" step="any" min="0" value="0" id="discount" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <button type="button" onclick="return remove_row('${makeClass}')"
                                            class="btn
                                            btn-sm badge-danger">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>`;

                    $('.append_data').append(data_all);
                }
            });
        }


        function remove_row(id) {
            $('#' + id).remove();
        }

        function stock_data(id) {
            // console.log('stock_data', id)
            let attr_val_array = [];
            $('.attribute_' + id).each(function () {
                let attr_val = $(this).val();
                if (attr_val) {
                    attr_val_array.push(attr_val);
                } else {
                    attr_val_array.push('0');
                }
            });

            let product_id = $('#product_id').val();

            $.ajax({
                type: "GET",
                url: "{{route('ajax_stock_details_approve')}}",
                dataType: "json",
                data: {id: product_id, attr_val: attr_val_array},
                success: function (dataResults) {
                    let stockDetailsAllData = JSON.parse(JSON.stringify(dataResults));
                    let append_qty = $('#qty_'+id).html('');
                    let append_price = $('#price_'+id).html('');
                    let append_discount = $('#discount_'+id).html('');
                    // console.log('stock', stockDetailsAllData)
                    if ($.isEmptyObject(stockDetailsAllData)){
                        new_data_col_qty = `
                                                    <div class="col">
                                                        <input type="number" name="qty[]" min="0" value="" id="qty" class="form-control" required />
                                                    </div>`;
                        new_data_col_price = `
                                                    <div class="col">
                                                        <input type="number" step="any" min="0" name="price[]" value="" id="price"
                                                       class="form-control" required />
                                                    </div>`;
                        new_data_col_discount = `
                                                    <div class="col">
                                                        <input type="number" name="discount[]" step="any" min="0" value="0" id="discount" class="form-control" />
                                                    </div>`;
                        append_qty.append(new_data_col_qty);
                        append_price.append(new_data_col_price);
                        append_discount.append(new_data_col_discount);
                        $('#stock_details_'+id).val('');
                    }else {

                        $('#stock_details_'+id).val(stockDetailsAllData.id);
                        let new_data_col_qty = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+stockDetailsAllData.quantity+`" class="form-control bg-soft-info" readonly />
                                                    </div>
                                                    <div class="col m-0 p-0">
                                                        <input type="number" name="qty[]" min="0" value="`+stockDetailsAllData.quantity+`" id="qty" class="form-control" required />
                                                    </div>`;
                        let new_data_col_price = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+stockDetailsAllData.price+`" class="form-control bg-soft-info" readonly />
                                                    </div>
                                                    <div class="col m-0 p-0">
                                                        <input type="number" step="any" min="0" name="price[]" value="`+stockDetailsAllData.price+`" id="price"
                                                       class="form-control" required />
                                                    </div>`;
                        let new_data_col_discount = `
                                                    <div class="col m-0 p-0">
                                                        <input type="text" value="`+stockDetailsAllData.discount+`" class="form-control bg-soft-info" readonly />
                                                    </div>
                                                    <div class="col m-0 p-0">
                                                        <input type="number" name="discount[]" step="any" min="0" value="`+stockDetailsAllData.discount+`" id="discount" class="form-control" />
                                                    </div>`;
                        append_qty.append(new_data_col_qty);
                        append_price.append(new_data_col_price);
                        append_discount.append(new_data_col_discount);
                    }
                }
            });
        }


        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here

    </script>
@endpush
