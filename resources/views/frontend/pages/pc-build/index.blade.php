@extends('frontend.layouts')
@section('page-title', 'pc-build')

@section('frontend-content')

		<!-- Product Details Section Start -->
		<div class="product-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="#">PC Build</a></li>
						</ul>
					</div>
				</div>
				<div id="extension-pc-builder-pc-builder" class="row section extension-pc-builder-pc-builder">
					<div class="col-md-12">
						<div class="content ws-box p-15">
							<div id="pc-builder-container" class="pc-builder-container">
								<div class="row header-container">
									<div class="col-md-3">
										<div class="logo"><img src="{{ asset('frontend/assets/img/a8.png')}}" style="margin-right: auto;
											width: 182px;
											height: 15px;
											top: somevalue-px;
											left: somevalue-px;
											text-align: center;
											z-index: 2;"></div>
									</div>
									<div class="col-md-9">
										<div id="menu-container" class="text-right">
											<span class="button-container"><button type="button"
													onclick="if (!window.__cfRLUnblockHandlers) return false; pc_builder.cart($('#input-amount').val(), $('#input-weight').val(), $('#input-build').val());"
													id="pc-builder-cart" class="pc-builder-button"><i
														class="fa fa-shopping-cart fa-fw"></i><span
														class="hidden-xs hidden-sm hidden-md"><br>Add to
														Cart</span></button></span>
											<span class="button-container"><button type="button"
													onclick="if (!window.__cfRLUnblockHandlers) return false; pc_builder.save('');"
													id="pc-builder-save" class="pc-builder-button"><i
														class="fa fa-save fa-fw"></i><span
														class="hidden-xs hidden-sm hidden-md"><br>Save
														Build</span></button></span>
											<span class="button-container"><button type="button"
													id="pc-builder-screenshot" class="pc-builder-button"><i
														class="fa fa-picture-o fa-fw"></i><span
														class="hidden-xs hidden-sm hidden-md"><br>Screenshot</span></button></span>
											<span class="button-container"><button type="button"
													onclick="if (!window.__cfRLUnblockHandlers) return false; pc_builder.clear('');"
													id="pc-builder-clear" class="pc-builder-button"><i
														class="fa fa-refresh fa-fw"></i><span
														class="hidden-xs hidden-sm hidden-md"><br>Clear
														All</span></button></span>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-9"></div>
									<div class="col-md-3">
										<div id="total-container" class="text-center">
											<div class="total-amount">
												<div>Total Amount</div>
												<div><span></span>0৳</div>
											</div>
										</div>
									</div>
								</div>
								<form class="form-horizontal" id="form-pc-builder" style="margin-top: 15px;">
									<input type="hidden" name="amount" value="0" id="input-amount">
									<input type="hidden" name="weight" value="0" id="input-weight">
									<input type="hidden" name="build" value="" id="input-build">
									<div>
										<div class="pc-builder-category-container">
											<h4>Core Components</h4>
											<div>
												<div id="pc-builder-component-container-1"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-1" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/cpu-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-1"
														class="component-name-product">
														<div id="pc-builder-component-name-1-1" class="component-name">
															Processor <span class="text-danger_txt">*</span></div>
														<div id="pc-builder-component-product-1-1"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-1"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=1"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-2"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-2" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/motherboard-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-2"
														class="component-name-product">
														<div id="pc-builder-component-name-1-2" class="component-name">
															Motherboard <span class="text-danger_txt">*</span></div>
														<div id="pc-builder-component-product-1-2"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-2"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=2"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-3"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-3" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/graphic-card-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-3"
														class="component-name-product">
														<div id="pc-builder-component-name-1-3" class="component-name">
															Graphics Card </div>
														<div id="pc-builder-component-product-1-3"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-3"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=3"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-8"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-8" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/cooler-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-8"
														class="component-name-product">
														<div id="pc-builder-component-name-1-8" class="component-name">
															CPU Cooler </div>
														<div id="pc-builder-component-product-1-8"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-8"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=8"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-9"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-9" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/memory-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-9"
														class="component-name-product">
														<div id="pc-builder-component-name-1-9" class="component-name">
															RAM-1 <span class="text-danger_txt">*</span></div>
														<div id="pc-builder-component-product-1-9"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-9"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=9"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-10"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-10" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ram-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-10"
														class="component-name-product">
														<div id="pc-builder-component-name-1-10" class="component-name">
															RAM-2 </div>
														<div id="pc-builder-component-product-1-10"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-10"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=10"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-11"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-11" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ssd-drive-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-11"
														class="component-name-product">
														<div id="pc-builder-component-name-1-11" class="component-name">
															SSD </div>
														<div id="pc-builder-component-product-1-11"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-11"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=11"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-12"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-12" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/hdd-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-12"
														class="component-name-product">
														<div id="pc-builder-component-name-1-12" class="component-name">
															HDD </div>
														<div id="pc-builder-component-product-1-12"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-12"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=12"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-13"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-13" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/power-supply-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-13"
														class="component-name-product">
														<div id="pc-builder-component-name-1-13" class="component-name">
															Power Supply </div>
														<div id="pc-builder-component-product-1-13"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-13"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=13"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-14"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-1-14" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/computer-case-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-1-14"
														class="component-name-product">
														<div id="pc-builder-component-name-1-14" class="component-name">
															Casing </div>
														<div id="pc-builder-component-product-1-14"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-1-14"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=14"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
											</div>
										</div>
										<div class="pc-builder-category-container">
											<h4>Peripherals &amp; Others</h4>
											<div>
												<div id="pc-builder-component-container-7"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-2-7" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/monitor-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-2-7"
														class="component-name-product">
														<div id="pc-builder-component-name-2-7" class="component-name">
															Monitor </div>
														<div id="pc-builder-component-product-2-7"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-2-7"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=7"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-6"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-2-6" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/fan-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-2-6"
														class="component-name-product">
														<div id="pc-builder-component-name-2-6" class="component-name">
															Case Fan </div>
														<div id="pc-builder-component-product-2-6"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-2-6"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=6"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-15"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-2-15" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ups2-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-2-15"
														class="component-name-product">
														<div id="pc-builder-component-name-2-15" class="component-name">
															UPS </div>
														<div id="pc-builder-component-product-2-15"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-2-15"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=15"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-16"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-2-16" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/antivirus-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-2-16"
														class="component-name-product">
														<div id="pc-builder-component-name-2-16" class="component-name">
															Anti Virus </div>
														<div id="pc-builder-component-product-2-16"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-2-16"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=16"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
											</div>
										</div>
										<div class="pc-builder-category-container">
											<h4>Accessories</h4>
											<div>
												<div id="pc-builder-component-container-4"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-3-4" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/mouse-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-3-4"
														class="component-name-product">
														<div id="pc-builder-component-name-3-4" class="component-name">
															Mouse </div>
														<div id="pc-builder-component-product-3-4"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-3-4"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=4"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-5"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-3-5" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/keyboard-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-3-5"
														class="component-name-product">
														<div id="pc-builder-component-name-3-5" class="component-name">
															Keyboard </div>
														<div id="pc-builder-component-product-3-5"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-3-5"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=5"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
												<div id="pc-builder-component-container-17"
													class="pc-builder-component-container clearfix"
													data-product-selected="no">
													<div id="pc-builder-component-image-3-17" class="component-image">
														<img width="48" height="48"
															src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/headphones-48x48.webp"
															class="thumbnail">
													</div>
													<div id="pc-builder-component-name-product-3-17"
														class="component-name-product">
														<div id="pc-builder-component-name-3-17" class="component-name">
															Headphone </div>
														<div id="pc-builder-component-product-3-17"
															class="component-product">
															<div class="component-product-empty">&nbsp;</div>
														</div>
													</div>
													<div id="pc-builder-component-choose-3-17"
														class="component-choose hidden-xs hidden-sm">
														<a href="https://www.techlandbd.com/index.php?route=extension/pc_builder/pc_builder_search&amp;pc_builder_component_id=17"
															class="btn btn-md btn-primary hidden-xs hidden-sm"><span
																class="hidden-xs hidden-sm hidden-md">Choose</span></a>
													</div>

												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Product Details Section Start -->
@endsection