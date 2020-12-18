<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Middleware;
use GuzzleHttp\Stream\StreamInterface;
use App\Guzzle;
use App\Models\Currency;
use App\Models\Rate;
use App\Http\Resources\Values;

class GetController extends Controller
 {
    public static function getArray()
 {
        $guzzle = Guzzle::getRemoteDate();

        //Запис у таблицю.
        $values = Values::valueArray();
        foreach ( $values as $val ) {

            $cucurrencies = Currency::updateOrCreate(
                ['values' => $val]

            );

            continue;
        }

        \DB::delete( 'delete from rates' );

        foreach ( $guzzle as $value ) {
            foreach ( $value as $item ) {
                $to = $item['cc'];
                // Назва валюти.
                $ratio = $item['rate'];
                //Курс валюти.

                //Конвертація дати у правильний запис.
                $update_date = $item['exchangedate'];
                $d = date( 'Y-m-d', strtotime( $update_date ) );

                //Обчислення зворотнього курсу валют
                $r = 1/$ratio;

                $rat  =  array( $ratio, $r );

                foreach ( $rat as $ra ) {
                    $to = Values::toArray();
                    $from = Values::fromArray();
                    foreach ( $to as $t ) {
                        foreach ( $from as $f ) {

                            // Запис у таблицю.
                            $rates = Rate::updateOrCreate(
                                ['ratio' => $ra, 'update_date' => $d, 'from_id' => $f, 'to_id' => $t]
                            );
                            continue;
                        }
                        continue;
                    }

                    continue;
                }
                continue;
            }
            continue;
        }

        $rates = \DB::table( 'rates' )->paginate( 8 );

        return view( 'guzzle', ['rates' => $rates] );

    }
}

