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

/* product/index.twig */
class __TwigTemplate_b11cca57ab151a6cd774951a632bb54d4ef7685fedd70b5426d13583de4c7f3a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "product/index.twig", 1);
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
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/product\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" name=\"category\">
                                    <option value=\"\">Категория</option>
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 21
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "category", [], "any", false, false, false, 21))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 22)) {
                // line 23
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 24
                    echo "                                                <option ";
                    if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "category", [], "any", false, false, false, 24))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">--";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                        ";
            }
            // line 27
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"supplier\" class=\"form-control\">
                                    <option value=\"\">Поставщик</option>
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supplier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "supplier", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "\" name=\"name\" style=\"min-width: 150px\" type=\"еуче\" placeholder=\"Поиск по названию\" class=\"form-control\">
                            </div>
                            <a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/product\"><strong>Сбросить</strong></a>
                            <button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary print-price\" href=\"#\">Печатать ценники</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"/product/create\">Добавить товар</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <td>
                                        <input class=\"checkbox-all\" type=\"checkbox\" value=\"0\">
                                    </td>
                                    <td>
                                        Название
                                    </td>
                                    <td>Цена на сайте</td>
                                    <td>В упаковке</td>
                                    <td>В коробке</td>
                                    <td>Изображение</td>
                                </tr>
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "                                <tr class=\"category-row\">
                                    <td>
                                        <input class=\"checkbox-check\" type=\"checkbox\" data-value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\">
                                    </td>
                                    <td>
                                        <a style=\"color: #4e5153; \" href=\"/product/edit/";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 78);
            echo "</a>
                                    </td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 81), "value", [], "any", false, false, false, 81), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 81), "dictionaryField", [], "method", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getBoxCount", [], "method", false, false, false, 82), "value", [], "any", false, false, false, 82), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getBoxCount", [], "method", false, false, false, 82), "dictionaryField", [], "method", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                    <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 83), "html", null, true);
            echo "\" alt=\"\"></td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"display: flex; justify-content: center\">
            ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", [], "method", false, false, false, 94), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 94,  228 => 86,  219 => 83,  213 => 82,  207 => 81,  203 => 80,  196 => 78,  190 => 75,  186 => 73,  182 => 72,  146 => 39,  141 => 36,  126 => 34,  122 => 33,  115 => 28,  109 => 27,  106 => 26,  91 => 24,  86 => 23,  84 => 22,  73 => 21,  69 => 20,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/product\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" name=\"category\">
                                    <option value=\"\">Категория</option>
                                    {% for root in category %}
                                        <option {% if root.id == filter.category %} selected {% endif %} value=\"{{ root.id }}\">{{ root.name }}</option>
                                        {% if root.extend %}
                                            {% for i in root.extend %}
                                                <option {% if i.id == filter.category %} selected {% endif %} value=\"{{ i.id }}\">--{{ i.name }}</option>
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"supplier\" class=\"form-control\">
                                    <option value=\"\">Поставщик</option>
                                    {% for i in supplier %}
                                        <option {% if filter.supplier == i.id %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input value=\"{{ filter.name }}\" name=\"name\" style=\"min-width: 150px\" type=\"еуче\" placeholder=\"Поиск по названию\" class=\"form-control\">
                            </div>
                            <a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/product\"><strong>Сбросить</strong></a>
                            <button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary print-price\" href=\"#\">Печатать ценники</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"/product/create\">Добавить товар</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <td>
                                        <input class=\"checkbox-all\" type=\"checkbox\" value=\"0\">
                                    </td>
                                    <td>
                                        Название
                                    </td>
                                    <td>Цена на сайте</td>
                                    <td>В упаковке</td>
                                    <td>В коробке</td>
                                    <td>Изображение</td>
                                </tr>
                                {% for i in product %}
                                <tr class=\"category-row\">
                                    <td>
                                        <input class=\"checkbox-check\" type=\"checkbox\" data-value=\"{{ i.id }}\">
                                    </td>
                                    <td>
                                        <a style=\"color: #4e5153; \" href=\"/product/edit/{{ i.id }}\">{{ i.name | raw }}</a>
                                    </td>
                                    <td>{{ i.price_site }}</td>
                                    <td>{{ i.getPackCount().value }} {{ i.getPackCount().dictionaryField().name }}</td>
                                    <td>{{ i.getBoxCount().value }} {{ i.getBoxCount().dictionaryField().name }}</td>
                                    <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.image }}\" alt=\"\"></td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"display: flex; justify-content: center\">
            {{ pagination.render() }}
        </div>
    </div>
{% endblock %}", "product/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/product/index.twig");
    }
}
