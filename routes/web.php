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
Route::get('/series', 'SeriesController@index')
    ->name('listar-series');
Route::get('/series/criar', 'SeriesController@create')
    ->name('criar-serie');
Route::post('/series/criar', 'SeriesController@store');
Route::post('/series/remover/{id}', 'SeriesController@destroy');
