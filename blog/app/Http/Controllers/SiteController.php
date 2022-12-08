<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     function index(){
        return 'This is the homepage from SiteController';
    }

     function about(){
        return 'This is the aboutpage from SiteController';
    }

     function contact(){
        return 'This is the contactpage from SiteController';
    }
}
