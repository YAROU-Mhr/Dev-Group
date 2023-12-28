<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('Front.about');
    }

    public function blog(){
        return view('Front.blog');
    }

    public function blogDetails(){
        return view('Front.blog-detail');
    }

    public function contact(){
        return view('Front.contact');
    }

    public function feature(){
        return view('Front.feature');
    }

    public function price(){
        return view('Front.price');
    }

    public function quote(){
        return view('Front.quote');
    }

    public function services(){
        return view('Front.service');
    }

    public function mhrDevTeam(){
        return view('Front.team');
    }

    public function testimonial(){
        return view('Front.testimonial');
    }
}
