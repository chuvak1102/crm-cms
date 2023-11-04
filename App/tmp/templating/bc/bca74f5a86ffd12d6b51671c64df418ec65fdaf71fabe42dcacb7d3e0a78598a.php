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

/* menu.twig */
class __TwigTemplate_665cbb84837febbf09da1cdabb7a32783d772540db23da08bed93cd1094f6090 extends \Twig\Template
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
        echo "<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\" style=\"padding: 10px\">
                <div class=\"dropdown profile-element\">
                    <span>
                        <img style=\"max-width: 125px\" alt=\"image\" class=\"img-circle\" src=\"/img/logo.png\" />
                    </span>
                </div>
            </li>
            <li class=\"active\">
                <a href=\"/\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Мои заказы</span></a>
            </li>
            <li class=\"\">
                <a href=\"/\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Профиль</span></a>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\" style=\"padding: 10px\">
                <div class=\"dropdown profile-element\">
                    <span>
                        <img style=\"max-width: 125px\" alt=\"image\" class=\"img-circle\" src=\"/img/logo.png\" />
                    </span>
                </div>
            </li>
            <li class=\"active\">
                <a href=\"/\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Мои заказы</span></a>
            </li>
            <li class=\"\">
                <a href=\"/\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Профиль</span></a>
            </li>
        </ul>
    </div>
</nav>", "menu.twig", "/var/www/u0742521/data/www/eco/App/Client/View/menu.twig");
    }
}
