<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use DB;

class ProfessorController extends Controller
{

    public static function criar(){

    }

    public function listar(){
        $professores = DB::select("SELECT * FROM professors");
        return view('listaProfessores', ['professores' => $professores]);
    }

    public function listarAdmin(){
        $professores = DB::select("SELECT * FROM professors");
        return view('listaProfessoresEditarRemover', ['professores' => $professores]);
    }
}
