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
                                        {{ $data->name ?? '' }} Info Update
                                    </h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ route('user_profile') }}" class="btn btn-sm btn-info">Profile Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user_update') }}" method="post">
                            @CSRF
                            <input type="hidden" name="user_id" value="{{ $data->id ?? '' }}" />
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input type="text" class="form-control" name="name" value="{{ $data->name ?? '' }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>User Name</td>
                                    <td>
                                        <input type="text" class="form-control" name="user_name" value="{{ $data->user_name ?? '' }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" class="form-control" name="email" value="{{ $data->email ?? '' }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bulling Address</td>
                                    <td>
                                        <input type="text" class="form-control" name="billing_address" value="{{ $data->customer->billing_address ?? '' }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shipping Address</td>
                                    <td>
                                        <input type="text" class="form-control" name="shipping_address" value="{{ $data->customer->shipping_address ?? '' }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right" style="border-bottom: none; border-right: none;">
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
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
    </style>
@endpush
