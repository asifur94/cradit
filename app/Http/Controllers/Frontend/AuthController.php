<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Redirect;

class AuthController extends Controller
{
    // Login user and admin
    public function auth(Request $request)
    {
        $credentials = $request->validate([
        'email' => ['required'],
        'password' => ['required'],
        ]);
        $remember_me = $request->has('LoginRemember');

        if(Auth::guard('admin')->attempt($credentials, $remember_me)){
            flash('Welcome!');
            return redirect()->route('admin.dashboard');
        }else if(Auth::attempt($credentials, $remember_me)){
            flash('Welcome!');
            return redirect()->route('user.dashboard');
        }else{
            flash()->addError('The provided credentials do not match our records.');
            return back();
        }
    }

    //Register Account
    public function register(Request $request)
    {
        $request->validate([
            'email'=>'required|unique:users',
            'email2'=>'required',
            'password1'=>'required|string|min:9',
        ]);
        if($request->email != $request->email2){
            return back()->withErrors('Email and Confirm email dose not match');
        }

        $new = new User;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);

        if($new->save()){
            Auth::login($new);
            flash()->addSuccess('Your account has been created.');
            return redirect()->route('user.add_details');
        }        
        flash()->addError('Something Went wrong please try again later.');
        return back();        
    }

    //Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        flash('You are logged out!');
        return redirect::route('home');
    }
}
