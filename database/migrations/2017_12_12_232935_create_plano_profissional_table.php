<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoProfissionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_profissional', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('profissional_id')->unsigned();
            $table->foreign('profissional_id')
                ->references('id')
                ->on('profissionais')
                ->onDelete('cascade');;

            $table->integer('plano_id')->unsigned();
            $table->foreign('plano_id')
                ->references('id')
                ->on('planos')
                ->onDelete('cascade');;

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
        Schema::dropIfExists('plano_profissional');
    }
}
