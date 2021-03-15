<?php

namespace App\Service;

use App\Beers;
use App\Controller\BeersController;
use GuzzleHttp\Client;

class BeersDetail
{
    public static function listBeersDetail()
    {
        $beers = new Beers();
        $detailBeers = $beers->request();

        $list_beers = array();
        foreach ($detailBeers as $beer) {
            array_push($list_beers, array (
                'id' => $beer['id'],
                'name' => $beer['name'],
                'description' => $beer['description'],
                'image_url' => $beer['image_url'],
                'tagline' => $beer['tagline'],
                'first_brewed' => $beer['first_brewed']))
            ;
        }
        return $list_beers;
    }
}
