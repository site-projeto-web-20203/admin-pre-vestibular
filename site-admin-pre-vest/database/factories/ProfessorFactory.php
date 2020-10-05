<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfessorFactory extends Factory{

    protected $model = \App\Models\Professor::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'data_nascimento' => ($this->faker->dateTime())->format('d/m/Y'),
            'email' => $this->faker->unique()->safeEmail,
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'ehVoluntario' => $this->faker->randomElement(['Sim', 'Não']),
            'grauInstrucao' => $this->faker->randomElement(['Estudante de Graduação', 'Graduação', 'Pós Graduação', 'Mestrado', 'Doutorado']),
            'disponibilidade' => implode(', ',$this->faker->randomElements(['Manhã', 'Tarde', 'Noite'], $count=rand(1,3))),
			'areasAtuacao' => implode(', ',$this->faker->randomElements(['Biologia', 'Espanhol', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Química', 'Redação', 'Sociologia'], $count=rand(1,5)))
        ];
    }
}
