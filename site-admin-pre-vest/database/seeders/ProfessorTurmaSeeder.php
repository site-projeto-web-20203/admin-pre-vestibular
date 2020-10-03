<?php

namespace Database\Seeders;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfessorTurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Turma::factory()->count(5)->has(Aluno::factory()->count(5))->create();
        Turma::factory()->count(5)->create();
        //Aluno::factory()->count(25)->create();
        Professor::factory()->count(5)->create();

        $turmas = Turma::all();

        Professor::all()->each(function ($professor) use ($turmas){
            $professor->turmas()->attach(
                $turmas->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
