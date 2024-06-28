<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class ProjectsController extends Controller
{
    public function index(){
        $projects = projects::all();
        return view("projects.index", compact("projects"));
    }
}
