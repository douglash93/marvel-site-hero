<?php 

namespace Marvel\Tests\Request;
use Marvel\Services\Request\Request as HttpRequest;
use Marvel\Library\Marvel\Auth as MarvelAuth;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase 
{

    protected function setUp(): void 
    {
        define('MARVEL_API_KEY', '[MARVEL_API_KEY_AQUI]');
        define('MARVEL_PRIVATE_KEY', '[MARVEL_PRIVATE_KEY_AQUI]');
    }

    public function testRequestCharacters() 
    {
        $marvelAuth = new MarvelAuth();
        $queryString = http_build_query([
            'ts' => $marvelAuth->getTimestamp(),
            'apikey' => $marvelAuth->getApikey(),
            'hash' => $marvelAuth->getHash()
        ]);

        $request = new HttpRequest("https://gateway.marvel.com:443/v1/public/characters?$queryString");
        $resultRequest = $request->get();

        $this->assertTrue($request->ok());        
        $this->assertNotNull($resultRequest);
    }

}