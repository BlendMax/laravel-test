<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Middleware;
use GuzzleHttp\Stream\StreamInterface;

class Guzzle
 {

    // Отримання JSON масиву з API по валюті ( $ item ) і датою ( $ d ).

    public static function getRemoteDate() //Retrieve
 {
        $arrValcode = array(
            'USD',
            'EUR',
            'CZK',
            'KZT'
        );

        $d = date( 'Ymd' );
        foreach ( $arrValcode as $item ) {
            $client = new Client();
            $res = $client->request( 'GET', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode='.$item.'&date='.$d.'&json' );
            $data = $res->getBody();
            $array[] = json_decode( $data, true );
        }
        return $array;
    }
}