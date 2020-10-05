<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Administrador;
use App\Models\Professor;


class RolesTableSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run()
    {
	$admin = new Administrador;
        $admin = Administrador::factory()->create();

	$aluno = new Aluno;
        $aluno = Aluno::factory()->create();
        
	$professor = new Professor;
        $professor = Professor::factory()->create();
    }
}
