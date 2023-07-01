<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductFilterController extends Controller
{
    public function index(){     
        $search = request()->query('search');
        $items = request()->query('items');
        $per_page = 8;
        if($items){
            $per_page = $items;
        }

        $query = DB::table('products')
            ->select('id', 'title', 'slug', 'image', 'selling_price', 'current_price', 'discount_percentage', 'description')
            ->whereNull('deleted_at');
        
            if ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('tags', 'like', '%' . $search . '%');
                });
            }
            
        $sort = request()->query('sort');

        if ($sort) {
            if ($sort === 'name_asc') {
                $query->orderBy('title', 'asc');
            } elseif ($sort === 'name_desc') {
                $query->orderBy('title', 'desc');
            } elseif ($sort === 'price_asc') {
                $query->orderBy('current_price', 'asc');
            } elseif ($sort === 'price_desc') {
                $query->orderBy('current_price', 'desc');
            }
        }

        // Add availability condition
        $availability = request()->query('availability');
        if ($availability) {
            $availabilityArray = explode(',', $availability);
            $query->whereIn('availability', $availabilityArray);
        }

        // Add price range condition
        $priceFrom = request()->query('price_from');
        $priceTo = request()->query('price_to');
        if ($priceFrom && $priceTo) {
            $query->whereBetween('current_price', [$priceFrom, $priceTo]);
        }


        $results = $query->paginate($per_page);
        
        $data = [
            "products" => $results,
            "from" => $results->firstItem(),
            "to" => $results->lastItem(),
            "total" => $results->total(),
            "current_page" => $results->currentPage(),
            "last_page" => $results->lastPage(),
        ];
        

        return view('frontend.pages.product-filter.index', $data);
    }


    public function categoryFilter(){
        $brand       = request()->query('brand');
        $category = request()->query('category');
        $subCategory      = request()->query('sub-category');


        $search = request()->query('search');
        $items = request()->query('items');
        $per_page = 8;
        if($items){
            $per_page = $items;
        }

        $query = DB::table('products')
            ->select('id', 'title', 'slug', 'image', 'selling_price', 'current_price', 'discount_percentage', 'description')
            ->whereNull('deleted_at');
        
            if ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('tags', 'like', '%' . $search . '%');
                });
            }
            

        if ($brand) {
            $brand_info = Brand::where('slug', $brand)->first();
            $query->where('brand_id', $brand_info->id);
        }

        if ($category) {
            $category_info = Category::where('slug', $category)->first();
            $query->where('category_id', $category_info->id);
        }


        if ($subCategory) {
            $subCategory_info = SubCategory::where('slug', $subCategory)->first();
            $query->where('sub_category_id', $subCategory_info->id);
        }


        $sort = request()->query('sort');

        if ($sort) {
            if ($sort === 'name_asc') {
                $query->orderBy('title', 'asc');
            } elseif ($sort === 'name_desc') {
                $query->orderBy('title', 'desc');
            } elseif ($sort === 'price_asc') {
                $query->orderBy('current_price', 'asc');
            } elseif ($sort === 'price_desc') {
                $query->orderBy('current_price', 'desc');
            }
        }

        // Add availability condition
        $availability = request()->query('availability');
        if ($availability) {
            $availabilityArray = explode(',', $availability);
            $query->whereIn('availability', $availabilityArray);
        }

        // Add price range condition
        $priceFrom = request()->query('price_from');
        $priceTo = request()->query('price_to');
        if ($priceFrom && $priceTo) {
            $query->whereBetween('current_price', [$priceFrom, $priceTo]);
        }


        $results = $query->paginate($per_page);
        
        $data = [
            "products" => $results,
            "from" => $results->firstItem(),
            "to" => $results->lastItem(),
            "total" => $results->total(),
            "current_page" => $results->currentPage(),
            "last_page" => $results->lastPage(),
            "search_title" => $brand ?? $category ?? $subCategory
        ];

        return view('frontend.pages.product-filter.category-filter', $data);

        



    }


}
