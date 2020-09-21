<?php

use Illuminate\Database\Seeder;
use App\Professor;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(App\Professor::class, 5)->create();
    }
}
