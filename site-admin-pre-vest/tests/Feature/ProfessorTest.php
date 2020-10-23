<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Administrador;

//CADASTRO E VISUALIZACAO EM LISTA: OK
//FALTA REMOVER, EDITAR E VISUALIZACAO DE PERFIL
class ProfessorTest extends TestCase
{
    use RefreshDatabase;

	public function inicializarArrayProfessor(){
		$professor = Professor::factory()->make();
        $dados = $professor->toArray();
        $dados['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $dados['data_nascimento'])->format('Y-m-d'));
        return $dados;
	}

//Feature: Cadastro de Professor (qualquer usuario tem permissao)
    public function testCadastroProfessorIncompleto(){
		$dados = $this->inicializarArrayProfessor();
		$dados['nome']='';
        $response = $this->post('/cadastrar/professor', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('nome');
    }

    public function testCadastroProfessorCorreto(){
        $dados = $this->inicializarArrayProfessor();
        $response = $this->post('/cadastrar/professor', $dados);
        $response->assertStatus(200);
        $response->assertSee('Sua inscrição foi realizada com sucesso!', $escaped = true);
	}

//Feature: Ver professores cadastrados [só os dados basicos] (apenas professores tem permissao)
    public function testUsuarioNaoLogadoAcessaListaProfessores(){
        $response = $this->get('/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaListaProfessores(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaListaProfessores(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Lista de Professores', $escaped = true);
	}

    public function testAdministradorLogadoAcessaListaProfessores(){
        $admin = Administrador::factory()->make();
        $response = $this->actingAs($admin, 'admin')->get('/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

//Feature: Ver professores cadastrados [dados e opcoes de modificacao] (apenas administradores tem permissao)
    public function testUsuarioNaoLogadoAcessaListaProfessoresMod(){
        $response = $this->get('/admin/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaListaProfessoresMod(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/admin/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaListaProfessoresMod(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/admin/listar/professores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
	}

    public function testAdministradorLogadoAcessaListaProfessoresMod(){
        $admin = Administrador::factory()->make();
        $response = $this->actingAs($admin, 'admin')->get('/admin/listar/professores');
        #$response->assertStatus(200);
        $response->assertSee('Professores', $escaped = true);
    }
}
