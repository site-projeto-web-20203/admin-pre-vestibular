<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Administrador;
use App\Models\Professor;
use App\Validator\AdministradorValidator;
use App\Validator\ValidationException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:professor');
    }

    public function showAdminRegisterForm(){
        return view('auth.register', ['url' => 'admin']);
    }

    public function showProfessorRegisterForm(){
        return view('auth.register', ['url' => 'professor']);
    }

    protected function createAdmin(Request $request){
        try{
            AdministradorValidator::validate($request->all());
            $dados = $request->all();
            Administrador::create($dados);
            #return "Administrador criado";
            return redirect()->intended('login/admin');
        } catch(ValidationException $exception){
            return redirect('/cadastrar/administrador')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }

    protected function createProfessor(Request $request){
        $this->validator($request->all())->validate();
        $professor = Professor::create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'senha' => Hash::make('12345'),
            'telefone' => $request['telefone'],
            'data_nascimento' => $request['data_nascimento'],
            'ehVoluntario' => $request['ehVoluntario'],
            'grauInstrucao' => $request['grauInstrucao'],
            'disponibilidade' => $request['disponibilidade'],
            'areasAtuacao' => $request['areasAtuacao'],
        ]);
        return redirect()->intended('login/professor');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
