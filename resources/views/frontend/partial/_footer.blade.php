<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
       <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
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
                        <p><a  href="mailto:admin@bootexperts.com"><span class="footer-email">admin@bootexperts.com</span></a></p>
                     </li>
                     <li>
                        <i class="fa fa-phone"></i>
                        <span>01234-56789</span> <br> <span> 01234-56789</span>
                     </li>
                  </ul>
               </nav>
            </div>
             <div class="col-12 col-md-6 col-lg-4">
                <div class="footer-title">
                   <h5>Customer Service</h5>
                </div>
                <nav>
                   <ul class="footer-content">
                      <li><a href="{{ route('contact-us.index') }}">Contact Us</a></li>
                      <li><a href="{{ route('about-us.index') }}">About Us</a></li>
                      <li><a href="{{ route('privacy-policy.show') }}">Privacy Policy</a></li>
                      <li><a href="{{ route('terms-and-condition.show') }}">Terms & Conditions</a></li>
                   </ul>
                </nav>
             </div>
             <div class="col-12 col-md-6 col-lg-4">
                <div class="footer-title">
                   <h5>Others</h5>
                </div>
                <nav>
                   <ul class="footer-content">
                      <li><a href="{{ route('brand.index') }}">Brands</a></li>
                      <li><a href="my-account.html">My Account</a></li>
                      <li><a href="{{ route('manage.order') }}">Order History</a></li>
                      <li><a href="{{ route('delivery-option.show') }}">Delivery Information</a></li>
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
                   <p>Copyright &copy; <a href="https://www.linkedin.com/in/md-rabiul-hasan-0904931b3/" target="_blank"> Rabiul Hasan</a> All
                      rights reserved.
                   </p>
                 
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

         <!-- axios
            ============================================ -->
         <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

         <!-- Toaster
            ============================================ -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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

         <script>
            function addToCart(id, quantity = 1) {
               axios.post('{{ route("cart.add_to_cart") }}', {
                        product_id: id,
                        product_quantity: quantity
                  })
                  .then(function(response) {
                        toastr.success("This product has been added to your cart", 'Success');
                        getCartCount(); // Update cart count
                  })
                  .catch(function(error) {
                        if (error.response) {
                           toastr.error(error.response.data.error, 'Error');
                           
                        } else {
                           toastr.error("Product add to cart Failed", 'Error');
                        }
                  });
            }
            function getCartCount() {
               
               axios.get('{{ route("cart.count") }}')
                  .then(function(response) {
                     if(response.data.count === 0){
                        $('#cart_badge').hide();
                     }else{
                        $('#cart_badge').show();
                        $('#cart_badge').text(response.data.count);
                     }
                     
                  })
                  .catch(function(error) {
                  });
            }
            getCartCount();
         </script>

         <script>
            $(function() {
               $('#searchInput').keypress(function(event) {
                  if (event.keyCode === 13) { // 13 is the keycode for Enter key
                     event.preventDefault(); // Prevent form submission
                     var searchData = $(this).val();
                     // Redirect to another route with the specific data
                     window.location.href = '/product-filter?search=' + encodeURIComponent(searchData);
                  }
               });
            });
         </script>


      </body>
      <!-- Mirrored from htmldemo.net/malias/malias/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jan 2023 15:38:42 GMT -->
   </html>