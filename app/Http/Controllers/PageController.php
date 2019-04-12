<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
       return view('about');
    }
    public function contact(){
       return view('contact');
    }
}
