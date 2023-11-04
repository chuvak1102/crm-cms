<?php

/* index.twig */
class __TwigTemplate_ffbe256d289e8934541f40f824dee4aca056f7690fa36185aa1bb0c738563ba3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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
        return array (  49 => 30,  45 => 26,  38 => 21,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

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

{% endblock %}", "index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/index.twig");
    }
}
