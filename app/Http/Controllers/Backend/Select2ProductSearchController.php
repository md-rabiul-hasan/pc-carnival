<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select2ProductSearchController extends Controller
{
    public function select2SearchProduct(Request $request){
        if(!empty($request->input("searchTerm"))){
            $products = DB::table('products')
            ->select('id', 'title as text')
            ->where('title', 'LIKE', '%' . $request->searchTerm . '%')
            ->get();    
            return response()->json($products);
        }else {
            return response()->json([]);
        }
    }
}
