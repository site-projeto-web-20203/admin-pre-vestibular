<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->middleware('guest:professor');
        $this->middleware('guest:aluno');
    }

    public function broker()
    {
        return Password::broker(request()->get('tipo_conta'));
    }

    protected function brokerAdm(){
        return Password::broker('administradors');
    }

    protected function brokerPro(){
        return Password::broker('professors');
    }

    protected function brokerAlu(){
        return Password::broker('alunos');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email, 'tipo_conta' => $request->tipo_conta]
        );
    }
}
