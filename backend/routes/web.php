<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/catalogue', [PublicController::class, 'catalogue'])->name('catalogue');
Route::get('/gallery', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/keuangan/export-pdf', [KeuanganController::class, 'exportPdf'])->name('keuangan.export-pdf');

