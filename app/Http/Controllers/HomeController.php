<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Homepage
    public function index()
    {
        //
        return view('home1');
    }
    public function innovation()
    {
        //
        return view('innovation');
    }
    // about Us
    public function home1()
    {
        //
        return view('home');
    }
    // Career
    public function career()
    {
        //
        return view('career');
    }
}
