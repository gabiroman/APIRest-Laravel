<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('categoria', 'CategoriaController@getCategoria');
    Route::get('categoria/{id}', 'CategoriaController@getCategoriaId');
    Route::post('categoria/add', 'CategoriaController@insertCategoria');
    Route::put('categoria/update/{id}', 'CategoriaController@updateCategoria');
    Route::delete('categoria/delete/{id}', 'CategoriaController@deleteCategoria');
});
