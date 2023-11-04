<?php

/* supplier/list.twig */
class __TwigTemplate_91cdd555bacee4c82c0fc4bcae58674d35ceea35bc59fe84fe1c4e98398287cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "supplier/list.twig", 1);
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
                            <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Email</th>
                                    <th>ООО</th>
                                    <th>ИНН</th>
                                    <th>Адрес склада</th>
                                    <th>Время работы</th>
                                    <th>ФИО</th>
                                    <th>Телефоны</th>
                                    <th></th><th></th>
                                </tr>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supplier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "                                    <tr>
                                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ooo", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "inn", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "warehouse_address", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "work_time", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "fio", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "phone", array()), "html", null, true);
            echo "</td>
                                        <td><a href=\"/supplier/list/edit/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                        <td><a href=\"/supplier/list/delete/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                            </table>
                            <a href=\"/supplier/list/create\" class=\"btn btn-primary\">Добавить поставщика</a>
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
        return "supplier/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  60 => 23,  56 => 22,  35 => 3,  32 => 2,  15 => 1,);
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
                            <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Email</th>
                                    <th>ООО</th>
                                    <th>ИНН</th>
                                    <th>Адрес склада</th>
                                    <th>Время работы</th>
                                    <th>ФИО</th>
                                    <th>Телефоны</th>
                                    <th></th><th></th>
                                </tr>
                                {% for i in supplier %}
                                    <tr>
                                        <td>{{ i.id }}</td>
                                        <td>{{ i.name }}</td>
                                        <td>{{ i.email }}</td>
                                        <td>{{ i.ooo }}</td>
                                        <td>{{ i.inn }}</td>
                                        <td>{{ i.warehouse_address }}</td>
                                        <td>{{ i.work_time }}</td>
                                        <td>{{ i.fio }}</td>
                                        <td>{{ i.phone }}</td>
                                        <td><a href=\"/supplier/list/edit/{{ i.id }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                        <td><a href=\"/supplier/list/delete/{{ i.id }}\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
                                    </tr>
                                {% endfor %}
                            </table>
                            <a href=\"/supplier/list/create\" class=\"btn btn-primary\">Добавить поставщика</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "supplier/list.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/supplier/list.twig");
    }
}
