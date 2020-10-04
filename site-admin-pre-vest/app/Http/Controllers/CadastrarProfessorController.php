<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Professor;

class CadastrarProfessorController extends Controller
{
    public function prepararCadastro(){
        return view('cadastrarProfessor');
    }

	public function cadastrar(Request $request){
		try{
			\App\Validator\ProfessorValidator::validate($request->all());
			$dados = $request->all();
			\App\ProfessorController::criar($dados);
			return "Professor cadastrado";
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/cadastrar/professor')->withErrors($exception->getValidator())->withInput();

		}
	}
}
