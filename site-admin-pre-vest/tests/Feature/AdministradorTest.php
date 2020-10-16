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
class AdministradorTest extends TestCase
{

    use RefreshDatabase;

    public function InicializarArrayAdministrador(){
        $administrador = Administrador::factory()->make();
        $administrador['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $administrador['data_nascimento'])->format('Y-m-d'));
        return $administrador->toArray();
    }

    //Testes de usuários tentando acessar a página de cadastrar administradores para cadastrar um novo
    //Apenas administradores podem
    public function testUsuarioNaoLogadoAcessaCadastrarAdministrador(){
        $response = $this->get('/cadastrar/administrador');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaCadastrarAdministrador(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/cadastrar/administrador');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaCadastrarAdministrador(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/cadastrar/administrador');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAdministradorLogadoCadastraAdministradorIncompleto(){
        $administrador = Administrador::factory()->make();
        $this->actingAs($administrador, 'admin')->get('/cadastrar/administrador');
        $dados = $this->InicializarArrayAdministrador();
        $dados['nome'] = '';
        $response = $this->post('/cadastrar/administrador', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('nome');
    }

    public function testAdministradorLogadoCadastraAdministradorCorreto(){
        $administrador = Administrador::factory()->make();
        $this->actingAs($administrador, 'admin')->get('/cadastrar/administrador');
        $dados = $this->InicializarArrayAdministrador();
        $response = $this->post('/cadastrar/administrador', $dados);
        $response->assertStatus(200);
        $response->assertSee('Sua inscrição foi realizada com sucesso!', $escaped = true);
    }

    //Testes de usuários tentando acessar a página da lista de administradores
    //Apenas administradores podem
    public function testUsuarioNaoLogadoAcessaListaAdministradores(){
        $response = $this->get('/admin/listar/administradores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaListaAdministradores(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/admin/listar/administradores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaListaAdministradores(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/admin/listar/administradores');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAdministradorLogadoAcessaListaAdministradores(){
        $administrador = Administrador::factory()->make();
        $response = $this->actingAs($administrador, 'admin')->get('/admin/listar/administradores');
        $response->assertStatus(200);
        $response->assertSee('Lista de Administradores', $escaped = true);
    }

     #ACESSAR O PERFIL CORRETO CAUSA ERRO 500 AS VEZES
    /*
    public function testUsuarioNaoLogadoAcessaPerfilAdministrador(){
        $response = $this->get('/visualizar/administrador/1');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaPerfilAdministrador(){
        $aluno = Aluno::factory()->make();
        $id = $aluno['id'];
        $response = $this->actingAs($aluno, 'aluno')->get('//visualizar/administrador/$id');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaPerfilAdministrador(){
        $professor = Professor::factory()->make();
        $id = $professor['id'];
        $response = $this->actingAs($professor, 'professor')->get('/visualizar/administrador/$id');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAdministradorLogadoAcessaAcessaPerfilAdministrador(){
        $administrador = Administrador::factory()->make();
        $id = $administrador['id'];
        $response = $this->actingAs($administrador, 'admin')->get('/visualizar/administrador/$id');
        $response->assertStatus(200);
        $response->assertSee('Perfil de Administrador', $escaped = true);
    }
    */
}
