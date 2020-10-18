<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

$pastDT = Carbon::now()->subYears(18)->format('Y-m-d');

class Aluno extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'aluno';


    protected $fillable = ['nome', 'data_nascimento', 'email', 'telefone', 'rua', 'bairro', 'complemento', 'cidade',
                            'numero', 'escola', 'ano_conclusao', 'tipo_escola','fez_enem','nome_responsavel',
                            'telefone_responsavel', 'email_responsavel'];

    public static $rules = ['nome' => 'required|min:3|max:100',
                            'data_nascimento' => 'required|date',
                            'email' => 'required|email|unique:App\Models\Aluno,email',
                            'telefone' => 'required|min:14|max:15',
                            'rua' => 'required|max:100',
                            'bairro' => 'required|max:100',
                            'complemento' => 'nullable|max:100',
                            'cidade' => 'required|max:100',
                            'numero' => 'required|digits_between:1,5',
                            'escola' => 'required|max:100',
                            'ano_conclusao' => 'required|digits:4',
                            'tipo_escola' => 'required',
                            'fez_enem' => 'required',
                            'nome_responsavel' => 'nullable|min:3|max:100',
                            'telefone_responsavel' => 'nullable|min:14|max:15',
                            'email_responsavel' => 'nullable|email'];

    public static $rulesEditar = ['nome' => 'required|min:3|max:100',
        'data_nascimento' => 'required|date',
        'telefone' => 'required',
        'rua' => 'required|max:100',
        'bairro' => 'required|max:100',
        'complemento' => 'nullable|max:100',
        'cidade' => 'required|max:100',
        'numero' => 'required|digits_between:1,5',
        'escola' => 'required|max:100',
        'ano_conclusao' => 'required|digits:4',
        'tipo_escola' => 'required',
        'fez_enem' => 'required',
        'nome_responsavel' => 'nullable|min:3|max:100',
        'telefone_responsavel' => 'nullable',
        'email_responsavel' => 'nullable|email'];


    public static $messages = ['nome.*' => 'O campo nome é obrigatório e deve ter entre 3 e 100 caracteres',
                                'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
                                'email.*'  => 'O campo email é obrigatório e não pode ser um email já cadastrado',
                                'telefone.*' => 'O campo telefone é obrigatiorio e deve estar no formato (xx) xxxx-xxxx',
                                'rua.*' => 'O campo rua é obrigatório e deve ter no máximo 100 caracteres',
                                'bairro.*' => 'O campo bairro é obrigatório e deve ter no máximo 100 caracteres',
                                'complemento.*' => 'O campo complemento deve ter no máximo 100 caracteres',
                                'cidade.*' => 'O campo cidade é obrigatório e deve ter no máximo 100 caracteres',
                                'numero.*' => 'O campo numero é obrigatório e deve ter entre 1 e 5 digitos',
                                'escola.*' => 'O campo escola é obrigatório e deve ter no máximo 100 caracteres',
                                'ano_conclusao.*' => 'O campo ano de conclusão é obrigatório e deve estar no formato XXXX',
                                'nome_responsavel.*' => 'Este campo é obrigatório se você for menor de idade e deve ter entre 3 e 100 caracteres',
                                'telefone_responsavel.*' => 'Este campo é obrigatório se você for menor de idade',
                                'email_responsavel.*' => 'Este campo é obrigatório se você for menor de idade'];
}
