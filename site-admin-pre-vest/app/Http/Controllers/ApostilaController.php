<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apostila;
use DB;

class ApostilaController extends Controller
{
    //td mundo pode ver as apostilas
    public function listar(){
        $apostilas = DB::select("SELECT * FROM apostilas");
        return view('listaApostilas', ['apostilas' => $apostilas]);
    }

    //td mundo pode baixar as apostilas
    public function download($id){
        $apostila = Apostila::find($id);
        $extensao = pathinfo($apostila['nome_arq'], PATHINFO_EXTENSION);
        if(file_exists( storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao))){
            return response()->download(storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao));
        } else {
            return view("arquivoIndisponivel");
        }
    }
}
