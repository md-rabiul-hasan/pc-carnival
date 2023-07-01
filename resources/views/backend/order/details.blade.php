@extends('backend.layouts')
@section('title')
Product
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Order  Details</h1>
      <p>Order Details Details</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Order Details</a></li>
    </ul>
  </div>
@endsection

@section('content')

<a href="{{ route('admin.order.index')}}" class="btn btn-primary mb-3"> <i class="fa fa-long-arrow-left"></i> Back</a>

<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <td class="text-center" colspan="2">Customer Information</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $customer->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <td>Division</td>
                            <td>{{ $customer->division }}</td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td>{{ $customer->district }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                        <tr>
                            <td>Comment</td>
                            <td>{{ $customer->comment }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <td class="text-center" colspan="2">Order Information</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Order No</td>
                                    <td>{{ $order->order_number }}</td>
                                </tr>
                                <tr>
                                    <td>Payment Mode</td>
                                    <td style="text-capitalize">{{ Str::upper(str_replace("_", " ", $order->payment_mode))  }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    @if($order->status == "0")
                                        <td style="background: #922B21; color: white"> Order Pending</td>                              
                                    @elseif($order->status == "1")
                                        <td style="background: #E6B0AA; color: black">Order Shipped</td>
                                    @elseif($order->status == "2")
                                        <td style="background: #239B56; color: white"> Order Delivered</td>
                                    @elseif($order->status == "3")
                                        <td style="background: red; color: white"> Order Canceled</td>                               
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($order->status == "0" || $order->status == "1")
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <td class="text-center" colspan="2">Update Order Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="{{ route('admin.order.status-change', $order->id) }}" method="POST">
                                        @csrf
                                        <tr>
                                            <td>Order Status Change</td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control select2" name="order_status" id="order_status" required>
                                                    <option value="">Select Order Status</option>
                                                    <option value="0" @if($order->status == "0") {{ "selected" }} @endif>Order Pending</option>
                                                    <option value="1" @if($order->status == "1") {{ "selected" }} @endif>Order Shipped</option>
                                                    <option value="2" @if($order->status == "2") {{ "selected" }} @endif>Order Delivered</option>
                                                    <option value="3" @if($order->status == "3") {{ "selected" }} @endif>Order Cancelled</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary btn-block">
                                            </td>
                                        </tr>
                                    </form>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
    </div>
 </div>
 <div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                       <thead>
                          <tr>
                             <td class="text-left">Product Image</td>
                             <td class="text-left">Product Name</td>
                             <td class="text-right">Unit Price x Quantity</td>
                             <td class="text-right">Total</td>
                          </tr>
                       </thead>
                       <tbody>
                          @php $total = 0; @endphp
                          @foreach($order_items as $order_item)
                            <tr>
                                <td>
                                 <img src="{{ asset($order_item->product->image) }}" height="48px" width="48px" alt="">
                                </td>
                                <td>{{ $order_item->product->title }}</td>
                                <td class="text-right">{{ number_format($order_item->unit_price,0); }} x {{ $order_item->quantity }}</td>
                                <td class="text-right">{{ number_format($order_item->total_price,0); }}  ৳</td>
                            </tr>
                          @endforeach
                       </tbody>
                       <tfoot>
                          <tr>
                            <td class="text-right" colspan="3">
                              <strong>Sub-Total:</strong>
                            </td>
                            <td class="text-right">{{ number_format($order->total_order,0); }} ৳</td>
                          </tr>
                          <tr>
                            <td class="text-right" colspan="3">
                              <strong>Delivery Charge:</strong>
                            </td>
                            <td class="text-right" id="shipping_rate">{{ number_format($order->delivery_charge,0); }} ৳</td>
                          </tr>
                          <tr>
                            <td class="text-right" colspan="3">
                              <strong>Total:</strong>
                            </td>
                            <td class="text-right" id="total_amount">{{ number_format($order->total_bill,0); }} ৳</td>
                          </tr>
                        </tfoot>
                    </table>
                 </div>
            </div>
        </div>
    </div>
 </div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/select2.min.js')}}"></script>
<script>
    // Initialize Select2 plugin
    $('.select2').select2();
</script>
@endpush