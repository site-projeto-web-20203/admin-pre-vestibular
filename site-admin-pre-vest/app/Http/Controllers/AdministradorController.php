<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use DB;

class AdministradorController extends Controller
{
    public function listar(){
        $administradores = DB::select("SELECT * FROM administradors");
        return view('listaAdministradores', ['administradores' => $administradores]);
    }
}
