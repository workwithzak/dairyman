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

    Route::post('login', 'api\auth\AuthController@login');
    Route::post('logout', 'api\auth\AuthController@logout');
    Route::post('refresh', 'api\auth\AuthController@refresh');
    Route::post('me', 'api\auth\AuthController@me');

    Route::get('auth', 'api\auth\AuthController@index');

    //animals routes
    Route::get('allanimals', 'api\animals\AnimalController@index');
    Route::post('store', 'api\animals\AnimalController@store');
    Route::post('update/{id}', 'api\animals\AnimalController@update');
    Route::get('delete/{id}', 'api\animals\AnimalController@destroy');

    //milkapis
    Route::get('milkindex', 'api\milk\MilkApiController@index');
    Route::post('milkentry', 'api\milk\MilkApiController@store');

    //dashboard routes
    Route::get('dashboard', 'api\DashboardApiController@index');
