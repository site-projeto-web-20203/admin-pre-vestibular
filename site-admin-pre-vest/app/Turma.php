<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function aluno(){
        return $this->hasMany(('site-admin-pre-vest\Aluno'));
    }
}
