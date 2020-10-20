<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use DB;
use Illuminate\Support\Facades\Auth;

class RemoverMensagemController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check()) {
            $mensagem = Mensagem::find($id);
            return view('removerMensagem', ['mensagem' => $mensagem]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check()) {
            $mensagem = Mensagem::find($id);
            $mensagem->delete();
            return view("mensagemRemovida");
        }
        else{
            return view('permissaoNegada');
        }
    }
}
