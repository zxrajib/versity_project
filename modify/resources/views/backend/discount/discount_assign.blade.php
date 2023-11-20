@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="card-title">Product List</h6>
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
                        @foreach($products as $key=>$product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name}}</td>
                                <td>

                                    <button id="assignDiscount" onclick="return assign({{$product->id}}, {{$discountData}})" class="pr-1 pl-1 rounded badge-info"><i class="fas fa-check"></i></button>

{{--                                    @if($product->discount!== 1)--}}
{{--                                        <a href="{{ route('unassign.discount', $product->id) }}" class="pr-1 pl-1 rounded--}}
{{--                                    badge-danger" data-toggle="tooltip" data-placement="top" title="Inactive"><i--}}
{{--                                                    class="fas fa-times"></i></a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{ route('assign.discount', $product->id) }}"--}}
{{--                                           class="pr-1 pl-1 rounded badge-success" data-toggle="tooltip"--}}
{{--                                           data-placement="top" title="Active"><i class="fas fa-check"></i></a>--}}
{{--                                    @endif--}}
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
@push('js')
    <script>
        function assign(productId, discountId){
            {{--let url = "{{url('/role-status')}}";--}}
            {{--let callBackUrl = url+'/'+productId+'/'+discountId;--}}
            //     let id = productId;

            $.ajax({
                type: "GET",
                url: "{{route('assign.discount')}}",
                dataType: "json",
                data: {product_id: productId, discount_id: discountId},
                success: function (dataResult) {
                    if(dataResult != 'FAILED'){
                        toastr.success('Product Assign To Discount Successfully', 'Discount Setup');
                        let allData = JSON.parse(JSON.stringify(dataResult));
                        let single_tr = ``;
                        $("#LoadProductData").html('');
                        $.each(allData, function (index, data){
                            let ind = index+1;
                            single_tr += `<tr>
                                            <td>`+ind+`</td>
                                            <td>`+data.name+`</td>
                                            <td>`+data.category.name+`</td>
                                            <td><button id="assignDiscount" onclick="return assign(`+data.id+`, {{$discountData}})" class="pr-1 pl-1 rounded badge-info"><i class="fas fa-check"></i></button></td>
                                         </tr>`;
                        });
                        $("#LoadProductData").append(single_tr);
                    }


                }

            });
        }

    </script>
@endpush
