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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registro', 'RegistroController@index')->name('registro');
Route::post('/registro/guardar', 'RegistroController@guardar')->name('registro.guardar');

Route::get('/mostrar', 'RegistroController@mostrar')->name('mostrar');
Route::delete('/registro/eliminar/{id}', 'RegistroController@eliminar')->name('registros.eliminar');
Route::get('/registro/obtener/{id}', 'RegistroController@obtener')->name('obtener');
Route::match(['put', 'patch'], '/registro/editar/{id}', 'RegistroController@editar')->name('editar');
Route::get('/muestra/{id}', 'RegistroController@muestra')->name('muestra');