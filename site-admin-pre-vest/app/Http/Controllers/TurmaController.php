<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use DB;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{
    public function listar(){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            $turmas = DB::select("SELECT * FROM turmas");
            return view('listaTurmas', ['turmas' => $turmas]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function listarAdmin(){
        if(Auth::guard('admin')->check()) {
            $turmas = DB::select("SELECT * FROM turmas");
            return view('listaTurmasEditarRemover', ['turmas' => $turmas]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function visualizar($id){
        $turma = Turma::find($id);
        $alunos = DB::select("SELECT * FROM alunos WHERE turma_id = $turma->id");
        $professores = DB::select("SELECT * FROM professors WHERE id IN (SELECT professor_id FROM professor_turma WHERE turma_id = $turma->id)");
        return view('visualizarTurma', ['turma' => $turma, 'alunos' => $alunos, 'professores' => $professores]);
    }

    public function visualizarAdmin($id){
        $turma = Turma::find($id);
        $alunos = DB::select("SELECT * FROM alunos WHERE turma_id = $turma->id");
        $professores = DB::select("SELECT * FROM professors WHERE id IN (SELECT professor_id FROM professor_turma WHERE turma_id = $turma->id)");
        return view('visualizarTurmaEditarRemover', ['turma' => $turma, 'alunos' => $alunos, 'professores' => $professores]);
    }
}
