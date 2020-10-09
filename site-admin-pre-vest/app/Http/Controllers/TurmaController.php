<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use DB;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{
    public function listar(){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            $turmas = DB::select("SELECT * FROM turmas");
            return view('listaTurmas', ['turmas' => $turmas]);
        }
        else{
            return view('permissaoNegada');
        }
    }
}
