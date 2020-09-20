<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApostilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apostilas', function (Blueprint $table) {
            $table->id();
			$table->dateTime('data_envio');
			$table->string('disciplina');
			$table->string('nome_arq');
            $table->timestamps();
			$table->integer('professor_id')->unsigned()->nullable();
			$table->foreign('professor_id')->references('id')->on('professors');
			$table->integer('administrador_id')->unsigned()->nullable();
			$table->foreign('administrador_id')->references('id')->on('administradors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apostilas');
    }
}
