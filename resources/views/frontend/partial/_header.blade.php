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
      <link rel="stylesheet" href="{{ asset('frontend/assets/responsive.css')}}">
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
                        <input type="text" id="searchInput" name="search" value="{{ Request::get('search') }}" placeholder="Search" autocomplete="off">
                        
                      </div>
                   </div>
                      <!-- Start Top-Link -->
                      <div class="top-link">
                          <ul class="pc_build_ul">
                             <li class="pc-build"><a href="{{ route("pc-build.index") }}"><i class="fa fa-desktop"></i> &nbsp; PC Build</a></li>
                          </ul>
                       </div>
                       <!-- End Top-Link -->
                   <!-- Start Top-Link -->
                   <div class="top-link">
                     <div class="top-menu">
								<!-- Start Currency -->
								<ul class="currency">
									<li class="top-icon">
                              <a href="{{ route('cart.index') }}" style="position: relative">
                                 <i class="fa fa-shopping-cart"></i> 
                                 Cart
                                 <span class="badge" id="cart_badge">{{ $cartItemCount ?? 0 }}</span>
                             </a>
									</li>
								</ul>
                        <ul class="currency">
                           @if(!Auth::check())
                              <li class="top-icon"><a href="{{ route('auth.signin') }}"><i class="fa fa-user"></i> Login</a></li>
                           @else 

									<li class="top-icon"><a href="javascript:void(0);" class="drop-toggle" data-toggle="dropdown">
                              <i class="fa fa-user"></i> {{ \Illuminate\Support\Str::limit(Auth::user()->name, 8, '..') }}
                              <span class="caret"></span>
                            </a>
                            <ul class="drop-menu user-icon">
                              <li><a href="{{ route('manage.order') }}">Manage Order</a></li>
                              <li><a href="#"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                                    <form id="logout-form" action="{{ route('auth.registration.logout') }}" method="POST" class="d-none">
                                       @csrf
                                 </form>
                            </ul>
									</li>
                           @endif
								</ul>
								
							</div>
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
                           @foreach ($menus as $menu)
                              <li>
                                 <a href="{{ route('product-filter.category', ['category'=> $menu['slug']])}}">{{ $menu['title'] }}</a>
                                 <ul>
                                    @foreach ($menu['sub_category'] as $subCategory)
                                          <li>
                                             <a href="{{ route('product-filter.category', ['category'=> $menu['slug'], 'sub-category' => $subCategory['slug']])}}">{{ $subCategory['title'] }}</a>
                                             <ul>
                                                @foreach ($subCategory['brands'] as $brand)
                                                      <li><a href="{{ route('product-filter.category', ['category'=> $menu['slug'], 'sub-category' => $subCategory['slug'], 'brand' => $brand['slug']])}}">{{ $brand->title }}</a></li>
                                                @endforeach
                                             </ul>
                                          </li>
                                    @endforeach
                                 </ul>
                              </li>
                           @endforeach                                               
                            <li><a href="{{ route('brand.index') }}">All Brands</a></li>
                            <li><a href="{{ route('about-us.index') }}">About Us</a></li>
                            <li><a href="{{ route('contact-us.index') }}">Contact Us</a></li>
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

    