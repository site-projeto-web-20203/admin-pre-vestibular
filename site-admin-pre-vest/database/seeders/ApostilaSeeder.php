<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Apostila;

class ApostilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++){
            Apostila::factory()->profapo()->create();
        }
        for($i = 1; $i <= 5; $i++){
            Apostila::factory()->admapo()->create();
        }
    }
}
