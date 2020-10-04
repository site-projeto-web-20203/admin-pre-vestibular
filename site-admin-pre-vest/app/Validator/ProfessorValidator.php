<?php

namespace App\Validator;

class ProfessorValidator
{
	public static function validate($data){
		$validator = \Validator::make($data, \App\Models\Professor::$rules, \App\Models\Professor::$messages);
		if(!$validator->errors()->isEmpty()){
			throw new ValidationException($validator, "Erro na validação do professor");
		}
		return $validator;
	}
}
