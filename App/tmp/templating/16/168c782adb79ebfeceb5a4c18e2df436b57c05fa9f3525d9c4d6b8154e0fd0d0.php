<?php

/* content/show.twig */
class __TwigTemplate_141434af6ed5b1435b7265428e904494dcd5ac73ba45366a0a83038db3ec708c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "content/show.twig", 1);
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
                        <div>
";
        // line 11
        echo "                        </div>
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
                                </tr>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "                                    <tr>
                                        ";
            // line 24
            $context["delete"] = 0;
            // line 25
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 26
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                    // line 27
                    echo "                                                ";
                    $context["delete"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "data", array()), "id", array());
                    // line 28
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "field", array()), "column_name", array()) == twig_get_attribute($this->env, $this->source, $context["column"], "Field", array()))) {
                        // line 29
                        echo "
                                                    ";
                        // line 30
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "type", array()), "value", array()) == "id")) {
                            // line 31
                            echo "                                                        <td style=\"width: 15%\">";
                            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["items"], "data", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["column"], "Field", array())] ?? null) : null), "html", null, true);
                            echo "</td>
                                                    ";
                        }
                        // line 33
                        echo "
                                                    ";
                        // line 34
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "type", array()), "value", array()) == "text")) {
                            // line 35
                            echo "                                                        <td style=\"width: 15%\">";
                            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["items"], "data", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["column"], "Field", array())] ?? null) : null), "html", null, true);
                            echo "</td>
                                                    ";
                        }
                        // line 37
                        echo "
                                                    ";
                        // line 38
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["items"], "type", array()), "value", array()) == "file_image")) {
                            // line 39
                            echo "                                                        <td><img style=\"max-height: 50px; max-width: 50px\" src=\"/files/";
                            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, $context["items"], "data", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["column"], "Field", array())] ?? null) : null), "html", null, true);
                            echo "\" alt=\"\"></td>
                                                    ";
                        }
                        // line 41
                        echo "
                                                ";
                    }
                    // line 43
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                        <td style=\"width: 5%\"><a href=\"/content/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", array()), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, ($context["delete"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-danger\">Удалить</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </tbody>
                            </table>
                            <a href=\"/content/";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", array()), "html", null, true);
        echo "/create\" class=\"btn btn-primary\">Добавить</a>
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
        return array (  158 => 50,  154 => 48,  142 => 45,  136 => 44,  130 => 43,  126 => 41,  120 => 39,  118 => 38,  115 => 37,  109 => 35,  107 => 34,  104 => 33,  98 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  82 => 26,  77 => 25,  75 => 24,  72 => 23,  68 => 22,  64 => 20,  55 => 18,  51 => 17,  43 => 11,  35 => 3,  32 => 2,  15 => 1,);
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
                        <div>
{#                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Настроить</a>#}
{#                            <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить фильтр</a>#}
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
                                </tr>
                                {% for row in data %}
                                    <tr>
                                        {% set delete = 0 %}
                                        {% for column in columns %}
                                            {% for items in row %}
                                                {% set delete = items.data.id %}
                                                {% if items.field.column_name == column.Field %}

                                                    {% if items.type.value == 'id' %}
                                                        <td style=\"width: 15%\">{{ items.data[column.Field] }}</td>
                                                    {% endif %}

                                                    {% if items.type.value == 'text' %}
                                                        <td style=\"width: 15%\">{{ items.data[column.Field] }}</td>
                                                    {% endif %}

                                                    {% if items.type.value == 'file_image' %}
                                                        <td><img style=\"max-height: 50px; max-width: 50px\" src=\"/files/{{ items.data[column.Field] }}\" alt=\"\"></td>
                                                    {% endif %}

                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        <td style=\"width: 5%\"><a href=\"/content/{{ content.id }}/delete/{{ delete }}\" class=\"btn btn-danger\">Удалить</a></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <a href=\"/content/{{ content.id }}/create\" class=\"btn btn-primary\">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "content/show.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/show.twig");
    }
}
