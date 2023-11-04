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

/* order/index.twig */
class __TwigTemplate_30ae9fe930f9beefd81e58173aee200a54c87ce77140e63be3aa11483af4f24e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "order/index.twig", 1);
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
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/order\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "from", [], "any", false, false, false, 17), "html", null, true);
        echo "\" name=\"from\" type=\"date\" class=\"form-control\" placeholder=\"С\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "to", [], "any", false, false, false, 18), "html", null, true);
        echo "\" name=\"to\" type=\"date\" class=\"form-control\" placeholder=\"По\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "number", [], "any", false, false, false, 19), "html", null, true);
        echo "\" name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Номер\"></div>
                            <div class=\"form-group\" style=\"width: 15%\">
                                <select name=\"status\" class=\"form-control\" style=\"width: 100%\">
                                    <option value=\"0\">Статус</option>
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "status", [], "any", false, false, false, 24))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                </select>
                            </div>
                            <div class=\"form-group\" style=\"width: 20%\"><input value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "client", [], "any", false, false, false, 28), "html", null, true);
        echo "\" name=\"client\" type=\"text\" class=\"form-control\" placeholder=\"Покупатель\"></div>
                            <div class=\"form-group\" style=\"width: 8%\"><button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button></div>
                            <div class=\"form-group\" style=\"width: 8%\"><a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/order\"><strong>Сбросить</strong></a></div>
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
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить заказ</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Показать новые</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th>Дата</th>
                                    <th>Номер</th>
                                    <th>Статус заказа</th>
                                    <th>Статус склада</th>
                                    <th>Итого</th>
                                    <th>Клиент</th>
                                    <th></th>
                                </tr>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 59
            echo "                                    <tr>
                                        <td><a href=\"/order/edit/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "created", [], "any", false, false, false, 60), "d-m-Y H:i"), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "number", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatusWarehouse", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getTotalPrice", [], "any", false, false, false, 64), 2, ".", " "), "html", null, true);
            echo "</td>
                                        <td style=\"width: 15%\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getClient", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row pagination\">
            ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", [], "any", false, false, false, 76), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 76,  175 => 68,  166 => 65,  162 => 64,  158 => 63,  154 => 62,  150 => 61,  144 => 60,  141 => 59,  137 => 58,  104 => 28,  100 => 26,  85 => 24,  81 => 23,  74 => 19,  70 => 18,  66 => 17,  50 => 3,  46 => 2,  35 => 1,);
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
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/order\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.from }}\" name=\"from\" type=\"date\" class=\"form-control\" placeholder=\"С\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.to }}\" name=\"to\" type=\"date\" class=\"form-control\" placeholder=\"По\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.number }}\" name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Номер\"></div>
                            <div class=\"form-group\" style=\"width: 15%\">
                                <select name=\"status\" class=\"form-control\" style=\"width: 100%\">
                                    <option value=\"0\">Статус</option>
                                    {% for i in filter_status %}
                                        <option {% if i.id == filter.status %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\" style=\"width: 20%\"><input value=\"{{ filter.client }}\" name=\"client\" type=\"text\" class=\"form-control\" placeholder=\"Покупатель\"></div>
                            <div class=\"form-group\" style=\"width: 8%\"><button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button></div>
                            <div class=\"form-group\" style=\"width: 8%\"><a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/order\"><strong>Сбросить</strong></a></div>
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
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить заказ</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Показать новые</a>
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th>Дата</th>
                                    <th>Номер</th>
                                    <th>Статус заказа</th>
                                    <th>Статус склада</th>
                                    <th>Итого</th>
                                    <th>Клиент</th>
                                    <th></th>
                                </tr>
                                {% for i in orders %}
                                    <tr>
                                        <td><a href=\"/order/edit/{{ i.id }}\">{{ i.created | date('d-m-Y H:i') }}</a></td>
                                        <td>{{ i.number }}</td>
                                        <td>{{ i.getStatus.name }}</td>
                                        <td>{{ i.getStatusWarehouse.name }}</td>
                                        <td>{{ i.getTotalPrice | number_format(2, '.', ' ') }}</td>
                                        <td style=\"width: 15%\">{{ i.getClient }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row pagination\">
            {{ pagination.render }}
        </div>
    </div>
{% endblock %}", "order/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/order/index.twig");
    }
}
