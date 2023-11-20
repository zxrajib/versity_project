@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Product Stock List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#discountCreate">
                                <a href="{{ route('stock_in') }}" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Stock In
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    @forelse($stocks as $key=>$stock)
                                        <div class="card-header mb-1" id="headingOne">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h1 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#collapseOne{{$key}}"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                            {{ $stock->product->name ?? '' }}
                                                        </button>
                                                    </h1>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="form-control text-right" type="text"
                                                           value="{{ $stock->total_in ?? '' }} {{
                                                           $stock->product->unit->name ?? '' }}" readonly/>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapseOne{{$key}}" class="collapse"
                                             aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <table id="datatable-buttons"
                                                       class="table table-striped table-bordered dt-responsive display nowrap"
                                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Attribute Value</th>
                                                        <th>Available Quantity</th>
                                                        <th>Price</th>
                                                        <th>Discount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($stock->stockDetails as $stockDetailsData)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                @if($stockDetailsData->stock_attribute_data)
                                                                    @foreach($stockDetailsData->stock_attribute_data as $stockAttr)
                                                                        @php
                                                                            $color = ucfirst($stockAttr->attr_value->value);
                                                                        @endphp
                                                                        <span class="badge badge-success stock_badge"
                                                                              style="background-color:{{ $stockAttr->attr_value->value ?? '' }}; color:{{ $color == 'Black' ? 'White' : 'black' }}">
                                                                            <strong class="text-uppercase">
                                                                                {{ $stockAttr->attr_value->value ?? '' }}
                                                                            </strong>
                                                                        </span>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $stockDetailsData->quantity ?? '' }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ $stockDetailsData->price ?? '' }} TK
                                                            </td>
                                                            <td class="text-right">
                                                                {{ $stockDetailsData->discount ?? '' }} TK
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="card-header mb-1" id="headingOne">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h1 class="mb-0">
                                                        <button class="btn btn-block text-left" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                            No Approve Product Found
                                                        </button>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
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

        .stock_badge {
            padding: 4px 10px !important;
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
    </script>
@endpush
