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
			$table->boolean('fez_enem');
			$table->boolean('tipo_escola');
			$table->integer('idade');
			$table->integer('numero');
			$table->integer('tipo_usuario')->default(1);
			$table->string('ano_conclusao');
			$table->string('bairro');
			$table->string('cidade');
			$table->string('complemento');
			$table->string('email')->unique();
			$table->string('email_responsavel');
			$table->string('escola');
			$table->string('nome');
			$table->string('nome_responsavel');
			$table->string('rua');
			$table->string('senha')->default("12345");
			$table->string('telefone');
			$table->string('telefone_responsavel');
			#$table->integer('turma_id')->unsigned()->nullable();
			#$table->foreign('turma_id')->references('id')->on('turmas');
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
        Schema::dropIfExists('alunos');
    }
}
