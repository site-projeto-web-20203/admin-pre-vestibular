<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Professor;
use App\Validator\ValidationException;
use App\Validator\ProfessorValidator;

//FALTAM TESTES - COMENTARIOS NO FIM
class ProfessorValidatorTest extends TestCase
{
    public function testProfessorSemNome(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['nome'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemEmail(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['email'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemTelefone(){
	    $this->expectException(ValidationException::class);
	    $professor = Professor::factory()->make(['telefone'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemDataNasc(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['data_nascimento'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemGrauInstr(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['grauInstrucao'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemEhVoluntario(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['ehVoluntario'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemDisponibilidade(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['disponibilidade'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorSemAreasAtuacao(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['areasAtuacao'=>'']);
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
    }

    public function testProfessorCorreto(){
        $professor = Professor::factory()->make();
        $professor = $professor->toArray();
        $professor['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $professor['data_nascimento'])->format('Y-m-d'));
        ProfessorValidator::validate($professor);
        $this->assertTrue(true);
    }
}
