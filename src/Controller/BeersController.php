<?php

namespace App\Controller;

use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeersController extends AbstractController
{
    const URL_API = 'https://api.punkapi.com/v2/beers?food=food';
    //const URL = "https://api.punkapi.com/v2/beers?beer_name=food";

    /**
     * @Route("/beers/{option}", name="beers")
     */
    public function index($option)
    {
        //Prueba Petición a la API PunkApi desde el cliente HTTP Guzzle
        $clientGuzzle = new Client();

        $res = $clientGuzzle->request('GET', BeersController::URL_API);
        $dataBeers = $res->getBody();

        $beers = json_decode($dataBeers, true);

        return $this->render('beers/food.html.twig', [
            'option' => $option,
            'beers' => $beers
        ]);
    }
}