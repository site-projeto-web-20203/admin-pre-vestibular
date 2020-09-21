<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function aluno(){
        return $this->hasMany('App\Aluno');
    }

    public function professors(){
        return $this->belongsToMany('App\Professor');
    }
}
