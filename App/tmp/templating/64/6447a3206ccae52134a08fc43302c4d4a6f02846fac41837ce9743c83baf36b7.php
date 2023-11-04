<?php

/* 403.twig */
class __TwigTemplate_5d19509b18c5cf82dc63f054c58dc7c5ba7e97b517237216cf7fda07dcedac00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "403.twig", 1);
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
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">403 Forbidden</div>
";
    }

    public function getTemplateName()
    {
        return "403.twig";
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
    <div class=\"wrapper wrapper-content  animated fadeInRight\">403 Forbidden</div>
{% endblock %}", "403.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/403.twig");
    }
}
