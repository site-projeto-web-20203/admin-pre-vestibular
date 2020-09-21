<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mensagem;
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

$factory->define(Mensagem::class, function (Faker $faker) {
    return [
	'aberta' => $faker->boolean(),
        'data_envio' => ($faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
        'email' => $faker->unique()->safeEmail,
        'remetente' => $faker->name(),
        'conteudo' => $faker->realText($maxNbChars = 400, $indexSize = 2)
    ];
});
