<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionalPlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissional_plano', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('profissional_id')->unsigned();
            $table->foreign('profissional_id')->references('id')->on('profissionais');

            $table->integer('plano_id')->unsigned();
            $table->foreign('plano_id')->references('id')->on('planos');

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
        Schema::dropIfExists('profissional_plano');
    }
}
