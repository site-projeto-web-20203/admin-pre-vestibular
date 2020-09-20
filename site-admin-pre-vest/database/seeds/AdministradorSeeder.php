<?php

use Illuminate\Database\Seeder;
use App\Administrador;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(Administrador::class, 5)->create();
    }
}
