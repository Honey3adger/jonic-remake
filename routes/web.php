<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
require base_path('app/Helpers/helpers.php');

Route::get('/test-helper', function () {
    return isRoute('home'); // Should return 'active' or ''
});


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

Route::get('/de-hero', function () {
    return view('de-hero');
})->name('de-hero');

Route::get('/la-jonic', function () {
    return view('la-jonic');
})->name('la-jonic');

Route::get('/Share-holder', function () {
    return view('investor');
})->name('investor');

Route::get('/our-organization', function () {
    return view('organization');
})->name('organization');

Route::get('/financials', function () {
    return view('financials');
})->name('financials');

Route::get('/coprate-governance', function () {
    return view('coprate-governance');
})->name('coprate-governance');

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

Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');

Auth::routes();



Route::view('super-admin/login', 'auth.login')->name('sign-up');
    




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
