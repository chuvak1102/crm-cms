<?php
namespace Framework\Component\HttpFoundation;

class Response{

    public $response;

    function __construct($response){
        $this->response = $response;
        self::response();
    }

    function response(){
        echo '<pre>';
        print_r($this->response);
        die();
    }


}