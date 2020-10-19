<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Apostila;

class RemoverApostilaController extends Controller
{
    public function prepararRemocao($id){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            $apostila = Apostila::find($id);
            return view('removerApostila', ['apostila' => $apostila]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function remover($id){
        if(Auth::guard('admin')->check() or Auth::guard('professor')->check()) {
            $apostila = Apostila::find($id);
            $apostila->delete();
            $extensao = pathinfo($apostila['nome_arq'], PATHINFO_EXTENSION);
            if(file_exists(storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao))) {
                Storage::delete(storage_path('app/public/Apostilas/' . $apostila->id . '.' . $extensao));
            }
            return view('apostilaRemovida');
        }
        else{
            return view('permissaoNegada');
        }
    }
}
