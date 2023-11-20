@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Order List</h6>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="fromDate" class="form-control" name="fromDate" value="{{ now()
                            ->format('Y-m-d')}}" autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="toDate" class="form-control" name="toDate" value="{{ now()
                            ->format('Y-m-d')}}" autocomplete="off" disabled>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons"
                           class="table table-striped table-bordered dt-responsive display nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Order Number</th>
                            <th>Total Price</th>
                            <th>Delivery Type</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="data_body">
                        @foreach($orders as $key=>$order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{$order->delivery_type}}</td>
                                <td>
                                    @if($order->status == 0)
                                        Pending
                                    @endif
                                    @if($order->status == 1)
                                        Completed
                                    @endif
                                    @if($order->status == 2)
                                        Processing
                                    @endif
                                    @if($order->status == 3)
                                        Cancelled
                                    @endif
                                </td>

                                <td>
                                    @if($order->payment_status == 0)
                                        Unpaid
                                    @endif
                                    @if($order->payment_status == 1)
                                        Paid
                                    @endif
                                </td>


                                <td>
                                    <button class="" data-toggle="modal" data-target="#orderEdit{{ $order->id }}"
                                            data-id="{{ $order->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('partials.modals.order.edit')
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <style>
        div.dataTables_wrapper div.dataTables_filter {
            width: 50% !important;
            float: right !important;
        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function () {
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container().appendTo($('div.eight.column:eq(0)', table.table().container()));
        });

        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif



        // $(document).ready(function () {


        $('#fromDate').change(function () {
                getOrderData()
            console.log('hi');

            });

            $('#toDate').change(function () {
                getOrderData()
            });

        // });

        function getOrderData(){

            console.log('Date')

            let fromDate = $('#fromDate').val();
            let toDate = $('#toDate').val();
            $('#LoadAttrData').html('');
            let data_all = '';
            if ( fromDate ) {
                // $('#attrButton').show();
                $.ajax({
                    type: "GET",
                    url: "{{route('getReport')}}",
                    dataType: "json",
                    data: {fromDate: fromDate, toDate: toDate},
                    success: function (dataResult) {
                        let allData = JSON.parse(JSON.stringify(dataResult));
                        console.log(allData)

                        $("#data_body").html('');
                        let new_tr = ""
                        let status = ""
                        let payment_status = ""
                        $.each( allData, function( key, value ) {

                            if(value.status == 0){
                                status = "Pending";
                            }else if(value.status == 1){
                                status = "Complete";
                            }else if(value.status == 2){
                                status = "Processing";
                            }else if(value.status == 3){
                                status = "Cancle";
                            }else {
                                status = "";
                            }

                            if(value.payment_status == 0){
                                payment_status = "Pending";
                            }else if(value.payment_status == 1){
                                payment_status = "Complete";
                            }else {
                                payment_status = "";
                            }

                            new_tr +=`
                            <tr>
                                <td>`+value.name+`</td>
                                <td>`+value.id+`</td>
                                <td>`+value.total+`</td>
                                <td>`+value.delivery_type+`</td>
                                <td>`+status+`</td>
                                <td>`+payment_status+`</td>
                                <td>
                                    <button class="" data-toggle="modal" data-target="#orderEdit`+value.id+`"
                                            data-id="`+value.id+`">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>`;
                        });
                        $("#data_body").html(new_tr);
                    }

                });
            } else {
                data_all += `<h3 class="lead text-muted text-center">Please Select a Product</h3>`;
                $("#LoadAttrData").append(data_all);
            }
        }


        var today= new Date();
            var dateFormat = "yy-mm-dd",
                from = $( "#fromDate").datepicker({
                        dateFormat: 'yy-mm-dd',
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1,
                        maxDate: today
                    })
                    .on( "change", function() {
                        let to_date = $('#toDate').val()
                        to.datepicker( "option", "minDate", getDate( this ) );
                        $('#toDate').val(to_date)
                        $('#toDate').removeAttr('disabled')
                    }),

                to = $( "#toDate" ).datepicker({
                    dateFormat: 'yy-mm-dd',
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    maxDate: today
                })
                    .on( "change", function() {

                        from.datepicker( "option", "maxDate", getDate( this ) );
                    });

            function getDate( element ) {
                var date;
                try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                } catch( error ) {
                    date = null;
                }

                return date;
            }

    </script>
@endpush


