<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProfessorFactory extends Factory{

    protected $model = \App\Professor::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'data_nascimento' => ($this->faker->dateTimeBetween('-100 years', '-16 years'))->format('d/m/Y'),
            'email' => $this->faker->unique()->safeEmail,
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'ehVoluntario' => $this->faker->randomElement(['Sim', 'Não']),
            'grauInstrucao' => $this->faker->randomElement(['Estudante de Graduação', 'Graduação', 'Pós Graduação', 'Mestrado', 'Doutorado']),
            'dispoManha' => $this->faker->boolean(),
            'dispoTarde' => $this->faker->boolean(),
            'dispoNoite' => $this->faker->boolean(),
            'atuaBiologia' => $this->faker->boolean(),
            'atuaEspanhol' => $this->faker->boolean(),
            'atuaFilosofia' => $this->faker->boolean(),
            'atuaFisica' => $this->faker->boolean(),
            'atuaGeografia' => $this->faker->boolean(),
            'atuaHistoria' => $this->faker->boolean(),
            'atuaIngles' => $this->faker->boolean(),
            'atuaLiteratura' => $this->faker->boolean(),
            'atuaMatematica' => $this->faker->boolean(),
            'atuaPortugues' => $this->faker->boolean(),
            'atuaQuimica' => $this->faker->boolean(),
            'atuaRedacao' => $this->faker->boolean(),
            'atuaSociologia' => $this->faker->boolean()
        ];
    }
}
