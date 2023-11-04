<?php

/* 404.twig */
class __TwigTemplate_6876f4ee11ed053bcc8276d48fd8777d148145316316772d4a3ebd9c376c9d28 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        h1, .h1 {
            padding: 25px 0;
            color: #488ca6;
            font: 15px \"Calibri\";
            text-transform: uppercase;
            font-weight: bold;
        }
        .contacts-l-tab {
            margin-bottom: 25px;
        }
        .contacts-bar p {
            line-height: 20px;
        }
        .contacts-bar p a{
            font-size: 16px;
        }

    </style>
    <div class=\"contacts-bar clearfix\">
        <div>
            <h1>Страница не найдена</h1>
            <div class=\"contacts-l-tab\">
                <p>Пожалуйста, перейдите в наш <a href=\"http://ecopacking.ru/katalog-tovarov\">Каталог</a></p>
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
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <style>
        h1, .h1 {
            padding: 25px 0;
            color: #488ca6;
            font: 15px \"Calibri\";
            text-transform: uppercase;
            font-weight: bold;
        }
        .contacts-l-tab {
            margin-bottom: 25px;
        }
        .contacts-bar p {
            line-height: 20px;
        }
        .contacts-bar p a{
            font-size: 16px;
        }

    </style>
    <div class=\"contacts-bar clearfix\">
        <div>
            <h1>Страница не найдена</h1>
            <div class=\"contacts-l-tab\">
                <p>Пожалуйста, перейдите в наш <a href=\"http://ecopacking.ru/katalog-tovarov\">Каталог</a></p>
            </div>
        </div>
    </div>
{% endblock %}", "404.twig", "/var/www/u0742521/data/www/eco/App/Site/View/404.twig");
    }
}
