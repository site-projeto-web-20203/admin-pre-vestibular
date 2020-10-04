<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Turma extends Authenticatable
{

    use HasFactory;
    use Notifiable;

	protected $fillable = ['dataInicio', 'dataFim', 'horario', 'nome'];
	public static $rules = [
	'dataInicio' => 'required|date',
	'dataFim' => 'required|date',
	'horario' => 'required',
	'nome' => 'required|min:4'
	];
	public static $messages = [
	'dataInicio.*' => 'O campo data de início é obrigatório',
	'dataFim.*' => 'O campo data de encerramento é obrigatório',
	'horario.*' => 'O campo horário é obrigatório',
	'nome.*' => 'O campo nome é obrigatório e deve ter no mínimo 4 caracteres'
	];

    public function alunos(){
        return $this->hasMany('App\Models\Aluno');
    }

    public function professors(){
        return $this->belongsToMany('App\Models\Professor');
    }
}
