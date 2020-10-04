<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class CadastrarAlunoController extends Controller
{
    public function prepararCadastro(){
        return view("cadastrarAluno");
    }

    public function cadastrar(Request $request){
        try{
            \App\Validator\AlunoValidator::validate($request->all());
            $dados = $request->all();
            //$dados[]
            \App\Models\Aluno::create($dados);
            return "Administrador criado";
        } catch(\App\Validator\ValidationException $exception){
            return redirect('aluno.cadastrar')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
