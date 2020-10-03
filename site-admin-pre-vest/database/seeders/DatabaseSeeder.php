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
        $this->call(AlunoSeeder::class);
        $this->call(MensagemSeeder::class);
        #$this->call(TurmaSeeder::class);
        $this->call(ApostilaSeeder::class);
        #$this->call(ProfessorSeeder::class);
        $this->call(ProfessorTurmaSeeder::class);

        /*$this->call('AdministradorSeeder');
        $this->call('AlunoSeeder');
        $this->call('MensagemSeeder');
        $this->call('ApostilaSeeder');
        $this->call('ProfessorTurmaSeeder');*/
    }
}
