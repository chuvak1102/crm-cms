<?php
use Framework\Modules\Annotation\AnnotationParser;
use Framework\Component\ORM\Entity;
use Framework\App;
use app\Config\Config;
use Framework\Modules\Logger\Logger;

class Router
{
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

        if(empty($result))
        {
            foreach($routes as $route)
            {
                foreach($route as $path => $controllerAction){
                    $parameter = AnnotationParser::extractParam($path);
                    $cleanPath = str_replace($parameter, '', $path);
                    $match = str_replace($cleanPath, '', $query);
                    $cleanRoute = str_replace($match, '', $query);

                    if($cleanPath == $cleanRoute || $cleanPath.'/' == $cleanRoute || $cleanPath == $cleanRoute.'/')
                    {
                        if($query == '/')
                        {
                            $result = array(
                                'path' => '/',
                                'bundle' => $controllerAction['bundle'],
                                'controller' => $controllerAction['controller'],
                                'action' => 'indexAction',
                                'parameter' => null
                            );

                        } else {

                            if(preg_match('/^[0-9a-zA-Z-_]+$/', $match))
                            {
                                $result = array(
                                    'path' => $cleanRoute,
                                    'bundle' => $controllerAction['bundle'],
                                    'controller' => $controllerAction['controller'],
                                    'action' => $controllerAction['action'],
                                    'parameter' => $match
                                );
                            }
                        }
                    }
                }
            }
        }

        // если маршрутов не найдено нигде, то отдадим строку запроса тому action
        // у которого в маршруте стоит '/'.
        // такой action должен быть только один на все бандлы
        if(empty($result))
        {
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

            throw new Exception('Router exception: no route found!');
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

        foreach($data as $d)
        {
            foreach($d as $name => $object)
            {
                if($object)
                {
                    $class = new $object;

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