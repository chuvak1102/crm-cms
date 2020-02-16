<?php
namespace Core;

use Framework\App;
use Framework\Modules\MySql\MySql;
use Framework\Component\ORM\ORM;
use AdminBundle\Services\Helpers;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;
use Twig_Function;
use Twig_Template;

/**
 * Class Controller
 * @package Core
 */
class Controller {

    private $data;

    function before() {}

    private function appData()
    {
        return [
            'controller' => Application::get('controller'),
            'action' => Application::get('action'),
            'user' => Auth::instance()->current(),
            'isAdmin' => Auth::instance()->hasRole('admin')
        ];
    }

    /**
     * @param $template
     * @param array $data
     * @return bool
     */
    protected function render($template, $data = [])
    {
        $this->data = $data;
        $data['application'] = $this->appData();

        $dumpFunction = new Twig_Function('dump', function ($data = null) {
            dump($data ?? $this->data);
        });

        $template = explode(':', $template);

        if (isset($template[0]) && $template[0] && isset($template[1]) && $template[1]) {

            if (file_exists("../App/{$template[0]}/View/{$template[1]}.twig")) {

                try {

                    $appDir = new Twig_Loader_Filesystem("../App/{$template[0]}/View");
                    $twig = new Twig_Environment($appDir, [
                        'cache' => '../App/tmp/templating',
                        'debug' => true
                    ]);
                    $twig->addExtension(new Twig_Extension_Debug());
                    $twig->addFunction($dumpFunction);

                    $template = $twig->load("{$template[1]}.twig");

                    echo $template->render($data);
                }
                catch (\Twig_Error_Loader $e) {}
                catch (\Twig_Error_Runtime $e) {}
                catch (\Twig_Error_Syntax $e) {}

            } else {
                error("view not found: {$template[0]}/View/{$template[1]}.twig");
            }

        } else {
            error('template path not specified: '.get_called_class());
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