<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
#use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Aluno extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['nome', 'idade', 'email', 'telefone', 'rua', 'bairro', 'complemento', 'cidade',
                            'numero', 'escola', 'ano_conclusao', 'tipo_escola'];
        //, 'fez_enem', 'nome_responsavel'];
                            //'telefone_responsavel', 'email_responsavel'];

    public static $rules = ['nome' => 'required|min:3|max:100',
                            'idade' => 'required|digits_between:1,3',
                            'email' => 'required|email|unique:App\Models\Aluno,email',
                            'telefone' => 'required|digits:11',
                            'rua' => 'required|max:100',
                            'bairro' => 'required|max:100',
                            'complemento' => 'nullable|max:100',
                            'cidade' => 'required|max:100',
                            'numero' => 'required|digits_between:1,5',
                            'escola' => 'required|max:100',
                            'ano_conclusao' => 'required|date',
                            'tipo_escola' => 'required|max:20'];
                            //'fez_enem' => 'required|max:3',
                            //'nome_responsavel' => 'required|min:3|max:100'];
                            //'telefone_responsavel' => 'required|digits:11',
                            //'email_responsavel' => 'required_unless:idade,|'];

    public static $messages = ['nome.*' => 'O campo nome é obrigatório e deve ter entre 3 e 100 caracteres',
                                'idade.*' => 'O campo idade é obrigatório e deve ter entre 1 e 3 digitos',
                                'email.*'  => 'O campo email é obrigatório e não pode ser um email já cadastrado',
                                'telefone.*' => 'O campo telefone é obrigatiorio e deve ser preenchido no formato DDXXXXXXXXX',
                                'rua.*' => 'O campo rua é obrigatório e deve ter no máximo 100 caracteres',
                                'bairro.*' => 'O campo bairro é obrigatório e deve ter no máximo 100 caracteres',
                                'complemento.*' => 'O campo complemento deve ter no máximo 100 caracteres',
                                'cidade.*' => 'O campo cidade é obrigatório e deve ter no máximo 100 caracteres',
                                'numero.*' => 'O campo numero é obrigatório e deve ter entre 1 e 5 digitos',
                                'escola' => 'O campo escola é obrigatório e deve ter no máximo 100 caracteres',
                                'ano_conclusao' => 'O campo ano de conclusão é obrigatório e deve estar no formato XX/XX/XXXX'];
}
