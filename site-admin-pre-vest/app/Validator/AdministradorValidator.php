<?php

namespace App\Validator;

class AdministradorValidator{

    public static function validate($data){
        $validator = \Validator::make($data, \App\Models\Administrador::$rules, \App\Models\Administrador::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Administrador");
        }
        return $validator;
    }

    public static function validateEditar($data){
        $validator = \Validator::make($data, \App\Models\Administrador::$rulesEditar, \App\Models\Administrador::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Administrador");
        }
        return $validator;
    }
}
