<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('me', [AuthController::class, 'me']);
Route::get('users', [UserController::class, 'index']);
Route::post('/users','API\UserController@store');
Route::get('/users','API\UserController@index');
Route::put('/users/{id}','API\UserController@update');
Route::delete('/users/{id}','API\UserController@destroy');
