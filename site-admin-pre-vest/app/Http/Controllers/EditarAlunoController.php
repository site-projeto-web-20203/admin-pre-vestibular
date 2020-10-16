<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Validator\AlunoValidator;
use App\Models\Aluno;

class EditarAlunoController extends Controller
{
    //falta fazer, tem que permitir so o professor com esse id nas 2 funcoes
    public function prepararAtualizacao($id){
        $aluno = Aluno::find($id);
        return view('editarAluno', ['aluno' => $aluno]);
    }

    public function atualizar(Request $request, $id){
        $aluno = Aluno::find($id);
        try{
            $dados = $request->all();
            AlunoValidator::validateEditar($dados);
            $aluno->update($dados);
            return "Aluno atualizado";
        }
        catch(\App\Validator\ValidationException $exception){
            return redirect('/editar/aluno/'.$aluno->id)->withErrors($exception->getValidator())->withInput();
        }
    }
}
