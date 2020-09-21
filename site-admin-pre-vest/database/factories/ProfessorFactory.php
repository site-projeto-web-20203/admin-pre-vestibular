<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Professor::class, function (Faker $faker) {
    return [
        'data_nascimento' => ($faker->dateTimeBetween('-100 years', '-16 years'))->format('d/m/Y'),
        'email' => $faker->unique()->safeEmail,
        'nome' => $faker->name(),
        'telefone' => $faker->phoneNumber(),
        'ehVoluntario' => $faker->randomElement(['Sim', 'Não']),
        'grauInstrucao' => $faker->randomElement(['Estudante de Graduação', 'Graduação', 'Pós Graduação', 'Mestrado', 'Doutorado']),
        'dispoManha' => $faker->boolean(),
        'dispoTarde' => $faker->boolean(),
        'dispoNoite' => $faker->boolean(),
        'atuaBiologia' => $faker->boolean(),
        'atuaEspanhol' => $faker->boolean(),
        'atuaFilosofia' => $faker->boolean(),
        'atuaFisica' => $faker->boolean(),
        'atuaGeografia' => $faker->boolean(),
        'atuaHistoria' => $faker->boolean(),
        'atuaIngles' => $faker->boolean(),
        'atuaLiteratura' => $faker->boolean(),
        'atuaMatematica' => $faker->boolean(),
        'atuaPortugues' => $faker->boolean(),
        'atuaQuimica' => $faker->boolean(),
        'atuaRedacao' => $faker->boolean(),
        'atuaSociologia' => $faker->boolean()
    ];
});
