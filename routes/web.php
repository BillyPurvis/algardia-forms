<?php

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

// Auth Routes
Auth::routes();
Route::get('/logout', 'HomeController@logout')->name('logout');

// Profile routes
Route::get('/profile', 'HomeController@index')->name('home');







