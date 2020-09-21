<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apostila;
use DB;

class ApostilaController extends Controller
{
    public function listar(){
        $apostilas = DB::select("SELECT * FROM apostilas");
        return view('listaApostilas', ['apostilas' => $apostilas]);
    }
}
