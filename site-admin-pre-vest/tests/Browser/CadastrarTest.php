<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\Models\Administrador;
use App\Models\Professor;
use App\Models\Aluno;
use Tests\DuskTestCase;

class CadastrarTest extends DuskTestCase
{
    public function testCadastroAluno(){
        $this->browse(function(Browser $browser){
            $browser->visit('/cadastrar/aluno')
                ->type('nome', 'Fulano de tal')
                ->type('email', 'eumesmoaluno@email.com')
                ->type('telefone', '(11) 11111-1111')
                ->type('data_nascimento', '01011996')
                ->type('rua', 'Rua logo ali')
                ->type('bairro', 'bairro São João')
                ->type('cidade', 'Laraveltown')
                ->type('numero', '42')
                ->type('escola', 'Escola Aprender')
                ->type('ano_conclusao', '2021')
                ->select('tipo_escola')
                ->select('fez_enem')
                ->pause(2000)
                ->press('Cadastrar')
                ->assertSee('SUA INSCRIÇÃO FOI REALIZADA COM SUCESSO!')
                ->pause(2000);
        });
    }

    public function testCadastroProfessor(){
        $this->browse(function(Browser $browser){
            $browser->visit('/cadastrar/professor')
                ->type('nome', 'Prof Fulano de tal')
                ->type('email', 'eumesmoprofessor@email.com')
                ->type('telefone', '(11) 11111-1111')
                ->type('data_nascimento', '01011996')
                ->select('ehVoluntario')
                ->select('grauInstrucao')
                ->check('areasAtuacao[]')
                ->check('disponibilidade[]')
                ->pause(2000)
                ->press('Cadastrar')
                ->assertSee('SUA INSCRIÇÃO FOI REALIZADA COM SUCESSO!')
                ->pause(2000);
        });
    }

    public function testCadastroAdministrador(){
        $administrador = Administrador::find(random_int(1,5));

        $this->browse(function(Browser $browser) use ($administrador){
            $browser->visit('/login')
                ->type('email', $administrador->email)
                ->type('password', '12345')
                ->pause(2000)
                ->press('Login')
                ->assertPathIs('/menu/administrador')
                ->pause(2000)
                ->visit('/cadastrar/administrador')
                ->assertPathIs('/cadastrar/administrador')
                ->type('nome', 'Fulano de tal')
                ->type('email', 'eumesmo@email.com')
                ->type('telefone', '(11) 11111-1111')
                ->type('data_nascimento', '01011996')
                ->pause(2000)
                ->press('Cadastrar')
                ->assertSee('SUA INSCRIÇÃO FOI REALIZADA COM SUCESSO!')
                ->pause(2000)
                ->visit('/logout');
        });
    }
}
