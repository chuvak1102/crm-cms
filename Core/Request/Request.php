<?php
namespace Core\Request;

class Request{

    private $get;
    private $post;
    private $files;
    private $params = array();
    private $request;

    function __construct(){
        $this->get = $_GET;
        $this->post = $_POST;
        $this->request = $_REQUEST;
        $this->files = $_FILES;
    }

    public function get($name, $default = null){
        if(isset($this->get[$name]) && $this->get[$name] != ''){
            return $this->get[$name];
        } else {
            if(isset($this->post[$name]) && $this->post[$name] != '') {
                return $this->post[$name];
            }
            return $default;
        }
    }

    function post($name){
        if(isset($this->post[$name]) && $this->post[$name] != ''){
            return $this->post[$name];
        } else {
            return null;
        }
    }

    function files($name)
    {
        return $this->files[$name] ?? null;
    }

    function isXmlHttpRequest()
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){

            return true;
        } else {
            return false;
        }
    }

    function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    function seg($number)
    {
        $url = trim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
        $seg = explode('/', $url)[$number] ?? null;

        return $seg;
    }
}