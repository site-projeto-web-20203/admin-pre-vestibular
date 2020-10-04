<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Professor extends Authenticatable
{

    use HasFactory;
	use Notifiable;

	protected $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'ehVoluntario', 'grauInstrucao'];
	public static $rules = [
	'nome' => 'required|min:5',
    'email' => 'required|email|unique:App\Models\Professor,email',
    'telefone' => 'required|digits:11',
	'data_nascimento' => 'required|date',
	'ehVoluntario' => 'required',
	'grauInstrucao' => 'required'
	];
	public static $messages = [
	'nome.*' => 'O campo nome é obrigatório e deve ter no mínimo 5 caracteres',
	'email.*' => 'O campo email é obrigatório',
    'telefone.*' => 'O campo telefone é obrigatório e deve ser preenchido no formato DDXXXXXXXXX',
	'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
	'voluntario.*' => 'É obrigatório informar se você é voluntário',
	'grauInstrucao.*' => 'O campo grau de instrução é obrigatório'
	];

    public function turmas(){
        return $this->belongsToMany('App\Models\Turma');
    }
}
