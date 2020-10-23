<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

//td mundo pode enviar msg
class NovaMensagemController extends Controller
{
    public function prepararEnvio(){
        return view('novaMensagem');
    }

	public function enviar(Request $request){
		try{
			\App\Validator\MensagemValidator::validate($request->all());
			$dados = $request->all();
			Mensagem::create($dados);
			return view('mensagemEnviada');
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/mensagem/nova')->withErrors($exception->getValidator())->withInput();
		}
	}
}
