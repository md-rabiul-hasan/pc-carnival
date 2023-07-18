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
      <div id="extension-pc-builder-pc-builder" class="row screenshotArea section extension-pc-builder-pc-builder">
         <div class="col-md-12">
            <div class="content ws-box p-15">
               <div id="pc-builder-container" class="pc-builder-container">
                  <div class="row header-container">
                     <div class="col-md-3">
                        <div class="logo"><img src="{{ asset('frontend/assets/img/logo2.png')}}" style="margin-right: auto;
                           width: 182px;
                           height: 20px;
                           top: somevalue-px;
                           left: somevalue-px;
                           text-align: center;
                           z-index: 2;"></div>
                     </div>
                     <div class="col-md-9">
                        <div id="menu-container" class="text-right">
                           <span class="button-container"><button type="button"
                              onclick="addToCartPcBuildComponents()"
                              id="pc-builder-cart" class="pc-builder-button"><i
                              class="fa fa-shopping-cart fa-fw"></i><span
                              class="hidden-xs hidden-sm hidden-md"><br>Add to
                           Cart</span></button></span>
                           <span class="button-container"><button type="button" onclick="captureBtn()"
                              id="pc-builder-screenshot " class="pc-builder-button"><i
                              class="fa fa-picture-o fa-fw"></i><span
                              class="hidden-xs hidden-sm hidden-md"><br>Screenshot</span></button></span>
                           <span class="button-container"><button type="button" onclick="clearAllPcBuildComponent()"
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
                              <div><span></span> {{ number_format($totalPrice,0) }}৳</div>
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
                                    @if(isset($pc_build['processor']) && !empty($pc_build['processor']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['processor']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/cpu-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-1"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-1" class="component-name ">
                                       Processor <span class="text-danger_txt">*</span>
                                       @if(isset($pc_build['processor']) && !empty($pc_build['processor']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['processor']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('processor')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-1"
                                       class="component-product">
                                       @if(isset($pc_build['processor']) && !empty($pc_build['processor']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['processor']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-1"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'processor', 'type' => $pc_build_components['processor']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-2"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-2" class="component-image">
                                    @if(isset($pc_build['motherboard']) && !empty($pc_build['motherboard']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['motherboard']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/motherboard-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-2"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-2" class="component-name">
                                       Motherboard <span class="text-danger_txt">*</span>
                                       @if(isset($pc_build['motherboard']) && !empty($pc_build['motherboard']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['motherboard']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('motherboard')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-2"
                                       class="component-product">
                                       @if(isset($pc_build['motherboard']) && !empty($pc_build['motherboard']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['motherboard']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-2"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'motherboard', 'type' => $pc_build_components['motherboard']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-3"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-3" class="component-image">
                                    @if(isset($pc_build['graphics_card']) && !empty($pc_build['graphics_card']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['graphics_card']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/graphic-card-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-3"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-3" class="component-name">
                                       Graphics Card 
                                       @if(isset($pc_build['graphics_card']) && !empty($pc_build['graphics_card']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['graphics_card']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('graphics_card')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-3"
                                       class="component-product">
                                       @if(isset($pc_build['graphics_card']) && !empty($pc_build['graphics_card']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['graphics_card']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-3"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'graphics_card', 'type' => $pc_build_components['graphics_card']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-8"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-8" class="component-image">
                                    @if(isset($pc_build['cpu_cooler']) && !empty($pc_build['cpu_cooler']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['cpu_cooler']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/cooler-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-8"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-8" class="component-name">
                                       CPU Cooler @if(isset($pc_build['cpu_cooler']) && !empty($pc_build['cpu_cooler']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['cpu_cooler']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('cpu_cooler')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-8"
                                       class="component-product">
                                       @if(isset($pc_build['cpu_cooler']) && !empty($pc_build['cpu_cooler']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['cpu_cooler']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-8"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'cpu_cooler', 'type' => $pc_build_components['cpu_cooler']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-9"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-9" class="component-image">
                                    @if(isset($pc_build['ram_1']) && !empty($pc_build['ram_1']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['ram_1']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/memory-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-9"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-9" class="component-name">
                                       RAM-1 <span class="text-danger_txt">*</span>
                                       @if(isset($pc_build['ram_1']) && !empty($pc_build['ram_1']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['ram_1']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('ram_1')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-9"
                                       class="component-product">
                                       @if(isset($pc_build['ram_1']) && !empty($pc_build['ram_1']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['ram_1']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-9"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'ram_1', 'type' => $pc_build_components['ram_1']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-10"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-10" class="component-image">
                                    @if(isset($pc_build['ram_2']) && !empty($pc_build['ram_2']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['ram_2']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ram-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-10"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-10" class="component-name">
                                       RAM-2 
                                       @if(isset($pc_build['ram_2']) && !empty($pc_build['ram_2']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['ram_2']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('ram_2')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-10"
                                       class="component-product">
                                       @if(isset($pc_build['ram_2']) && !empty($pc_build['ram_2']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['ram_2']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-10"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'ram_2', 'type' => $pc_build_components['ram_2']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-11"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-11" class="component-image">
                                    @if(isset($pc_build['storage']) && !empty($pc_build['storage']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['storage']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ssd-drive-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-11"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-11" class="component-name">
                                       Storage 
                                       @if(isset($pc_build['storage']) && !empty($pc_build['storage']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['storage']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('storage')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-11"
                                       class="component-product">
                                       @if(isset($pc_build['storage']) && !empty($pc_build['storage']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['storage']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-11"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'storage', 'type' => $pc_build_components['storage']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-13"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-13" class="component-image">
                                    @if(isset($pc_build['power_supply']) && !empty($pc_build['power_supply']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['power_supply']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/power-supply-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-13"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-13" class="component-name">
                                       Power Supply @if(isset($pc_build['power_supply']) && !empty($pc_build['power_supply']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['power_supply']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('power_supply')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-13"
                                       class="component-product">
                                       @if(isset($pc_build['power_supply']) && !empty($pc_build['power_supply']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['power_supply']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-13"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'power_supply', 'type' => $pc_build_components['power_supply']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-14"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-1-14" class="component-image">
                                    @if(isset($pc_build['casing']) && !empty($pc_build['casing']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['casing']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/computer-case-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-1-14"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-1-14" class="component-name">
                                       Casing 		  @if(isset($pc_build['casing']) && !empty($pc_build['casing']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['casing']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('casing')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-1-14"
                                       class="component-product">
                                       @if(isset($pc_build['casing']) && !empty($pc_build['casing']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['casing']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-1-14"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'casing', 'type' => $pc_build_components['casing']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
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
                                    @if(isset($pc_build['monitor']) && !empty($pc_build['monitor']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['monitor']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/monitor-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-2-7"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-2-7" class="component-name">
                                       Monitor  @if(isset($pc_build['monitor']) && !empty($pc_build['monitor']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['monitor']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('monitor')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-2-7"
                                       class="component-product">
                                       @if(isset($pc_build['monitor']) && !empty($pc_build['monitor']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['monitor']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-2-7"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'monitor', 'type' => $pc_build_components['monitor']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-6"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-2-6" class="component-image">
                                    @if(isset($pc_build['case_fan']) && !empty($pc_build['case_fan']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['case_fan']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/fan-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-2-6"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-2-6" class="component-name">
                                       Case Fan  @if(isset($pc_build['case_fan']) && !empty($pc_build['case_fan']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['case_fan']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('case_fan')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-2-6"
                                       class="component-product">
                                       @if(isset($pc_build['case_fan']) && !empty($pc_build['case_fan']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['case_fan']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-2-6"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'case_fan', 'type' => $pc_build_components['case_fan']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-15"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-2-15" class="component-image">
                                    @if(isset($pc_build['ups']) && !empty($pc_build['ups']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['ups']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/ups2-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-2-15"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-2-15" class="component-name">
                                       UPS  @if(isset($pc_build['ups']) && !empty($pc_build['ups']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['ups']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('ups')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-2-15"
                                       class="component-product">
                                       @if(isset($pc_build['ups']) && !empty($pc_build['ups']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['ups']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-2-15"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'ups', 'type' => $pc_build_components['ups']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-16"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-2-16" class="component-image">
                                    @if(isset($pc_build['anti_virus']) && !empty($pc_build['anti_virus']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['anti_virus']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/antivirus-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-2-16"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-2-16" class="component-name">
                                       Anti Virus @if(isset($pc_build['anti_virus']) && !empty($pc_build['anti_virus']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['anti_virus']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('anti_virus')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-2-16"
                                       class="component-product">
                                       @if(isset($pc_build['anti_virus']) && !empty($pc_build['anti_virus']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['anti_virus']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-2-16"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'anti_virus', 'type' => $pc_build_components['anti_virus']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
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
                                    @if(isset($pc_build['mouse']) && !empty($pc_build['mouse']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['mouse']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/mouse-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-3-4"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-3-4" class="component-name">
                                       Mouse @if(isset($pc_build['mouse']) && !empty($pc_build['mouse']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['mouse']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('mouse')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-3-4"
                                       class="component-product">
                                       @if(isset($pc_build['mouse']) && !empty($pc_build['mouse']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['mouse']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-3-4"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'mouse', 'type' => $pc_build_components['mouse']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-5"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-3-5" class="component-image">
                                    @if(isset($pc_build['keyboard']) && !empty($pc_build['keyboard']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['keyboard']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/keyboard-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-3-5"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-3-5" class="component-name">
                                       Keyboard @if(isset($pc_build['keyboard']) && !empty($pc_build['keyboard']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['keyboard']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('keyboard')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-3-5"
                                       class="component-product">
                                       @if(isset($pc_build['keyboard']) && !empty($pc_build['keyboard']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['keyboard']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-3-5"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'keyboard', 'type' => $pc_build_components['keyboard']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
                                 </div>
                              </div>
                              <div id="pc-builder-component-container-17"
                                 class="pc-builder-component-container clearfix"
                                 data-product-selected="no">
                                 <div id="pc-builder-component-image-3-17" class="component-image">
                                    @if(isset($pc_build['headphone']) && !empty($pc_build['headphone']))
                                    <img width="48" height="48" class="thumbnail" src="{{ asset($pc_build['headphone']['image']) }}">
                                    @else
                                    <img width="48" height="48" class="thumbnail" src="https://www.techlandbd.com/image/cache/wp/gp/AAA-Offer/pc_builder/headphones-48x48.webp">
                                    @endif
                                 </div>
                                 <div id="pc-builder-component-name-product-3-17"
                                    class="component-name-product pc-build-component">
                                    <div id="pc-builder-component-name-3-17" class="component-name">
                                       Headphone @if(isset($pc_build['headphone']) && !empty($pc_build['headphone']))
                                       <div class="price-box pc-build-price">
                                          <span class="price">{{ number_format($pc_build['headphone']['price'],0) }}৳</span>
                                          <button onclick="removeFromPcBuildComponent('headphone')"><i class="fa fa-trash component_remove"></i></button>
                                       </div>
                                       @endif
                                    </div>
                                    <div id="pc-builder-component-product-3-17"
                                       class="component-product">
                                       @if(isset($pc_build['headphone']) && !empty($pc_build['headphone']))
                                       <div class="component-product-empty component_selected">{{ $pc_build['headphone']['title']}}</div>
                                       @else
                                       <div class="component-product-empty">&nbsp;</div>
                                       @endif
                                    </div>
                                 </div>
                                 <div id="pc-builder-component-choose-3-17"
                                    class="component-choose hidden-xs hidden-sm">
                                    <a href="{{ route('pc-build.filter', ['component' => 'headphone', 'type' => $pc_build_components['headphone']->subCategory->slug]) }}"
                                       class="btn btn-md btn-primary hidden-xs hidden-sm"><span
                                       class="hidden-xs hidden-sm hidden-md">Choose</span>
                                       <span
                                       class="search"><i class="fa fa-search"></i></span></a>
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
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
<script>
   function removeFromPcBuildComponent(component_name){
   	axios.post('{{ route("remove-to-pc-build") }}', {
   		component_name: component_name
   	})
   	.then(function(response) {
   		window.location.href = '{{ route("pc-build.index") }}';
   	})
   	.catch(function(error) {
   		console.log("error", error);
   	});
   }

   function clearAllPcBuildComponent(){
   	axios.post('{{ route("clear-all-pc-build") }}')
   	.then(function(response) {
   		window.location.href = '{{ route("pc-build.index") }}';
   	})
   	.catch(function(error) {
   		console.log("error", error);
   	});
   }

   function captureBtn(){
	html2canvas($('.screenshotArea')[0]).then(function(canvas) {
      // Convert the canvas to a data URL
      var dataURL = canvas.toDataURL();

      // Create a temporary link element
      var link = document.createElement('a');
      link.href = dataURL;
      link.download = 'screenshot.png';

      // Trigger the download
      link.click();
    });
   }

   function addToCartPcBuildComponents(){
	axios.post('{{ route("add-to-cart-pc-build") }}')
   	.then(function(response) {
   		window.location.href = '{{ route("cart.index") }}';
   	})
   	.catch(function(error) {
   		console.log("error", error);
   	});
   }



</script>
@endpush