@extends('frontend.layouts')
@section('page-title', 'check-out')

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
								<div class="col-lg-12">
									<div class="cart-title">
										<h2 class="entry-title">Checkout</h2>
									</div>
									<!-- Accordion start -->
									<div class="accordion" id="accordion">
										<!-- Start 1 Checkout-options -->
										<div class="card">
											<div class="card-header" id="headingOne">
												<h4 class="card-title">
													<a class="accordion-trigger" data-bs-toggle="collapse"
														data-bs-target="#collapseOne" aria-expanded="true"
														aria-controls="collapseOne">Step 1: Account Information <i
															class="fa fa-caret-down"></i> </a>
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
																		<input type="radio" value="register"
																			name="account" checked />
																		Register Account
																	</label>
																</div>
																<div class="radio">
																	<label>
																		<input type="radio" value="guest"
																			name="account" />
																		Login
																	</label>
																</div>
																<p>By creating an account you will be able to shop
																	faster, be up to date on an order's status, and keep
																	track of the orders you have previously made.</p>
																<input type="submit" class="btn btn-primary"
																	value="Continue" />
															</div>
														</div>
														<div class="col-lg-6 col-12">
															<div class="checkout-collapse">
																<h3 class="title-group-3 gfont-1">Returning Customer
																</h3>
																<p>I am a returning customer</p>
																<div class="form-group">
																	<label>E-mail</label>
																	<input type="email" class="form-control"
																		name="email" />
																</div>
																<div class="form-group">
																	<label>Password</label>
																	<input type="password" class="form-control" />
																	<a href="#">Forgotten Password</a>
																</div>
																<input type="submit" class="btn btn-primary"
																	value="Login" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Checkout-options -->
										<!-- Start 3 shipping-Address -->
										<div class="card">
											<div class="card-header" id="headingThree">
												<h4 class="card-title">
													<a class="accordion-trigger" data-bs-toggle="collapse"
														data-bs-target="#collapseThree" aria-expanded="false"
														aria-controls="collapseThree">Step 2: Delivery Details <i
															class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
												data-bs-parent="#accordion">
												<div class="card-body">
													<div class="form-horizontal">
														<div class="form-group row">
															<label class="col-md-2 control-label"><sup>*</sup>First
																Name</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="First Name" name="firstname" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label"><sup>*</sup>Last
																Name</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="Last Name" name="lastname" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label">Company</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="Company" name="company" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label"><sup>*</sup>Address
																1</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="Address 1" name="address_1" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label">Address 2</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="Address 2" name="address_2" />
															</div>
														</div>
														<div class="form-group row">
															<label
																class="col-md-2 control-label"><sup>*</sup>City</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="City" name="city" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label"><sup>*</sup>Post
																Code</label>
															<div class="col-md-10">
																<input type="text" class="form-control"
																	placeholder="Post Code" name="postcode" />
															</div>
														</div>
														<div class="form-group row">
															<label
																class="col-md-2 control-label"><sup>*</sup>Country</label>
															<div class="col-md-10">
																<select class="form-control">
																	<option> --- Please Select --- </option>
																	<option> Bangladesh </option>
																	<option> United States </option>
																	<option> United Kingdom </option>
																	<option> Canada </option>
																	<option> Malaysia </option>
																	<option> United Arab Emirates </option>
																</select>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-md-2 control-label"><sup>*</sup>Region /
																State</label>
															<div class="col-md-10">
																<select class="form-control">
																	<option> --- Please Select --- </option>
																	<option> Dhaka </option>
																	<option> New York </option>
																	<option> London </option>
																	<option> Canada </option>
																	<option> Malaysia </option>
																	<option> United Arab Emirates </option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End shipping-Address -->
										<!-- Start 6 Checkout-Confirm -->
										<div class="card">
											<div class="card-header" id="headingSix">
												<h4 class="card-title">
													<a class="accordion-trigger" data-bs-toggle="collapse"
														data-bs-target="#collapseSix" aria-expanded="false"
														aria-controls="collapseSix">Step 3: Confirm Order <i
															class="fa fa-caret-down"></i> </a>
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
																	<td class="text-left">Model</td>
																	<td class="text-left">Quantity</td>
																	<td class="text-left">Unit Price</td>
																	<td class="text-left">Total</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-left">
																		<a href="#">More-Or-Less</a>
																	</td>
																	<td class="text-left">Product 14</td>
																	<td class="text-left">2</td>
																	<td class="text-left">$100.00</td>
																	<td class="text-left">$200.00</td>
																</tr>
																<tr>
																	<td class="text-left">
																		<a href="#">Aliquam Consequat</a>
																	</td>
																	<td class="text-left">Product 21</td>
																	<td class="text-left">2</td>
																	<td class="text-left">$45.00</td>
																	<td class="text-left">$90.00</td>
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Sub-Total:</strong>
																	</td>
																	<td class="text-right">$290.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
															</tfoot>
														</table>
													</div>
													<div class="buttons pull-right">
														<input type="button" class="btn btn-primary"
															value="Confirm Order" />
													</div>
												</div>
											</div>
										</div>
										<!-- End Checkout-Confirm -->
									</div>
									<!-- Accordion end -->
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->
					</div>
				</div>
			</div>
		</div>
		<!-- Product Details Section Start -->
@endsection