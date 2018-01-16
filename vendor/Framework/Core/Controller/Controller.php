<?php
namespace Framework\Core\Controller;
use Framework\Core\App;
use Framework\Modules\MySql\MySql;
use Framework\Core\ORM\ORM;

class Controller {

    protected function getMysql()
    {
        return new MySql();
    }

    protected function getORM()
    {
        return new ORM();
    }

    protected function render($template, $data = array(), $useLayout = true)
    {
        $template = explode(':', $template);
        $source = !empty($template[0]) ? $template[0] : 'default';
        $path = !empty($template[1]) ? $template[1] : '404';

        if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/src'.'/'.$source.'/'.'Views'.'/'.$path.'.php'))
        {
            if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/app'.'/'.'Views'.'/'.$source.'/'.$path.'.php'))
            {

                throw new \Exception('Template '.$path.' not found in app/views/default or src/bundle/views');
            } else {

                if($useLayout)
                {
                    App::$template = $_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source.'/'.$path.'.php';
                    include $_SERVER['DOCUMENT_ROOT'].'/app/Views/default/layout'.'.php';

                } else {

                    include $_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source.'/'.$path.'.php';
                }
            }

        } else {

            if($useLayout)
            {
                App::$template = $_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/'.$path.'.php';
                include $_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/layout.php';

            } else {

                include$_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/'.$path.'.php';
            }
        }

        return true;
    }

    protected function redirectToRoute($route){
        header('Location:' . $route);
        return true;
    }

}