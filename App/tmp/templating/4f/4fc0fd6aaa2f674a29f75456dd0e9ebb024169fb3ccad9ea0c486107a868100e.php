<?php

/* supplier/order.twig */
class __TwigTemplate_93a58716dd6bdd981ca4c83e3e1ef86adec31785ddfa9b1ab674e5846ed3ef00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "supplier/order.twig", 1);
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
                    <div class=\"ibox-content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th>Цена</th>
                                    <th>Поставщик</th>
                                    <th></th>
                                </tr>
                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                                    <tr>
                                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "created", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
";
            // line 22
            echo "                                        <td><b class=\"label label-success\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "name", array()), "html", null, true);
            echo "</b></td>

                                        <td style=\"font-weight: bold; font-size: 16px\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "total", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getSupplier", array()), "name", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "status", array()) == ($context["finished"] ?? null))) {
                // line 27
                echo "                                            <td></td>
                                        ";
            } else {
                // line 29
                echo "                                            <td><a class=\"btn btn-primary\" href=\"/supplier/order/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a></td>
                                        ";
            }
            // line 31
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return "supplier/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  91 => 31,  85 => 29,  81 => 27,  79 => 26,  75 => 25,  71 => 24,  63 => 22,  59 => 20,  56 => 19,  52 => 18,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th>Цена</th>
                                    <th>Поставщик</th>
                                    <th></th>
                                </tr>
                                {% for i in order %}
                                    <tr>
                                        <td>{{ i.created | date('d-m-Y H:i') }}</td>
{#                                        <td>{{ i.getStatus.name }}</td>#}
                                        <td><b class=\"label label-success\" style=\"background-color: {{ i.getStatus.color }}\">{{ i.getStatus.name }}</b></td>

                                        <td style=\"font-weight: bold; font-size: 16px\">{{ i.total }}</td>
                                        <td>{{ i.getSupplier.name }}</td>
                                        {% if i.status == finished %}
                                            <td></td>
                                        {% else %}
                                            <td><a class=\"btn btn-primary\" href=\"/supplier/order/edit/{{ i.id }}\"><i class=\"fa fa-pencil\"></i></a></td>
                                        {% endif %}
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
{% endblock %}", "supplier/order.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/supplier/order.twig");
    }
}
