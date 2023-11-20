{{--<!-- User Order Edit -->--}}
<div class="modal fade" id="orderEditModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="brandCreateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('user.order.update', $order->id ) }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="orderEditTitle">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                    <div class="single_details" style="border: 1px solid #808080; overflow: hidden;">
                                        <div class="col-md-5 float-left">
                                            <h6>
                                                {{$singleOrder->product->name}}
                                            </h6>
                                        </div>
                                        <div class="col-md-2 float-left">
                                            @foreach(json_decode($singleOrder->attr_value) as $value)
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
                            @if($order->status == 0)
                                <span class="badge">Pending</span>
                            @endif
                            @if($order->status == 1)
                                <span class="badge">Completed</span>
                            @endif
                            @if($order->status == 2)
                                <span class="badge">Processing</span>
                            @endif
                            @if($order->status == 3)
                                <span class="badge">Cancelled</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Once you cancel your order, you can not undo it.</label><br>
                            <label>You can not cancel your order while it is processing.</label><br>
                            @if($order->status == 0)
                                <input name="status" type="hidden" value="3">
                                <button type="submit" class="btn btn-danger">Cancel Order</button>
                            @endif
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modals-content -->
    </div><!-- /.modals-dialog -->
</div>

<!-- //User Order Edit -->
