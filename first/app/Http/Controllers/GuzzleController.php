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

class GuzzleController extends Controller
 {
    public function __invoke()
 {
    $rates = \DB::table('rates')->paginate(8);

         return view('guzzle', ['rates' => $rates]);


    }

}
