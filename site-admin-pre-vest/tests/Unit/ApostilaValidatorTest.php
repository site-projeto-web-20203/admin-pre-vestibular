<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Apostila;
use App\Validator\ValidationException;
use App\Validator\ApostilaValidator;


class ApostilaValidatorTest extends TestCase
{

    public function testApostilaSemNome(){
        $this->expectException(ValidationException::class);
        $apostila = Apostila::factory()->admapo()->make(['nome_arq' => '']);
        ApostilaValidator::validate($apostila->toArray());
    }

    public function testApostilaSemDisciplina(){
        $this->expectException(ValidationException::class);
        $apostila = Apostila::factory()->profapo()->make(['disciplina' => '']);
        ApostilaValidator::validate($apostila->toArray());
    }
}
