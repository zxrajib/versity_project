@extends('frontend.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>
                                        {{ $data->name ?? '' }} Info
                                    </h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ route('user_edit') }}" class="btn btn-sm btn-info">Update Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $data->name ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>{{ $data->user_name ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $data->phone ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $data->email ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Bulling Address</td>
                                <td>{{ $data->customer->billing_address ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Address</td>
                                <td>{{ $data->customer->shipping_address ?? '' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <style>
        .table> tbody> tr > td:first-child {
            width: 20%;
            border-right: 1px solid #dddddd;
        }
        .table> tbody> tr:last-child {
            border-bottom: 1px solid #dddddd;
        }
    </style>
@endpush
