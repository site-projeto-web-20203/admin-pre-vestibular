<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;

class RemoverAdministradorController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check()) {
            $administrador = Administrador::find($id);
            return view('removerAdministrador', ['administrador' => $administrador]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check()) {
            $administrador = Administrador::find($id);
            $administrador->delete();
            return view("administradorRemovido");
        }
        else{
            return view('permissaoNegada');
        }
    }
}
