<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeersController extends AbstractController
{
    /**
     * @Route("/beers", name="beers")
     */
    public function index()
    {
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BeersController.php',
        ]);*/
        $food = random_int(0, 100);

        return new Response(
          '<html><body>Lucky number:' .$food.'</body></html>'
        );
        return $this->render('beers/food.html.twig', [
            'food' => $food,
        ]);
    }

   /* public function food()
    {
        $food = random_int(0, 100);

        return $this->render('beers/food.html.twig', [
            'food' => $food,
        ]);
    }*/
}
