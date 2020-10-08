<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ApostilaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\CadastrarAdministradorController;
use App\Http\Controllers\CadastrarAlunoController;
use App\Http\Controllers\NovaApostilaController;
use App\Http\Controllers\CadastrarProfessorController;
use App\Http\Controllers\CadastrarTurmaController;
use App\Http\Controllers\NovaMensagemController;
use App\Http\Controllers\EditarProfessorController;

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

Auth::routes();

/*Route::get('menu/administrador', function () {
    return view('menuAdministrador');
});*/

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

Route::get('/cadastrar/apostila', [NovaApostilaController::class, 'prepararEnvio'])->name('apostila.cadastrar');

Route::post('/cadastrar/apostila', [NovaApostilaController::class, 'enviar'])->name('apostila.create');

Route::get('/cadastrar/professor', [CadastrarProfessorController::class, 'prepararCadastro'])->name('professor.cadastrar');

Route::post('/cadastrar/professor', [CadastrarProfessorController::class, 'cadastrar'])->name('professor.create');

Route::get('/cadastrar/turma', [CadastrarTurmaController::class, 'prepararCadastro'])->name('turma.cadastrar');

Route::post('/cadastrar/turma', [CadastrarTurmaController::class, 'cadastrar'])->name('turma.create');

Route::get('/mensagem/nova', [NovaMensagemController::class, 'prepararEnvio'])->name('mensagem.nova');

Route::post('/mensagem/nova', [NovaMensagemController::class, 'enviar'])->name('mensagem.create');

Route::get('/editar/professor/{id}', [EditarProfessorController::class, 'prepararAtualizacao'])->name('professor.editar');

Route::post('/editar/professor/{id}', [EditarProfessorController::class, 'atualizar'])->name('professor.update');

#Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::view('/home', 'home')->middleware('auth');
Route::get('menu/administrador', function () {
    return view('menuAdministrador');
})->name('admin.home');
#Route::view('/professor', 'listaTurmas');
Route::get('menu/professor', function(){
    return view('auth.register');
})->name('professor.home');
Route::get('menu/aluno', function(){
    return view('auth.register');
})->name('aluno.home');
