<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Administrador;
use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;


class AdministradorValidatorTest extends TestCase
{
    public function testAdministradorSemNome(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['nome' => '']);
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorSemTelefone(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['telefone' => '']);
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorSemEmail(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['email' => '']);
        AdministradorValidator::validate($administrador->toArray());
    }
}
