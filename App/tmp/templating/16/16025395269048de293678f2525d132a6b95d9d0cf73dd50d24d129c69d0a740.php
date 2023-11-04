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

/* task/template_create.twig */
class __TwigTemplate_b644a870b5ab56f845c7d661bb761350ab509b73e5bf851523551a346b6e3e4d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "task/template_create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form method=\"post\" action=\"/task/template/create/save/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Приоритет</label>
                                    <select class=\"form-control\" name=\"priority\">
                                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["priority"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "priority_id", [], "any", false, false, false, 17))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Назначена</label>
                                    <select class=\"form-control\" name=\"user\">
                                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "user", [], "any", false, false, false, 25))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label >Отведенное время</label>
                                    <input value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "time", [], "any", false, false, false, 31), "html", null, true);
        echo "\" required name=\"time\" type=\"text\" placeholder=\"4ч\" class=\"form-control\">
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Название</label>
                                    <input value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "\" name=\"name\" type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <textarea required name=\"text\" placeholder=\"Содержание\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"15\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "text", [], "any", false, false, false, 39), "html", null, true);
        echo "</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <input type=\"hidden\" name=\"template\" value=\"off\">
                                    <input type=\"hidden\" name=\"status\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/template_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  129 => 35,  122 => 31,  116 => 27,  101 => 25,  97 => 24,  90 => 19,  75 => 17,  71 => 16,  63 => 11,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>{{ task.name }}</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form method=\"post\" action=\"/task/template/create/save/{{ task.id }}\">
                            <div class=\"row\">
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Приоритет</label>
                                    <select class=\"form-control\" name=\"priority\">
                                        {% for i in priority %}
                                            <option {% if i.id == task.priority_id %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Назначена</label>
                                    <select class=\"form-control\" name=\"user\">
                                        {% for i in user %}
                                            <option {% if i.id == task.user %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label >Отведенное время</label>
                                    <input value=\"{{ task.time }}\" required name=\"time\" type=\"text\" placeholder=\"4ч\" class=\"form-control\">
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Название</label>
                                    <input value=\"{{ task.name }}\" name=\"name\" type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <textarea required name=\"text\" placeholder=\"Содержание\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"15\">{{ task.text }}</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <input type=\"hidden\" name=\"template\" value=\"off\">
                                    <input type=\"hidden\" name=\"status\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "task/template_create.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/task/template_create.twig");
    }
}
