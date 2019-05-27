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

Route::get('/hola', 'usuarioController@index');

Route::get('/Cadena/De/La/Ruta', function () {
    return "CadenaDeLaRuta";
});

Route::get('/Usuario/{id}/{cuenta}/{clave}','usuarioController@usuarioDetalle')
->where('id','[0-9]');

Route::get('/nuevoU','usuarioController@nuevoUsuario');

Route::get('/inicioS','usuarioController@inicioSesion');

Route::get('/User/{id}/{cuenta}/{clave}/{estado?}','usuarioController@verificarRegistro');
