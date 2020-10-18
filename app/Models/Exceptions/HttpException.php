<?php 
namespace Marvel\Models\Exceptions;

class HttpException extends \Exception {

    private string $url;

    public function __construct($url, $message, $errorCode)
    {
       $this->url = $url;     
       parent::__construct($message, $errorCode);
    }

    public function getUrl(): string {
        return $this->url;
    }
}