<?php

use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('administradors')->insert(factory(Administrador::class, 5)->create());
    }
}
