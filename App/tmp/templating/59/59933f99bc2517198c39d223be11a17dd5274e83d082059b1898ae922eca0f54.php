<?php

/* client/index.twig */
class __TwigTemplate_5ab6cb61b0c1a17425f78dd3ca51e61a95d315e157df371273209cbdc838538b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "client/index.twig", 1);
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
                        <a class=\"btn btn-primary\" href=\"/client/create\">Добавить клиента</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Юр.лицо/ИП</th>
                                    <th>Сумма заказов в месяц</th>
                                    <th>Контакты</th>
                                    <th>Личный кабинет</th>
                                    <th>Профиль</th>
                                </tr>
                                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                                        <tr>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "company", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ordersPerMonth", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "phone", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</td>
                                            <td><a class=\"btn btn-primary\" href=\"/client/cabinet/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Просмотр</a></td>
                                            <td><a class=\"btn btn-primary\" href=\"/client/profile/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Редактировать</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "client/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  96 => 37,  92 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  70 => 31,  67 => 30,  63 => 29,  35 => 3,  32 => 2,  15 => 1,);
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
                        <a class=\"btn btn-primary\" href=\"/client/create\">Добавить клиента</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Юр.лицо/ИП</th>
                                    <th>Сумма заказов в месяц</th>
                                    <th>Контакты</th>
                                    <th>Личный кабинет</th>
                                    <th>Профиль</th>
                                </tr>
                                    {% for i in clients %}
                                        <tr>
                                            <td>{{ i.id }}</td>
                                            <td>{{ i.name }}</td>
                                            <td>{{ i.company }}</td>
                                            <td>{{ i.ordersPerMonth }}</td>
                                            <td>{{ i.phone }}, {{ i.email }}</td>
                                            <td><a class=\"btn btn-primary\" href=\"/client/cabinet/{{ i.id }}\">Просмотр</a></td>
                                            <td><a class=\"btn btn-primary\" href=\"/client/profile/{{ i.id }}\">Редактировать</a></td>
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
{#    {{ dump(clients) }}#}
{% endblock %}", "client/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/client/index.twig");
    }
}
