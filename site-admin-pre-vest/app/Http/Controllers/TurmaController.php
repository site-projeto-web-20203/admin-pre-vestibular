<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use DB;

class TurmaController extends Controller
{
    public function listar(){
        $turmas = DB::select("SELECT * FROM turmas");
        return view('listaTurmas', ['turmas' => $turmas]);
    }
}
