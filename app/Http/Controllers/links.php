<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class links extends Controller
{
    public function home(){
        return view('HOME');
    }
    public function page1(){
        return view('about');
    }



    public function page2(){
        return view('SERVICE');
    }



    public function page3(){
        return view('CONTACT');
    }
}