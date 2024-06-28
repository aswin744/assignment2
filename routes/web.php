<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/users/create', 'users.create');
Route::view('/users', 'users.index');
Route::view('/users/{id}/edit', 'users.edit')->name('edit_user');
