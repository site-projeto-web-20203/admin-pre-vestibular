<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(Mensagem::class, 5)->create();
    }
}
