<?php
namespace Twig;
use Twig_Extension;
use Twig_Function;
use Twig_Environment;
use Twig_Template;


class TWIGDump extends Twig_Extension
{
    public function getFunctions()
    {
        // dump is safe if var_dump is overridden by xdebug
        $isDumpOutputHtmlSafe = extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === PHP_SAPI
        ;

        return array(
            new Twig_Function('dump', 'twig_var_dump', array('is_safe' => $isDumpOutputHtmlSafe ? array('html') : array(), 'needs_context' => true, 'needs_environment' => true)),
        );
    }
}

function twig_var_dump(Twig_Environment $env, $context, ...$vars)
{
    if (!$env->isDebug()) {
        return;
    }

    ob_start();

    if (!$vars) {
        $vars = array();
        foreach ($context as $key => $value) {
            if (!$value instanceof Twig_Template) {
                $vars[$key] = $value;
            }
        }

        print_r($vars);
    } else {
        print_r($vars);
    }

    return ob_get_clean();
}