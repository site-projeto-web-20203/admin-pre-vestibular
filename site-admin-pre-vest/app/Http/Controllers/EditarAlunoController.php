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
            $dados['password'] = Hash::make($dados['password']);
            $aluno->update($dados);
            return "Aluno atualizado";
        }
        catch(\App\Validator\ValidationException $exception){
            return redirect('/editar/aluno/'.$aluno->id)->withErrors($exception->getValidator())->withInput();
        }
    }

    public function adicionarTurma(Request $request, $id){
        $aluno = Aluno::find($id);
        $dados = $request->all();
        $aluno->turma_id = $dados['turma_id'];
        $aluno->save();
        return redirect('/editar/turma/'.$aluno->turma_id);

    }

    public function removerTurma($id){
        $aluno = Aluno::find($id);
        $turma_id = $aluno->turma_id;
        $aluno->turma_id = null;
        $aluno->save();
        return redirect('/admin/visualizar/turma/'.$turma_id);

    }
}
