<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{

    public function singinForm(){
        return view('frontend.pages.auth.login');
    }


    public function registrationForm(){
        return view('frontend.pages.auth.registration');
    }
    
    public function registration(Request $request){  
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'phone'    => 'required|regex:/^(\+?88)?01[3-9]\d{8}$/|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // If validation fails, redirect back with error message
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        // Create a new user
        $user           = new User();
        $user->name     = $request->input('name');
        $user->phone    = $request->input('phone');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Log in the newly registered user
        Auth::login($user);

        if($request->has('auth')){
            return redirect()->route('index')->with('message', 'Registration Successful');
        }else{
            return redirect()->back()->with('message', 'Registration Successful');
        }
        
    }

    public function signin(Request $request){
        try {
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
                if($request->has('auth')){
                    return redirect()->route('index')->with('message','Login Successfully');
                }else{
                    return redirect()->back()->with('message','Login Successfully');
                }
                
            } else {
                return redirect()->back()->with('error','Invalid email or password.');
            }
        } catch (ValidationException $e) {
            return $e->errors();
        }
    }


    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('index')->with('message','Logout Successfully');
    }

}
