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

use Illuminate\Http\Request;
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

Route::get('api/weather', function(Request $request) {

    // Geo Data
    $latitude = $request->lat;
    $longitude= $request->long;

    // Request Weather Data
    $json_data = file_get_contents("https://api.wunderground.com/api/0e5af2c42173a4e4/geolookup/conditions/q/" .
        $latitude . "," . $longitude . ".json");
    $parsed_json = json_decode($json_data);

    return response()->json($parsed_json);
});








