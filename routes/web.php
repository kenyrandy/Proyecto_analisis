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

Route::view('/', 'home')->name('home');
Route::view('/index', 'index')->name('index');
// Route::get('/contratos', 'ContratosController@index')->name('contratos.index');
// Route::get('/contratos/crear', 'ContratosController@create')->name('contratos.create');
// Route::post('/contratos', 'ContratosController@store')->name('contratos.store');
// Route::get('/contratos/{contrato}/edit', 'ContratosController@edit')->name('contratos.edit');
// Route::patch('/contratos/{contrato}', 'ContratosController@update')->name('contratos.update');
// Route::get('/contratos/{contrato}/show', 'ContratosController@show')->name('contratos.show');
// Route::delete('/contratos/{contrato}', 'ContratosController@destroy')->name('contratos.destroy');

Route::resource('contratos', 'ContratosController')
				->names('contratos');
Route::resource('clientes', 'ClientesController')
				->names('clientes');
Route::resource('colaboradores', 'ColaboradorController')
				->names('colaboradores');
Route::resource('actividades', 'ActividadesController')
				->names('actividades');
// Route::get('/contracts/{contrato}', function($contrato){
// 	return $contrato;
// })->name('contracts');
// Route::delete('contracts/{contrato}', function($contrato){
// 	return $contrato;
// })->name('contracts.delete');

// Route::get('/clientes', function(){
// 	return \App\Cliente::with('contratos')->get();
// })->name('clientes');

 Route::view('/contratos/menu', 'contratos.menu')->name('menu');
 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
