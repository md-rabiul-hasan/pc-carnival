<div class="product-banner-area">
    <div class="container">
       <div class="row">
         @foreach($home_page_adds as $home_page_add)
          <div class="col-lg-4 ">
             <div class="single-product-banner">
                <a target="_blank" href="{{ $home_page_add->link }}"><img src="{{ asset($home_page_add->banner)}}" alt="Product Banner"></a>
                <div class="banner-text banner-1">
                   <h2>{{ $home_page_add->title }}</h2>
                </div>
             </div>
          </div>
         @endforeach
       </div>
    </div>
 </div>