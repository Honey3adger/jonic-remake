<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/investor', function () {
    return view('investor');
})->name('investor');

Route::get('/career', function () {
    return view('/career');
})->name('career');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/products', function () {
    return view('products');
})->name('products');

Auth::routes();



Route::view('super-admin/login', 'auth.login')->name('sign-up');
    




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
