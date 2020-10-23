<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use DB;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
    public function listar(){
        if(Auth::guard('professor')->check()) {
            $alunos = DB::select("SELECT * FROM alunos");
            return view('listaAlunos', ['alunos' => $alunos]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function listarAdmin(){
        if(Auth::guard('admin')->check()) {
            $alunos = DB::select("SELECT * FROM alunos");
            return view('listaAlunosEditarRemover', ['alunos' => $alunos]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function visualizar($id){
        $aluno = Aluno::find($id);
        return view('visualizarAluno', ['aluno' => $aluno]);
    }
}
