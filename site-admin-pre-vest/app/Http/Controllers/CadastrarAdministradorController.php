<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class CadastrarAdministradorController extends Controller
{
    public function prepararCadastro(){
        return view("cadastrarAdministrador");
    }

    public function cadastrar(Request $request){
        try{
            \App\Validator\AdministradorValidator::validate($request->all());
            $dados = $request->all();
            //$dados[]
            \App\Models\Administrador::create($dados);
            return "Administrador criado";
        } catch(\App\Validator\ValidationException $exception){
            return redirect('administrador.cadastrar')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
