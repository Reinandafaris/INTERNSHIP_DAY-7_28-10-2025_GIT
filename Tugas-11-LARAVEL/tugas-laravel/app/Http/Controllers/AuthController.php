<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    // 4.C. Method untuk menerima data dan menampilkan halaman welcome
    public function welcome(Request $request)
    {
        // Ambil data dari form
        $fname = $request->input('fname');
        $lname = $request->input('lname');

        // Kirim data ke view 'welcome'
        return view('welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
