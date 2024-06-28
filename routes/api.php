<?php
use Illuminate\Support\Facades\Route;

Route::post('/users','API\UserController@store');
Route::get('/users','API\UserController@index');
Route::put('/users/{id}','API\UserController@update');
Route::delete('/users/{id}','API\UserController@destroy');