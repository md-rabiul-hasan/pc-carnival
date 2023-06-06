<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{

    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
