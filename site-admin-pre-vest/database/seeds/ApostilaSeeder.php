<?php

use Illuminate\Database\Seeder;

class ApostilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(App\Apostila::class, 5)->create();
    }
}
