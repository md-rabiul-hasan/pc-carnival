<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\DynamicPages;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\SubCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {                               
            $categories = Category::with('subCategories.products.brand')->get();
            $menus = [];
            
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


            $cartItems = Session::get('cart', []);
            $cartItemCount = count($cartItems);
            $view->with('cartItemCount', $cartItemCount);
            $view->with('menus', $menus);
        });
    }
}
