<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::group(['middleware'=>['cors','client_credentials','auth:api']], function () {
Route::group(['middleware'=>['client_credentials','cors']], function () {
    
    
    Route::get('/slides', 'SlideController@index'); 
    
    Route::get('/cidade/{cidade_id}/especialidades', 'CidadeController@especialidades');
    Route::get('/cidade/{cidade_id}/especialidade/{especialidade_id}', 'CidadeController@especialidade');
    Route::get('/cidade/{cidade_id}/profissionais', 'CidadeController@profissionais'); 
    
    Route::get('/profissional/{profissional_id}/planos', 'ProfissionalController@planos'); 

    Route::post('/profissional/adicionarPlanos', 'ProfissionalController@adicionarPlanos'); 
    
    Route::resources([
        'cidade' => 'CidadeController',
        'especialidade' => 'EspecialidadeController',
        'plano' => 'PlanoController',
        'profissional' => 'ProfissionalController',
        'slide' => 'SlideController'
    ]); 
    

    
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');
  
    

  });

 
/*


    Personal access client created successfully.
    Client ID: 1
    Client Secret: vKh3Zk7X4AvVT1IeYgSNi0DKgoSkkQEtDj6nfZSo
    Password grant client created successfully.
    Client ID: 2
    Client Secret: o08AMf30HahFobDh6AztqMp98ERe9JsNETsAxAkl

 
*/





