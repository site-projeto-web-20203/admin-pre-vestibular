<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Authenticatable
{
    use HasFactory;
	use Notifiable;

	protected $fillable = ['remetente', 'email', 'conteudo'];
	public static $rules = [
	'remetente' => 'required|min:5', 
	'email' => 'required|email',
	'conteudo' => 'required|min:15',
	];
	public static $messages = [
	'remetente.*' => 'O campo nome é obrigatório e deve ter no mínimo 5 caracteres',
	'email.*' => 'O campo email é obrigatório',
	'conteudo.*' => 'Sua mensagem deve ter no mínimo 15 caracteres'
	];
}
