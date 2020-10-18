<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Apostila;
use Illuminate\Support\Facades\Auth;

class ApostilaController extends Controller
{
    //td mundo pode ver as apostilas
    public function listar(){
        $apostilas = DB::select("SELECT * FROM apostilas");
        return view('listaApostilas', ['apostilas' => $apostilas]);
    }

    //listando todas as apostilas com opcao de remover
    public function listarAdmin(){
        if(Auth::guard('admin')->check()){
            $apostilas = DB::select("SELECT * FROM apostilas");
            return view('listaApostilasRemover', ['apostilas' => $apostilas]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    //td mundo pode baixar as apostilas
    public function download($id){
        $apostila = Apostila::find($id);
        $extensao = pathinfo($apostila['nome_arq'], PATHINFO_EXTENSION);
        if(file_exists(storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao))){
            return response()->download(storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao));
        } else {
            return view("arquivoIndisponivel");
        }
    }
}
