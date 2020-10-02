<?php

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
        factory(App\Turma::class, 5)->create();

        factory(App\Professor::class, 5)->create();

        $turmas = App\Turma::all();

        App\Professor::all()->each(function ($professor) use ($turmas){
            $professor->turmas()->attach(
                $turmas->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
