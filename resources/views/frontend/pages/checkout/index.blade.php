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
                                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"  required/>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" required />
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
                                                            <input type="text" class="form-control" value="{{ old('name') }}" 
                                                               name="name" required/>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" value="{{ old('phone') }}" 
                                                               name="phone" required/>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" value="{{ old('email') }}" 
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
                                       <div class="col-lg-6  col-12 mt-3">
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
                                                            <input class="form-control multiple-input-box" name="first_name" type="text" id="input-firstname" required value="{{ old('first_name') }}" placeholder="First Name*">
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="control-label" for="input-lastname">Last Name</label>
                                                            <input type="text" id="input-lastname" name="last_name"  class="form-control multiple-input-box" required value="{{ old('last_name')}}" placeholder="Last Name*">
                                                         </div>
                                                      </div>                                                      
                                                      <div class="form-group">
                                                         <label class="control-label" for="input-telephone">Mobile</label>
                                                         <input type="tel" id="input-telephone" name="phone" value="{{ old('phone')}}" class="form-control"  required placeholder="Telephone*">
                                                      </div>
                                                      <div class="form-group" for="input-email">
                                                         <label class="control-label">Email</label>
                                                         <input type="email" id="input-email" name="email" value="{{ old('email')}}" class="form-control" placeholder="E-Mail*">
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
                                                               <option value="Mymensingh">Mymensingh</option>
                                                               <option value="Barishal">Barishal</option>
                                                               <option value="Rajshahi">Rajshahi</option>
                                                               <option value="Rangpur">Rangpur</option>
                                                               <option value="Sylhet">Sylhet</option>
                                                               <option value="Khulna">Khulna</option>
                                                               <option value="Moulvibazar">Moulvibazar</option>
                                                               <option value="Narsingdi">Narsingdi</option>
                                                               <option value="Narayanganj">Narayanganj</option>
                                                               <option value="Bagerhat">Bagerhat</option>
                                                               <option value="Bandarban">Bandarban</option>
                                                               <option value="Barguna">Barguna</option>
                                                               <option value="Barisal">Barisal</option>
                                                               <option value="Bhola">Bhola</option>
                                                               <option value="Bogra">Bogra</option>
                                                               <option value="Brahmanbaria">Brahmanbaria</option>
                                                               <option value="Chandpur">Chandpur</option>
                                                               <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                                                               <option value="Chuadanga">Chuadanga</option>
                                                               <option value="Comilla">Comilla</option>
                                                               <option value="Cox's Bazar">Cox's Bazar</option>
                                                               <option value="Dinajpur">Dinajpur</option>
                                                               <option value="Feni">Feni</option>
                                                               <option value="Gaibandha">Gaibandha</option>
                                                               <option value="Gopalganj">Gopalganj</option>
                                                               <option value="Habiganj">Habiganj</option>
                                                               <option value="Jamalpur">Jamalpur</option>
                                                               <option value="Jessore">Jessore</option>
                                                               <option value="Jhalokati">Jhalokati</option>
                                                               <option value="Jhenaidah">Jhenaidah</option>
                                                               <option value="Joypurhat">Joypurhat</option>
                                                               <option value="Khagrachhari">Khagrachhari</option>
                                                               <option value="Kishoreganj">Kishoreganj</option>
                                                               <option value="Kurigram">Kurigram</option>
                                                               <option value="Kushtia">Kushtia</option>
                                                               <option value="Lakshmipur">Lakshmipur</option>
                                                               <option value="Lalmonirhat">Lalmonirhat</option>
                                                               <option value="Madaripur">Madaripur</option>
                                                               <option value="Magura">Magura</option>
                                                               <option value="Manikganj">Manikganj</option>
                                                               <option value="Meherpur">Meherpur</option>
                                                               <option value="Munshiganj">Munshiganj</option>
                                                               <option value="Naogaon">Naogaon</option>
                                                               <option value="Narail">Narail</option>
                                                               <option value="Natore">Natore</option>
                                                               <option value="Netrokona">Netrokona</option>
                                                               <option value="Nilphamari">Nilphamari</option>
                                                               <option value="Noakhali">Noakhali</option>
                                                               <option value="Pabna">Pabna</option>
                                                               <option value="Panchagarh">Panchagarh</option>
                                                               <option value="Patuakhali">Patuakhali</option>
                                                               <option value="Pirojpur">Pirojpur</option>
                                                               <option value="Rajbari">Rajbari</option>
                                                               <option value="Rangamati">Rangamati</option>
                                                               <option value="Satkhira">Satkhira</option>
                                                               <option value="Shariatpur">Shariatpur</option>
                                                               <option value="Sherpur">Sherpur</option>
                                                               <option value="Sirajganj">Sirajganj</option>
                                                               <option value="Sunamganj">Sunamganj</option>
                                                               <option value="Tangail">Tangail</option>
                                                               <option value="Thakurgaon">Thakurgaon</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="control-label" for="input-address">Shipping Address</label>
                                                         <input type="text" id="input-address" name="address" value="{{ old('address')}}" class="form-control" required placeholder="Address*">
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="control-label">Comment</label>
                                                         <textarea class="form-control" name="comment" value="{{ old('comment')}}" placeholder="Comment" rows="6"></textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-12 col-12 mt-3">
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
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-md-6 col-12">
                                                <div class="card">
                                                   <div class="card-header" id="headingSix">
                                                      <h4 class="card-title">
                                                         <a class="accordion-trigger" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">Delivery Method</a>
                                                      </h4>
                                                   </div>
                                                   <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-bs-parent="#accordion">
                                                      <div class="card-body fix">
                                                        <div class="page-section ws-box">
                                                          <p>Select a Delivery Method</p>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="shipping_method" value="HOME_DELIVERY"  onclick="updateTotal(this)">
                                                            Home Delivery - 60৳
                                                          </label><br>
                                                          <label class="radio-inline">
                                                            <input type="radio" name="shipping_method" value="SHOP_DELIVERY"  checked="checked" onclick="updateTotal(this)">
                                                            Store Pickup - 0৳
                                                          </label><br>
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
                                                                      <strong>Delivery Charge:</strong>
                                                                    </td>
                                                                    <td class="text-right" id="shipping_rate">0৳</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td class="text-right" colspan="2">
                                                                      <strong>Total:</strong>
                                                                    </td>
                                                                    <td class="text-right" id="total_amount">{{ $total }}৳</td>
                                                                  </tr>
                                                                </tfoot>
                                                            </table>
                                                            <input type="hidden" name="delivery_charge" id="delivery_charge" value="0">
                                                            <input type="hidden" name="total_sub_total" id="total_sub_total" value="{{ $total }}">
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

<script>
   function updateTotal(selectedOption) {
      var deliveryCharge = 0;
      if (selectedOption.value === "HOME_DELIVERY") {
         deliveryCharge = 60;
      }
      $("#delivery_charge").val(deliveryCharge);

      var totalElement = document.getElementById("total_amount");
      var shippingRateElement = document.getElementById("shipping_rate");
      var sub_total = parseFloat($("#total_sub_total").val());
      var delivery_charge = parseFloat($("#delivery_charge").val());
      shippingRateElement.innerText = deliveryCharge + "৳";

      var newTotal = sub_total + deliveryCharge;

      totalElement.innerText = newTotal.toFixed(2) + "৳";
   }
 </script>

@endpush