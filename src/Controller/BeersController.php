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
    public function simple(BeersSimple $beersSimple): Response
    {
        $beers = $beersSimple->listBeersSimple();

        return $this->render('beers/food.html.twig', [
            'option' => 'simple',
            'beers' => $beers
        ]);
    }

    /**
     * @Route("/beers/detail", name="beers")
     */
    public function detail(BeersDetail $beersDetail): Response
    {
        $beers = $beersDetail->listBeersDetail();

        return $this->render('beers/food.html.twig', [
            'option' => 'detail',
            'beers' => $beers
        ]);
    }
}
