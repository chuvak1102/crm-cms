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

/* index.twig */
class __TwigTemplate_a3641ae207011a17850664bd92e62ac04b3641d6d0114618a7797b345b8a3b08 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
";
        // line 21
        echo "        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"col-md-3\">
                <h2>Добро пожаловать!</h2>
                <small>Текущие события:</small>
                <ul class=\"list-group clear-list m-t\">
                    <li class=\"list-group-item fist-item\"><span class=\"label label-primary\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["task"] ?? null), "html", null, true);
        echo "</span>Новых задач</li>
";
        // line 30
        echo "                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  60 => 26,  53 => 21,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
{#        <div class=\"row\">#}
{#            <div class=\"ibox\">#}
{#                <div class=\"ibox-title\">#}
{#                    <h2>Добро пожаловать!</h2>#}
{#                    <small>Текущие события:</small>#}
{#                </div>#}
{#                <div class=\"ibox-content\">#}
{#                    <ul class=\"list-group clear-list m-t\">#}
{#                        <li class=\"list-group-item fist-item\"><span class=\"label label-primary\">1</span>Новых задач</li>#}
{#                        <li class=\"list-group-item fist-item\"><span class=\"label label-success\">1</span>Новых заказов</li>#}
{#                        <li class=\"list-group-item fist-item\"><span class=\"label label-primary\">1</span>Заказов на отправку</li>#}
{#                        <li class=\"list-group-item fist-item\"><span class=\"label label-default\">1</span>И тд</li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"col-md-3\">
                <h2>Добро пожаловать!</h2>
                <small>Текущие события:</small>
                <ul class=\"list-group clear-list m-t\">
                    <li class=\"list-group-item fist-item\"><span class=\"label label-primary\">{{ task }}</span>Новых задач</li>
{#                    <li class=\"list-group-item fist-item\"><span class=\"label label-success\">1</span>Новых заказов</li>#}
{#                    <li class=\"list-group-item fist-item\"><span class=\"label label-primary\">1</span>Заказов на отправку</li>#}
{#                    <li class=\"list-group-item fist-item\"><span class=\"label label-default\">1</span>И тд</li>#}
                </ul>
            </div>
        </div>
    </div>

{% endblock %}", "index.twig", "/var/www/u0742521/data/www/eco/App/Client/View/index.twig");
    }
}
