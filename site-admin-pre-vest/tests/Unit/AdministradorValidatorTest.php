<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Administrador;
use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;


class AdministradorValidatorTest extends TestCase
{
    public function testAdministradorSemNome(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['nome' => '']);
        $administrador['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $administrador['data_nascimento'])->format('Y-m-d'));
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorSemTelefone(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['telefone' => '']);
        $administrador['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $administrador['data_nascimento'])->format('Y-m-d'));
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorSemEmail(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['email' => '']);
        $administrador['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $administrador['data_nascimento'])->format('Y-m-d'));
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorSemDataNascimento(){
        $this->expectException(ValidationException::class);
        $administrador = Administrador::factory()->make(['data_nascimento' => '']);
        AdministradorValidator::validate($administrador->toArray());
    }

    public function testAdministradorCorreto(){
        $administrador = Administrador::factory()->make();
        $administrador['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $administrador['data_nascimento'])->format('Y-m-d'));
        AdministradorValidator::validate($administrador->toArray());
        $this->assertTrue(true);
    }
}
