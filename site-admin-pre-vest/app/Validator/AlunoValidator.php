<?php

namespace App\Validator;

class AlunoValidator{

    public static function validate($data){
        $validator = \Validator::make($data, \App\Models\Aluno::$rules, \App\Models\Aluno::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Aluno");
        }
        return $validator;
    }
}
