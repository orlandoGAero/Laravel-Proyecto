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

Route::get('primer-ruta', function() {
	return 'Hola desde mi primer ruta en Laravel';
});

Route::get('/nombre/{name}/apellido/{lastname?}', function($name, $lastname = 'Reyes') {
	return 'Hola soy '.$name.' '.$lastname;
});

// accediendo a un controlador pormedio de una ruta
Route::get('prueba/{param}','PruebaController@prueba');

Route::resource('entrenador','EntrenadorController');