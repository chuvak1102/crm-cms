<?php
use Framework\Modules\Annotation\AnnotationParser;
use Framework\Component\ORM\Entity;
use Framework\App;
use app\Config\Config;
use Framework\Modules\Logger\Logger;

class Router
{
    public static function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    // segment
    public static function seg($s){
        return isset(explode("/", $_SERVER['REQUEST_URI'])[$s])
            ? explode("/", $_SERVER['REQUEST_URI'])[$s]
            : false;
    }

    public static function match(array $segments)
    {
        return Router::uri();
    }

    public static function domain()
    {
        return 'eco';
    }

    private $routes = [];

    function process()
    {

    }

    public static function add(array $route)
    {
        var_dump($route);
        die();
    }



    public function run()
    {
        $query = $_SERVER['REQUEST_URI'];

        if(!preg_match(Config::Firewall, $query))
        {
            header('location:/');
            Logger::save('Attempt to access url '.$query);
        }

        $this->execute($query);
    }

    private function execute($query)
    {
        $routes = AnnotationParser::parse();

        // чистое совпадение route и request uri
        foreach($routes as $route)
        {
            foreach($route as $path => $controllerAction)
            {
                if($path == $query || $path == $query.'/' || $path.'/' == $query)
                {
                    $result = array(
                        'path' => $query,
                        'bundle' => $controllerAction['bundle'],
                        'controller' => $controllerAction['controller'],
                        'action' => $controllerAction['action'],
                        'parameter' => null
                    );

                    $break = true;
                    break;
                }
                if(isset($break) && $break == true) break;
            }
            if(isset($break) && $break == true) break;
        }

        // если не совпало
        if(empty($result))
        {
            foreach($routes as $route)
            {
                // отделим то что не совпало
                foreach($route as $path => $controllerAction)
                {
                    $parameter = AnnotationParser::extractParam($path);
                    $cleanPath = str_replace($parameter, '', $path);
                    $match = str_replace($cleanPath, '', $query);
                    $cleanRoute = str_replace($match, '', $query);

                    if($cleanPath == $cleanRoute || $cleanPath.'/' == $cleanRoute || $cleanPath == $cleanRoute.'/')
                    {
                        if(preg_match('/^[a-zA-Z\-\_0-9]{1,500}$/', $match) || empty($match))
                        {
                            if(empty($parameter))
                            {
                                if($path == $query || $path.'/' == $query || $path == $query.'/')
                                {
                                    $result = array(
                                        'path' => $cleanRoute,
                                        'bundle' => $controllerAction['bundle'],
                                        'controller' => $controllerAction['controller'],
                                        'action' => $controllerAction['action'],
                                        'parameter' => null
                                    );

                                    $break = true;
                                    break;
                                }

                            } else {

                                if($cleanPath.$match == $query || $cleanPath.$match.'/' == $query || $cleanPath.$match == $query.'/')
                                {
                                    $result = array(
                                        'path' => $cleanRoute,
                                        'bundle' => $controllerAction['bundle'],
                                        'controller' => $controllerAction['controller'],
                                        'action' => $controllerAction['action'],
                                        'parameter' => $match
                                    );

                                    $break = true;
                                    break;
                                }
                            }
                        }
                    }

                    if(isset($break) && $break == true) break;
                }

                if(isset($break) && $break == true) break;
            }
        }

        // если маршрутов не найдено нигде, то отдадим строку запроса тому action
        // у которого в маршруте стоит '/'.
        // такой action должен быть только один на все бандлы
        if(empty($result))
        {
            // для админки
            if(preg_match('/^[\/]{1}admin[\/][a-zA-Z0-9\-\_\/]{0,500}$/i', $query))
            {
                error($query.': '.' no route found!');
            }

            // ищем '/'
            foreach($routes as $route)
            {
                foreach($route as $path => $controllerAction)
                {
                    if($path == '/')
                    {
                        $result = array(
                            'path' => $query,
                            'bundle' => $controllerAction['bundle'],
                            'controller' => $controllerAction['controller'],
                            'action' => $controllerAction['action'],
                            'parameter' => $query
                        );

                        $break = true;
                        break;
                    }
                    if(isset($break) && $break == true) break;
                }
                if(isset($break) && $break == true) break;
            }
        }

        if(!empty($result))
        {
            $controller = '\\'.$result['bundle'].'\\Controller\\'.$result['controller'];
            $action = $result['action'];
            $parameter = $result['parameter'];
            $arguments = $this->getFunctionArguments($controller, $action, $parameter);

            App::$controller = str_replace('Controller', '', $result['controller']);
            App::$bundle = $result['bundle'];

            call_user_func_array(array(new $controller, $action), $arguments);

        } else {

            error('No Route found!');
        }
    }

    private function getFunctionArguments($class, $method, $parameter = null){

        $class = new ReflectionClass($class);
        $method = $class->getMethod($method);
        $parameters = $method->getParameters();

        foreach($parameters as $p){

            if(method_exists($p, 'getClass'))
            {
                if(property_exists($p, 'name'))
                {
                    if(isset($p->getClass()->name))
                    {
                        $data[] = array(
                            $p->name => $p->getClass()->name
                        );

                    } else {

                        $data[] = array(
                            $p->name => null
                        );
                    }
                }
            }
        }

        if(empty($data)) return array();

        $arguments = array();

        foreach($data as $set)
        {
            foreach($set as $argument => $className)
            {
                if($className)
                {
                    $class = new $className;

                    if($class instanceof Entity)
                    {
                        array_push($arguments, $class::getInstance('id', $parameter));
                    } else {
                        array_push($arguments, $class);
                    }

                } else {
                    array_push($arguments, $parameter);
                }
            }
        }

        return $arguments;
    }
}