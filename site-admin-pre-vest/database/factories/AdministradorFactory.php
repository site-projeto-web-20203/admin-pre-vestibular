<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrador;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Administrador::class, function (Faker $faker) {
    return [
            'data_nascimento' => ($faker->dateTimeBetween('-100 years', '-18 years'))->format('d/m/Y'),
            'email' => $faker->unique()->safeEmail,
	    'nome' => $faker->name(),
            'telefone' => $faker->phoneNumber()
    ];
});
