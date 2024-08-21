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
    return view('home1');
});


Route::get('/product', function () {
    return view('product');
});

Route::get('/skincare', function () {
    return view('skincare');
});

Route::get('/cosmetics', function () {
    return view('cosmetics');
});

Route::get('/health', function () {
    return view('health');
});

Route::get('/market', function () {
    return view('market');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/fashion', function () {
    return view('fashion');
});

Route::get('/eksporimpor', function () {
    return view('eksporimpor');
});

Route::get('/innovation', function () {
    return view('innovation');
});

Route::get('/travel', function () {
    return view('travel');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/divisi', function () {
    return view('divisi');
});

Route::get('/career', function () {
    return view('career');
});


