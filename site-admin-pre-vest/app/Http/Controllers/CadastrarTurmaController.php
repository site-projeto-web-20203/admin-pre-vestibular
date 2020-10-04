<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Turma;

class CadastrarTurmaController extends Controller
{
    public function prepararCadastro(){
        return view('cadastrarTurma');
    }

	public function cadastrar(Request $request){
		try{
			\App\Validator\TurmaValidator::validate($request->all());
			$dados = $request->all();
			\App\Http\Controllers\TurmaController::criar($dados);
			return "Turma cadastrada";
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/turma/cadastrar')->withErrors($exception->getValidator())->withInput();

		}
	}
}
