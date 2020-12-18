<?php

namespace App\Http\Resources;

class Values 
{

    public static function valueArray()
    {
        $val = array(
            'UAN',
            'USD',
            'EUR',
            'CZK',
            'KZT'
        );

        return $val;
    }

    public static function fromArray()
    {
        $fr = array(
            '1',
            '2',
            '1',
            '3',
            '1',
            '4',
            '1',
            '5'
        );

        return $fr;

    }

    public static function toArray()
    {
        $t = array(
            '2',
            '1',
            '3',
            '1',
            '4',
            '1',
            '5',
            '1'
        );

        return $t;

    }
 
}
