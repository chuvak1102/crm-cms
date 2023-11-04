<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* breadcrumbs.twig */
class __TwigTemplate_7f2d5fdb3faf669f9b8d5dfa215ada911188185062333d7aeb110206384ce89e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row wrapper border-bottom white-bg page-heading\">
    <div class=\"col-lg-10\">
        <h2>Личный кабинет</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">Главная</a>
            </li>
            <li class=\"active\">
                <strong>Мои заказы</strong>
            </li>
        </ol>
    </div>
    <div class=\"col-lg-2\">

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "breadcrumbs.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row wrapper border-bottom white-bg page-heading\">
    <div class=\"col-lg-10\">
        <h2>Личный кабинет</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">Главная</a>
            </li>
            <li class=\"active\">
                <strong>Мои заказы</strong>
            </li>
        </ol>
    </div>
    <div class=\"col-lg-2\">

    </div>
</div>", "breadcrumbs.twig", "/var/www/u0742521/data/www/eco/App/Client/View/breadcrumbs.twig");
    }
}
