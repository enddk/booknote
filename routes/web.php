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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', 'App\Http\Controllers\BooksController@signin');

Route::get('/signup', 'App\Http\Controllers\BooksController@signup');

Route::get('/home', 'App\Http\Controllers\BooksController@home');

Route::get('/search', 'App\Http\Controllers\BooksController@search');

Route::get('/profile', 'App\Http\Controllers\BooksController@profile');

Route::get('/readinfo', 'App\Http\Controllers\BooksController@readinfo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
