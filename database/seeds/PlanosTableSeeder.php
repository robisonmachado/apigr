<?php

use Illuminate\Database\Seeder;
use App\Plano;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plano::create(['nome' => 'Unimed']);
        Plano::create(['nome' => 'Samp']);
        Plano::create(['nome' => 'Bradesco']);
        Plano::create(['nome' => 'AMIL']);
        Plano::create(['nome' => 'São Bernardo Saúde']);
        
    }
}
