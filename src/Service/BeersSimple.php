<?php

namespace App\Service;

use App\Beers;
use App\Controller\BeersController;
use GuzzleHttp\Client;

class BeersSimple
{
    public static function listBeersSimple()
    {
        $beers = new Beers();
        $simpleBeers = $beers->request();

        $list_beers = array();
        foreach ($simpleBeers as $beer) {
            array_push($list_beers, array (
                'id' => $beer['id'],
                'name' => $beer['name'],
                'description' => $beer['description']))
            ;
        }
        return $list_beers;
    }
}


