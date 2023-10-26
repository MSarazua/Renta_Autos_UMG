<?php

use app\Http\Controllers\API\ClaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clase', 'API\ClaseController@index');
Route::post('clase', 'API\ClaseController@store');
Route::put('clase/{ID}', 'API\ClaseController@update');
Route::delete('clase/{ID}', 'API\ClaseController@destroy');

Route::get('detallereserva', 'API\DetalleReservaController@index');
Route::post('detallereserva', 'API\DetalleReservaController@store');
Route::put('detallereserva/{ID_DetalleReserva}', 'API\DetalleReservaController@update');
Route::delete('detallereserva/{ID_DetalleReserva}', 'API\DetalleReservaController@destroy');

Route::get('formulario', 'API\FormularioController@index');
Route::post('formulario', 'API\FormularioController@store');
Route::put('formulario/{ID_Formulario}', 'API\FormularioController@update');
Route::delete('formulario/{ID_Formulario}', 'API\FormularioController@destroy');

Route::get('marca', 'API\MarcasController@index');
Route::post('marca', 'API\MarcasController@store');
Route::put('marca/{ID_Marca}', 'API\MarcasController@update');
Route::delete('marca/{ID_Marca}', 'API\MarcasController@destroy');

Route::get('persona', 'API\PersonaController@index');
Route::post('persona', 'API\PersonaController@store');
Route::put('persona/{ID_Persona}', 'API\PersonaController@update');
Route::delete('persona/{ID_Persona}', 'API\PersonaController@destroy');

Route::get('reserva', 'API\ReservaController@index');
Route::post('reserva', 'API\ReservaController@store');
Route::put('reserva/{ID_Reserva}', 'API\ReservaController@update');
Route::delete('reserva/{ID_Reserva}', 'API\ReservaController@destroy');

Route::get('roles', 'API\RolesController@index');
Route::post('roles', 'API\RolesController@store');
Route::put('roles/{ID_Rol}', 'API\RolesController@update');
Route::delete('roles/{ID_Rol}', 'API\RolesController@destroy');

Route::get('usuarios', 'API\UsuarioController@index');
Route::post('usuarios', 'API\UsuarioController@store');
Route::put('usuarios/{ID_Usuario}', 'API\UsuarioController@update');
Route::delete('usuarios/{ID_Usuario}', 'API\UsuarioController@destroy');

Route::get('vehiculos', 'API\VehiculoController@index');
Route::post('vehiculos', 'API\VehiculoController@store');
Route::put('vehiculos/{ID_Vehiculo}', 'API\VehiculoController@update');
Route::delete('vehiculos/{ID_Vehiculo}', 'API\VehiculoController@destroy');
