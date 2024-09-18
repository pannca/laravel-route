<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

route::get('/home', function () {
    return view('home');
})->name('home');

route::get('/about', function () {
    return view('about');
})->name('about');

route::get('/contact', function () {
    return view('contact');
})->name('contact');



