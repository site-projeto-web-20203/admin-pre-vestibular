<?php

namespace App\Http\Controllers;

use App\Models\ProfessorTurma;
use App\Models\Turma;
use Illuminate\Support\Facades\Auth;
use DB;

class EditarProfessorTurmaController extends Controller
{
    public function prepararAdicao($id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            $professores = DB::select("SELECT * FROM professors WHERE id NOT IN (SELECT professor_id FROM professor_turma WHERE turma_id = $turma->id)");
            return view('adicionarTurmaProfessores', ['turma' => $turma, 'professores' => $professores]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function adicionarProfessor($idp, $idt){
        if(Auth::guard('admin')->check()) {
            $ids['turma_id'] = $idt;
            $ids['professor_id'] = $idp;
            ProfessorTurma::create($ids);
            return redirect('/editar/turmaprofessor/' . $idt);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function removerProfessor($idp, $idt){
        if(Auth::guard('admin')->check()) {
            $professorTurma = ProfessorTurma::where('turma_id', '=', $idt)->where('professor_id', '=', $idp);
            $professorTurma->delete();
            return redirect('/admin/visualizar/professorturma/' . $idt);
        }
        else{
            return view('permissaoNegada');
        }
    }
}
