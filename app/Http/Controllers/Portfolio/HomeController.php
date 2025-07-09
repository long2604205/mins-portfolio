<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
//        return view('portfolio.master');
        return view('profile_first');
    }
}
