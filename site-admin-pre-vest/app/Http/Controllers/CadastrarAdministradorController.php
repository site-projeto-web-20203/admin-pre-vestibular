<?php

namespace App\Http\Controllers;

use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class CadastrarAdministradorController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function prepararCadastro(){
        if(Auth::guard('admin')->check()) {
            return view("cadastrarAdministrador");
        }
        else{
            return view('permissaoNegada');
        }
    }

    protected function cadastrar(Request $request){
        if(Auth::guard('admin')->check()) {
            try {
                AdministradorValidator::validate($request->all());
                $dados = $request->all();
                Administrador::create($dados);
                return view("inscricaoConcluida");
            } catch (ValidationException $exception) {
                return redirect('/cadastrar/administrador')->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
