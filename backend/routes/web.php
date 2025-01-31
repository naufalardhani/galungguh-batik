<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/home');
})->name('home'); // Optionally give a name to the home route

Route::get('/about', function () {
    return view('front/home');
})->name('about');

Route::get('/portfolio', function () {
    return view('front/home');
})->name('portfolio');

Route::get('/gallery', function () {
    return view('front/home');
})->name('gallery');

Route::get('/contact', function () {
    return view('front/home');
})->name('contact');
