<?php

namespace App\Http\Controllers;

use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;
use App\Models\Administrador;

class CadastrarAdministradorController extends Controller
{
    public function prepararCadastro(){
        return view("cadastrarAdministrador");
    }

    public function cadastrar(Request $request){
        try{
            AdministradorValidator::validate($request->all());
            $dados = $request->all();
            Administrador::create($dados);
            return "Administrador criado";
        } catch(ValidationException $exception){
            return redirect('/cadastrar/administrador')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
