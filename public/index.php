<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

/*$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);*/

/* MAIN */

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