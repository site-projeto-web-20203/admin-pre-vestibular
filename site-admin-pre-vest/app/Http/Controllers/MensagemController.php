<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagem;
use DB;

class MensagemController extends Controller
{
    public function listar(){
        $mensagens = DB::select("SELECT * FROM mensagems");
        return view('listaMensagens', ['mensagens' => $mensagens]);
    }
}
