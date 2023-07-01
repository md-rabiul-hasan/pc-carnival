@extends('frontend.layouts')
@section('page-title', 'Login')

@section('frontend-content')
<section class="page-content product-details">
    <!-- Product Details Section Start -->
    <div class="product-banner-area">
          <div class="row">
             <div class="col-md-2 offset-md-5">
                <!-- Start checkout-area -->
                <div class="checkout-area">
                    <form action="{{ route('auth.signin') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Accordion start -->
                               <div class="col-lg-12 col-12">
                                  <div class="checkout-collapse">
                                     <h3 class="title-group-3 gfont-1">Login</h3>
                                     <p>I am a returning customer</p>
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
                                     <input type="submit" class="btn btn-primary btn-block"
                                        value="Login" />
      
                                     <p class="or">OR</p>
                                     <a href="{{ route('auth.registration.form') }}" class="btn btn-block create-account">Create New Account</a>
                                  </div>
                               </div>
                            <!-- Accordion end -->
                         </div>
                    </form>
                   
                </div>
                <!-- End Shopping-Cart -->
             </div>
          </div>
       </div>
    </div>
    <!-- Product Details Section Start -->
 </section>

@endsection

