<?php

namespace App\Http\Controllers;

use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class CadastrarAdministradorController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function prepararCadastro(){
        return view("cadastrarAdministrador");
    }

    protected function cadastrar(Request $request){
        try{
            AdministradorValidator::validate($request->all());
            $dados = $request->all();
            Administrador::create($dados);
            #return "Administrador criado";
            #return redirect()->intended('login/admin');
            return view("auth.login");
        } catch(ValidationException $exception){
            return redirect('/cadastrar/administrador')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
