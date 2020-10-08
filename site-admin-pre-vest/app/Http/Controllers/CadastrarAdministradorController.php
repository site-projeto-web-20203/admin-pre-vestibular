<?php

namespace App\Http\Controllers;

use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class CadastrarAdministradorController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:professor');
    }

    public function prepararCadastro(){
        return view("cadastrarAdministrador", ['url' => 'admin']);
    }

    protected function cadastrar(Request $request){
        try{
            AdministradorValidator::validate($request->all());
            $dados = $request->all();
            Administrador::create($dados);
            #return "Administrador criado";
            #return redirect()->intended('login/admin');
            return view("auth.login");
        } catch(ValidationException $exception){
            return redirect('/cadastrar/administrador')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
