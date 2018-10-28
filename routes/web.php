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
Route::get('/admin','AdminController@admin');
Route::get('/admin/campanhas/{id}','AdminController@campanhas');
Route::get('/admin/campanha/{id}','AdminController@campanha');


Route::get('/admin/empr','AdminController@empr');
Route::get('/admin/camp','AdminController@camp');


Route::resource('/empresa','EmpresaController');
Route::resource('/campanha','CampanhaController');
Route::resource('/cliente','ClienteController');
Route::resource('/pago','PagoController');
Route::resource('/producto','ProductoController');
Route::resource('/usuarioempresa','UsuarioEmpresaController');
Route::resource('/venta','VentaController');


Route::get('/v/{id}','VentaController@ventas');
Route::get('/vproducto/{id}','VentaController@vproducto');
Route::post('/vproductonew/{id}','VentaController@vproductonew');

Route::get('/vpago/{id}','VentaController@vpago');
Route::post('/vpago/{id}','VentaController@vpagonew');

Route::get('/vresumen/{id}','VentaController@vresumen');
Route::post('/vresumen/{id}','VentaController@vresumennew');

