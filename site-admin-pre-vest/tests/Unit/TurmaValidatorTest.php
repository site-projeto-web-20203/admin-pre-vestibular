<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Turma;
use App\Validator\ValidationException;
use App\Validator\TurmaValidator;

/*'dataInicio' => ($this->faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
            'dataFim' => ($this->faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
            'horario' => $this->faker->time($format = 'H:i:s', $max = '20:00:00'),
            'nome' => $this->faker->lexify('Turma ?????')"*/

class TurmaValidatorTest extends TestCase
{

    public function testTurmaSemDataInicio(){
        $this->expectException(ValidationException::class);
        $turma = Turma::factory()->make(['dataInicio' => '']);
        $turma['dataFim'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataFim'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
    }

    public function testTurmaSemDataFim(){
        $this->expectException(ValidationException::class);
        $turma = Turma::factory()->make(['dataFim' => '']);
        $turma['dataInicio'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataInicio'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
    }

    public function testTurmaSemHorarioInicio(){
        $this->expectException(ValidationException::class);
        $turma = Turma::factory()->make(['horarioInicio' => '']);
        $turma['dataInicio'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataInicio'])->format('Y-m-d'));
        $turma['dataFim'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataFim'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
    }

    public function testTurmaSemHorarioFim(){
        $this->expectException(ValidationException::class);
        $turma = Turma::factory()->make(['horarioFim' => '']);
        $turma['dataInicio'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataInicio'])->format('Y-m-d'));
        $turma['dataFim'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataFim'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
    }

    public function testTurmaSemNome(){
        $this->expectException(ValidationException::class);
        $turma = Turma::factory()->make(['nome' => '']);
        $turma['dataInicio'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataInicio'])->format('Y-m-d'));
        $turma['dataFim'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataFim'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
    }

    public function testAdministradorCorreto(){
        $turma = Turma::factory()->make();
        $turma['dataInicio'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataInicio'])->format('Y-m-d'));
        $turma['dataFim'] = date(Carbon::createFromFormat('d/m/Y', $turma['dataFim'])->format('Y-m-d'));
        TurmaValidator::validate($turma->toArray());
        $this->assertTrue(true);
    }
}
