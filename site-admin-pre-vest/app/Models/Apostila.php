<?php

namespace App\Models;

#use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Apostila extends Authenticatable
{

    use HasFactory;
    use Notifiable;

    protected $fillable = ['disciplina', 'nome_arq'];
    //professor_id, administrador_id

    public static $rules = ['disciplina' => 'required',
                            'arq' => 'required'];

    public static $messages = ['disciplina.*' => 'O campo disciplina é obrigatório',
                                'arq.*' => 'É obrigatório selecionar o arquivo para enviar'];


    #hasOne pode ser usado como 0:1
    public function professor(){
        return $this->hasOne('App\Models\Professor');
    }

    public function administrador(){
        return $this->hasOne('App\Models\Administrador');
    }

}
