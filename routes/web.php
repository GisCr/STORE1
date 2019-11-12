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

Route::get('/', 'PagesController@inicio');
Route::get('productos', 'PagesController@productos');

Route::post('productos', 'PagesController@crear')->name('productos.crear');

Route::get('consultaVentas', 'PagesController@consultaVentas');
Route::get('ventas', 'PagesController@ventas');

Route::post('/', 'PagesController@nuevaVenta')->name('ventas.nueva');
Route::post('ventas', 'PagesController@agregarProducto')->name('ventas.producto');

