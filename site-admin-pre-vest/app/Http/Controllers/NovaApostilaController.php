<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                if(Auth::guard('admin')->check()){
                    $dados['administrador_id'] = (Auth::guard('admin')->user())->id;
                }
                else{
                    $dados['professor_id'] = (Auth::guard('professor')->user())->id;
                }
                $apostila = Apostila::create($dados);
                $extensao = pathinfo($apostila['nome_arq'], PATHINFO_EXTENSION);
                $dados['arq']->storePubliclyAs('/public/Apostilas', $apostila->id . '.' . $extensao);
                return view('apostilaAdicionada');
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/cadastrar/apostila')->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
