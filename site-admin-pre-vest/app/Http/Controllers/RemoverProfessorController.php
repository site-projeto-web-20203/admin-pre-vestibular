<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use DB;
use Illuminate\Support\Facades\Auth;

class RemoverProfessorController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check()) {
            $professor = Professor::find($id);
            return view('removerProfessor', ['professor' => $professor]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check()) {
            $professor = Professor::find($id);
            $professor->delete();
            return "Professor removido";
        }
        else{
            return view('permissaoNegada');
        }
    }
}
