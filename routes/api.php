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
Route::post('/student','ApiController@insert');

Route::get('/student','ApiController@fetch');

Route::get('/student/{id}','ApiController@fetchbyid');

Route::put('/studentupdate/{id}','ApiController@update');

Route::delete('/studentdelete/{id}','ApiController@delete');
