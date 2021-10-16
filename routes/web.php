<?php

use Illuminate\Support\Facades\Route;

Route::get('/series', 'SeriesController@index')
    ->name('listar');
Route::get('/series/criar', 'SeriesController@create')
    ->name('criar_serie');
Route::post('/series/criar', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
