@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Brand List</h6>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-sm badge-danger" data-toggle="modal" data-target="#brandCreate">
                                <a href="javaScript:void(0)" class="text-white">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered display nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Product Name</th>
                            <th>Ratting</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $key=>$review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->user->name ?? '' }}</td>
                                <td>{{ $review->product->name ?? '' }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>{{ $review->comments ?? ''}}</td>
                                <td>
                                    <a href="{{ route('review.remove', $review->uuid) }}" class="pr-1 pl-1 rounded badge-danger" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="float-right">
                                    {{ $reviews->links() }}
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
