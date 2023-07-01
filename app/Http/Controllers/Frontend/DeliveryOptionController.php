<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DynamicPages;
use Illuminate\Http\Request;

class DeliveryOptionController extends Controller
{
    public function show(){
        $response = DynamicPages::where('page_name', 'delivery_option')->first();
        $data = [
            "response" => $response
        ];
        return view('frontend.pages.delivery-option', $data);
    }
}
