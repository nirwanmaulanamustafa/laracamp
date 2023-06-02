<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvitationController;

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

Route::get('/', function () {
    return view('index',[
        'title' => 'Home'
    ]);
    })->name('/');

Route::get('/Checkout', function () {
    return view('Checkout',[
        'title' => 'Checkout'
    ]);
})->name('Checkout');

Route::get('/BeLogin', function () {
    return view('login',[
        'title' => 'Login'
    ]);
})->name('BeLogin');

Route::get('/success-checkout', function () {
    return view('success_checkout',[
        'title' => 'Success'
    ]);
})->name('success-checkout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Sosialite Google
Route::get('sign-in-google',[UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback',[UserController::class,'HandleProviderCallback'])->name('user.google.callback');


// Invitation
Route::get('/Invitation', [InvitationController::class,'index']);
Route::get('/Invitation/{nama}', [InvitationController::class,'TurutMengundang']);

require __DIR__.'/auth.php';
