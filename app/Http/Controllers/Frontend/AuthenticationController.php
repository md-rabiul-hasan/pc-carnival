<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{

    public function singinForm(){
        return view('frontend.pages.auth.login');
    }


    public function registrationForm(){
        return view('frontend.pages.auth.registration');
    }
    
    public function registration(Request $request){  
        // Create a new user
        $user           = new User();
        $user->name     = $request->input('name');
        $user->phone    = $request->input('phone');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Log in the newly registered user
        Auth::login($user);

        return redirect()->back();
    }

    public function signin(Request $request){
        try {
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
                return redirect()->back();
            } else {
                throw ValidationException::withMessages([
                    'email' => 'Invalid email or password.',
                ]);
            }
        } catch (ValidationException $e) {
            return $e->errors();
        }
    }


    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }

}
