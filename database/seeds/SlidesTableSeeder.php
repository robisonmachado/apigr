<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([            
                'descricao' => 'unimed-es',
                'url'=> "http://www.folhaiconha.com.br/wp-content/uploads/2017/09/unimede-sul-capixaba.jpg"          
            ]);

        Slide::create([
                'descricao' => 'clinica_sao_joao',
                'url' => "http://revistacomunique.com.br/site/wp-content/uploads/2016/05/Saude-do-Coracao.jpg"
            ]);
        Slide::create([
                'descricao' => 'clinica_marataizes',
                'url'=> "http://divinews.com/wp-content/uploads/2017/08/vigilancia-saude.jpg"
            ]);

        Slide::create([
                'descricao' => 'clinica_piuma',
                'url' => "http://www.revistaapolice.com.br/wp-content/uploads/2016/08/14_-das-empresas-possuem-programas-de-gestão-em-saúde.jpg"
            ]);

        Slide::create([
                'url' => "http://www.saude.salvador.ba.gov.br/wp-content/uploads/2013/12/saude-para-voce-2-702x336.jpg"
            ]);
        Slide::create([
                'url' => "http://medicinarosario.com.br/wp-content/uploads/2016/05/plano-saude.jpg"
            ] );

    }


}
