<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Router Index
Route::get('/', function () {
    return view('index',[
        "title"=>"Landing Page",
    ]);
})->name('/');

// Route Login
Route::get('/BeLogin', function () {
    return view('Login',[
        "title"=>"Login",
    ]);
})->name('BeLogin');

// Route Login
Route::get('/navbar-library', function () {
    return view('navbar-library',[
        "title"=>"navbar-library",
    ]);
})->name('navbar-library');

// Route Checkout
Route::get('/Checkout', function () {
    return view('Checkout',[
        "title"=>"Checkout",
    ]);
})->name('Checkout');

// Route Success_Checkout
Route::get('/success-checkout', function () {
    return view('Success_checkout',[
        "title"=>"Success_checkout",
    ]);
})->name('success-checkout');

// Bug Sentry
Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry ersror!');
});