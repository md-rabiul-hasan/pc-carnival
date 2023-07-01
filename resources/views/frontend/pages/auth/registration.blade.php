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
                   <div class="row">
                      <!-- Accordion start -->
                      <form action="{{ route('auth.registration') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-12">
                            <div class="checkout-collapse">
                               <h3 class="title-group-3 gfont-1">Registration</h3>
                               <p>I am a new customer</p>
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
                                  <input type="password" name="passowrd" class="form-control" />
                               </div>
                               <input type="submit" class="btn btn-primary btn-block"
                                  value="Registration" />
                               <p class="or">OR</p>
                               <a href="{{ route('auth.signin.form') }}" class="btn btn-block create-account">Already Have An Account</a>
                            </div>
                         </div>
                      </form>
                       
                      <!-- Accordion end -->
                   </div>
                </div>
                <!-- End Shopping-Cart -->
             </div>
          </div>
       </div>
    </div>
    <!-- Product Details Section Start -->
 </section>

@endsection

