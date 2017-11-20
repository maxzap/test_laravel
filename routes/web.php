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

Route::get('/actores/buscar', 'ActorController@search')->name('actores_buscar');
Route::get('/actores','ActorController@directory')->name('listado_actores');
Route::get('/actores/{id}','ActorController@show')->name('detalle_actor');
Route::get('/peliculas','PeliculasController@directory')->name('listado_peliculas');
Route::get('/peliculas/crear','PeliculasController@agregarPeliculaForm')->name('form_crearPelicula');
Route::post('/peliculas/crear','PeliculasController@agregarPelicula')->name('crearPelicula');
Route::get('/peliculas/buscar','PeliculasController@buscarPeliculasNombre')->name('pelicula_buscar');
Route::get('/peliculas/{id}','PeliculasController@buscarPeliculasId')->name('detalle_pelicula');
