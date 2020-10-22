<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorTurma extends Model
{
    protected $table = 'professor_turma';
    protected $fillable = ['turma_id','professor_id'];
}
