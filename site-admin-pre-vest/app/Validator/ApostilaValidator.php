<?php

namespace App\Validator;

use Carbon\Carbon;

class ApostilaValidator{

    public static function validate($data){
        $validator = \Validator::make($data, \App\Models\Apostila::$rules, \App\Models\Apostila::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação da Apostila");
        }
        return $validator;
    }
}
