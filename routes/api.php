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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/

//Route::group(['middleware'=>['cors', 'auth:api']], function () {
Route::group(['middleware'=>['auth:api']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');
  
    Route::resources([
        'cidade' => 'CidadeController',
        'especialidade' => 'EspecialidadeController',
        'plano' => 'PlanoController',
        'profissional' => 'ProfissionalController'
    ]); 

  });

  


/*

Route::resources([
        'cidade' => 'CidadeController',
        'especialidade' => 'EspecialidadeController',
        'plano' => 'PlanoController',
        'profissional' => 'ProfissionalController'
    ]); 

*/