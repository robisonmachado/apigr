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
 


    foreach( Cidade::all() as $cidade){
        echo <<<SAIDA
        ID: {$cidade->id}
        <br>
        CIDADE: {$cidade->nome}
        <br>
        ESPECIALIDADES:
SAIDA;

        foreach($cidade->especialidades() as $especialidade){
            echo "$especialidade->nome, ";
        }

        echo "<br><hr><br>";

    }


    



    }
}
