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

/* task/edit.twig */
class __TwigTemplate_92bff08e4f6c331d198faa84f398592f6d1883603a5266ff2f4b9276099f3719 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "task/edit.twig", 1);
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
                        <form method=\"post\" action=\"/task/update/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Статус</label>
                                    <select class=\"form-control\" name=\"status\">
                                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "status_id", [], "any", false, false, false, 17))) {
                echo " selected ";
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
                                    <label for=\"\">Приоритет</label>
                                    <select class=\"form-control\" name=\"priority\">
                                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["priority"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "priority_id", [], "any", false, false, false, 25))) {
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
                                    <label for=\"\">Назначена</label>
                                    <select class=\"form-control\" name=\"user\">
                                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "user_id", [], "any", false, false, false, 33))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Создана</label>
                                    <input value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "start", [], "any", false, false, false, 39), "d m Y h:i"), "html", null, true);
        echo "\" name=\"created\" type=\"text\" disabled class=\"form-control\">
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Завершена</label>
                                    ";
        // line 43
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "end", [], "any", false, false, false, 43))) {
            // line 44
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 44), "d m Y h:i"), "html", null, true);
            echo "
                                        <input value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 45), "d m Y h:i"), "html", null, true);
            echo "\" name=\"created\" type=\"text\" disabled class=\"form-control\">
                                    ";
        } else {
            // line 47
            echo "                                        <input name=\"created\" type=\"text\" disabled class=\"form-control\">
                                    ";
        }
        // line 49
        echo "                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Название</label>
                                    <input value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "\" name=\"name\" type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <textarea required name=\"text\" placeholder=\"Содержание\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"15\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "text", [], "any", false, false, false, 56), "html", null, true);
        echo "</textarea>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    ";
        // line 60
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 60))) {
            // line 61
            echo "                                        <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Изменить</button>
                                        <button name=\"finished\" value=\"finished\" type=\"submit\" class=\"btn btn-w-m btn-primary\">Завершить задачу</button>
                                    ";
        }
        // line 64
        echo "                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comment"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-title\">
                            <h5>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "created", [], "any", false, false, false, 77), "d m Y h:i"), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"ibox-content\">
                            ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "comment", [], "any", false, false, false, 80), "html", null, true);
            echo "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Комментарий</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form class=\"form-horizontal\" method=\"post\" action=\"/task/comment/";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 94), "html", null, true);
        echo "\">
                            <div class=\"col-lьв-12\">
                                <textarea required name=\"text\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                            </div>
                            <br>
                            <input type=\"hidden\" name=\"user\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Добавить</button>
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
        return "task/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 99,  247 => 94,  237 => 86,  225 => 80,  217 => 77,  211 => 73,  207 => 72,  197 => 64,  192 => 61,  190 => 60,  183 => 56,  176 => 52,  171 => 49,  167 => 47,  162 => 45,  157 => 44,  155 => 43,  148 => 39,  142 => 35,  127 => 33,  123 => 32,  116 => 27,  101 => 25,  97 => 24,  90 => 19,  75 => 17,  71 => 16,  63 => 11,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
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
                        <form method=\"post\" action=\"/task/update/{{ task.id }}\">
                            <div class=\"row\">
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Статус</label>
                                    <select class=\"form-control\" name=\"status\">
                                        {% for i in status %}
                                            <option {% if i.id == task.status_id %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
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
                                        {% for i in users %}
                                            <option {% if i.id == task.user_id %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Создана</label>
                                    <input value=\"{{ task.start | date('d m Y h:i') }}\" name=\"created\" type=\"text\" disabled class=\"form-control\">
                                </div>
                                <div class=\"col-md-12 m-b\">
                                    <label for=\"\">Завершена</label>
                                    {% if i.end is not empty %}
                                        {{ task.end | date('d m Y h:i') }}
                                        <input value=\"{{ task.end | date('d m Y h:i') }}\" name=\"created\" type=\"text\" disabled class=\"form-control\">
                                    {% else %}
                                        <input name=\"created\" type=\"text\" disabled class=\"form-control\">
                                    {% endif %}
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
                                    {% if task.end is empty %}
                                        <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Изменить</button>
                                        <button name=\"finished\" value=\"finished\" type=\"submit\" class=\"btn btn-w-m btn-primary\">Завершить задачу</button>
                                    {% endif %}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {% for i in comment %}
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-title\">
                            <h5>{{ i.name }} - {{ i.created | date('d m Y h:i') }}</h5>
                        </div>
                        <div class=\"ibox-content\">
                            {{ i.comment }}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Комментарий</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form class=\"form-horizontal\" method=\"post\" action=\"/task/comment/{{ task.id }}\">
                            <div class=\"col-lьв-12\">
                                <textarea required name=\"text\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                            </div>
                            <br>
                            <input type=\"hidden\" name=\"user\" value=\"{{ user.id }}\">
                            <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "task/edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/task/edit.twig");
    }
}
