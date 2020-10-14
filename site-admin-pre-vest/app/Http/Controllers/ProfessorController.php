<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
    public function listar(){
        if(Auth::guard('professor')->check()) {
            $professores = DB::select("SELECT * FROM professors");
            return view('listaProfessores', ['professores' => $professores]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function listarAdmin(){
        if(Auth::guard('admin')->check()) {
            $professores = DB::select("SELECT * FROM professors");
            return view('listaProfessoresEditarRemover', ['professores' => $professores]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function visualizar($id){
        $professor = Professor::find($id);
        return view('visualizarProfessor', ['professor' => $professor]);
    }
}
