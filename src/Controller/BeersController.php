<?php

namespace App\Controller;

use App\Service\BeersSimple;
use App\Service\BeersDetail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeersController extends AbstractController
{
    /**
     * @Route("/beers/simple", name="beers")
     */
    public function simple(BeersSimple $beersSimple)
    {

       /* //Prueba Petición a la API PunkApi desde el cliente HTTP Guzzle
        $clientGuzzle = new Client();

        $res = $clientGuzzle->request('GET', BeersController::URL_API);
        $dataBeers = $res->getBody();

        $beers = json_decode($dataBeers, true);*/

        $beers = $beersSimple->listBeers();

        return $this->render('beers/food.html.twig', [
            'option' => 'simple',
            'beers' => $beers
        ]);
    }

    /**
     * @Route("/beers/detail", name="beers")
     */
    public function detail(BeersDetail $beersDetail)
    {

        /* //Prueba Petición a la API PunkApi desde el cliente HTTP Guzzle
         $clientGuzzle = new Client();

         $res = $clientGuzzle->request('GET', BeersController::URL_API);
         $dataBeers = $res->getBody();

         $beers = json_decode($dataBeers, true);*/

        $beers = $beersDetail->listBeers();

        return $this->render('beers/food.html.twig', [
            'option' => 'detail',
            'beers' => $beers
        ]);
    }
}
