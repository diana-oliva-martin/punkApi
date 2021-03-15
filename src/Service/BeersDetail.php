<?php

namespace App\Service;

use App\Controller\BeersController;
use GuzzleHttp\Client;

class BeersDetail
{
    const URL_API = 'https://api.punkapi.com/v2/beers?food=food';
    //const URL = "https://api.punkapi.com/v2/beers?beer_name=food";

    public static function listBeers()
    {
        //Prueba Petición a la API PunkApi desde el cliente HTTP Guzzle
        $clientGuzzle = new Client();

        $res = $clientGuzzle->request('GET', BeersDetail::URL_API);
        $dataBeers = $res->getBody();

        return json_decode($dataBeers, true);
    }
}
