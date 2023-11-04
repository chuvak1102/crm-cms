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
class __TwigTemplate_d3e9c25de7548a31872929d6c523d60a242d84527f1de90d59b533d20cf485c7 extends \Twig\Template
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
        <h2>CRM</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">CRM</a>
            </li>
";
        // line 11
        echo "            <li class=\"active\">
                <strong>Раздел</strong>
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
        return array (  46 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row wrapper border-bottom white-bg page-heading\">
    <div class=\"col-lg-10\">
        <h2>CRM</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">CRM</a>
            </li>
{#            <li>#}
{#                <a>App views</a>#}
{#            </li>#}
            <li class=\"active\">
                <strong>Раздел</strong>
            </li>
        </ol>
    </div>
    <div class=\"col-lg-2\">

    </div>
</div>", "breadcrumbs.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/breadcrumbs.twig");
    }
}
