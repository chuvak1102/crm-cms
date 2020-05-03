<?php

namespace Core;

use App\Routes;

class Router
{
    static function getMatchedRoute()
    {
        $url = trim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
        $request = explode('/', $url);

        foreach (Routes::all($_SERVER['HTTP_HOST']) as $path => $executor) {

            $segments = explode('=>', $path);

            if (count($segments) == count($request)) {

                $match = true;
                foreach ($segments as $i => $regex) {

                    $regex = trim($regex, "{}");
                    if (!preg_match("/^{$regex}$/", $request[$i])) {
                        $match = false;
                        break;
                    }
                }
                if ($match) return $executor;
            }
        }

        return false;
    }

    static function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    static function seg($number)
    {
        $url = trim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
        $seg = explode('/', $url)[$number] ?? null;

        return $seg;
    }

    /**
     * @param $class
     * @param $method
     * @param null $parameter
     * @return array
     * @throws \ReflectionException
     */
    private function getFunctionArguments($class, $method, $parameter = null){

        $class = new \ReflectionClass($class);
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