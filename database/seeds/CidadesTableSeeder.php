<?php

use Illuminate\Database\Seeder;
use App\Cidade;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::create(['nome' => 'Marataízes']);
        Cidade::create(['nome' => 'Itapemirim']);
        Cidade::create(['nome' => 'Piúma']);
        Cidade::create(['nome' => 'Cachoeiro de Itapemirim']);
        Cidade::create(['nome' => 'Presidente Kennedy']);
        Cidade::create(['nome' => 'Iconha']);
        Cidade::create(['nome' => 'Rio Novo do Sul']);
        Cidade::create(['nome' => 'Anchieta']);
        Cidade::create(['nome' => 'Guarapari']);
        Cidade::create(['nome' => 'Castelo']);
        Cidade::create(['nome' => 'Atílio Vivacqua']);
        Cidade::create(['nome' => 'Vila Velha']);
        Cidade::create(['nome' => 'Cariacica']);
        Cidade::create(['nome' => 'Serra']);
        Cidade::create(['nome' => 'Vitória']);

    }
}
