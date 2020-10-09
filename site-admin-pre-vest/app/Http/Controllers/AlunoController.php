<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use DB;

class AlunoController extends Controller
{
    public function listar(){
        $alunos = DB::select("SELECT * FROM alunos");
        return view('listaAlunos', ['alunos' => $alunos]);
    }

    public function listarAdmin(){
        $alunos = DB::select("SELECT * FROM alunos");
        return view('listaAlunosEditarRemover', ['alunos' => $alunos]);
    }

    public function visualizar($id){
        $aluno = Aluno::find($id);
        return view('visualizarAluno', ['aluno' => $aluno]);
    }
}
