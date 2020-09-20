<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function aluno(){
        return $this->hasMany('site-admin-pre-vest\Aluno');
    }

    public function professores(){
        return $this->belongsToMany('site-admin-pre-vest\Professor');
    }
}
