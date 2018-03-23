<?php
namespace Framework\Component\Controller;
use Framework\App;
use Framework\Modules\MySql\MySql;
use Framework\Component\ORM\ORM;
use AdminBundle\Services\Helpers;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;

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
        /*

        $template = explode(':', $template);
        $source = !empty($template[0]) ? $template[0] : 'default';
        $path = !empty($template[1]) ? $template[1] : '404';

        if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/src'.'/'.$source.'/'.'Views'.'/'.$path))
        {
            if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/app'.'/'.'Views'.'/'.$source.'/'.$path))
            {

                throw new \Exception('Template '.$path.' not found in app/views/default or src/bundle/views');
            } else {

                if($useLayout)
                {
                    App::$template = $_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source.'/'.$path;


                    include $_SERVER['DOCUMENT_ROOT'].'/app/Views/default/layout'.'.php';

                } else {

                    include $_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source.'/'.$path;
                }
            }

        } else {

            if($useLayout)
            {
                App::$template = $_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/'.$path;
                include $_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/layout.php';

            } else {

                include$_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/'.$path;
            }
        }

        return true;

        */


        $template = explode(':', $template);
        $source = !empty($template[0]) ? $template[0] : 'default';
        $path = !empty($template[1]) ? $template[1] : '404';


        if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/src'.'/'.$source.'/'.'Views'.'/'.$path))
        {
            if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/app'.'/'.'Views'.'/'.$source.'/'.$path))
            {

                throw new \Exception('Template '.$path.' not found in app/views/default or src/bundle/views');
            } else {

                $appDir = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source);

                $twig = new Twig_Environment($appDir, array(
                    'cache' => $_SERVER['DOCUMENT_ROOT'].'/app/cache/templating',
                    'debug' => true
                ));

                $twig->addExtension(new Twig_Extension_Debug());

                $template = $twig->load($path);

                echo $template->render($data);
            }

        } else {

            $appDir = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/');

            $twig = new Twig_Environment($appDir, array(
                'cache' => $_SERVER['DOCUMENT_ROOT'].'/app/cache/templating',
                'debug' => true
            ));

            $twig->addExtension(new Twig_Extension_Debug());

            $template = $twig->load($path);

            echo $template->render($data);

        }

        return true;
    }

    protected function redirectToRoute($route){
        header('Location:' . $route);
        return true;
    }

    protected function createAlias($original, $modified = null)
    {
        if($modified)
        {
            return Helpers::stringToAlias($modified);
        }

        return Helpers::stringToAlias($original);
    }

}