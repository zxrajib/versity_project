@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Return List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-success" data-toggle="modal" data-target="#discountCreate">
                                <a href="{{route('return')}}" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add New Return
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Supplier Name</th>
                            <th>Product Name</th>
                            <th>Variant</th>
                            <th>Returned Quantity</th>
                            <th>Remaining Quantity</th>
                            <th>Returned Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($returnList as $key=>$singleReturn)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $singleReturn->stockDetails->supplier->name ?? '' }}</td>
                                <td>{{ $singleReturn->stockDetails->stock->product->name ?? '' }}</td>
                                <td>
                                    @foreach(json_decode($singleReturn->stockDetails->attr_id) as $singleAttribute)
                                        @foreach($attrivalues as $singleValue)
                                        @if($singleValue->id == $singleAttribute)
                                                <span class="badge badge-success">{{$singleValue->attribute->name ?? ''}}:-{{$singleValue->value}}</span>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td>{{$singleReturn->returned_quantity}}</td>
                                <td>{{$singleReturn->remaining_quantity}}</td>
                                <td>{{date('d-m-y', strtotime($singleReturn->created_at))}}</td>
                                <td>
                                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#sliderEdit{{ $singleReturn->id }}" data-id="{{ $singleReturn->id }}">
                                        <i class="fas fa-edit"></i>
                                        Return Back
                                    </button>
                                </td>
                            </tr>

                            @include('partials.modals.return.edit')

                        @endforeach
                        </tbody>
                    </table>
                </div>

{{--                @include('partials.modals.discount.create')--}}

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
    </script>
@endpush
