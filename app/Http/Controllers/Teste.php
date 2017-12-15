<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profissional;
use App\Plano;
use App\Especialidade;
use App\Cidade;
use App\Plano_Profissional;

class Teste extends Controller
{
    public function index(){
 
        $pp = Plano_Profissional::find(2);

        echo 'PROFISSIONAL = '.$pp->profissional->nome;
        echo '<br>PLANO = '.$pp->plano->nome;


    }
}
