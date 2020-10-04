<?php

namespace App\Models;

#use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Administrador extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['nome', 'data_nascimento', 'email', 'telefone'];

    public static $rules = ['nome' => 'required|min:3|max:100',
                            'data_nascimento' => 'required|date',
                            'email' => 'required|email|unique:App\Models\Administrador,email',
                            'telefone' => 'required|digits:11'];

    public static $messages = ['nome.*' => 'O campo nome é obrigatório e deve ter entre 3 e 100 caracteres',
                                'data_nascimento.*' => 'O campo Data de nascimento é obrigatório e deve ser preenchido no formato XX/XX/XXXX',
                                'email.*' => 'O campo email é obrigatório e não pode ser um email já cadastrado',
                                'telefone.*' => 'O campo telefone é obrigatiorio e deve ser preenchido no formato DDXXXXXXXXX'];
}
