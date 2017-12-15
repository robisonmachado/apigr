<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CidadesTableSeeder::class);
        $this->call(PlanosTableSeeder::class);
        $this->call(EspecialidadesTableSeeder::class);
        $this->call(ProfissionaisTableSeeder::class);
        $this->call(PlanosProfissionaisSeeder::class);
        
    }
}
