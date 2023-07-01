<div class="product-banner-area">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header">
                <h2 class="section-head">Featured Category</h2>
                <p class="section-tag">Get Your Desired Product from Featured Category!</p>
             </div>
             <div class="section-content">
                <div class="cat-items-wrap">
                  @foreach($feature_categories as $feature_category)
                     <div class="cat-item">
                        <a href="{{ asset('product-filter/search?' . $feature_category->type . '=' . $feature_category->link) }}" class="cat-item-inner">
                           <span class="cat-icon"><img src="{{ asset($feature_category->image) }}" alt="{{ $feature_category->title }}" width="48" height="48"></span>
                           <p>{{ $feature_category->title }}</p>
                        </a>
                        
                     </div>
                  @endforeach                   
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>