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

    public function services(){
        return view('front.pages.services');
    }

    public function it_consulting(){
        return view('front.pages.it_consulting');
    }
    
    public function biz_automation(){
        return view('front.pages.biz_automation');
    }
    
    public function software_dev(){
        return view('front.pages.software_dev');
    }
    
    public function data_analysis(){
        return view('front.pages.data_analysis');
    }
    
    public function web_portal(){
        return view('front.pages.web_portal');
    }

    public function ecommerce(){
        return view('front.pages.ecommerce');
    }
    
    public function outcourced(){
        return view('front.pages.outcourced');
    }
    
    public function mobile_app(){
        return view('front.pages.mobile_app');
    }
    
    public function web_apps_dev(){
        return view('front.pages.web_apps_dev');
    }
    
    public function qa(){
        return view('front.pages.qa');
    }

    public function image_analysis(){
        return view('front.pages.image_analysis');
    }
    
    public function networking(){
        return view('front.pages.networking');
    }
    
    public function security(){
        return view('front.pages.security');
    }
    
    public function products(){
        return view('front.pages.products');
    }
    public function portfolio(){
        return view('front.pages.portfolio');
    }
    public function news(){
        return view('front.pages.news');
    }
    public function contact(){
        return view('front.pages.contact');
    }
    public function free_consultant(){
        return view('front.pages.free_consultant');
    }

}
