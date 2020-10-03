<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    use HasFactory;

    public function alunos(){
        return $this->hasMany('App\Models\Aluno');
    }

    public function professors(){
        return $this->belongsToMany('App\Models\Professor');
    }
}
