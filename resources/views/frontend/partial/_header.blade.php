<!doctype html>
<html class="no-js" lang="">
   <!-- Mirrored from htmldemo.net/malias/malias/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jan 2023 15:38:37 GMT -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>PC Carnival | @yield('page-title')</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- favicon
         ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="img/pcc.ico">
      <!-- Google Fonts
         ============================================ -->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

      <!-- Toaster CSS
      ============================================ -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <!-- Bootstrap CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
      <!-- Font awesome CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css')}}">
      <!-- owl.carousel CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css')}}">
      <!-- nivo slider CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/lib/css/nivo-slider.css')}}" type="text/css" />
      <!-- meanmenu CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css')}}">
      <!-- jquery-ui CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css')}}">
      <!-- animate CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
      <!-- main CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
      <!-- style CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/style.css')}}">
      <!-- responsive CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
      <!-- custom CSS
         ============================================ -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/custom.css')}}">
      <style>
         #toast-container > .toast-success {
            background-image: none;
            background-color: #00BA5A;
            color: white;
         }
         #toast-container > .toast-error {
            background-image: none;
            background-color: red;
            color: white;
         }
      </style>
      @stack('css')
   </head>
   <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- HEADER-AREA START -->
    <header class="header-area">
       <!-- HEADER-TOP START -->
       <div class="header-top d-lg-block d-md-block d-none">
          <div class="container">
             <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                   <div class="top-menu">
                      <!-- Start Language -->
                      <ul class="language">
                         <li>
                           <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/img/a8.png')}}" style="margin-right: auto;
                            width: 182px;
                            height: 15px;
                            top: somevalue-px;
                            left: somevalue-px;
                            text-align: center;
                            z-index: 2;"></a></li>
                         <li>
                      </ul>
                      <!-- End Language -->
                      <div class="ht-item search welcome-msg" id="search">
                          <input type="text" name="search" placeholder="Search" autocomplete="off"><div class="dropdown-menu" style="display: none;">
                              <div class="search-details">
                                  <ul class="nav nav-tabs">
                                      <li data-tab="tab-prod" class="active">Products</li>
                                      <li data-tab="tab-cat">Categories</li>
                                  </ul>
                                  <div id="tab-prod" class="search-results" style="display: block;"></div>
                                  <div id="tab-cat" class="search-results" style="display: none;"></div>
                              </div>
                          </div>
                      </div>
                   </div>
                      <!-- Start Top-Link -->
                      <div class="top-link">
                          <ul class="pc_build_ul">
                             <li class="pc-build"><a href="account.html"><i class="fa fa-desktop"></i> &nbsp; PC Build</a></li>
                          </ul>
                       </div>
                       <!-- End Top-Link -->
                   <!-- Start Top-Link -->
                   <div class="top-link">
                      <ul class="link">
                         <li><a href="{{ route('cart.index')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                         @if(!Auth::check())
                           <li><a href="checkout.html"><i class="fa fa-user"></i> Login</a></li>
                         @else 
                           <li><a href="checkout.html"><i class="fa fa-user"></i>My Account</a></li>
                         @endif
                         
                      </ul>
                   </div>
                   <!-- End Top-Link -->
                 
                </div>
             </div>
          </div>
       </div>
       <!-- HEADER-TOP END -->
       <!-- START MAINMENU-AREA -->
       <div class="mainmenu-area ">
          <div class="container">
             <div class="row">
                <div class="col-lg-9 offset-lg-3">
                   <div class="mainmenu d-lg-block d-none">
                      <nav>
                         <ul>
                            <li>
                               <a href="index.html">Category</a>
                               <ul>
                                  <li><a href="index.html">Sub-Category</a></li>
                                  <li><a href="index-2.html">Home Versions 2</a>
                                      <ul>
                                          <li><a href="index.html">Sub-Category</a></li>
                                          <li><a href="index-2.html">Home Versions 2</a></li>
                                       </ul>
                                  </li>
                               </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="shop.html">Bestseller Products</a></li>
                            <li><a href="shop-list.html">New Products</a></li>
                            <li>
                               <a href="#">Pages</a>
                               <ul>
                                  <li><a href="cart.html">Cart</a></li>
                                  <li><a href="checkout.html">Checkout</a></li>
                                  <li><a href="account.html">Create Account</a></li>
                                  <li><a href="my-account.html">My Account</a></li>
                                  <li><a href="product-details.html">Product details</a></li>
                                  <li><a href="shop.html">Shop Grid View</a></li>
                                  <li><a href="shop-list.html">Shop List View</a></li>
                                  <li><a href="wishlist.html">Wish List</a></li>
                               </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                         </ul>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- END MAIN-MENU-AREA -->
       <!-- Start Mobile-menu -->
       <div class="mobile-menu-area d-lg-none d-block fix">
          <div class="container">
             <div class="row">
                <div class="col-12">
                   <nav id="mobile-menu">
                      <ul>
                         <li>
                            <a href="index.html">Home</a>
                            <ul>
                               <li><a href="index.html">Home Page 1</a></li>
                               <li><a href="index-2.html">Home Page 2</a></li>
                            </ul>
                         </li>
                         <li><a href="about.html">About Us</a></li>
                         <li><a href="shop.html">Bestseller Products</a></li>
                         <li><a href="shop-list.html">New Products</a></li>
                         <li>
                            <a href="#">Pages</a>
                            <ul>
                               <li><a href="cart.html">Cart</a></li>
                               <li><a href="checkout.html">Checkout</a></li>
                               <li><a href="account.html">Create Account</a></li>
                               <li><a href="login.html">Login</a></li>
                               <li><a href="my-account.html">My Account</a></li>
                               <li><a href="product-details.html">Product details</a></li>
                               <li><a href="shop.html">Shop Grid View</a></li>
                               <li><a href="shop-list.html">Shop List View</a></li>
                               <li><a href="wishlist.html">Wish List</a></li>
                            </ul>
                         </li>
                         <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
       <!-- End Mobile-menu -->
    </header>
    <!-- HEADER AREA END -->