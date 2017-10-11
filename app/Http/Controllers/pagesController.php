<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {

        $projects = \App\Project::all();
        return view('pages/home')
            ->with('projects', $projects);
    }

    public function contact() {

        if (Auth::user()->name == 'Sales' )
        {
            return view('pages/contact');
        }
        return false;
    }

    public function about() {
        return view('pages/about');
    }

}
