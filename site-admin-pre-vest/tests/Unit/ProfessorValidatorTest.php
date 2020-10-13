<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Professor;
use App\Validator\ValidationException;
use App\Validator\ProfessorValidator;

class ProfessorValidatorTest extends TestCase
{
    public function testProfessorSemNome(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['nome'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemEmail(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['email'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemTelefone(){
	    $this->expectException(ValidationException::class);
	    $professor = Professor::factory()->make(['telefone'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemDataNasc(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['data_nascimento'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemGrauInstr(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['grauInstrucao'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemEhVoluntario(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['ehVoluntario'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemDisponibilidade(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['disponibilidade'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    public function testProfessorSemAreasAtuacao(){
        $this->expectException(ValidationException::class);
        $professor = Professor::factory()->make(['areasAtuacao'=>'']);
        ProfessorValidator::validate($professor->toArray());
    }

    /*
    public function testProfessorCorreto()
    {
	$professor = Professor::factory()->make();
	$dados = $professor->toArray();
	$dados['senha']='senha';
    ProfessorValidator::validate($dados);
	$this->assertTrue(true);
    }*/
}
