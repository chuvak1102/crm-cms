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

/* content/index.twig */
class __TwigTemplate_197512e2d47fce061ed3b46d59ced48873e54109f45b7c3267012a6a2deb58e1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "content/index.twig", 1);
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
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                    <tr>
                                        <th style=\"width: 25%\">Название</th>
                                        <th style=\"width: 25%\">Таблица</th>
                                        <th style=\"width: 25%\">Тип</th>
                                        <th style=\"width: 5%\">Меню</th>
                                        <th style=\"width: 10%\"></th>
                                        <th style=\"width: 10%\"></th>
                                    </tr>
                                </tbody>
                            </table>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                                <form action=\"/content/save/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" method=\"post\">
                                    <table class=\"table table-hover issue-tracker checkbox-container\">
                                        <tbody>
                                        <tr>
                                            <td style=\"width: 25%\"><a href=\"/content/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "canonical", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                                            <td style=\"width: 25%\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "table", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                            <td style=\"width: 25%\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getType", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                            <td style=\"width: 5%\"><input type=\"checkbox\" ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "show", [], "any", false, false, false, 29) == 1)) {
                echo " checked ";
            }
            echo " name=\"show\" value=\"1\" class=\"form-control\"></td>
                                            <td style=\"\">
                                                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["i"], "getFields", [], "method", false, false, false, 31)) {
            } else {
                echo "<a href=\"/content/fields/create/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"btn btn-danger\">Поля</a></td>";
            }
            // line 32
            echo "                                            <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            <form action=\"/content/save\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <td style=\"width: 25%\"><input name=\"canonical\" type=\"text\" class=\"form-control\"></td>
                                        <td style=\"width: 25%\"><input name=\"table\" type=\"text\" class=\"form-control\"></td>
                                        <td style=\"width: 25%\">
                                            <select name=\"type\" id=\"\" class=\"form-control\" style=\"width: 100%\">
                                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_type"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 47
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                            </select>
                                        </td>
                                        <td style=\"width: 5%\"><input type=\"checkbox\" name=\"show\" value=\"1\" class=\"form-control\"></td>
                                        <td style=\"\"></td>
                                        <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
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
        return "content/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  135 => 47,  131 => 46,  121 => 38,  110 => 32,  103 => 31,  96 => 29,  92 => 28,  88 => 27,  82 => 26,  74 => 22,  70 => 21,  50 => 3,  46 => 2,  35 => 1,);
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
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                    <tr>
                                        <th style=\"width: 25%\">Название</th>
                                        <th style=\"width: 25%\">Таблица</th>
                                        <th style=\"width: 25%\">Тип</th>
                                        <th style=\"width: 5%\">Меню</th>
                                        <th style=\"width: 10%\"></th>
                                        <th style=\"width: 10%\"></th>
                                    </tr>
                                </tbody>
                            </table>
                            {% for i in content %}
                                <form action=\"/content/save/{{ i.id }}\" method=\"post\">
                                    <table class=\"table table-hover issue-tracker checkbox-container\">
                                        <tbody>
                                        <tr>
                                            <td style=\"width: 25%\"><a href=\"/content/{{ i.id }}\">{{ i.canonical }}</a></td>
                                            <td style=\"width: 25%\">{{ i.table }}</td>
                                            <td style=\"width: 25%\">{{ i.getType.name }}</td>
                                            <td style=\"width: 5%\"><input type=\"checkbox\" {% if i.show == 1 %} checked {% endif %} name=\"show\" value=\"1\" class=\"form-control\"></td>
                                            <td style=\"\">
                                                {% if i.getFields() %}{% else %}<a href=\"/content/fields/create/{{ i.id }}\" class=\"btn btn-danger\">Поля</a></td>{% endif %}
                                            <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            {% endfor %}
                            <form action=\"/content/save\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <td style=\"width: 25%\"><input name=\"canonical\" type=\"text\" class=\"form-control\"></td>
                                        <td style=\"width: 25%\"><input name=\"table\" type=\"text\" class=\"form-control\"></td>
                                        <td style=\"width: 25%\">
                                            <select name=\"type\" id=\"\" class=\"form-control\" style=\"width: 100%\">
                                                {% for c in content_type %}
                                                    <option value=\"{{ c.id }}\">{{ c.name }}</option>
                                                {% endfor %}
                                            </select>
                                        </td>
                                        <td style=\"width: 5%\"><input type=\"checkbox\" name=\"show\" value=\"1\" class=\"form-control\"></td>
                                        <td style=\"\"></td>
                                        <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "content/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/index.twig");
    }
}
