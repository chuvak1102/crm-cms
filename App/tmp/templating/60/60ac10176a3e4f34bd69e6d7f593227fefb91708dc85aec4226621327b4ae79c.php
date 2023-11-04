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

/* content/show.twig */
class __TwigTemplate_66ffe21545d3adecdc07aec72178ecf8060d6374728991c1d234dacd8087a2db extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "content/show.twig", 1);
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
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Настроить</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить фильтр</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "                                        <th style=\"width: 15%\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                                    <th style=\"width: 5%\"></th>
                                    <th style=\"width: 5%\"></th>
                                </tr>
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "                                    <tr>
                                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 26
                echo "                                            <td style=\"width: 15%\">";
                echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                        <td style=\"width: 5%\"><a href=\"/content/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"btn btn-primary\">Править</a></td>
                                        <td style=\"width: 5%\"><a href=\"/content/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"btn btn-danger\">Удалить</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                </tbody>
                            </table>
                            <a href=\"/content/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "/create\" class=\"btn btn-primary\">Создать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  122 => 32,  111 => 29,  104 => 28,  95 => 26,  91 => 25,  88 => 24,  84 => 23,  79 => 20,  70 => 18,  66 => 17,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Настроить</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить фильтр</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    {% for i in fields %}
                                        <th style=\"width: 15%\">{{ i }}</th>
                                    {% endfor %}
                                    <th style=\"width: 5%\"></th>
                                    <th style=\"width: 5%\"></th>
                                </tr>
                                {% for row in data %}
                                    <tr>
                                        {% for col in row %}
                                            <td style=\"width: 15%\">{{ col }}</td>
                                        {% endfor %}
                                        <td style=\"width: 5%\"><a href=\"/content/{{ content.id }}/edit/{{ row.id }}\" class=\"btn btn-primary\">Править</a></td>
                                        <td style=\"width: 5%\"><a href=\"/content/{{ content.id }}/delete/{{ row.id }}\" class=\"btn btn-danger\">Удалить</a></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <a href=\"/content/{{ content.id }}/create\" class=\"btn btn-primary\">Создать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "content/show.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/show.twig");
    }
}
