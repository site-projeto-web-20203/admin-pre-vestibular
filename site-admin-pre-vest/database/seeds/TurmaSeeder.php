<?php

use Illuminate\Database\Seeder;
use App\Turma;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(Turma::class, 5)->create();
    }
}
