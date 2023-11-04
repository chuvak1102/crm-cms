<?php

/* content/index.twig */
class __TwigTemplate_a94fd417ebb31015180703b6ca9e0bd496dc0c98a9aaf819a7393e45b03a0973 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "content/index.twig", 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" method=\"post\">
                                    <table class=\"table table-hover issue-tracker checkbox-container\">
                                        <tbody>
                                        <tr>
                                            <td style=\"width: 25%\"><a href=\"/content/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "canonical", array()), "html", null, true);
            echo "</a></td>
                                            <td style=\"width: 25%\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "table", array()), "html", null, true);
            echo "</td>
                                            <td style=\"width: 25%\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getType", array()), "name", array()), "html", null, true);
            echo "</td>
                                            <td style=\"width: 5%\"><input type=\"checkbox\" ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "show", array()) == 1)) {
                echo " checked ";
            }
            echo " name=\"show\" value=\"1\" class=\"form-control\"></td>
                                            <td style=\"\">
                                                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["i"], "getFields", array(), "method")) {
            } else {
                echo "<a href=\"/content/fields/create/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
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
        return array (  131 => 49,  120 => 47,  116 => 46,  106 => 38,  95 => 32,  88 => 31,  81 => 29,  77 => 28,  73 => 27,  67 => 26,  59 => 22,  55 => 21,  35 => 3,  32 => 2,  15 => 1,);
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
