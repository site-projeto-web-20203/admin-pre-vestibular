<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aluno;
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

$factory->define(Aluno::class, function (Faker $faker) {
    return [
        'dataInicio' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'dataFim' => $faker->date($format = 'd-m-Y', $max = 'now'),
	'horario' => $faker->time($format = 'H:i', $max = 'now') + ' - ' + $faker->time($format = 'H:i', $max = 'now'),
        'nome' => $faker->lexify('Turma ?????')
    ];
});
