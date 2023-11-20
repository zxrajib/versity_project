@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Product List With Barcode</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Variant</th>
                                <th>Barcode</th>
                                <th>Generate Barcode</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($products as $key=>$product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->stock->product->name ?? '' }}</td>
                                    <td>
                                        @if($product->attr_id)
                                            @foreach(json_decode($product->attr_id) as $singleAttribute)
                                                @foreach($attributeValues as $attributeValue)
                                                    @if($attributeValue->id == $singleAttribute)
                                                        <span>{{$attributeValue->attribute->name}}:</span>
                                                        <span class="badge badge-success"
                                                              style="background-color: {{ $attributeValue->value }}">
                                                                        <strong class="text-uppercase">{{ $attributeValue->value }}</strong>
                                                        </span>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <?php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($product->barcode, 'C39', 1, 33) . '" alt="barcode"  />'; ?>
                                        <p style="letter-spacing: 9px;">{{ $product->barcode }}</p>
                                    </td>
                                    <td>
                                        <form action="{{route('barcode.details', $product->id)}}" method="post" class="form-group"
                                              enctype="multipart/form-data">
                                            <div class="input-group">
                                                @csrf
                                                <input type="number" name="number" class="form-control" min="1" value="1" required>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-sm btn-success">Preview</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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

        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here
    </script>
@endpush
