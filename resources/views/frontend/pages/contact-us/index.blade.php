@extends('frontend.layouts')
@section('page-title', 'contact-us')

@section('frontend-content')
		<!-- Product Details Section Start -->
		<div class="product-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 order-lg-2 order-1">
						<!-- Start Map area -->
						<div class="map-area">
							<div id="googleMap" style="width:100%;height:350px;"></div>
						</div>
						<!-- End Map area -->
						<!-- Start Contact-Message -->
						<div class="contact-message">
							<fieldset>
								<form method="post" action="https://htmldemo.net/malias/malias/mail.php">
									<legend>Contact Form</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-horizontal">
												<div class="row mb-2">
													<label class="col-md-2 control-label"><sup>*</sup>Your Name</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="name"/>
													</div>
												</div>
											</div>
											<div class="form-group form-horizontal">
												<div class="row mb-2">
													<label class="col-md-2 control-label"><sup>*</sup>E-Mail Address</label>
													<div class="col-md-10">
														<input class="form-control" type="email" name="email"/>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-horizontal">
												<div class="row mb-2">
													<label class="col-md-2 control-label"><sup>*</sup>Enquiry</label>
													<div class="col-md-10">
														<textarea rows="4"  name="message" class="contact-us-message" ></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									
									<div class="buttons pull-right mb-2">
										<input class="btn btn-primary" type="submit" value="submit" name="submit"/>
									</div>
								</form>
							</fieldset>
						</div>
						<!-- End Contact-Message -->
					</div>
				</div>
				
			</div>
		</div>
		<!-- Product Details Section Start -->
@endsection

@push('js')
	<!-- Google Map js -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<script>
		function initialize() {
			var mapOptions = {
				zoom: 5,
				scrollwheel: false,
				center: new google.maps.LatLng(40.7058316, -74.2581978)
			};

			var map = new google.maps.Map(document.getElementById('googleMap'),
				mapOptions);

			var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			});
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@endpush