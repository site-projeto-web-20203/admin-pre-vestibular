<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Apostila;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/*
			$table->integer('professor_id')->unsigned()->nullable();
			$table->foreign('professor_id')->references('id')->on('professors');
			$table->integer('administrador_id')->unsigned()->nullable();
			$table->foreign('administrador_id')->references('id')->on('administradors');*/

class ApostilaFactory extends Factory{

    protected $model = \App\Models\Apostila::class;
    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'data_envio' => ($this->faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
            'disciplina' => $this->faker->lexify('Disciplina ?????'),
            'nome_arq' => $this->faker->lexify('??????.').$this->faker->fileExtension
            /*'professor_id' => function(){
                return factory(App\Professor::class)->create()->id;
            }
            'administrador_id' => function(){
                return factory(App\Administrador::class)->create()->id;
            }*/
        ];
    }
}
