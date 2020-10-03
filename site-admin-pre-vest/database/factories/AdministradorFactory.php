<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Administrador;
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
class AdministradorFactory extends Factory{

    protected $model = Administrador::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'data_nascimento' => ($this->faker->dateTimeBetween('-100 years', '-18 years'))->format('d/m/Y'),
            'email' => $this->faker->unique()->safeEmail,
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber()
        ];
    }
}
