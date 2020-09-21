<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->date('data_nascimento');
            $table->integer('tipo_usuario')->default(2);
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('senha')->default("12345");
            $table->string('telefone');
            $table->string('ehVoluntario');
            $table->string('grauInstrucao');
            $table->boolean('dispoManha');
            $table->boolean('dispoTarde');
            $table->boolean("dispoNoite");
            $table->boolean('atuaBiologia');
            $table->boolean('atuaEspanhol');
            $table->boolean('atuaFilosofia');
            $table->boolean('atuaFisica');
            $table->boolean('atuaGeografia');
            $table->boolean('atuaHistoria');
            $table->boolean('atuaIngles');
            $table->boolean('atuaLiteratura');
            $table->boolean('atuaMatematica');
            $table->boolean('atuaPortugues');
            $table->boolean('atuaQuimica');
            $table->boolean('atuaRedacao');
            $table->boolean('atuaSociologia');
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
        Schema::dropIfExists('professors');
    }
}
