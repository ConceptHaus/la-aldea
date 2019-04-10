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

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/gracias', function () {
    return view('gracias');
});

// Guardar datos formulario de contacto
Route::post('/saveContacto','WelcomeController@saveDataContacto');
