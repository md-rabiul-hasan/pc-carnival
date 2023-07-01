<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PcBuildComponent;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PcBuildController extends Controller
{
    public function index(){    
        
        $pc_build_components = PcBuildComponent::with('subCategory')->get();
        $pc_build            = session()->get('pc_build', []);
        $totalPrice          = 0;
        foreach ($pc_build as $component) {
            $totalPrice += $component['price'];
        }


        $data = [
            "pc_build_components" => [],
            "pc_build" => $pc_build,
            "totalPrice" => $totalPrice
        ];

        

      
        foreach ($pc_build_components as $pc_build_component) {
            $component_name = $pc_build_component->component_name;

            // Remove the 'component_name' key from the original object
            unset($pc_build_component->component_name);

            // Assign the object to the new data array using 'component_name' as the key
            $data['pc_build_components'][$component_name] = $pc_build_component;
        }

        return view('frontend.pages.pc-build.index', $data);
    }


    public function filter(){
        $type = request()->query('type');

        $items = request()->query('items');
        $per_page = 8;
        if($items){
            $per_page = $items;
        }

        $query = DB::table('products')
            ->select('id', 'title', 'slug', 'image', 'selling_price', 'current_price', 'discount_percentage', 'key_features')
            ->whereNull('deleted_at');
        
        if ($type) {
            $sub_category = SubCategory::where('slug', $type)->first();
            $query->where('sub_category_id', $sub_category->id);
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
        

        return view('frontend.pages.pc-build.product-filter', $data);
    }


    public function addToPcBuild(Request $request){
        $component_name = $request->input('component_name');
        $product_id = $request->input('product_id');
        $product = Product::find($product_id);
        
        if (!$product) {
            // Product not found, return an error message
            return response()->json(['error' => 'Product not found'], 404);
        }
        
        $pc_build = $request->session()->get('pc_build', []);

        // Item doesn't exist, add it to the cart
        $item = [
            'id'       => $product->id,
            "image"    => $product->image,
            'title'    => $product->title,
            'slug'     => $product->slug,
            'price'    => $product->current_price,
        ];
        
        $pc_build[$component_name] = $item;    
        
        $request->session()->put('pc_build', $pc_build);
        
        // Return a success message
        return response()->json(['message' => 'component added for pc build'], 200);


    }


    public function removeToPcBuild(Request $request){
        $component_name = $request->input("component_name");
        $pc_build = session()->get('pc_build', []);
        
        if (isset($pc_build[$component_name])) {
            // Remove the cart item
            unset($pc_build[$component_name]);
            
            // Update the cart in the session
            session()->put('pc_build', $pc_build);
            
            // Return a success response
            return response()->json(['message' => 'Component removed from pc build'], 200);
        }
        
        // Return an error response if the cart item doesn't exist
        return response()->json(['error' => 'component item not found'], 404);
    }

    public function clearAllPcBuild(Request $request){
        // Clear all pc_build sessions
        Session::forget('pc_build');
        return response()->json(['message' => 'Pc build cleared'], 200);
    }



    public function addToCartPcBuild(){
        $pc_build = session()->get('pc_build', []);
        $normalizedArray = array_values($pc_build);
        for($i=0; $i<count($pc_build); $i++){
              
        $cart = session()->get('cart', []);
        
            if (isset($cart[$normalizedArray[$i]['id']])) {
                // Item already exists, increment the quantity
                $cart[$normalizedArray[$i]['id']]['quantity']+= 1;
            } else {
                // Item doesn't exist, add it to the cart
                $item = [
                    'id'       => $normalizedArray[$i]['id'],
                    "image"    =>$normalizedArray[$i]['image'],
                    'title'    => $normalizedArray[$i]['title'],
                    'slug'     => $normalizedArray[$i]['slug'],
                    'price'    => $normalizedArray[$i]['price'],
                    'quantity' => 1
                ];
                
                $cart[$normalizedArray[$i]['id']] = $item;
            }
            
            session()->put('cart', $cart);
        }
    }

}
