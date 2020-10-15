<?php

namespace Tests\Feature;

use App\Models\Administrador;
use App\Models\Aluno;
use App\Models\Professor;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

//CADASTRO E VISUALIZACAO EM LISTA: OK
//FALTA REMOVER, EDITAR E VISUALIZACAO DE PERFIL
class AlunoTest extends TestCase
{
    use RefreshDatabase;

    public function InicializarArrayAluno(){
        $aluno = Aluno::factory()->make();
        $aluno['data_nascimento'] = date(Carbon::createFromFormat('d/m/Y', $aluno['data_nascimento'])->format('Y-m-d'));
        return $aluno->toArray();
    }

    //Testes de usuários tentando acessar a página de cadastrar alunos para cadastrar um novo
    //Qualquer um pode
    public function testCadastroAlunoIncompleto(){
        $dados = $this->inicializarArrayAluno();
        $dados['nome']='';
        $response = $this->post('/cadastrar/aluno', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('nome');
    }

    public function testCadastroAlunoCorreto(){
        $dados = $this->inicializarArrayAluno();
        $response = $this->post('/cadastrar/aluno', $dados);
        $response->assertStatus(200);
        $response->assertSee('Sua inscrição foi realizada com sucesso!', $escaped = true);
    }

    //Testes de usuários tentando acessar a página da lista de alunos sem a opção de editar e remover
    //Apenas professores podem
    public function testUsuarioNaoLogadoAcessaListaAlunos(){
        $response = $this->get('/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaListaAlunos(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaListaAlunos(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Lista de Alunos', $escaped = true);
    }

    public function testAdministradorLogadoAcessaListaAlunos(){
        $admin = Administrador::factory()->make();
        $response = $this->actingAs($admin, 'admin')->get('/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    //Testes de usuários tentando acessar a página da lista de alunos com a opção de editar e remover
    //Apenas administradores podem
    public function testUsuarioNaoLogadoAcessaListaAlunosMod(){
        $response = $this->get('/admin/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaListaAlunosMod(){
        $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/admin/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaListaAlunosMod(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/admin/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAdministradorLogadoAcessaListaAlunosMod(){
        $admin = Administrador::factory()->make();
        $response = $this->actingAs($admin, 'admin')->get('/admin/listar/alunos');
        $response->assertStatus(200);
        $response->assertSee('Lista de Alunos', $escaped = true);
    }
}
