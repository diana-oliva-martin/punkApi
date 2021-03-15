<?php

namespace App;

use App\Service\BeersSimple;
use App\Service\BeersDetail;
use GuzzleHttp\Client;

class Beers
{
    const URL_API = 'https://api.punkapi.com/v2/beers?food=food';

    public static function request()
    {

        //Request to the PunkApi API from the HTTP Guzzle client
        $clientGuzzle = new Client();

        try {
            $res = $clientGuzzle->request('GET', Beers::URL_API);
            $dataBeers = $res->getBody();
            return json_decode($dataBeers, true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo 'An error occurred while trying to get the beers by punkAPI. ' . $e->getMessage();
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            echo 'An error occurred while trying to get the beers by punkAPI. ' . $e->getMessage();
        }
    }

}