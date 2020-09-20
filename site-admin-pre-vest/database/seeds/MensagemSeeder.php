<?php

use Illuminate\Database\Seeder;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('mensagems')->insert(factory(Mensagem::class, 5)->create());
    }
}
