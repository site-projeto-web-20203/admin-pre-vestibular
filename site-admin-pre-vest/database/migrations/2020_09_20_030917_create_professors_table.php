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
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('password')->default(Hash::make('12345'));
            $table->string('telefone');
            $table->string('ehVoluntario');
            $table->string('grauInstrucao');
            $table->string('disponibilidade');
            $table->string('areasAtuacao');
            $table->rememberToken()->nullable();
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
