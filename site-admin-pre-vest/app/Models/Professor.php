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

	protected $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'ehVoluntario', 'grauInstrucao','dispoManha','dispoTarde',
                            'dispoNoite', 'atuaBiologia', 'atuaEspanhol', 'atuaFilosofia', 'atuaFisica', 'atuaGeografia', 'atuaHistoria',
                            'atuaIngles', 'atuaLiteratura', 'atuaMatematica', 'atuaPortugues', 'atuaQuimica', 'atuaRedacao', 'atuaSociologia'];
	public static $rules = [
        'nome' => 'required|min:5',
        'email' => 'required|email|unique:App\Models\Professor,email',
        'telefone' => 'required|digits:11',
        'data_nascimento' => 'required|date',
        'ehVoluntario' => 'required',
        'grauInstrucao' => 'required',
        'dispoManha' => 'nullable',
        'dispoTarde' => 'nullable',
        'dispoNoite' => 'nullable',
        'atuaBiologia' => 'nullable',
        'atuaEspanhol' => 'nullable',
        'atuaFilosofia' => 'nullable',
        'atuaFisica' => 'nullable',
        'atuaGeografia' => 'nullable',
        'atuaHistoria' => 'nullable',
        'atuaIngles' => 'nullable',
        'atuaLiteratura' => 'nullable',
        'atuaMatematica' => 'nullable',
        'atuaPortugues' => 'nullable',
        'atuaQuimica' => 'nullable',
        'atuaRedacao' => 'nullable',
        'atuaSociologia' => 'nullable'
	];
	public static $messages = [
	'nome.*' => 'O campo nome é obrigatório e deve ter no mínimo 5 caracteres',
	'email.*' => 'O campo email é obrigatório e não pode ser um email já cadastrado',
    'telefone.*' => 'O campo telefone é obrigatório e deve ser preenchido no formato DDXXXXXXXXX',
	'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
	'voluntario.*' => 'É obrigatório informar se você é voluntário',
	'grauInstrucao.*' => 'O campo grau de instrução é obrigatório'
	];

    public function turmas(){
        return $this->belongsToMany('App\Models\Turma');
    }
}
