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

    public function catalogue()
    {
        return view('catalogue'); // Mengembalikan tampilan home.blade.php
    }

    public function gallery()
    {
        return view('gallery'); // Mengembalikan tampilan home.blade.php
    }

    public function contact()
    {
        return view('contact'); // Mengembalikan tampilan home.blade.php
    }
}
