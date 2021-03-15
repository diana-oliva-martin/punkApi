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

        /*return new Response(
            '<html><body>Lucky number:' . $food . '</body></html>'
        );*/
        return $this->render('beers/food.html.twig', [
            'food' => $food
        ]);
    }
}
/*
# Prueba Petición a la API PunkApi desde el cliente HTTP Guzzle
        $client = new GuzzleHttp\Client();

// Petición Búsqueda
        $url = "https://api.punkapi.com/v2/beers?food=food";
//$url = "https://api.punkapi.com/v2/beers?beer_name=food";
        $res = $client->request('GET', $url);
//echo "Code Response: ".$res->getStatusCode(); //200
//echo "<br>";

//echo "Output format: ".$res->getHeader('content-type')[0]; // 'application/json; charset=utf8'
//echo "<br>";

//echo "Response: ";
//echo "<br>";
        $dataBeers = $res->getBody();

        $beers = json_decode($dataBeers, true);

// Petición listado
//
// 1. Primera petición: Devolver id, name, description
        foreach ($beers as $beer) {
            echo $beer['id'].', '.$beer['name'].', '.$beer['description'];
            echo "<br>";
            echo "<br>";
        }

// 2. Segunda petición: Devolver id, name, description, imagen, slogan (tagline) y first_brewed
        foreach ($beers as $beer) {
            echo $beer['id'].', '.$beer['name'].', '.$beer['description'].', '.$beer['image_url'].', '.$beer['tagline'].', '.$beer['first_brewed'];
            echo "<br>";
            echo "<br>";
        }

    }
*/
   /* public function food()
    {
        $food = random_int(0, 100);

        return $this->render('beers/food.html.twig', [
            'food' => $food,
        ]);
    }*/
//}
//}
