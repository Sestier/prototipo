<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', ["uses" => 'HomeController@index', 'as' => 'index']);

Route::resource('usuarios', 'UsuarioController');
Route::resource('temas', 'TemaController');
Route::resource('subtemas', 'SubTemaController');
Route::get('/temas/{idTema}/subtemas/create', ["uses" => 'TemaController@createSubtema', 'as' => 'temas.subtemas.create']);
Route::post('/temas/{idTema}/subtemas/store', ["uses" => 'TemaController@storeSubtema', 'as' => 'temas.subtemas.store']);