<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use DB;

class ProfessorController extends Controller
{
    public function listar(){
        $professores = DB::select("SELECT * FROM professors");
        return view('listaProfessores', ['professores' => $professores]);
    }

    public function listarAdmin(){
        $professores = DB::select("SELECT * FROM professors");
        return view('listaProfessoresEditarRemover', ['professores' => $professores]);
    }

    public function visualizar($id){
        $professor = Professor::find($id);
        return view('visualizarProfessor', ['professor' => $professor]);
    }
}
