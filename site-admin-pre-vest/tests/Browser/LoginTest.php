<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\Models\Administrador;
use App\Models\Professor;
use App\Models\Aluno;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testLoginAdministrador(){
        $admin = Administrador::find(random_int(1,5));
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->visit('/login')
                ->type('email', $admin->email)
                ->type('password', '12345')
                ->pause(2000)
                ->press('Login')
                ->assertPathIs('/menu/administrador')
                ->pause(2000)
                ->visit('/logout');
        });
    }

    public function testLoginProfessor(){
        $professor = Professor::find(random_int(1,5));
        $this->browse(function (Browser $browser) use ($professor) {
            $browser->visit('/login')
                ->type('email', $professor->email)
                ->type('password', '12345')
                ->pause(2000)
                ->press('Login')
                ->assertPathIs('/menu/professor')
                ->pause(2000)
                ->visit('/logout');
        });
    }

    public function testLoginAluno(){
        $aluno = Aluno::find(random_int(1,5));
        $this->browse(function (Browser $browser) use ($aluno) {
            $browser->visit('/login')
                ->type('email', $aluno->email)
                ->type('password', '12345')
                ->pause(2000)
                ->press('Login')
                ->assertPathIs('/menu/aluno')
                ->pause(2000)
                ->visit('/logout');
        });
    }
}
