<?php

namespace App\Validator;

class TurmaValidator
{
	public static function validate($data){
		$validator = \Validator::make($data, \App\Models\Turma::$rules, \App\Models\Turma::$messages);
		if(!$validator->errors()->isEmpty()){
			throw new ValidationException($validator, "Erro na validação da turma");
		}
		return $validator;
	}

    public static function validateEditar($data){
        $validator = \Validator::make($data, \App\Models\Turma::$rulesEditar, \App\Models\Turma::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação da turma");
        }
        return $validator;
    }
}
