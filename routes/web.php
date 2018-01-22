<?php

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

Route::get('/', function () {
    return view('welcome');
    

});

//Route::get('/teste', 'Teste@index');


//Route::get('cidade/{cidade_id}/especialidade/{especialidade_id}', 'CidadeController@especialidade');
//Route::get('cidade/{cidade_id}/especialidades', 'CidadeController@especialidades');
//Route::get('cidade/{cidade_id}/profissionais', 'CidadeController@profissionais');

//Route::resource('cidade', 'CidadeController');
//Route::resource('slide', 'SlideController');
//Route::resource('profissional', 'ProfissionalController');
//Route::resource('especialidade', 'EspecialidadeController');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
