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
                        <li class="active"><a href="#">Product Checkout</a></li>
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
                              @if(!Auth::check())
                                 <div class="col-lg-12">
                                    <div class="card">
                                       <div class="card-header" id="headingOne">
                                          <h4 class="card-title">
                                             <a class="accordion-trigger" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">Account Information</a>
                                          </h4>
                                       </div>
                                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                          data-bs-parent="#accordion">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-lg-6 col-12">
                                                   <div class="checkout-collapse">
                                                      <h3 class="title-group-3 gfont-1">New Customer</h3>
                                                      <p>Account Information</p>
                                                      <div class="radio">
                                                         <label>
                                                            <input type="radio" value="register" name="account" id="registerRadio" />
                                                            Register Account
                                                         </label>
                                                      </div>
                                                      
                                                      <div class="radio">
                                                         <label>
                                                            <input type="radio" value="login" name="account" id="loginRadio" checked />
                                                            Login
                                                         </label>
                                                      </div>
                                                      
                                                      <p>By creating an account you will be able to shop
                                                         faster, be up to date on an order's status, and keep
                                                         track of the orders you have previously made.
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-12" id="login_form">
                                                   <form action="{{ route('auth.signin')}}" method="POST">
                                                      @csrf
                                                      <div class="checkout-collapse">
                                                         <h3 class="title-group-3 gfont-1">Returning Customer
                                                         </h3>
                                                         <p>I am a returning customer</p>
                                                         <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" name="email" />
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" />
                                                            <a href="#">Forgotten Password</a>
                                                         </div>
                                                         <input type="submit" class="btn btn-primary"
                                                            value="Login" />
                                                      </div>
                                                   </form>
                                                   
                                                </div>
                                                <div class="col-lg-6 col-12" id="register_form">
                                                   <form action="{{ route('auth.registration') }}" method="POST">
                                                      @csrf
                                                      <div class="checkout-collapse">
                                                         <h3 class="title-group-3 gfont-1">Signup Customer
                                                         </h3>
                                                         <p>Create new account</p>
                                                         <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control"
                                                               name="name" required/>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control"
                                                               name="phone" required/>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control"
                                                               name="email" />
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="password" class="form-control" />
                                                            <a href="#">Forgotten Password</a>
                                                         </div>
                                                         <input type="submit" class="btn btn-primary"
                                                            value="Login" />
                                                      </div>
                                                   </form>                                                
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              @endif
                              <!-- End Checkout-options -->
                              <form action="{{ route("confirm-order")}}" method="POST">
                                 @csrf
                                 <!-- Start 3 shipping-Address -->
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6  mt-3">
                                          <div class="card">
                                             <div class="card-header" id="headingThree">
                                                <h4 class="card-title">
                                                   <a class="accordion-trigger" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseThree" aria-expanded="false"
                                                      aria-controls="collapseThree">Delivery Details</a>
                                                </h4>
                                             </div>
                                             <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                                data-bs-parent="#accordion">
                                                <div class="card-body">
                                                   <div class="address">
                                                      <div class="multiple-form-group">
                                                         <div class="form-group">
                                                            <label class="control-label" for="input-firstname">First Name</label>
                                                            <input class="form-control multiple-input-box" name="first_name" type="text" id="input-firstname" value="" placeholder="First Name*">
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="control-label" for="input-lastname">Last Name</label>
                                                            <input type="text" id="input-lastname" name="last_name" value="" class="form-control multiple-input-box" placeholder="Last Name*">
                                                         </div>
                                                      </div>                                                      
                                                      <div class="form-group">
                                                         <label class="control-label" for="input-telephone">Mobile</label>
                                                         <input type="tel" id="input-telephone" name="phone" value="" class="form-control" placeholder="Telephone*">
                                                      </div>
                                                      <div class="form-group" for="input-email">
                                                         <label class="control-label">Email</label>
                                                         <input type="email" id="input-email" name="email" value="" class="form-control" placeholder="E-Mail*">
                                                      </div>
                                                      <div class="multiple-form-group">
                                                         <div class="form-group" for="input-zone">
                                                            <label class="control-label multiple-input-box">Division</label>
                                                            <select name="division" id="input-zone" class="form-control">
                                                               <option value="Dhaka" selected="">Dhaka</option>
                                                               <option value="Barishal">Barishal</option>
                                                               <option value="Chattogram">Chattogram</option>
                                                               <option value="Khulna">Khulna</option>
                                                               <option value="Rajshahi">Rajshahi</option>
                                                               <option value="Rangpur">Rangpur</option>
                                                               <option value="Sylhet">Sylhet</option>
                                                               <option value="Mymensingh">Mymensingh</option>
                                                            </select>
                                                         </div>
                                                         <div class="form-group" for="input-zone">
                                                            <label class="control-label multiple-input-box">District</label>
                                                            <select name="district" id="input-district" class="form-control">
                                                               <option value="Dhaka" selected="">Dhaka</option>
                                                               <option value="Faridpur">Faridpur</option>
                                                               <option value="Chattogram">Chattogram</option>
                                                               <option value="Gazipur">Gazipur</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="control-label" for="input-address">Address</label>
                                                         <input type="text" id="input-address" name="address" value="" class="form-control" placeholder="Address*">
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="control-label">Comment</label>
                                                         <textarea class="form-control" name="comment" value="" placeholder="Comment" rows="6"></textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6 mt-3">
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="card">
                                                   <div class="card-header" id="headingSix">
                                                      <h4 class="card-title">
                                                         <a class="accordion-trigger" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">Payment Method</a>
                                                      </h4>
                                                   </div>
                                                   <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                                      data-bs-parent="#accordion">
                                                      <div class="card-body fix">
                                                         <div class="page-section ws-box">
                                                            <p>Select a payment method</p>
                                                            <label class="radio-inline">
                                                            <input type="radio" name="payment_method" value="cash_on_delivery" checked="checked">
                                                            Cash on Delivery                                </label><br>
                                                            {{-- <label class="radio-inline">
                                                            <input type="radio" name="payment_method" value="ONLINE_PAYMENT">
                                                            Online Payment                                </label><br> --}}
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="card">
                                                   <div class="card-header" id="headingSix">
                                                      <h4 class="card-title">
                                                         <a class="accordion-trigger" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">Delivery Method</a>
                                                      </h4>
                                                   </div>
                                                   <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                                      data-bs-parent="#accordion">
                                                      <div class="card-body fix">
                                                         <div class="page-section ws-box">
                                                            <p>Select a Delivery Method</p>
                                                            <label class="radio-inline">
                                                            <input type="radio" name="shipping_method" value="HOME_DELIVERY" checked="checked">
                                                            Home Delivery - 60৳                                </label><br>
                                                            <label class="radio-inline">
                                                            <input type="radio" name="shipping_method" value="STORE_PICKUP">
                                                            Store Pickup - 0৳                                </label><br>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-12 mt-3">
                                                <div class="card">
                                                   <div class="card-header" id="headingSix">
                                                      <h4 class="card-title">
                                                         <a class="accordion-trigger" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">Order Overview</a>
                                                      </h4>
                                                   </div>
                                                   <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                                      data-bs-parent="#accordion">
                                                      <div class="card-body fix">
                                                         <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                               <thead>
                                                                  <tr>
                                                                     <td class="text-left">Product Name</td>
                                                                     <td class="text-right">Unit Price x Quantity</td>
                                                                     <td class="text-right">Total</td>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  @php $total = 0; @endphp
                                                                  @foreach($cart_items as $item)
                                                                  @php $total += $item['price'] * $item['quantity']; @endphp
                                                                     <tr>
                                                                        <td class="text-left">
                                                                           <a href="#">{{ $item['title'] }}</a>
                                                                        </td>
                                                                        <td class="text-right">{{ $item['price'] }}৳ x {{ $item['quantity'] }}</td>
                                                                        <td class="text-right">{{ $item['price'] * $item['quantity'] }}</td>
                                                                     </tr>
                                                                  @endforeach
                                                               </tbody>
                                                               <tfoot>
                                                                  <tr>
                                                                     <td class="text-right" colspan="2">
                                                                        <strong>Sub-Total:</strong>
                                                                     </td>
                                                                     <td class="text-right">{{ $total }}৳</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td class="text-right" colspan="2">
                                                                        <strong>Flat Shipping Rate:</strong>
                                                                     </td>
                                                                     <td class="text-right">5.00৳</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td class="text-right" colspan="2">
                                                                        <strong>Total:</strong>
                                                                     </td>
                                                                     <td class="text-right">{{ $total }}৳</td>
                                                                  </tr>
                                                               </tfoot>
                                                            </table>
                                                            <input type="hidden" name="delivery_charge" value="50">
                                                         </div>
                                                         <div class="buttons pull-right">
                                                            <input type="submit" class="btn btn-primary"
                                                               value="Confirm Order" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End shipping-Address -->
                              </form>
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


@push('js')
<script>
   $(document).ready(function() {
      $("#register_form").hide();
      $("#registerRadio, #loginRadio").click(function() {
         var selectedValue = $(this).val();
         if(selectedValue == "login"){
            $("#register_form").hide();
            $("#login_form").show();
         }else{
            $("#register_form").show();
            $("#login_form").hide();
         }
      });
   });
</script>
@endpush