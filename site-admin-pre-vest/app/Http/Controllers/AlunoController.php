<?php

namespace App\Http\Controllers;


use App\Models\Turma;
use Illuminate\Http\Request;
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

    public function visualizarTurma($id){
        $aluno = Aluno::find($id);
        $turma = Turma::find($aluno->turma_id);
        $alunos = DB::select("SELECT * FROM alunos WHERE turma_id = $turma->id");
        $professores = DB::select("SELECT * FROM professors WHERE id IN (SELECT professor_id FROM professor_turma WHERE turma_id = $turma->id)");
        return view('visualizarTurma', ['turma' => $turma, 'alunos' => $alunos, 'professores' => $professores]);
        return view('visualizarTurma', ['turma' => $turma, 'alunos' => $alunos, 'professores' => $professores]);
    }
}
