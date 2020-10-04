<?php

namespace App\Validator;
use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class AlunoValidator{

    public static function validate($data){
        $pastDT = Carbon::now()->subYears(18)->format('Y-m-d');
        $dob = Carbon::parse( $data['data_nascimento']);
        if($dob->gt($pastDT)){
            $new_rules =  \App\Models\Aluno::$rules;
            $new_rules['nome_responsavel'] = 'required|min:3|max:100';
            $new_rules['telefone_responsavel'] = 'required|digits:11';
            $new_rules['email_responsavel'] = 'required';
            $validator = \Validator::make($data, $new_rules, \App\Models\Aluno::$messages);
        }
        else{
            $validator = \Validator::make($data, \App\Models\Aluno::$rules, \App\Models\Aluno::$messages);

        }

        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Aluno");
        }
        return $validator;
    }
}
