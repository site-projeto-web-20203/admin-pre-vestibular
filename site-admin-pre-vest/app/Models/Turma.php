<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    use HasFactory;

    public function aluno(){
        return $this->hasMany('App\Models\Aluno');
    }

    public function professors(){
        return $this->belongsToMany('App\Models\Professor');
    }
}
