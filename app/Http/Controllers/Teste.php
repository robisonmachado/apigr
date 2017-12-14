<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profissional;
use App\Plano;
use App\Especialidade;
use App\Cidade;

class Teste extends Controller
{
    public function index(){
 /*       
        $profissionais = Profissional::all();

        foreach($profissionais as $p){
            echo <<<SAIDA
    ID: {$p->id}
    <br>
    PROFISSIONAL: {$p->nome}
    <br>
    ESPECIALIDADE: {$p->especialidade->nome}
    <br>
    CIDADE: {$p->cidade->nome}
    <br>
SAIDA;
        
var_dump($p->planos);

            echo '<hr>';
        }
  */  
    $cidade = Cidade::find(14);

    foreach($cidade->profissionais as $p){

        echo <<<SAIDA
        ID: {$p->id}
        <br>
        PROFISSIONAL: {$p->nome}
        <br>
        ESPECIALIDADE: {$p->especialidade->nome}
        <br>
        CIDADE: {$p->cidade->nome}
        <br><hr>
SAIDA;

}

foreach($cidade->especialidades as $e){
    
            echo <<<SAIDA
            <br><br>
            ID: {$e->id}
            <br>
            ESPECIALIDADE: {$e->nome}
            <br><hr>
SAIDA;
    
    }


    }
}
