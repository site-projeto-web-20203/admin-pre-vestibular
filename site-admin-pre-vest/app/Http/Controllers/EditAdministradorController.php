<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Validator\AdministradorValidator;
use App\Models\Administrador;

class EditAdministradorController extends Controller
{
    public function prepararAtualizacao($id){
        $administrador = Administrador::find($id);
        return view('editarAdministrador', ['administrador' => $administrador]);
    }

    public function atualizar(Request $request, $id){
        $administrador = Administrador::find($id);
        try{
            $dados = $request->all();
            AdministradorValidator::validateEditar($dados);
            $dados['password'] = Hash::make($dados['password']);
            $administrador->update($dados);
            return "Administrador atualizado";
        }
        catch(\App\Validator\ValidationException $exception){
            return redirect('/editar/administrador/'.$administrador->id)->withErrors($exception->getValidator())->withInput();
        }
    }
}
