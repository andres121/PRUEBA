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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'clienteController@index')->name('clientes');
Route::get('/ciudades/{id}', 'clienteController@getCiudades')->name('ciudades');
Route::get('/registrar', 'clienteController@create')->name('registrar');
Route::get('/editar/{id}', 'clienteController@edit')->name('editar');
Route::post('/actualizar/{id}', 'clienteController@update')->name('actualizar');
Route::post('/store', 'clienteController@store')->name('store');
Route::delete('/eliminar/{id}', 'clienteController@destroy')->name('eliminar');
