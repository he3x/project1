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

Route::get('/','PageController@home');

//peserta

Route::get('/peserta', 'PesertaController@index');

Route::get('/form','PesertaController@create');

Route::post('/form', 'PesertaController@store');

Route::get('/peserta/{id}', 'PesertaController@show');

Route::delete('/peserta/{id}','PesertaController@destroy');

Route::get('/peserta/{id}/edit', 'PesertaController@edit');

Route::patch('/peserta/{id}','PesertaController@update');
