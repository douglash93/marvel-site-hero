<?php 

namespace Marvel\Services\Request;

class Request implements IRequest {

    private $url;
    private $success;

    function __construct($url) {
        $this->url = $url;
    }

    public function get() {

        $result = file_get_contents($this->url);
        $this->success = is_string($result);        

        $result = json_decode($result);
        return $result;       
    }

    public function ok(): bool {
        return $this->success;
    }


}