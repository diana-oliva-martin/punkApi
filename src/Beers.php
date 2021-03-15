<?php

namespace App;

use App\Service\BeersSimple;
use App\Service\BeersDetail;
use GuzzleHttp\Client;

class Beers
{
    const URL_API = 'https://api.punkapi.com/v2/beers?food=food';

    public static function request() {

        //Petición a la API PunkApi desde el cliente HTTP Guzzle
        $clientGuzzle = new Client();

        $res = $clientGuzzle->request('GET', Beers::URL_API);
        $dataBeers = $res->getBody();

        return json_decode($dataBeers, true);
    }

}