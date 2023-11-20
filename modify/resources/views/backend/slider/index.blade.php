@extends('master')
@section('content')


    <!-- Modal -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">slider List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#sliderCreate">
                                <i class="fas fa-plus"></i>
                                Add
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
                                <th>Title</th>
                                <th>Image</th>
                                <th>Button Text</th>
                                <th>Button Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key=>$slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $slider['title'] ?? '' }}</td>
                                    <td>
                                        <div class="text-center m-auto">
                                            <img src="{{asset('backend/img/slider/'.$slider->image)}}" class="img-responsive img-circle"
                                                 style="width: 50px; margin: auto; " alt="category_image">
                                        </div>
                                    </td>
                                    <td>{{ $slider->button_text }}</td>
                                    <td>{{ $slider->button_link }}</td>

                                    <td>{{ $slider['status'] === 0 ? 'Inactive' : 'Active' }}</td>
                                    <td>
                                        <button class="" data-toggle="modal" data-target="#sliderEdit{{ $slider->id }}" data-id="{{ $slider->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        @if($slider->status == 1)
                                            <a href="{{ route('slider.inactive', $slider->id) }}" class="pr-1 pl-1 rounded badge-danger"
                                               data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                        @else
                                            <a href="{{ route('slider.active', $slider->id) }}" class="pr-1 pl-1 rounded badge-success"
                                               data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                        @endif
                                    </td>
                                </tr>

                                @include('partials.modals.slider.edit')

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                @include('partials.modals.slider.create')

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
