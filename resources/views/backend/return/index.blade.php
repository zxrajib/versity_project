@extends('master')
@section('content_without_container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Return Product To Supplier</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('return.list')}}">
                                <button class="btn btn-sm btn-info float-right">
                                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                                    Return List
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('return.submit')}}" method="post">

                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-12">
                                    <div class="row">
                                        @csrf

                                        <div class="col-md-6" id="barcode_div">
                                            <input class="form-control" type="number" name="barcode" id="barcode" pattern=".{12}"
                                                   placeholder="Barcode number(Must Be 12 Number)" autofocus />
                                        </div>

                                        <div class="col-md-6">
                                            <select name="supplier_id" id="supplier_id" class="form-control select2"
                                                    data-live-search="true">
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12" id="warningDiv" style="margin-top: 2em;"></div>
                                <div class="col-md-12" id="purchaseDetailsDiv" style="margin-top: 2em; display: none;">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="productName">Product Name</label>
                                            <input class="form-control" type="text" name="productName" id="productName" readonly required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="productAttr">Variant</label>
                                            <input class="form-control" type="text" name="productAttr" id="productAttr" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="productPrice">Price</label>
                                            <input class="form-control" type="text" name="productPrice" id="productPrice" readonly required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="productStock">Total Stock</label>
                                            <input class="form-control" type="text" name="productStock" id="productStock" readonly required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="returnQuantity">Return Quantity</label>
                                            <input class="form-control" type="text" name="returnQuantity" id="returnQuantity" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="totalAmount">Amount</label>
                                            <input class="form-control" type="text" name="totalAmount" id="totalAmount" readonly required>
                                        </div>
                                        <input type="hidden" name="stockDetailsId" id="stockDetailsId">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top: 2em;">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary float-right">
                                        <img src="https://img.icons8.com/cute-clipart/16/000000/save.png"/>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .select2-results__options {
            color: black;
        }

        .select2-container .select2-selection--single {
            height: 34px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #ccc !important;
            border-radius: 0px !important;
        }

        span.select2-selection.select2-selection--single {
            background: #2a3042;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: white;
        }

        div.dataTables_wrapper div.dataTables_filter {
            width: 50% !important;
            float: right !important;
        }
    </style>
@endpush
@push('js')
    <script>
        $('.select2').select2();
        $('#product_div').hide();
        $(document).ready(function (){
           $('#search_option').on('change', function (){
              let id = $(this).val();
              if (id == 0){
                  $('#barcode_div').show();
                  $('#product_div').hide();
              }else if (id == 1) {
                  $('#barcode_div').hide();
                  $('#product_div').show();
              }
           });
        });

        $(document).ready(function () {

            $('#barcode').focusout(function (){
              $('#supplier_id').html('');
            });
            $('#barcode').focusout(function (){
                let barcode = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{route('search.supplier.by.product.ajax')}}",
                    dataType: "json",
                    data: {barcode: barcode},
                    success: function (dataResult) {
                        let data_all = '';
                        let allData = JSON.parse(JSON.stringify(dataResult));

                        if ($.isEmptyObject( allData )){
                            $('#warningDiv').show();
                            $('#purchaseDetailsDiv').hide();
                            $('#warningDiv').html('<p class="btn btn-danger text-center w-100" style="font-size: 20px;">Product Not Found. Insert Barcode Number Carefully.</p>')


                        }else {
                            let supplier_options = `<option value="" disabled selected>Choose Supplier</option>`;
                            // console.log(allData['supplierList'])

                            $.each( allData['supplierList'], function( key, value ) {
                                supplier_options +=`<option value="`+value.supplier_id+`">`+value.supplier.name+`</option>`;

                            });
                            // console.log(supplier_options)
                            $('#supplier_id').append(supplier_options);
                            let supplierId = $('#supplier_id').val();
                            console.log(supplierId)
                            if (supplierId == null){
                                $('#warningDiv').show();
                                $('#purchaseDetailsDiv').hide();
                                $('#warningDiv').html('<p class="btn btn-danger text-center w-100" style="font-size: 20px;">Please Select Supplier.</p>')


                            }else {
                                $('#warningDiv').hide();
                                $('#purchaseDetailsDiv').show();
                            }
                        }
                    }

                });
            });

            $('#supplier_id').change(function (){
                product_check();
            });

            function product_check(){

                let barcode = $('#barcode').val();
                let supplier_id = $('#supplier_id').val();
                console.log(supplier_id)
                if ( barcode ){
                    if (supplier_id){
                        $.ajax({
                            type: "GET",
                            url: "{{route('search.by.barcode.ajax')}}",
                            dataType: "json",
                            data: {barcode: barcode,
                                supplier_id: supplier_id},
                            success: function (dataResult) {
                                let data_all = '';
                                let productName = '';
                                let productAttributeName = '';
                                let productStock = '';
                                let productBuyPrice = '';
                                let stockDetailsId = '';
                                let supplier_id = '';
                                let supplierData = '';
                                let allData = JSON.parse(JSON.stringify(dataResult));

                                if ($.isEmptyObject( allData )){
                                    $('#warningDiv').show();
                                    $('#purchaseDetailsDiv').hide();
                                    $('#warningDiv').html('<p class="btn btn-danger text-center w-100" style="font-size: 20px;">You Did Not Purchase This Product From This Supplier.</p>')


                                }else {
                                    // if (allData['productStock'] == 0){
                                    //     $('#warningDiv').show();
                                    //     $('#purchaseDetailsDiv').hide();
                                    //     $('#warningDiv').html('<p class="btn btn-danger text-center w-100" style="font-size: 20px;">You Did Not Purchase This Product From This Supplier.</p>')
                                    //
                                    // }else {

                                    $('#warningDiv').hide();
                                    $('#purchaseDetailsDiv').show();

                                    productName = allData['productName'];
                                    productAttributeName = allData['productAttributeName'];
                                    productStock = allData['productStock'];
                                    productBuyPrice = allData['productBuyPrice'];
                                    stockDetailsId = allData['stockDetailsId'];


                                    let supplier_options = '';
                                    console.log(allData['supplierList'])

                                    $.each( allData['supplierList'], function( key, value ) {
                                        supplier_options =+ `<option value="`+value.supplier_id+`">`+value.supplier.name+`</option>`;

                                    });
                                    $("#supplier_id").append(supplier_options);
                                    $("#productName").val(productName);
                                    $("#productAttr").val(productAttributeName);
                                    $("#productStock").val(productStock);
                                    $("#productPrice").val(productBuyPrice);
                                    $("#stockDetailsId").val(stockDetailsId);
                                    // }

                                }
                            }

                        });
                    }

                }
            }

            $('#returnQuantity').keyup(function (){
            let quantity = $(this).val();
            let price = $('#productPrice').val();
            let total = parseFloat(quantity * price);
            $('#totalAmount').val(total);
            });

        });
        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here


    </script>
@endpush
