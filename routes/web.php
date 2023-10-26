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

Route::resource('marcas', 'MarcaController');
Route::post('modificar/marcas/{id}', 'MarcaController@updateInactive');

Route::get('/info', function () {
    phpinfo();
});

Route::resource('index', 'AutosController');
Route::get('detalleVehiculo/{id}/{idUsuario}', 'AutosController@detalleVehiculo');
Route::get('login', 'LoginController@index');
Route::post('userLogin', 'LoginController@create');
