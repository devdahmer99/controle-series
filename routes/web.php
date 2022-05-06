<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
//use App\User;
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
    ->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')
    ->name('form_criar_serie')
    ->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')
    ->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')
    ->middleware('autenticador');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome')
    ->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');

Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');

Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir')
    ->middleware('autenticador');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});

Route::get('/email', function () {
    return new App\Mail\NovaSerie(
        'Suits', '10', '17'
    );
});


Route::get('/enviar', function () {
    /*$email =  new App\Mail\NovaSerie(
        'Suits', '10', '17'
    );

    $email->subject = 'Nova Série Adicionada';

    $user = (object)[
        'email' => 'eduardodahmer99@gmail.com',
        'name' => 'Eduardo Dahmer Correa'
    ];

    Mail::to($user)->send($email);


    return 'E-mail Enviado!';*/
});
