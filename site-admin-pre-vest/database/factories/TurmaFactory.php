<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Turma;
use Illuminate\Database\Eloquent\Factories\Factory;
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
class TurmaFactory extends Factory{

    protected $model = Turma::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'dataInicio' => ($this->faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
            'dataFim' => ($this->faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
            'horarioInicio' => $this->faker->time($format = 'H:i', $max = '20:00:00'),
            'horarioFim' => $this->faker->time($format = 'H:i', $max = '22:00:00'),
            'nome' => $this->faker->lexify('Turma ?????')
        ];
    }
}
