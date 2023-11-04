<?php
namespace Core;

class JsonResponse{

    public $jsonResponse;

    function __construct($data){
        $this->jsonResponse = $data;
        self::encode();
    }

    function encode(){

        $response = $this->jsonResponse;
        if(!empty($this->jsonResponse)){
            echo json_encode($response);
        } else {
            return null;
        }
    }
}