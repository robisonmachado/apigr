<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Profissional;

class ProfissionaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('profissionais')->truncate();
        $faker = Faker::create();

        foreach(range(1, 20) as $i){

            Profissional::create([
                'nome' => $faker->name,
                'especialidade_id' => $faker->numberBetween(1,9),
                'endereco' => $faker->streetAddress(),
                'telefone1' => $faker->phoneNumber(),
                'telefone2' => $faker->phoneNumber(),
                'whatsapp' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'cidade_id' => $faker->numberBetween(1,14)
                
            ]);

        }

    }
}
