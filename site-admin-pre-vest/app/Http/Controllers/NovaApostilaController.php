<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Apostila;

class NovaApostilaController extends Controller
{
    public function prepararEnvio(){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            return view('novaApostila');
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function enviar(Request $request){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            try {
                \App\Validator\ApostilaValidator::validate($request->all());
                $dados = $request->all();
                $dados['nome_arq'] = $dados['arq']->getClientOriginalName();
                $apostila = Apostila::create($dados);
                $extensao = pathinfo($apostila['nome_arq'], PATHINFO_EXTENSION);
                $dados['arq']->storePubliclyAs('/public/Apostilas', $apostila->id . '.' . $extensao);
                return "Apostila adicionada";
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/cadastrar/apostila')->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
