<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    public function index(){
        $users = users::all();
        return view("users.index", compact("users"));
    }
}
