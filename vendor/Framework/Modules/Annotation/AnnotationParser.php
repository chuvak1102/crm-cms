<?php
namespace Framework\Modules\Annotation;
use ReflectionClass;
use app\Config\Config;
use Framework\Component\Cache\Cache;

class AnnotationParser{

    static function parse()
    {
        if($routes = Cache::loadFromCache('routing')) return $routes;

        $files = array();

        foreach (Config::bundles() as $bundle){

            if(is_dir($_SERVER['DOCUMENT_ROOT'].'/src/'.$bundle.'/Controller/'))
            {
                $temp = scandir($_SERVER['DOCUMENT_ROOT'].'/src/'.$bundle.'/Controller/');

                foreach($temp as $file){
                    if($file == '.' || $file == '..'){

                    } else {
                        $files[$bundle][] = $file;
                    }
                }
            }
        }

        foreach($files as $bundle => $file)
        {
            foreach($file as $k => $v)
            {
                $controller = $bundle.'\\Controller'.'\\'.str_replace('.php', '', $file[$k]);
                $class = new ReflectionClass($controller);
                $classRoute = self::extractRoute($class->getDocComment());
                $actions = $class->getMethods();

                foreach($actions as $action)
                {
                    if($action->class == $class->name)
                    {
                        $actionRoute = self::extractRoute($action->getDocComment());

                        if(!empty($actionRoute))
                        {
                            $routes[] = array(
                                $classRoute.$actionRoute => array(
                                    'bundle' => $bundle,
                                    'controller' => $class->getShortName(),
                                    'action' => $action->name
                                )
                            );
                        }
                    }
                }
            }
        }

        if(empty($routes)) return null;

        Cache::createCache('routing', $routes);

        return $routes;
    }

    private static function extractRoute($docComment)
    {
        preg_match('/[@Route]{6}[(]{1}["]{1}[\/a-zA-Z\-\_0-9]{1,100}[\{a-zA-Z\-\_0-9\}]{0,100}["]{1}[\)]{1}/', $docComment, $route);
        if(empty($route[0])) return '';

        $route[0] = str_replace('@Route("', '', $route[0]);
        $route[0] = str_replace('")', '', $route[0]);

        return $route[0];
    }

    static function extractParam($route)
    {
        preg_match('/[{]{1}[a-zA-Z0-9\-\_]{1,100}[\}]{1}/', $route, $parameter);
        if(empty($parameter[0])) return '';
        return $parameter[0];
    }

    public function isMatch()
    {
        preg_match('/[@Route]{6}[(]{1}["]{1}[\/a-zA-Z_]{1,100}[\{a-zA-Z_\}]{0,100}["]{1}[\)]{1}/', $this->classDoc, $class);

        if(empty($class[0])) return null;

        $class[0] = str_replace('@Route("', '', $class[0]);
        $class[0] = str_replace('")', '', $class[0]);

        if(!empty($this->methodDoc)){
            preg_match('/[@Route]{6}[(]{1}["]{1}[\/a-zA-Z_]{1,100}[\{a-zA-Z_\}]{0,100}["]{1}[\)]{1}/', $this->methodDoc, $method);
        }

        if(!empty($method[0])){
            $method[0] = str_replace('@Route("', '', $method[0]);
            $method[0] = str_replace('")', '', $method[0]);
        } else {
            $method[0] = '';
        }

        preg_match('/[{]{1}[a-zA-Z0-9\-\_]{1,100}[\}]{1}/', $this->methodDoc, $parameter);

        if(!empty($parameter[0])){
            $controllerRoute = str_replace($parameter, '', $class[0].$method[0]);
            $incomingRoute = $this->query;
            $parameter = str_replace($controllerRoute, '', $incomingRoute);

            if(is_numeric($parameter)){
                return 'match with param';
            } else {
                return 'no match with param';
            }
        }

        $controllerRoute = str_replace($parameter, '', $class[0].$method[0]);
        $incomingRoute = $this->query;

        $fullMatch = str_replace($controllerRoute, '', $incomingRoute);

        if($fullMatch == '' || $fullMatch == '/'){

            return 'match without param';

        } else {

            return 'no match without param';
        }

    }
}