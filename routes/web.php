<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CycleController;

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

// cycles
Route::match (['get'], 'cycles', [CycleController::class, 'index'])->name('cycles');
Route::get('cycles', 'App\Http\Controllers\CycleController@index');
Route::get('cycles/create', 'App\Http\Controllers\CycleController@create');
Route::post('cycles', 'App\Http\Controllers\CycleController@create');
Route::get('cycles/{id}', 'App\Http\Controllers\CycleController@show');
Route::get('cycles/{id}/edit', 'App\Http\Controllers\CycleController@edit');
Route::patch('cycles/{id}', 'App\Http\Controllers\CycleController@update');
Route::delete('cycles/{id}', 'App\Http\Controllers\CycleController@destroy');