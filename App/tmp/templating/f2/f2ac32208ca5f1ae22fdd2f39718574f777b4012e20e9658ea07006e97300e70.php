<?php

/* order/today.twig */
class __TwigTemplate_c0c28d55b61d2f7ba10c2934baef8b5f6c2bb4e805a962fc750c7a4bfecaf24b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "order/today.twig", 1);
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
                                    <th style=\"width: 10%\">Изображение</th>
                                    <th style=\"width: 30%\">Название</th>
                                    <th style=\"width: 15%\">Текущий остаток</th>
                                    <th>Критичный остаток</th>
                                    <th style=\"\">Продажи в месяц</th>
                                </tr>
                                </tbody>
                            </table>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                                <table class=\"table table-hover issue-tracker order-row\">
                                    <tbody>
                                    <tr>
                                        <td style=\"width: 10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                        <td style=\"width: 30%\"><a target=\"_blank\" href=\"/product/edit/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</a></td>
                                        <td style=\"width: 15%\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "countCurrent", array()), "value", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "countMinimal", array()), "value", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "monthlySales", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    </tbody>
                                </table>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-default\">Печать</a>
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
        return "order/today.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  81 => 28,  77 => 27,  73 => 26,  67 => 25,  63 => 24,  58 => 21,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
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
                                    <th style=\"width: 10%\">Изображение</th>
                                    <th style=\"width: 30%\">Название</th>
                                    <th style=\"width: 15%\">Текущий остаток</th>
                                    <th>Критичный остаток</th>
                                    <th style=\"\">Продажи в месяц</th>
                                </tr>
                                </tbody>
                            </table>
                            {% for i in items %}
                                <table class=\"table table-hover issue-tracker order-row\">
                                    <tbody>
                                    <tr>
                                        <td style=\"width: 10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.image }}\" alt=\"\"></td>
                                        <td style=\"width: 30%\"><a target=\"_blank\" href=\"/product/edit/{{ i.id }}\">{{ i.name | raw }}</a></td>
                                        <td style=\"width: 15%\">{{ i.countCurrent.value }}</td>
                                        <td>{{ i.countMinimal.value }}</td>
                                        <td>{{ i.monthlySales }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            {% endfor %}
                            <a href=\"{{ href }}\" target=\"_blank\" class=\"btn btn-default\">Печать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "order/today.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/order/today.twig");
    }
}
