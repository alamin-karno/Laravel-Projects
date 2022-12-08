<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     function index(){
        return view('homepage');
    }

     function about(){
        return view('aboutpage');
    }

     function contact(){
        return view('contactpage');
    }
}
