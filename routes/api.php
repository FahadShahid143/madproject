<?php

use Illuminate\Http\Request;
use App\Lost;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('losts', 'LostController@index');
Route::get('losts/{lost}', 'LostController@show');
Route::post('losts', 'LostController@store');
Route::put('losts/{lost}', 'LostController@update');
Route::delete('losts/{lost}', 'LostController@delete');

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

