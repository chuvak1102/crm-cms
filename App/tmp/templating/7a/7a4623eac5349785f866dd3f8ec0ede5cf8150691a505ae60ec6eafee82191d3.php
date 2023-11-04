<?php

/* success.twig */
class __TwigTemplate_120a520244f6811a05c4363e9734a9a5b0c645179e83024c4e2fed7ddfc7e688 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "success.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        }, 7000)
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
        return array (  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <h2>{{ message }}</h2>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = '/';
        }, 7000)
    </script>
{% endblock %}", "success.twig", "/var/www/u0742521/data/www/eco/App/Site/View/success.twig");
    }
}
