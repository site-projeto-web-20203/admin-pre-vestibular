<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use DB;

class RemoverProfessorController extends Controller
{
    public function prepararRemocao($id){
        $professor = Professor::find($id);
        return view('removerProfessor', ['professor' => $professor]);
    }

    public function remover($id){
        $professor = Professor::find($id);
        $professor->delete();
        return "Professor removido";
    }
}
