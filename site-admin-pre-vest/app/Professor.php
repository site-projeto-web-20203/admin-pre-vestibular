<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function turmas(){
        return $this->belongsToMany('App\Turma');
    }
}
