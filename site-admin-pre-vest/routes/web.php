<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ApostilaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\CadastrarAdministradorController;
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

Route::get('/listar/administradores', [AdministradorController::class, 'listar']);

Route::get('/listar/alunos', [AlunoController::class, 'listar']);

Route::get('/listar/apostilas', [ApostilaController::class, 'listar']);

Route::get('/listar/mensagens', [MensagemController::class, 'listar']);

Route::get('/listar/professores', [ProfessorController::class, 'listar']);

Route::get('/listar/turmas', [TurmaController::class, 'listar']);

Route::get('/cadastrar/administrador', [CadastrarAdministradorController::class, 'prepararCadastro'])->name('administrador.cadastrar');
