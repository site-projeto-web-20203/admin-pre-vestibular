<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function($request,$next){
            $this->user=Auth::user(); // here the user should exist from the session
            return $next($request);
    });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function adminHome(){
        return view('adminHome');
    }

    public function professorHome(){
        return view('professorHome');
    }

    public function alunoHome(){
        return view('alunoHome');
    }
}
