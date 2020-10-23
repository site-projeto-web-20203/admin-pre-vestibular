<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Validator\TurmaValidator;
use App\Models\Turma;

class EditarTurmaController extends Controller
{
    public function prepararAtualizacao($id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            $alunos = DB::select("SELECT * FROM alunos WHERE turma_id IS NULL");
            return view('editarTurma', ['turma' => $turma, 'alunos' => $alunos]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function atualizar(Request $request, $id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            try {
                $dados = $request->all();
                TurmaValidator::validateEditar($dados);
                $turma->update($dados);
                return redirect('admin/visualizar/turma/' . $turma->id);
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/editar/turma/' . $turma->id)->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
