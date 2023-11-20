@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Discount List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#discountCreate">
                                <a href="javaScript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons"
                               class="table table-striped table-bordered dt-responsive display nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Valid Till</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($discounts as $key=>$discount)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $discount->name }}</td>
                                    <td>{{ $discount->code }}</td>
                                    <td>{{ $discount->type }}</td>
                                    <td>{{ $discount->value }}</td>
                                    <td>{{ $discount->valid_till }}</td>
                                    <td>
                                        <div class="text-center m-auto">
                                            <img src="{{asset('backend/img/discount/'.$discount->image)}}" class="img-responsive
                                    img-circle" style="width: 50px; margin: auto; " alt="discount_image">
                                        </div>

                                    </td>
                                    <td>{{ $discount->status === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>

                                        @if($discount->status == 1)
                                            <a href="{{ route('discount.inactive', $discount->id) }}"
                                               class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip"
                                               data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('discount.active', $discount->id) }}"
                                               class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip"
                                               data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                        @endif


                                        <button class="" data-toggle="modal" data-target="#discountEdit{{ $discount->id }}"
                                                data-id="{{ $discount->id }}">
                                            <a href="javaScript:void(0)" class="pr-1 pl-1 rounded badge-info"
                                               data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fas fa-edit"></i></a>
                                        </button>
                                        <button>
                                            <a href="{{ route('discount.assign', $discount->id) }}" class="" data-toggle="tooltip"
                                               data-placement="top" title="Assign">
                                                <i class="fas fa-tasks"></i></a>

                                        </button>
                                        <button>
                                            <a href="{{route('discounted.product.list', $discount->id)}}" class="pr-1 pl-1 rounded badge-pink"
                                               data-toggle="tooltip"
                                               data-placement="top" title="Products">
                                                <i class="fa fa-list"></i></a>

                                        </button>


                                </tr>

                                @include('partials.modals.discount.edit')

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @include('partials.modals.discount.create')

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
    </script>
@endpush
