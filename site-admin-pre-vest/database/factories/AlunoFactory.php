<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Aluno;
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
class AlunoFactory extends Factory{

    protected $model = Aluno::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'fez_enem' => $this->faker->lexify('???'),
            'tipo_escola' => $this->faker->lexify('Escola ??????'),
            'data_nascimento' => ($this->faker->dateTimeBetween('-100 years', '-13 years'))->format('d/m/Y'),
            'numero' => $this->faker->buildingNumber(),
            'ano_conclusao' => $this->faker->year($max = 'now'),
            'bairro' => $this->faker->lexify('????? ???????'),
            'cidade' => $this->faker->city(),
            'complemento' => $this->faker->secondaryAddress(),
            'email' => $this->faker->unique()->safeEmail,
            'email_responsavel' => $this->faker->safeEmail,
            'nome' => $this->faker->name(),
            'nome_responsavel' => $this->faker->name(),
            'escola' => $this->faker->lexify('Escola ???? ??????'),
            'rua' => $this->faker->streetName(),
            'telefone' => $this->faker->phoneNumber(),
            'telefone_responsavel' => $this->faker->phoneNumber(),
            'turma_id' => $this->faker->randomElement(Turma::pluck('id')->toArray())
        ];
    }
}
