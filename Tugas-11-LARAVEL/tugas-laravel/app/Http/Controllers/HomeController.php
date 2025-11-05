<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 4.A. Arahkan ke view 'home'
        return view('home');
    }
}
