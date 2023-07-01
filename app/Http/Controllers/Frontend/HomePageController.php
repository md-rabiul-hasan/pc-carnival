<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FeatureCategory;
use App\Models\HomePageAdd;
use App\Models\HomePageProduct;
use App\Models\SubCategory;

class HomePageController extends Controller
{
    public function index(){

        $menus = [];
        $categories = Category::with('subCategories.products.brand')->get();
            
        foreach ($categories as $category) {
            $menu = [
                "id" => $category->id,
                "slug" => $category->slug,
                "title" => $category->title,
                "sub_category" => []
            ];
        
            foreach ($category->subCategories as $sub_category) {
                $subCategory = [
                    "id" => $sub_category->id,
                    "slug" => $sub_category->slug,
                    "title" => $sub_category->title,
                    "brands" => $sub_category->products->groupBy('brand_id')->pluck('0.brand')
                ];
        
                $menu['sub_category'][] = $subCategory;
            }
        
            $menus[] = $menu;
        }   



        

        // return $menus;

        $data =[
            "latest_products"  => HomePageProduct::with('product')->where('status', 'LATEST')->get(),
            "popular_products" => HomePageProduct::with('product')->where('status', 'POPULAR')->get(),
            "best_products"    => HomePageProduct::with('product')->where('status', 'BEST')->get(),
            "home_page_adds"   => HomePageAdd::all(),
            "feature_categories" => FeatureCategory::get()
        ];
        return view('frontend.pages.home.index', $data);
    }
}
