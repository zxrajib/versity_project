@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Preview Barcode</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach($products as $key=>$product)
                            <div class="col-md-3">
                                <div class="card-body">
                                    <p class="text-center" style="margin: 0; padding: 0;">{{ $product->stock->product->name ?? '' }}</p>
                                    <p class="text-center" style="margin: 0; padding: 0;">
                                        @if($product->attr_id)
                                            @foreach(json_decode($product->attr_id) as $singleAttribute)
                                                @foreach($attributeValues as $attributeValue)
                                                    @if($attributeValue->id == $singleAttribute)
                                                        <span>{{$attributeValue->attribute->name}}:</span>
                                                        <span>
                                                            {{ $attributeValue->value }}
                                                        </span>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endif
                                        Price: {{$product->sell_price}}
                                    </p>
                                    <p class="text-center">
                                        <?php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($product->barcode, 'C39',1,33, array(1,1,1)) . '" alt="barcode"  />'; ?>
                                    </p>
                                    <p class="text-center" style="letter-spacing: 9px;">{{ $product->barcode }}</p>
                                </div>

                            </div>
                        @endforeach

                    </div>
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
        .card-body{
            background: white;
            border-radius: 10px;
            margin-bottom: 5px;
            color: black;
        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function (){
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container().appendTo( $('div.eight.column:eq(0)', table.table().container()) );
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
