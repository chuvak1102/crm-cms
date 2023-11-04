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

/* category/index.twig */
class __TwigTemplate_082940f4e1a43e0acb7af25c4c17f1e5dc993016bc0c322028f2351c522a7907 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "category/index.twig", 1);
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
                        <h5>Категории</h5>
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
                                        Название
                                    </td>
                                    <td>
                                        Родитель
                                    </td>
                                    <td>
                                        Сортировка
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>

                                <tr class=\"category-row\">
                                    <td>
                                        <span style=\"cursor: pointer\" class=\"category-status label label-primary\">Активно</span>
                                    </td>
                                    <td style=\"width: 50%\">
                                        <input name=\"name\" style=\"width: 100%\" type=\"text\">
                                        <input name=\"id\" type=\"hidden\">
                                    </td>
                                    <td style=\"width: 10%\" class=\"issue-info\">
                                        <select name=\"parent\" id=\"\">
                                            <option value=\"0\">Без категории</option>
                                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 48
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                        </select>
                                    </td>
                                    <td>
                                        <input name=\"sort\" type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "sort", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                                    </td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Создать</a>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
            echo "                                    <tr class=\"category-row\">
                                        <td>
                                            <span style=\"cursor: pointer\" class=\"category-status label ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["i"], "active", [], "any", false, false, false, 65)) {
                echo "label-primary";
            } else {
                echo "label-default";
            }
            echo "\">Активно</span>
                                        </td>
                                        <td style=\"width: 50%\">
                                            <input name=\"name\" style=\"width: 100%\" type=\"text\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
                                            <input name=\"id\" type=\"hidden\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                        </td>
                                        <td style=\"width: 10%\" class=\"issue-info\">
                                            <select name=\"parent\" id=\"\">
                                                <option value=\"0\">Без категории</option>
                                                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 75
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["i"], "parent_id", [], "any", false, false, false, 75) == twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "                                                        <option selected value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "</option>
                                                    ";
                } else {
                    // line 78
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "name", [], "any", false, false, false, 78), "html", null, true);
                    echo "</option>
                                                    ";
                }
                // line 80
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                            </select>
                                        </td>
                                        <td>
                                            <input name=\"sort\" type=\"text\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "sort", [], "any", false, false, false, 84), "html", null, true);
            echo "\">
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                        </td>
                                        <td>
                                            <a href=\"/category/delete/";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">Удалить</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </tbody>
                            </table>
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
        return "category/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 94,  201 => 90,  192 => 84,  187 => 81,  181 => 80,  173 => 78,  165 => 76,  162 => 75,  158 => 74,  150 => 69,  146 => 68,  136 => 65,  132 => 63,  128 => 62,  116 => 53,  111 => 50,  100 => 48,  96 => 47,  50 => 3,  46 => 2,  35 => 1,);
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
                        <h5>Категории</h5>
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
                                        Название
                                    </td>
                                    <td>
                                        Родитель
                                    </td>
                                    <td>
                                        Сортировка
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>

                                <tr class=\"category-row\">
                                    <td>
                                        <span style=\"cursor: pointer\" class=\"category-status label label-primary\">Активно</span>
                                    </td>
                                    <td style=\"width: 50%\">
                                        <input name=\"name\" style=\"width: 100%\" type=\"text\">
                                        <input name=\"id\" type=\"hidden\">
                                    </td>
                                    <td style=\"width: 10%\" class=\"issue-info\">
                                        <select name=\"parent\" id=\"\">
                                            <option value=\"0\">Без категории</option>
                                            {% for j in category %}
                                                <option value=\"{{ j.id }}\">{{ j.name }}</option>
                                            {% endfor %}
                                        </select>
                                    </td>
                                    <td>
                                        <input name=\"sort\" type=\"text\" value=\"{{ i.sort }}\">
                                    </td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Создать</a>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                {% for i in category %}
                                    <tr class=\"category-row\">
                                        <td>
                                            <span style=\"cursor: pointer\" class=\"category-status label {% if i.active %}label-primary{% else %}label-default{% endif %}\">Активно</span>
                                        </td>
                                        <td style=\"width: 50%\">
                                            <input name=\"name\" style=\"width: 100%\" type=\"text\" value=\"{{ i.name }}\">
                                            <input name=\"id\" type=\"hidden\" value=\"{{ i.id }}\">
                                        </td>
                                        <td style=\"width: 10%\" class=\"issue-info\">
                                            <select name=\"parent\" id=\"\">
                                                <option value=\"0\">Без категории</option>
                                                {% for j in category %}
                                                    {% if i.parent_id == j.id %}
                                                        <option selected value=\"{{ j.id }}\">{{ j.name }}</option>
                                                    {% else %}
                                                        <option value=\"{{ j.id }}\">{{ j.name }}</option>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </td>
                                        <td>
                                            <input name=\"sort\" type=\"text\" value=\"{{ i.sort }}\">
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                        </td>
                                        <td>
                                            <a href=\"/category/delete/{{ i.id }}\" class=\"btn btn-danger btn-xs\">Удалить</a>
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
    </div>
{% endblock %}", "category/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/category/index.twig");
    }
}
