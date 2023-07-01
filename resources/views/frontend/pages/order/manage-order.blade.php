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
                        <li class="active"><a href="#">Manage Order</a></li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                <div class="col-lg-12">
                    <div class="Wishlist-area">
                        <h2>Manage My Order</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-center">Order Number</td>
                                        <td class="text-center">Total Amount</td>
                                        <td class="text-center">Payment Mode</td>
                                        <td class="text-center">Status</td>
                                        <td class="text-center">Details</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="text-center" style="font-weight: bold; font-size: 20px">{{ $order->order_number }}</td>
                                            <td class="text-center" style="font-weight: bold; font-size: 16px">{{ number_format($order->total_bill, 0)}}</td>
                                            <td class="text-center">{{ Str::upper(str_replace("_", " ", $order->payment_mode))  }}</td>
                                            <td class="text-center">
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
                                            <td class="text-center">
                                                <a href="{{ route('order.voucher', $order->order_number) }}" >Details</a>
                                            </td>
                                           
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="buttons clearfix pull-right">
                            <a href="#" class="btn btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
               </div>

            </div>
         </div>
         <!-- Product Details Section Start -->

@endsection

