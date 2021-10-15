<?php

use Illuminate\Support\Facades\Route;

<<<<<<< Updated upstream
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




Route::get('/series', 'SerieController@index');
Route::get('/series/create', 'SerieController@create');
Route::get('/series/create', 'SerieController@store');
=======

Route::get('/', 'SerieController@index');
Route::get('/series/cadastrar', 'SerieController@create');
Route::post('/series/create', 'SerieController@store');
>>>>>>> Stashed changes
