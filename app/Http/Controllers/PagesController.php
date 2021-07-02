<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function skill(){
        return view('pages.skill');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function welcome(){
        return view('welcome');
    }
}




