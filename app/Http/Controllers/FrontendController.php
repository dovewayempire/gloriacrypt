<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function aboutUs(){
        return view('frontend.pages.about');
    }

    public function contactUs(){
        return view('frontend.pages.contact');
    }
}
