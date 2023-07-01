<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DynamicPages;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function show(){
        $response = DynamicPages::where('page_name', 'privacy_policy')->first();
        $data = [
            "response" => $response
        ];
        return view('frontend.pages.privacy-policy', $data);
    }
}
