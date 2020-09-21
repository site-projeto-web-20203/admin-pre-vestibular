<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/*           $table->id();
			$table->dateTime('data_envio');
			$table->string('disciplina');
			$table->string('nome_arq');
            $table->timestamps();
			$table->integer('professor_id')->unsigned()->nullable();
			$table->foreign('professor_id')->references('id')->on('professors');
			$table->integer('administrador_id')->unsigned()->nullable();
			$table->foreign('administrador_id')->references('id')->on('administradors');*/

$factory->define(App\Apostila::class, function (Faker $faker) {
    return [
        'data_envio' => $faker->dateTime($format = 'd-m-Y', $timezone = 'GMT-3', $max = 'now'),
        'disciplina' => $faker->lexify('Disciplina ?????'),
        'nome_arq' => $faker->fileExtension,

    ];
});
