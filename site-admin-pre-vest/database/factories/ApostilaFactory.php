<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Administrador;
use App\Models\Professor;
use App\Models\Apostila;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApostilaFactory extends Factory{

    protected $model = \App\Models\Apostila::class;
    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'disciplina' => $this->faker->lexify('Disciplina ?????'),
            'nome_arq' => $this->faker->lexify('??????.').$this->faker->fileExtension
        ];
    }

    public function profapo(){
        return $this->state([
            'professor_id' => $this->faker->randomElement(Professor::pluck('id')->toArray()),
        ]);
    }

    public function admapo(){
        return $this->state([
            'administrador_id' => $this->faker->randomElement(Administrador::pluck('id')->toArray()),
        ]);
    }
}
