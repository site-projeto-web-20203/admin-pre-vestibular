<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use DB;

class ProfessorController extends Controller
{

    public function criar(){

    }

    public function listar(){
        $professores = DB::select("SELECT * FROM professors");
        return view('listaProfessores', ['professores' => $professores]);
    }
}
