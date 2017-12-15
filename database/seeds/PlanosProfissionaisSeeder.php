<?php

use Illuminate\Database\Seeder;

use App\Plano_Profissional;

class PlanosProfissionaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plano_Profissional::create([
            'profissional_id' => 1,
            'plano_id' => 1           
            ]);
        
        Plano_Profissional::create([
            'profissional_id' => 1,
            'plano_id' => 3       
            ]);

        Plano_Profissional::create([
            'profissional_id' => 10,
            'plano_id' => 1   
            ]);
            
        Plano_Profissional::create([
            'profissional_id' => 18,
            'plano_id' => 1           
            ]);
    }
}
