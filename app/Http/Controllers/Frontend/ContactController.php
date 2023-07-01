<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){       
        return view('frontend.pages.contact-us.index');
    }

    public function store(Request $request){
        $contact_us          = new ContactUs();
        $contact_us->name    = $request->input('name');
        $contact_us->email   = $request->input('email');
        $contact_us->message = $request->input('message');
        $contact_us->save();

        return redirect()->back();
    }
}
