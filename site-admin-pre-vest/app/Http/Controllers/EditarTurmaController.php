<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Validator\TurmaValidator;
use App\Models\Turma;

class EditarTurmaController extends Controller
{
    //acho que aqui seria bom colocar para so o admin com o id $id poder alterar os proprios dados
    public function prepararAtualizacao($id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            return view('editarTurma', ['turma' => $turma]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function atualizar(Request $request, $id){
        if(Auth::guard('admin')->check()) {
            $turma = Turma::find($id);
            try {
                $dados = $request->all();
                TurmaValidator::validateEditar($dados);
                $turma->update($dados);
                return "Turma atualizada";
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/editar/turma/' . $turma->id)->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
