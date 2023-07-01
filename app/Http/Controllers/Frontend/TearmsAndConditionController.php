<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DynamicPages;
use Illuminate\Http\Request;

class TearmsAndConditionController extends Controller
{
    public function show(){
        $response = DynamicPages::where('page_name', 'terms_and_condition')->first();
        $data = [
            "response" => $response
        ];
        return view('frontend.pages.terms-and-condition', $data);
    }
}
