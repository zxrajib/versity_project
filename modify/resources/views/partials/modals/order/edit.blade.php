<div class="modal" id="orderEdit{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="orderEditTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <form action="{{ route('order.update', $order->uuid ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="orderEditTitle">Edit Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-4" style="border: 1px solid crimson;">
                            <label class="col-form-label">Phone:</label>
                            <h6>{{$order->phone}}</h6>
                        </div>
                        <div class="col-md-4" style="border: 1px solid crimson;">
                            <label class="col-form-label">Name:</label>
                            <h6>{{$order->name}}</h6>
                        </div>
                        <div class="col-md-4" style="border: 1px solid crimson;">
                            <label class="col-form-label">Email:</label>
                            <h6>{{$order->email}}</h6>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="col-form-label">Delivery Address:</label>
                            <h6>{{$order->address}}</h6>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="row">
                            <div class="details_header w-100 badge-dark text-uppercase">
                                <div class="col-md-5 float-left">
                                    <label class="col-form-label">Product Name</label>
                                </div>
                                <div class="col-md-2 float-left">
                                    <label class="col-form-label">Attribute</label>
                                </div>
                                <div class="col-md-1 float-left">
                                    <label class="col-form-label">Qty</label>
                                </div>
                                <div class="col-md-1 float-left">
                                    <label class="col-form-label">Price</label>
                                </div>
                                <div class="col-md-1 float-left">
                                    <label class="col-form-label">Discount</label>
                                </div>
                                <div class="col-md-2 float-left text-right">
                                    <label class="col-form-label">Sub Total</label>
                                </div>
                            </div>
                            <div class="details_body w-100">
                                @foreach($order->orderDetail as $singleOrder)
{{--                                    {{ dd(json_decode($singleOrder->attr_value)) }}--}}
                                    <div class="single_details" style="border: 1px solid #808080; overflow: hidden;">
                                    <div class="col-md-5 float-left">
                                        <h6>
                                            {{$singleOrder->product->name}}
                                        </h6>
                                    </div>
                                    <div class="col-md-2 float-left">
                                        @foreach(json_decode($singleOrder->attr_value) ?? [] as $value)
                                            <span class="badge badge-success" style="background-color: {{ $value }}">
                                                <strong class="text-uppercase">{{ $value }}</strong>
                                            </span>
                                        @endforeach
                                    </div>
                                    <div class="col-md-1 float-left">
                                        <h6 class="text-center">
                                            {{$singleOrder->quantity}}
                                        </h6>
                                    </div>
                                    <div class="col-md-1 float-left">
                                        <h6 class="text-center">
                                            {{$singleOrder->price}}
                                        </h6>
                                    </div>
                                    <div class="col-md-1 float-left">
                                        <h6 class="text-right">
                                            {{$singleOrder->discount}}
                                        </h6>
                                    </div>
                                    <div class="col-md-2 float-left">
                                        <h6 class="text-right">
                                            {{$singleOrder->sub_total-$singleOrder->discount}}
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-3">
                                <h6 class="text-right">Vat:</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-right">0.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-3">
                                <h6 class="text-right">Delivery Charge:</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-right">{{$order->delivery_charge}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-3">
                                <h6 class="text-right">Total:</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-right">{{ $order->total+$order->delivery_charge-$order->total_discount ?? '' }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" style="border: 1px solid crimson;">
                        <label for="example-text-input" class="col-md-3 col-form-label">Payment Status</label>
                        <div class="col-md-9">
                            @if($order->payment_status == 0)
                                Unpaid
                            @endif
                            @if($order->payment_status == 1)
                                Paid
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label">Order Status</label>
                        <div class="col-md-9">
                            @if($order->status == 6)
                                <span class="badge badge-info">Cancelled</span>
                            @else
                            <select id="order_status" name="status" class="form-control">
{{--                                @for($i=1; $i<6; $i++)--}}
                                <option value="1" {{$order->status == 1 ? 'selected' : ''}} {{$order->status >= 1 ? 'disabled' :
                                ''}}>Processing</option>
                                <option value="2" {{$order->status == 2 ? 'selected' : ''}} {{$order->status >= 2 ? 'disabled' :
                                ''}}>Collected</option>
                                <option value="3" {{$order->status == 3 ? 'selected' : ''}} {{$order->status >= 3 ? 'disabled' : ''}}>Shipped</option>
                                <option value="4" {{$order->status == 4 ? 'selected' : ''}} {{$order->status >= 4 ? 'disabled' :
                                ''}}>Completed</option>
                                <option value="5" {{$order->status == 5 ? 'selected' : ''}} {{$order->status >= 5 ? 'disabled' :
                                ''}}>Returned</option>
                                <option value="6" {{$order->status == 6 ? 'selected' : ''}} {{$order->status >= 6 ? 'disabled' :
                                ''}}>Cancelled</option>
{{--                                @endfor--}}
                            </select>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
