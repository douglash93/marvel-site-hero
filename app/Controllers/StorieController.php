<?php 

namespace Marvel\Controllers;
use Marvel\Services\View\View;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Marvel\Library\Marvel\Auth as MarvelAuth;
use Marvel\Services\Request\Request as HttpRequest;

class StorieController 
{
    public function getByHero(Request $request, Response $response) 
    {
        $queryParams = $request->getQueryParams();
        if(array_key_exists("heroId", $queryParams)) {
        
            $heroId = $queryParams["heroId"];
        
            $marvelAuth = new MarvelAuth();
            $queryString = http_build_query([
                'ts' => $marvelAuth->getTimestamp(),
                'apikey' => $marvelAuth->getApikey(),
                'hash' => $marvelAuth->getHash()
            ]);

            $request = new HttpRequest("https://gateway.marvel.com:443/v1/public/characters/$heroId/comics?$queryString");
            $resultRequest = $request->get();

            if(!$request->ok()) {
                throw new \Error("Não foi possível recuperar as histórias do personagem id: " . $heroId);
            }

            $storiesCollection = [];
            if(
                $resultRequest->code == 200 && 
                count($resultRequest->data->results) > 0
            ) {

                $countStories = count($resultRequest->data->results);
                $size = $countStories >= 5 ? 5 : $countStories; 
                $stories = array_splice($resultRequest->data->results, 0, $size);

                foreach ($stories as $storie) {
                    $storiesCollection[] = [
                        "id" => $storie->id,
                        "title" => $storie->title,
                        "thumbnail" => $storie->thumbnail->path . ".". $storie->thumbnail->extension
                    ];
                }               
            } 
       }
               
        $view = new View();
        $response->getBody()->write($view->render('storie.twig', [
            'stories' => $storiesCollection
        ]));
        return $response;        
    }

}