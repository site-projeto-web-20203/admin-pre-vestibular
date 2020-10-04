<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apostila;
use Illuminate\Support\Facades\Hash;
use App\Mensagem;

class NovaApostilaController extends Controller
{
    public function prepararEnvio(){
        return view('cadastrarApostila');
    }

    public function enviar(Request $request){
        try{
            \App\Validator\ApostilaValidator::validate($request->all());
            $dados = $request->all();
            $dados['nome_arq'] = $dados['arq'];
            Apostila::create($dados);
            return "Apostila adicionada";
        }
        catch(\App\Validator\ValidationException $exception){
            return redirect('/cadastrar/apostila')
                ->withErrors($exception->getValidator())
                ->withInput();

        }
    }
}
