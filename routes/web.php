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


Route::get('/login','auth\LoginController@index')->name('login');
Route::post('/login','auth\LoginController@store');

Route::get('/register','auth\RegisterController@index')->name('register');
Route::post('/register','auth\RegisterController@store');

Route::get('/home','DashboardController@index')->name('dashboard');

Route::get('/addanimal','AnimalsController@create')->name('addanimal');
Route::post('/addanimal','AnimalsController@store');
Route::get('/showallanimals','AnimalsController@index')->name('showallanimals');

Route::get('/showhistory/{id}','AnimalsController@history')->name('showhistory');

Route::get('/milkentry','MilkController@index')->name('milkentry');
Route::post('/milkentry','MilkController@store');


Route::get('/showhistory/{id}','AnimalHistoryController@index')->name('showhistory');
Route::get('/addhistory','AnimalHistoryController@create')->name('addhistory');
