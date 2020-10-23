<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Administrador;
use App\Models\Professor;
use App\Models\Aluno;

class ForgotPasswordTest extends DuskTestCase
{

    public function testForgotAluno(){
        $aluno = Aluno::find(random_int(1,5));

        $this->browse(function(Browser $browser) use ($aluno){
            $browser->visit('/login')
                ->visit('/password/reset')
                ->assertSee('RECUPERAR SENHA')
                ->type('email', $aluno->email)
                ->select('tipo_conta', 'aluno')
                ->pause(2000)
                ->press('Enviar Link de Recuperação')
                ->assertSee('WE HAVE EMAILED YOUR PASSWORD RESET LINK!')
                ->pause(2000);
        });
    }

    public function testForgotProfessor(){
        $professor = Professor::find(random_int(1,5));

        $this->browse(function(Browser $browser) use ($professor){
            $browser->visit('/login')
                ->visit('/password/reset')
                ->assertSee('RECUPERAR SENHA')
                ->type('email', $professor->email)
                ->select('tipo_conta', 'professor')
                ->pause(2000)
                ->press('Enviar Link de Recuperação')
                ->assertSee('WE HAVE EMAILED YOUR PASSWORD RESET LINK!')
                ->pause(2000);
        });
    }

    public function testForgotAdministrador(){
        $administrador = Administrador::find(random_int(1,5));

        $this->browse(function(Browser $browser) use ($administrador){
            $browser->visit('/login')
                ->visit('/password/reset')
                ->assertSee('RECUPERAR SENHA')
                ->type('email', $administrador->email)
                ->select('tipo_conta', 'admin')
                ->pause(2000)
                ->press('Enviar Link de Recuperação')
                ->assertSee('WE HAVE EMAILED YOUR PASSWORD RESET LINK!')
                ->pause(2000);
        });
    }
}
