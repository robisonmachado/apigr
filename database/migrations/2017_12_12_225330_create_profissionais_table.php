<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        //Schema::disableForeignKeyConstraints();

        Schema::create('profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->integer('especialidade_id')->unsigned();
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
            
            $table->string('bairro');
            $table->string('endereco');
            $table->string('telefone1', 30);
            $table->string('telefone2', 30);
            $table->string('whatsapp', 30);
            $table->string('email');
            $table->string('foto');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('profissionais_especialidade_id_foreign');
        Schema::dropForeign('profissionais_cidade_id_foreign');

        Schema::dropIfExists('profissionais');
    }
}
