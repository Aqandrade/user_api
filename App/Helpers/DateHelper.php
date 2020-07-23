<?php

namespace App\Helpers;


class DateHelper
{
    public static function toDb($data)
    {
        $data = str_replace("/",'-',$data);

        return date('Y-m-d',strtotime($data));
    }
}