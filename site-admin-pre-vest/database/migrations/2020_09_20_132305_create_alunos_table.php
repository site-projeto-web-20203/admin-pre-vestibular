<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
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
            $table->boolean('atuaGeogragia');
            $table->boolean('atuaHistoria');
            $table->boolean('atuaIngles');
            $table->boolean('atuaLiteratura');
            $table->boolean('atuaMatematica');
            $table->boolean('atuaPortugues');
            $table->boolean('atuaQuimica');
            $table->boolean('atuaRedacao');
            $table->boolean('atuaSociologia');
            $table->timestamps();
            $table->integer('turma_id')->unsigned()->nullable();
            $table->foreign('turma_id')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
