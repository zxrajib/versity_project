<div class="modal fade" id="categoryCreate" tabindex="-1" role="dialog" aria-labelledby="supplierPaymentCreateTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('supplierpayment.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="categoryCreateTitle">Purchase Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="supplier_id">Supplier Name</label>
                        <div class="col-md-9">
                            <select id="supplier_id" name="supplier_id" class="form-control" size="1" required>
                                <option value="" selected>Please select</option>
                                @forelse($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @empty
                                    <p>No Supplier Found</p>
                                @endforelse

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="chalan_no">Select Chalan No</label>
                        <div class="col-md-9">
                            <select id="chalan_no" name="chalan_no" class="form-control" required>
                                <option value="">Please select Supplier First</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Purchase Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="purchase_amount" placeholder="Purchase Amount"
                                id="purchase_amount" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="parent_id">Payment Type</label>
                        <div class="col-md-9">
                            <select id="payment_type" name="payment_type" class="form-control" size="1" required>
                                <option value="0">Please select</option>
                                <option value="bkash">Bkash</option>
                                <option value="rocket">Roket</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pay_amount" class="col-md-3 col-form-label">Pay Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="pay_amount" placeholder="Pay Amount"
                                id="pay_amount" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="due_amount" class="col-md-3 col-form-label">Due Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="due_amount" placeholder="Due Amount"
                                id="due_amount" required readonly>
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
@push('js')
    <script>
        $(document).ready(function() {
            $('#supplier_id').change(function() {
                let id = $(this).val();
                $('#purchase_amount').val('')
                $('#pay_amount').val('')
                $('#due_amount').val('')
                $.ajax({
                    type: "GET",
                    url: "{{ route('supplierChalanSearch') }}",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(dataResult) {
                        let allData = JSON.parse(JSON.stringify(dataResult));
                        let new_option = ""
                        $('#chalan_no').html('')
                        new_option = `<option value="">Please Select Chalan No </option>`
                        $.each(allData, function(key, value) {
                            new_option += `<option value="` + value.chalan_no + `">` +
                                value.chalan_no + `</option>`;
                        });


                        $("#chalan_no").html(new_option);

                    }

                });


            });

            $('#chalan_no').change(function() {
                let id = $(this).val();
                $('#purchase_amount').val('')
                $('#pay_amount').val('')
                $('#due_amount').val('')
                let new_payment = '';
                $.ajax({
                    type: "GET",
                    url: "{{ route('supplierPaymentSearch') }}",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(dataResult) {
                        let allData = JSON.parse(JSON.stringify(dataResult));
                        new_payment = (allData.due_amount);
                        // console.log(allData.purchase_amount);
                        $("#purchase_amount").val(new_payment);


                    }

                });


            });


            $('#pay_amount').keyup(function() {
                let pay_amount = $(this).val();
                let purchase_amount = $('#purchase_amount').val();
                let due_amount = '';
                due_amount = (purchase_amount - pay_amount);
                if (due_amount >= 0) {
                    $('#due_amount').val(due_amount)
                } else {
                    alert('Pay Amount is Must be less then Purchase Amount!!');
                    $(this).val('');
                    $('#due_amount').val('');
                }

            });



        });

    </script>
@endpush
