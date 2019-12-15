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

//
//Authentication
Auth::routes();

//Home
Route::get('/', 'HomeController@index')->name('home');

//Mensajes
Route::post('/nuevo_mensaje', 'MessageController@store')->name('mensaje.nuevo');
Route::get('mensajes', 'MessageController@index')->name('mensajes')->middleware('auth');
Route::post('mensajes/{id}', 'MessageController@edit')->name('set_viewed');
Route::post('mensajes-del/{id}', 'MessageController@destroy')->name('delete_message');

//Foto
Route::post('nueva_foto', 'FotoController@create')->name('nueva-foto');

    

