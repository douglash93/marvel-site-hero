<?php 

namespace Marvel\Library\Marvel;

class Auth {

    private $timestamp;
    private $apikey;
    private $hash;

    public function __construct()
    {
        $date = new \DateTime();
        $this->timestamp = $date->getTimestamp();
        $this->apikey = MARVEL_API_KEY;
        $this->hash = hash('md5', $this->timestamp . MARVEL_PRIVATE_KEY . MARVEL_API_KEY);
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getApikey()
    {
        return $this->apikey;
    }

    public function getHash()
    {
        return $this->hash;
    }

}