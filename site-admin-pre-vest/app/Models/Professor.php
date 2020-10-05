<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Professor extends Authenticatable
{

    use HasFactory;
	use Notifiable;

	protected $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'ehVoluntario', 'grauInstrucao', 'disponibilidade', 'areasAtuacao'];
	public static $rules = [
        'nome' => 'required|min:5',
        'email' => 'required|email|unique:App\Models\Professor,email',
        'telefone' => 'required',
        'data_nascimento' => 'required|date',
        'ehVoluntario' => 'required',
        'grauInstrucao' => 'required',
        'disponibilidade' => 'required',
        'areasAtuacao' => 'required'
	];
	public static $messages = [
	'nome.*' => 'O campo nome é obrigatório e deve ter no mínimo 5 caracteres',
	'email.*' => 'O campo email é obrigatório e não pode ser um email já cadastrado',
	'telefone.*' => 'O campo telefone é obrigatório',
	'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
	'voluntario.*' => 'É obrigatório informar se você é voluntário',
	'grauInstrucao.*' => 'O campo grau de instrução é obrigatório',
        'disponibilidade.*' => 'O campo disponibilidade é obrigatório',
        'areasAtuacao.*' => 'O campo áreas de atuação é obrigatório'
	];

    public function turmas(){
        return $this->belongsToMany('App\Models\Turma');
    }
}
