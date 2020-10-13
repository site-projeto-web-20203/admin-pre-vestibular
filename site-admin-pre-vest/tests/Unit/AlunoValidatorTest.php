<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Aluno;
use App\Validator\ValidationException;
use App\Validator\AlunoValidator;

class AlunoValidatorTest extends TestCase
{
    public function testAlunoSemNome(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['nome'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemEmail(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['email'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemTelefone(){
	    $this->expectException(ValidationException::class);
	    $aluno = Aluno::factory()->make(['telefone'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemDataNasc(){
	    $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['data_nascimento'=>'']);
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemRua(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['rua'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemBairro(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['bairro'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemCidade(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['cidade'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemNumero(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['numero'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemEscola(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['escola'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemAnoConclusao(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['ano_conclusao'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemTipoEscola(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['tipo_escola'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    public function testAlunoSemInfoENEM(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['fez_enem'=>'']);
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
    }

    //falta testes alunos menos de 18 anos

    /*
    public function testAlunoCorreto(){
        $aluno = Aluno::factory()->make();
        $aluno['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $aluno->data_nascimento)->format('Y-m-d');
        AlunoValidator::validate($aluno->toArray());
        $this->assertTrue(true);
    }*/
}
