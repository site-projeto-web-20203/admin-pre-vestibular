<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;
use DB;
use Illuminate\Support\Facades\Auth;

class MensagemController extends Controller
{
    public function listar(){
        if(Auth::guard('admin')->check()) {
            $mensagens = DB::select("SELECT * FROM mensagems");
            return view('listaMensagens', ['mensagens' => $mensagens]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function visualizar($id){
        $mensagem = Mensagem::find($id);
        return view('visualizarMensagem', ['mensagem' => $mensagem]);
    }
}
