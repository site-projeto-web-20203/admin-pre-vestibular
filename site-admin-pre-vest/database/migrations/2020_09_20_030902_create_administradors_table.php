<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->id();
			$table->date('data_nascimento');
			$table->integer('tipo_usuario')->default(3);
			$table->string('email')->unique();
			$table->string('nome');
			$table->string('password')->default(Hash::make('12345'));
			$table->string('telefone');
			$table->boolean('eh_admin')->default(1);
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
        Schema::dropIfExists('administradors');
    }
}
