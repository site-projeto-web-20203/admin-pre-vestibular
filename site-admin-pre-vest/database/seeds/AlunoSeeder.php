<?php

use Illuminate\Database\Seeder;
use App\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(Aluno::class, 5)->create();
    }
}
