<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Mensagem;
use App\Validator\ValidationException;
use App\Validator\MensagemValidator;

class MensagemValidatorTest extends TestCase
{
    public function testMensagemSemRemetente(){
        $this->expectException(ValidationException::class);
        $mensagem = Mensagem::factory()->make(['remetente'=>'']);
        MensagemValidator::validate($mensagem->toArray());
    }

    public function testMensagemSemEmail(){
        $this->expectException(ValidationException::class);
        $mensagem = Mensagem::factory()->make(['email'=>'']);
        MensagemValidator::validate($mensagem->toArray());
    }

    public function testMensagemSemConteudo(){
        $this->expectException(ValidationException::class);
        $mensagem = Mensagem::factory()->make(['conteudo'=>'']);
        MensagemValidator::validate($mensagem->toArray());
    }

    public function testMensagemCorreta(){
        $mensagem = Mensagem::factory()->make();
        MensagemValidator::validate($mensagem->toArray());
        $this->assertTrue(true);
    }
}
