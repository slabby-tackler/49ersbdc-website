<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/index');
    }

    public function officers() {
        return view('home/officers');
    }

    public function lesson() {
        return view('home/lesson');
    }
}
