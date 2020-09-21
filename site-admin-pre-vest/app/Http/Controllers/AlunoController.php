<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use DB;

class AlunoController extends Controller
{
    public function listar(){
        $alunos = DB::select("SELECT * FROM alunos");
        return view('listaAlunos', ['alunos' => $alunos]);
    }
}
