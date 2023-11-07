<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
    public function signup()
    {
        return view('frontend.pages.signup');
    }
}
