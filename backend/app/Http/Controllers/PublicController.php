<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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
        $posts = Post::with('category')->get();
        $categories = Category::all();
        return view('catalogue', compact('posts', 'categories'));
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
