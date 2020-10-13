<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aluno;
use App\Models\Mensagem;
use App\Models\Professor;
use App\Models\Administrador;

class MensagemTest extends TestCase
{
    use RefreshDatabase;

	public function inicializarArrayMensagem(){
		$mensagem = Mensagem::factory()->make();
		$dados = $mensagem->toArray();
        return $dados;
	}

//Feature: Enviar Mensagem (qualquer usuario tem permissao)
    public function testEnviarMensagemSemRemetente(){
		$dados = $this->inicializarArrayMensagem();
		$dados['remetente']='';
        $response = $this->post('/mensagem/nova', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('remetente');
    }

    public function testEnviarMensagemSemEmail(){
        $dados = $this->inicializarArrayMensagem();
        $dados['email']='';
        $response = $this->post('/mensagem/nova', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    public function testEnviarMensagemSemConteudo(){
        $dados = $this->inicializarArrayMensagem();
        $dados['conteudo']='';
        $response = $this->post('/mensagem/nova', $dados);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('conteudo');
    }

    public function testEnviarMensagemCorreta(){
		$dados = $this->inicializarArrayMensagem();
        $response = $this->post('/mensagem/nova', $dados);
        $response->assertStatus(200);
	}

//Feature: Ler mensagens (apenas admins tem permissao)
    public function testUsuarioNaoLogadoAcessaMsgs(){
        $response = $this->get('/listar/mensagens');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAlunoLogadoAcessaMsgs(){
	    $aluno = Aluno::factory()->make();
        $response = $this->actingAs($aluno, 'aluno')->get('/listar/mensagens');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testProfessorLogadoAcessaMsgs(){
        $professor = Professor::factory()->make();
        $response = $this->actingAs($professor, 'professor')->get('/listar/mensagens');
        $response->assertStatus(200);
        $response->assertSee('Você não tem permissão para acessar essa página!', $escaped = true);
    }

    public function testAdministradorLogadoAcessaMsgs(){
        $admin = Administrador::factory()->make();
        $response = $this->actingAs($admin, 'admin')->get('/listar/mensagens');
        $response->assertStatus(200);
        $response->assertSee('Mensagens Recebidas', $escaped = true);
    }
}
