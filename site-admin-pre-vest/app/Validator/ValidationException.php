<?php

namespace App\Validator;

use Throwable;

class ValidationException extends \Exception{

    protected $validator;

    public function __construct($validator, $text = "Erro na validação dos dados")
    {
        parent::__construct($text);
        $this->validator = $validator;
    }

    public function getValidator(){
        return $this->validator;
    }
}
