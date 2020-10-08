<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:professor')->except('logout');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.home');
        }
        if(Auth::guard('professor')->attempt($credentials)){
            return redirect()->route('professor.home');
        }
        if(Auth::guard('aluno')->attempt($credentials)){
            return redirect()->route('aluno.home');
        }
        else{
            return redirect()->route('login')->with('error', 'Não existe uma conta registrada com estes dados');
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request){
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('auth.login');
    }

}
