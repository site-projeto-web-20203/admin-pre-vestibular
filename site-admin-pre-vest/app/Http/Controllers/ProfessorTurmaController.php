<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use App\Models\ProfessorTurma;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfessorTurmaController extends Controller
{

    public function visualizarProfessores($id){
        $turma = Turma::find($id);
        $professores = DB::select("SELECT * FROM professors WHERE id IN (SELECT professor_id FROM professor_turma WHERE turma_id = $turma->id)");
        return view('visualizarTurmaProfessores', ['turma' => $turma, 'professores' => $professores]);
    }

}
