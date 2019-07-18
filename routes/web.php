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
// C U R S O S

Route::get('cursos/editar/{curso}', 'CursoController@edit');
Route::get('cursos/lista', 'CursoController@list');
Route::get('cursos/crear', 'CursoController@create');
Route::get('cursos', 'CursoController@index');
Route::get('cursos/{curso}', 'CursoController@show');
Route::post('cursos', 'CursoController@store');
Route::patch('cursos/{curso}', 'CursoController@update');
Route::delete('cursos/{curso}', 'CursoController@destroy');

// NIVELES.

Route::get('niveles/editar/{nivel}','NivelController@edit');
Route::get('niveles/lista','NivelController@list');
Route::get('niveles','NivelController@index');
Route::get('niveles/crear','NivelController@create');
Route::get('niveles/{nivel}','NivelController@show');
Route::post('niveles','NivelController@store');
Route::patch('niveles/{nivel}','NivelController@update');
Route::delete('niveles/{nivel}','NivelController@destroy');

//L E N G U A S
Route::get('lenguas/editar/{lengua}', 'LenguaController@edit');
Route::get('lenguas/lista', 'LenguaController@list');
Route::get('lenguas/crear', 'LenguaController@create');
Route::get('lenguas', 'LenguaController@index');
Route::get('lenguas/{lengua}', 'LenguaController@show');
Route::post('lenguas', 'LenguaController@store');
Route::patch('lenguas/{lengua}', 'LenguaController@update');
Route::delete('lenguas/{lengua}', 'LenguaController@destroy');

//D E S A R R O L L A D O R E S
Route::get('desarrolladores/editar/{desarrollador}', 'DesarrolladorController@edit');
Route::get('desarrolladores/lista', 'DesarrolladorController@list');
Route::get('desarrolladores/crear', 'DesarrolladorController@create');
Route::get('desarrolladores', 'DesarrolladorController@index');
Route::get('desarrolladores/{desarrollador}', 'DesarrolladorController@show');
Route::post('desarrolladores', 'DesarrolladorController@store');
Route::patch('desarrolladores/{desarrollador}', 'DesarrolladorController@update');
Route::delete('desarrolladores/{desarrollador}', 'DesarrolladorController@destroy');
