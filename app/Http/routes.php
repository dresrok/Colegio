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

/*Route::get('/', function () {
    return view('inicio');
});*/

Route::get('/','CuentaController@logIn');
Route::get('cuenta/logout','CuentaController@logOut');
Route::resource('cuenta','CuentaController',['only'=>['store']]);


Route::resource('profesor', 'ProfesorController');
Route::post('profesores/check-email','ProfesorController@checkEmail');
Route::get('profesor/asociar-salon/{id_profesor}','ProfesorController@associate');
Route::post('profesor/asociar-salon','ProfesorController@association')->name('profesor.asociar');
Route::get('asociaciones','ProfesorController@associations');

Route::resource('salon', 'SalonController');