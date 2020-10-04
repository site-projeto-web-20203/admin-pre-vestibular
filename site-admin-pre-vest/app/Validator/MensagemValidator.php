<?php

namespace App\Validator;

class MensagemValidator
{
	public static function validate($data){
		$validator = \Validator::make($data, \App\Models\Mensagem::$rules, \App\Models\Mensagem::$messages);
		if(!$validator->errors()->isEmpty()){
			throw new ValidationException($validator, "Erro na validação da mensagem");
		}
		return $validator;
	}
}
