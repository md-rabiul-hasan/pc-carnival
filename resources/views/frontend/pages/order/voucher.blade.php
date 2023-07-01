@extends('frontend.layouts')
@section('page-title', 'check-out')

@push('css')
	<link rel="stylesheet" href="{{ asset('frontend/assets/checkout.css')}}">
@endpush

@section('frontend-content')
         <!-- Product Details Section Start -->
         <div class="product-banner-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="page-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#">Order Voucher</a></li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 order-lg-2 order-1">
                     <!-- Start checkout-area -->
                     <div class="checkout-area">
                        <div class="row">
                           <!-- Accordion start -->
                           <div class="accordion" id="accordion">
                              <!-- Start 1 Checkout-options -->
                              <div class="col-md-12 mt-3">
                                <div class="card">
                                   <div class="card-header" id="headingSix">
                                      <h4 class="card-title">
                                         <a class="accordion-trigger" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">Order Voucher</a>
                                      </h4>
                                   </div>
                                   <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                      data-bs-parent="#accordion">
                                      <div class="card-body fix">
                                        <div class="alert alert-success text-center text-uppercase order-voucher-message"  role="alert">
                                            Thank you for your order: {{ $order->order_number }}
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
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
                                        <div class="col-md-6">
                                          <div class="table-responsive">
                                              <table class="table table-bordered table-hover">
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
                                                   <td>
                                                      @if($order->status == 0)
                                                         Order Pending
                                                      @elseif($order->status == 1)
                                                         Order Shipped
                                                      @elseif($order->status == 2)
                                                         Order Delivered
                                                      @elseif($order->status == 3)
                                                         Order Canceled
                                                      @endif
                                                   </td>
                                               </tr>
                                                 </tbody>
                                              </table>
                                      </div>
                                  </div>
                                        </div>

                                         <br><br>
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
                                                        <td class="text-right">{{ number_format($order_item->total_price,0); }}</td>
                                                    </tr>
                                                  @endforeach
                                               </tbody>
                                               <tfoot>
                                                  <tr>
                                                    <td class="text-right" colspan="3">
                                                      <strong>Sub-Total:</strong>
                                                    </td>
                                                    <td class="text-right">{{ number_format($order->total_order,0); }}৳</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="text-right" colspan="3">
                                                      <strong>Delivery Charge:</strong>
                                                    </td>
                                                    <td class="text-right" id="shipping_rate">{{ number_format($order->delivery_charge,0); }}৳</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="text-right" colspan="3">
                                                      <strong>Total:</strong>
                                                    </td>
                                                    <td class="text-right" id="total_amount">{{ number_format($order->total_bill,0); }}৳</td>
                                                  </tr>
                                                </tfoot>
                                            </table>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                           <!-- Accordion end -->
                        </div>
                     </div>
                     <!-- End Shopping-Cart -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Product Details Section Start -->

@endsection

