<?php

use Illuminate\Support\Facades\Route;

/* Ça fonctionne */ 
// Route::get('/', function () {
//     return view('pages/home');
// })->name('app_home');

// Route::get('/about-us', function () {
//     return view('pages/about-us');
// })->name('app_about');

/* Ne fonctionne pas */ 
// Route::get('/', fn() => view('pages/home'))->name('app_home');
// Route::get('/about-us', fn() => view('pages/about-us'))->name('app_about');

Route::view('/', 'pages.home')->name('app_home');
Route::view('/about-us', 'pages.about-us')->name('app_about');