<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use DB;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    public function listar(){
        if(Auth::guard('professor')->check()) {
            $administradores = DB::select("SELECT * FROM administradors");
            return view('listaAdministradores', ['administradores' => $administradores]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function listarAdmins(){
        if(Auth::guard('admin')->check()) {
            $administradores = DB::select("SELECT * FROM administradors");
            return view('listaAdministradoresEditarRemover', ['administradores' => $administradores]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function visualizar($id){
        $administrador = Administrador::find($id);
        return view('visualizarAdministrador', ['administrador' => $administrador]);
    }
}
