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
                    <div class="form-group row">
                        <form action="{{ route('product_ads_assign_update', $data->id) }}" method="post" class="w-100">
                            @CSRF
                            <label for="product_id" class="col-sm-12 col-form-label">Select Product</label>
                            <div class="col-sm-12">
{{--                                <input type="hidden" name="ads_id" value="{{ $data->id }}" />--}}
                                <select name="product_id" id="product_id" class="form-control" required>
                                    <option value="">Select Product</option>
                                    @forelse($product as $single_product)
                                        <option value="{{ $single_product->id ?? '1' }}">{{ $single_product->name ?? '' }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-sm-12 pt-2">
                                <input type="submit" class="form-control btn btn-block btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
