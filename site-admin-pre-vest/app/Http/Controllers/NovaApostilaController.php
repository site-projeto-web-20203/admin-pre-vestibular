<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Apostila;

class NovaApostilaController extends Controller
{
    public function prepararEnvio(){
        return view('novaApostila');
    }

	public function enviar(Request $request){
		try{
			\App\Validator\ApostilaValidator::validate($request->all());
			$dados = $request->all();
			\App\Http\Controllers\ApostilaController::criar($dados);
			return "Apostila enviada";
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/apostila/nova')->withErrors($exception->getValidator())->withInput();

		}
	}
}
