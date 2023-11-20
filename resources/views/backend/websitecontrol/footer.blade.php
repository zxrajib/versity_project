@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Footer Content</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#footerCreate">
                                <a href="javascript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Fb Link</th>
                            <th>Tw Link</th>
                            <th>G Plus Link</th>
                            <th>Insta Link</th>
                            <th>Youtube Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($footer_contents as $key=>$footer_content)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $footer_content->email ?? '' }}</td>
                                <td>{{ $footer_content->phone ?? '' }}</td>
                                <td>{{ $footer_content->address ?? '' }}</td>
                                <td>{{ $footer_content->fb_link ?? '' }}</td>
                                <td>{{ $footer_content->tw_link ?? '' }}</td>
                                <td>{{ $footer_content->google_link ?? '' }}</td>
                                <td>{{ $footer_content->insta_link ?? '' }}</td>
                                <td>{{ $footer_content->youtube_link ?? '' }}</td>
                                <td>
                                    <img src="{{ file_exists(public_path('backend/img/logo/'.$footer_content->image)) ? asset('backend/img/logo/' . $footer_content->image) : asset('backend/logo.jpg') }}" alt="image_not_found" width="50px !important" height="50px !important">
                                </td>
                                <td>
                                    <button class="" data-toggle="modal"
                                            data-target="#footerEdit{{$footer_content->uuid}}" data-id="{{
                                            $footer_content->uuid }}">
                                        <a href="#" class="pr-1 pl-1 rounded badge-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                    </button>
                                    @if($footer_content->status == 0)
{{--                                        <a href="{{ route('footer.status', $footer_content->uuid) }}" class="pr-1 pl-1 rounded badge-danger"
                                           data-toggle="tooltip" data-placement="top" title="Inactive"><i class="fas fa-times"></i></a>
                                    @else--}}
                                        <a href="{{ route('footer.status', $footer_content->uuid) }}" class="pr-1 pl-1 rounded badge-success"
                                           data-toggle="tooltip" data-placement="top" title="Active"><i class="fas fa-check"></i></a>
                                    @endif
                                </td>
                            </tr>

                            @include('partials.modals.footer.edit')

                            @empty
                            <p>No Data Found</p>

                        @endforelse
                        </tbody>
                    </table>
                </div>

                @include('partials.modals.footer.create')

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
