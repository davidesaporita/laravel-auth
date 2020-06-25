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
    return view('guest.welcome');
})->name('home');

Auth::routes();

// Guests
Route::get('posts', 'PostController@index')->name('posts.index');

// Admin
Route::prefix('admin')
     ->name('admin.')
     ->namespace('Admin')
     ->middleware('auth')
     ->group(function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
});