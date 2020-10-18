<?php 

namespace Marvel\Controllers;
use Marvel\Services\View\View;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Marvel\Library\Marvel\Auth as MarvelAuth;
use Marvel\Services\Request\Request as HttpRequest;

class HeroController {

    public function list(Request $request, Response $response) 
    {

        $heros = [
            "Hulk",
            "Captain America",
            "Deadpool"
        ];       

        $herosCollection = [];
        foreach($heros as $hero) {

            $marvelAuth = new MarvelAuth();
            $queryString = http_build_query([
                'name' => $hero,
                'ts' => $marvelAuth->getTimestamp(),
                'apikey' => $marvelAuth->getApikey(),
                'hash' => $marvelAuth->getHash()
            ]);

            $httpRequest = new HttpRequest("https://gateway.marvel.com:443/v1/public/characters?$queryString");
            $resultRequest = $httpRequest->get();

            if(!$httpRequest->ok()) {
                throw new \Error("Não foi possível recuperar o herói: " . $hero);
            }

            if(
                $resultRequest->code == 200 && 
                count($resultRequest->data->results) > 0
            ) {
                
                $herosCollection[] = [
                    "id" => $resultRequest->data->results[0]->id,
                    "name" => $resultRequest->data->results[0]->name,
                    "description" => $resultRequest->data->results[0]->description,
                    "thumbnail" => $resultRequest->data->results[0]->thumbnail->path . ".". $resultRequest->data->results[0]->thumbnail->extension
                ];
            }             
        }  
        
        $view = new View();
        $response->getBody()->write($view->render('home.twig', [
            'heros' => $herosCollection
        ]));
        return $response;
    }
}