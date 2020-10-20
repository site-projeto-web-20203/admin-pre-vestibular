<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RemoverTurmaController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            return view('removerTurma', ['turma' => $turma]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            $turma->delete();
            return "Turma removida";
        }
        else{
            return view('permissaoNegada');
        }
    }
}
