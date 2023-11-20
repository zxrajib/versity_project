@extends('master')
@section('content')
<!-- Modal -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="card-title">Product Ads List</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#sliderCreate">
                            <i class="fas fa-plus"></i>
                            Add New
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered dt-responsive display nowrap" style="border-collapse: collapse;
                    border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product_ads as $key=>$single_ads)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $single_ads->product->name ?? '' }}</td>
                            <td>
                                <div class="text-center m-auto">
                                    <img src="{{asset('backend/img/product/'.$single_ads->product->image->first()->image ?? '')}}" class="img-responsive img-circle"
                                         style="width: 50px; margin: auto; " alt="product_image">
                                </div>
                            </td>
                            <td>{{ $single_ads->rank ?? '' }}</td>

                            <td>{{ $single_ads->status === 0 ? 'Inactive' : 'Active' }}</td>
                            <td>
                                <a href="{{ route('product_ads_assign', $single_ads->id) }}" class="pr-1 pl-1 rounded badge-success"
                                   data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-tasks"></i></a>
                                @if($single_ads->status == 1)
                                <a href="{{ route('product_ads_status', $single_ads->id) }}" class="pr-1 pl-1 rounded badge-danger"
                                   data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                @else
                                <a href="{{ route('product_ads_status', $single_ads->id) }}" class="pr-1 pl-1 rounded badge-success"
                                   data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                @endif
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
        // table.buttons().container().appendTo( $('div.eight.column:eq(0)', table.table().container()) );
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
