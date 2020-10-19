<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Professor extends Authenticatable
{
    use HasFactory;
	use Notifiable;

	protected $guard = 'professor';

	protected $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'ehVoluntario', 'grauInstrucao', 'disponibilidade', 'areasAtuacao', 'password'];
	public static $rules = [
	    'nome' => 'required|min:5',
        'email' => 'required|email|unique:App\Models\Professor,email',
        'telefone' => 'required|min:14|max:15',
        'data_nascimento' => 'required|date',
        'ehVoluntario' => 'required',
        'grauInstrucao' => 'required',
        'disponibilidade' => 'required',
        'areasAtuacao' => 'required'
    ];
    public static $rulesEditar = [
        'nome' => 'required|min:5',
        'telefone' => 'required|min:14|max:15',
        'data_nascimento' => 'required|date',
        'ehVoluntario' => 'required',
        'grauInstrucao' => 'required',
        'disponibilidade' => 'required',
        'areasAtuacao' => 'required',
        'password' => 'required|min:5'
    ];
	public static $messages = [
	    'nome.*' => 'O campo nome é obrigatório e deve ter no mínimo 5 caracteres',
        'email.*' => 'O campo email é obrigatório e não pode ser um email já cadastrado',
        'telefone.*' => 'O campo telefone é obrigatiorio e deve estar no formato (xx) xxxx-xxxx',
        'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
        'voluntario.*' => 'É obrigatório informar se você é voluntário',
        'grauInstrucao.*' => 'O campo grau de instrução é obrigatório',
        'disponibilidade.*' => 'O campo disponibilidade é obrigatório',
        'areasAtuacao.*' => 'O campo áreas de atuação é obrigatório',
        'password.*' => 'Por favor digite sua senha atual ou uma nova senha com no minimo 5 digitos'
    ];

	protected $hidden = ['senha', 'remember_token'];

    public function turmas(){
        return $this->belongsToMany('App\Models\Turma');
    }
}
