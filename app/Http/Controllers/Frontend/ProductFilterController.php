<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
            $query->where('title', 'like', '%' . $search . '%');
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
}
