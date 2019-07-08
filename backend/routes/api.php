<?php

use Illuminate\Http\Request;

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

Route::post('medicion/mp2', 'medicionController@getMp2');
Route::get('medicion/gas', 'medicionController@getGases');
Route::get('medicion/lastdata', 'medicionController@getLastData');
Route::get('medicion/data', 'medicionController@getMediciones');

Route::resource('medicion', 'medicionController');
