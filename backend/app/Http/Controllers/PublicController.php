<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('home'); // Mengembalikan tampilan home.blade.php
    }

    public function about()
    {
        return view('about'); // Mengembalikan tampilan home.blade.php
    }
}
