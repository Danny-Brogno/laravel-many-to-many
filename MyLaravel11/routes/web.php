<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "testController@home") -> name('myHome');

Auth::routes();

Route::get("/show/{id}", 'testController@show') -> name("show");
Route::get("/edit/{id}", 'loggedController@edit') -> name("edit");

Route::get('/home', 'HomeController@index')->name('home');
