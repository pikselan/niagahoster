<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/hosting_category','HostingCategoryController@all');
Route::get('/hosting_category/{id}','HostingCategoryController@show');
Route::post('/hosting_category','HostingCategoryController@store');
Route::put('/hosting_category/{id}','HostingCategoryController@update');
Route::delete('/hosting_category/{id}','HostingCategoryController@delete');