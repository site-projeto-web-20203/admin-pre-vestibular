<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Aluno;
use App\Validator\ValidationException;
use App\Validator\AlunoValidator;

//FALTAM TESTES - COMENTARIOS NO FIM
class AlunoValidatorTest extends TestCase
{
    public function testAlunoSemNome(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['nome'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemEmail(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['email'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemTelefone(){
	    $this->expectException(ValidationException::class);
	    $aluno = Aluno::factory()->make(['telefone'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemDataNasc(){
	    $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['data_nascimento'=>'']);
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemRua(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['rua'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemBairro(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['bairro'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemCidade(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['cidade'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemNumero(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['numero'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemEscola(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['escola'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemAnoConclusao(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['ano_conclusao'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemTipoEscola(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['tipo_escola'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    public function testAlunoSemInfoENEM(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['fez_enem'=>'']);
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
    }

    //falta testes alunos menos de 18 anos

    public function testAlunoCorreto(){
        $aluno = Aluno::factory()->make();
        $aluno = $aluno->toArray();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        AlunoValidator::validate($aluno);
        $this->assertTrue(true);
    }
}
