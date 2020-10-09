<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class RemoverAdministradorController extends Controller
{
    public function prepararRemocao($id){
        $administrador = Administrador::find($id);
        return view('removerAdministrador', ['administrador' => $administrador]);
    }

    public function remover($id){
        $administrador = Administrador::find($id);
        $administrador->delete();
        return "Administrador removido";
    }
}
