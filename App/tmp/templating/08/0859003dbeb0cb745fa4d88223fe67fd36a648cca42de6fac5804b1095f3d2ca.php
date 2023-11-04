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

/* success.twig */
class __TwigTemplate_539a9efb2a02feb15d32d9c1d10c96012225897358874921b960ea03252d45f2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "success.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"content-right-wp\">
        <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</h2>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = '/';
        }, 5000)
    </script>
";
    }

    public function getTemplateName()
    {
        return "success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <h2>{{ message }}</h2>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = '/';
        }, 5000)
    </script>
{% endblock %}", "success.twig", "/var/www/u0742521/data/www/eco/App/Site/View/success.twig");
    }
}
