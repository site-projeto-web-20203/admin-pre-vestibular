<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Turma;
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

$factory->define(Turma::class, function (Faker $faker) {
    return [
        'dataInicio' => ($faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
        'dataFim' => ($faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
	'horario' => $faker->time($format = 'H:i:s', $max = '20:00:00'),
        'nome' => $faker->lexify('Turma ?????')
    ];
});
