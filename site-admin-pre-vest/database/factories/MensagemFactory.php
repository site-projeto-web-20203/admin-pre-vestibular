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
        'data_envio' => $faker->dateTime($format = 'd-m-Y', $timezone = 'GMT-3', $max = 'now'),
        'email' => $faker->unique()->safeEmail,
        'remetente' => $faker->name(),
        'conteudo' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
