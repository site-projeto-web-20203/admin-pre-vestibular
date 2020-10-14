<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Professor;

//td mundo pode cadastrar professores
class CadastrarProfessorController extends Controller
{
    public function prepararCadastro(){
        return view('cadastrarProfessor');
    }

	public function cadastrar(Request $request){
		try{
			\App\Validator\ProfessorValidator::validate($request->all());
			$dados = $request->all();
			$dados['disponibilidade'] = implode(', ', (array)$dados['disponibilidade']);
			$dados['areasAtuacao'] = implode(', ', (array)$dados['areasAtuacao']);
			Professor::create($dados);
            return view("inscricaoConcluida");
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/cadastrar/professor')->withErrors($exception->getValidator())->withInput();

		}
	}
}
