<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar/administradores', "AdministradorController@listar");

Route::get('/listar/alunos', "AlunoController@listar");

Route::get('/listar/apostilas', "ApostilaController@listar");

Route::get('/listar/mensagens', "MensagemController@listar");

Route::get('/listar/professores', "ProfessorController@listar");

Route::get('/listar/turmas', "TurmaController@listar");
