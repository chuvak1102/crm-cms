<?php

/* task/index.twig */
class __TwigTemplate_398ba4ebbf80cab5561184c35242b4560a2c1a12c1d63bb647672afbbab75c68 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "task/index.twig", 1);
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
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Задачи</h5>
                        <div class=\"ibox-tools\">
                            ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "isAdmin", array()) == true)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status_label", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status", array()), "html", null, true);
            echo "</span>
                                        </td>
                                        <td>
                                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "priority", array()), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"issue-info\">
                                            <a href=\"/task/edit/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "
                                            </a>

                                            <small>
                                                ";
            // line 58
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), 0, 100), "html", null, true);
            echo "...
                                            </small>
                                        </td>
                                        <td>
                                            ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "user", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "start", array()), "d m Y h:i"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 68
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "end", array()))) {
                // line 69
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "end", array()), "d m Y h:i"), "html", null, true);
                echo "
                                            ";
            }
            // line 71
            echo "                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/edit/";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", array(), "method"), "html", null, true);
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
        return array (  169 => 87,  159 => 79,  147 => 73,  143 => 71,  137 => 69,  135 => 68,  129 => 65,  123 => 62,  116 => 58,  109 => 54,  105 => 53,  99 => 50,  91 => 47,  87 => 45,  83 => 44,  51 => 14,  46 => 11,  44 => 10,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
