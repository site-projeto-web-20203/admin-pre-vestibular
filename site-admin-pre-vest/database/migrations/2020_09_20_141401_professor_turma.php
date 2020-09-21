<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfessorTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_turma', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->integer('turma_id')->unsigned()->nullable();
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('professor_turma', function($table){
            $table->dropForeign(['professor_turma_turma_id_foreign']);
            $table->dropColumn('turmas_id');
        });*/

        DB::statement('DROP TABLE turmas, professors CASCADE');
        Schema::dropIfExists('professor_turma');

        #Schema::drop('turmas');
        #Schema::drop('professors');
        #DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
