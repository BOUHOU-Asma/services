<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\services;
class ServicesController extends Controller
{
    //
    public function index(){
    $services =services:: all();
    return view("services.index" ,compact("services"));
    }
    public function show(Services $service)
    {
        return view('services.show', compact('service'));
    }
    public function create(){
       
        return view("services.create");
        }
}

