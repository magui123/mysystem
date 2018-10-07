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


Route::get('/','HomeController@home');
Route::post('/log','LogController@store');
Route::get('/logout','LogController@logout');

Route::resource('/us','UserController');
route::get('/admin','AdminController@admin');
