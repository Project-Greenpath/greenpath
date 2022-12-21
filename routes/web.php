<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;

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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/listings', function () {
    return view('listings');
});

Route::get('/newlisting', function () {
    return view('newlisting');
});
Route::get('/borrow', function () {
    return view('borrow');
});
Route::get('/login', function () {
    return view('sign_in');
});
// Auth::routes();

// Route::get('sign-up', 'App\Http\Controllers\SignUpController@index')->name('sign-up');
Route::match (['get', 'post'], 'sign-up', [SignUpController::class, 'index'])->name('sign-up');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');