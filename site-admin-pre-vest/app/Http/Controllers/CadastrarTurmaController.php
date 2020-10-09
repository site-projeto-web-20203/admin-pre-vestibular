<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Turma;

class CadastrarTurmaController extends Controller
{
    public function prepararCadastro(){
        if(Auth::guard('admin')->check()) {
            return view('cadastrarTurma');
        }
        else{
            return view('permissaoNegada');
        }
    }

	public function cadastrar(Request $request){
        if(Auth::guard('admin')->check()) {
            try {
                \App\Validator\TurmaValidator::validate($request->all());
                $dados = $request->all();
                Turma::create($dados);
                return "Turma cadastrada";
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/turma/cadastrar')->withErrors($exception->getValidator())->withInput();

            }
        }
        else{
            return view('permissaoNegada');
        }
	}
}
