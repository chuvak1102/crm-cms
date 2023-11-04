<?php

/* 404.twig */
class __TwigTemplate_40e2d3b036ba4fc843a1bcbb0f506bc4e33be596a6dc0171d5a5a2bda5085461 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "404.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"row\">
                Страница не найдена
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"row\">
                Страница не найдена
            </div>
        </div>
    </div>
{% endblock %}", "404.twig", "/var/www/u0742521/data/www/eco/App/Client/View/404.twig");
    }
}
