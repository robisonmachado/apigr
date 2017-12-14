<?php

use Illuminate\Database\Seeder;
use App\Especialidade;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidade::create(['nome' => 'Cardiologista']);
        Especialidade::create(['nome' => 'Neurologista']);
        Especialidade::create(['nome' => 'Pneumologista']);
        Especialidade::create(['nome' => 'Clínico Geral']);
        Especialidade::create(['nome' => 'Oftalmologista']);
        Especialidade::create(['nome' => 'Obstetra']);
        Especialidade::create(['nome' => 'Ginecologista']);
        Especialidade::create(['nome' => 'Ortopedista']);
        Especialidade::create(['nome' => 'Otorrinolaringologista']);

        Especialidade::create(['nome' => 'Nutricionista']);
        Especialidade::create(['nome' => 'Fisioterapeuta']);
        


    }
}
