<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apostila extends Model
{
    #hasOne pode ser usado como 0:1
    public function professor(){
        return $this->hasOne('site-admin-pre-vest\Professor');
    }

    public function administrador(){
        return $this->hasOne('site-admin-pre-vest\Administrador');
    }
}
