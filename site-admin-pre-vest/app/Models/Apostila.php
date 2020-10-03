<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apostila extends Model
{

    use HasFactory;

    #hasOne pode ser usado como 0:1
    public function professor(){
        return $this->hasOne('App\Models\Professor');
    }

    public function administrador(){
        return $this->hasOne('App\Models\Administrador');
    }
}
