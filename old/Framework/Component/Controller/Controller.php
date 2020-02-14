<?php
namespace Framework\Component\Controller;
use Framework\App;
use Framework\Modules\MySql\MySql;
use Framework\Component\ORM\ORM;
use AdminBundle\Services\Helpers;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;
use Twig_Function;
use Twig_Template;

class Controller {

    private $data;

    protected function getMysql()
    {
        return new MySql();
    }

    protected function getORM()
    {
        return new ORM();
    }

    protected function render($template, $data = array())
    {
//        dump function
        $this->data = $data;

        $dumpFunction = new Twig_Function('dump', function ($data = null) {
            echo '<div style="clear: both"></div>';
            echo '<div style="background-color: rgba(0,0,0,0.64); width: 100%; padding-bottom: 50px">';
            echo '<pre style="color: #fff">';
            print_r($data ?? $this->data);
            echo '</pre>';
            echo '</div>';
            echo '<div style="clear: both"></div>';

        });
//        dump function


        $template = explode(':', $template);
        $source = !empty($template[0]) ? $template[0] : 'default';
        $path = !empty($template[1]) ? $template[1] : '404';


//        var_dump($path);
//        die();
        if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/src'.'/'.$source.'/'.'Views'.'/'.$path))
        {
            if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/app'.'/'.'Views'.'/'.$source.'/'.$path))
            {

                error('Template app/Views/default/'.$path.' or '.$source.'/Views/'.$path.' not found!');
            } else {

                $appDir = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/app/Views/'.$source);
            }

        } else {

            $appDir = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/src/'.$source.'/Views/');
        }

        $twig = new Twig_Environment($appDir, array(
            'cache' => $_SERVER['DOCUMENT_ROOT'].'/app/cache/templating',
            'debug' => true
        ));

        $twig->addExtension(new Twig_Extension_Debug());
        $twig->addFunction($dumpFunction);

        $template = $twig->load($path);

        echo $template->render($data);

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