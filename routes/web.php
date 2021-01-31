<?php

use Illuminate\Support\Facades\Route;

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


Route::get('libro', 'App\Http\Controllers\LibrosController@libro');
Route::get('reserva', 'App\Http\Controllers\ReservaController@reserva');
Route::get('user', 'App\Http\Controllers\UserController@user');
