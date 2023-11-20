@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Product List on {{$discountDetails->name}}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons"
                           class="table table-striped table-bordered dt-responsive display nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody id="LoadProductData">
                        @foreach($discountedProducts as $key=>$product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name}}</td>
                                <td>
                                    <a href="{{route('unassign.discount', $product->id)}}" class="pr-1 pl-1 rounded badge-pink" data-toggle="tooltip"
                                       data-placement="top" title="Remove">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
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

