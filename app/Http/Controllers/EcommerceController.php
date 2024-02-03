<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    function home(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function gallery(){
        return view('gallery');
    }
    function contact(){
        return view('contact');
    }
}
