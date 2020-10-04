<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrarProfessorController;
use App\Http\Controllers\NovaMensagemController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ApostilaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\CadastrarAdministradorController;
use App\Http\Controllers\CadastrarAlunoController;

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

Route::get('menu/administrador', function () {
    return view('menuAdministrador');
});

Route::get('/cadastrar/professor', [CadastrarProfessorController::class, 'prepararCadastro'])->name('cadastrar.professor');

Route::get('/mensagem/nova', [NovaMensagemController::class, 'prepararEnvio'])->name('nova.mensagem');

Route::get('/listar/administradores', [AdministradorController::class, 'listar']);

Route::get('/listar/alunos', [AlunoController::class, 'listar']);

Route::get('/listar/apostilas', [ApostilaController::class, 'listar']);

Route::get('/listar/mensagens', [MensagemController::class, 'listar']);

Route::get('/listar/professores', [ProfessorController::class, 'listar']);

Route::get('/listar/turmas', [TurmaController::class, 'listar']);

Route::get('/cadastrar/administrador', [CadastrarAdministradorController::class, 'prepararCadastro'])->name('administrador.cadastrar');

Route::post('/cadastrar/administrador', [CadastrarAdministradorController::class, 'cadastrar'])->name('administrador.create');

Route::get('/cadastrar/aluno', [CadastrarAlunoController::class, 'prepararCadastro'])->name('aluno.cadastrar');

Route::post('/cadastrar/aluno', [CadastrarAlunoController::class, 'cadastrar'])->name('aluno.create');
