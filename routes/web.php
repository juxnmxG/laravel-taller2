<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('listad', function () {
    return view('listarDatos');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','Usercontroller');

Route::resource('dato','DatosController');
