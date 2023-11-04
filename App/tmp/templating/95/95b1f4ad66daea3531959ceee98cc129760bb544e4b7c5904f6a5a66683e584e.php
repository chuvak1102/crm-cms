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

/* task/index.twig */
class __TwigTemplate_331f3a0141d9da659d1bc3f380f0397565a3979223c2d54d4d4873be4e05426a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "task/index.twig", 1);
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
                        <h5>Задачи</h5>
                        <div class=\"ibox-tools\">
                            ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "isAdmin", [], "any", false, false, false, 10) == true)) {
            // line 11
            echo "                                <a href=\"/task/create\" class=\"btn btn-primary btn-xs\">Новая</a>
                                <a href=\"/task/template\" class=\"btn btn-primary btn-xs\">Шаблон</a>
                            ";
        }
        // line 14
        echo "                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td>
                                        Статус
                                    </td>
                                    <td>
                                        Приоритет
                                    </td>
                                    <td>
                                        Описание
                                    </td>
                                    <td>
                                        Исполнитель
                                    </td>
                                    <td>
                                        Создано
                                    </td>
                                    <td>
                                        Выполнено
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["task"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "                                    <tr>
                                        <td>
                                            <span class=\"label ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status_label", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                                        </td>
                                        <td>
                                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "priority", [], "any", false, false, false, 50), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"issue-info\">
                                            <a href=\"/task/edit/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
                                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                            </a>

                                            <small>
                                                ";
            // line 58
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", [], "any", false, false, false, 58), 0, 100), "html", null, true);
            echo "...
                                            </small>
                                        </td>
                                        <td>
                                            ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "user", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "start", [], "any", false, false, false, 65), "d m Y h:i"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 68
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "end", [], "any", false, false, false, 68))) {
                // line 69
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "end", [], "any", false, false, false, 69), "d m Y h:i"), "html", null, true);
                echo "
                                            ";
            }
            // line 71
            echo "                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/edit/";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-pencil\"></i> </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", [], "method", false, false, false, 87), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  174 => 79,  162 => 73,  158 => 71,  152 => 69,  150 => 68,  144 => 65,  138 => 62,  131 => 58,  124 => 54,  120 => 53,  114 => 50,  106 => 47,  102 => 45,  98 => 44,  66 => 14,  61 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
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
                        <h5>Задачи</h5>
                        <div class=\"ibox-tools\">
                            {% if application.isAdmin == true %}
                                <a href=\"/task/create\" class=\"btn btn-primary btn-xs\">Новая</a>
                                <a href=\"/task/template\" class=\"btn btn-primary btn-xs\">Шаблон</a>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td>
                                        Статус
                                    </td>
                                    <td>
                                        Приоритет
                                    </td>
                                    <td>
                                        Описание
                                    </td>
                                    <td>
                                        Исполнитель
                                    </td>
                                    <td>
                                        Создано
                                    </td>
                                    <td>
                                        Выполнено
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                {% for i in task %}
                                    <tr>
                                        <td>
                                            <span class=\"label {{ i.status_label }}\">{{ i.status }}</span>
                                        </td>
                                        <td>
                                            {{ i.priority }}
                                        </td>
                                        <td class=\"issue-info\">
                                            <a href=\"/task/edit/{{ i.id }}\">
                                                {{ i.name }}
                                            </a>

                                            <small>
                                                {{ i.text | slice(0, 100) }}...
                                            </small>
                                        </td>
                                        <td>
                                            {{ i.user }}
                                        </td>
                                        <td>
                                            {{ i.start | date('d m Y h:i') }}
                                        </td>
                                        <td>
                                            {% if i.end is not empty %}
                                                {{ i.end | date('d m Y h:i') }}
                                            {% endif %}
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/edit/{{ i.id }}\">
                                                <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-pencil\"></i> </button>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            {{ pagination.render() }}
        </div>
    </div>
{% endblock %}", "task/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/task/index.twig");
    }
}
