<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//factory(Aluno::class, 5)->create();
        Aluno::factory()->count(5)->create();
    }
}
