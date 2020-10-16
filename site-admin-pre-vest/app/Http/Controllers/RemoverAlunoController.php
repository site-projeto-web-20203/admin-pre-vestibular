<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use DB;
use Illuminate\Support\Facades\Auth;

class RemoverAlunoController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check()) {
            $aluno = Aluno::find($id);
            return view('removerAluno', ['aluno' => $aluno]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check()) {
            $aluno = Aluno::find($id);
            $aluno->delete();
            return "Aluno removido";
        }
        else{
            return view('permissaoNegada');
        }
    }
}
