<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.pages.home');
    }
    public function about(){
        return view('front.pages.about');
    }
    public function team(){
        return view('front.pages.team');
    }
    public function testimonial(){
        return view('front.pages.testimonial');
    }
    public function faq(){
        return view('front.pages.faq');
    }
    public function whyus(){
        return view('front.pages.whyus');
    }
}
