<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministradorSeeder::class);
        $this->call(MensagemSeeder::class);
        $this->call(ProfessorTurmaSeeder::class);
        $this->call(AlunoSeeder::class);
        $this->call(ApostilaSeeder::class);

    }
}
