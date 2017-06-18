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

use Illuminate\Support\Facades\Auth;

Route::any('{slug}', function() {
    return view('welcome');
})->where('slug', '^((?!api).)*');

// Auth Routes
Auth::routes();

Route::get('api/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::any('api/login-form', [
    'as' => 'login-form',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::any('api/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);
Route::any('api/register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::any('api/login-form', [
    'uses' => 'Auth\LoginController@showLoginForm'
]);









