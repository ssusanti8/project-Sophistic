<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        return view('home');
    }
    public function innovation()
    {
        //
        return view('innovation');
    }
    public function home1()
    {
        //
        return view('home1');
    }
}
