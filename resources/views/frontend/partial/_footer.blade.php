<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-title">
                   <h5>My Account</h5>
                </div>
                <nav>
                   <ul class="footer-content">
                      <li><a href="my-account.html">My Account</a></li>
                      <li><a href="#">Order History</a></li>
                      <li><a href="wishlist-2.html">Wish List</a></li>
                      <li><a href="#">Search Terms</a></li>
                      <li><a href="#">Returns</a></li>
                   </ul>
                </nav>
             </div>
             <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-title">
                   <h5>Customer Service</h5>
                </div>
                <nav>
                   <ul class="footer-content">
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="#">Delivery Information</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                   </ul>
                </nav>
             </div>
             <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-title">
                   <h5>Payment & Shipping</h5>
                </div>
                <nav>
                   <ul class="footer-content">
                      <li><a href="#">Brands</a></li>
                      <li><a href="#">Gift Vouchers</a></li>
                      <li><a href="#">Affiliates</a></li>
                      <li><a href="shop-list.html">Specials</a></li>
                      <li><a href="#">Search Terms</a></li>
                   </ul>
                </nav>
             </div>
             <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-title">
                   <h5>Payment & Shipping</h5>
                </div>
                <nav>
                   <ul class="footer-content box-information">
                      <li>
                         <i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States,
                         Libero</span>
                      </li>
                      <li>
                         <i class="fa fa-envelope-o"></i>
                         <p><a href="contact.html">admin@bootexperts.com</a></p>
                      </li>
                      <li>
                         <i class="fa fa-phone"></i>
                         <span>01234-56789</span> <br> <span> 01234-56789</span>
                      </li>
                   </ul>
                </nav>
             </div>
          </div>
       </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
    <div class="copyright-area">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="copyright">
                   <p>Copyright &copy; <a href="http://bootexperts.com/" target="_blank"> BootExpert</a> All
                      rights reserved.
                   </p>
                   <div class="payment">
                      <a href="#"><img src="{{ asset('frontend/assets/img/payment.png')}}" alt="Payment"></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Copyright-area End -->

    
<div class="modal fade image-modal" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">                                
        <img class="img-responsive" src="" id="show-img"> 
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




 </footer>
   <!-- jquery
         ============================================ -->
         <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
         <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
         <!-- popper JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
         <!-- bootstrap JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
         <!-- wow JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
         <!-- meanmenu JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>
         <!-- owl.carousel JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
         <!-- scrollUp JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js')}}"></script>
         <!-- countdon.min JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/countdon.min.js')}}"></script>
         <!-- jquery-price-slider js
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/jquery-price-slider.js')}}"></script>
         <!-- Nivo slider js
            ============================================ -->
         <script src="{{ asset('frontend/assets/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
         <!-- Image zoom js
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/jquery.zoom.min.js')}}"></script>
         <!-- plugins JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/plugins.js')}}"></script>
         
         @stack('js')
         <!-- main JS
            ============================================ -->
         <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
         <script>
            function imagePreviewModal(image_src){
               $("#show-img").attr('src',image_src);
               $(".image-modal").modal('show');
            }
         </script>
      </body>
      <!-- Mirrored from htmldemo.net/malias/malias/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jan 2023 15:38:42 GMT -->
   </html>