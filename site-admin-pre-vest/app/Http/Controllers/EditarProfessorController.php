<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Validator\ProfessorValidator;
use App\Models\Professor;

class EditarProfessorController extends Controller
{
    //falta fazer, tem que permitir so o professor com esse id nas 2 funcoes
    public function prepararAtualizacao($id){
        $professor = Professor::find($id);
        return view('editarProfessor', ['professor' => $professor]);
    }

	public function atualizar(Request $request, $id){
        $professor = Professor::find($id);
        try{
            $dados = $request->all();
            ProfessorValidator::validateEditar($dados);
            $dados['disponibilidade'] = implode(', ', $dados['disponibilidade']);
            $dados['areasAtuacao'] = implode(', ', $dados['areasAtuacao']);
			$professor->update($dados);
			return "Professor atualizado";
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/editar/professor/'.$professor->id)->withErrors($exception->getValidator())->withInput();
		}
	}
}
