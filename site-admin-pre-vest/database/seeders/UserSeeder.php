<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run(){
		$administradorRole = Administrador::factory()->create();
		$professorRole = Professor::factory()->create();
		$alunoRole = Aluno::factory()->create();

		$admin = User::factory()->create();

		$professor = User::factory()->create();

		$aluno = User::factory()->create();

		$administrador->roles()->attach($administradorRole);
		$professor->roles()->attach($professorRole);
		$aluno->roles()->attach($alunoRole);
    }

}
