<?php

namespace App\Validators;

class UserValidator
{

    public static function createUserValidator($data)
    {
        $msg = "";

        if(!isset($data['nome']) || empty($data['nome']))
            $msg .= ' Nome é obrigatório.';

        if(!isset($data['data_nascimento']) || empty($data['data_nascimento'])){
            $msg .= ' Data Nascimento é obrigatório.';

        }else{
            $date = explode('/',$data['data_nascimento']);

            if(!checkdate($date[1],$date[0],$date[2]))
                $msg .= ' Data deve estar no formato: dd/mm/aaaa.';

        }

        return $msg;

    }

    public static function updateUserValidator($data)
    {

        $msg = "";

        $msg .= UserValidator::createUserValidator($data);

        if(!isset($data['id']) || empty($data['id']))
            $msg .= " id é obrigatório.";

        return $msg;

    }

}