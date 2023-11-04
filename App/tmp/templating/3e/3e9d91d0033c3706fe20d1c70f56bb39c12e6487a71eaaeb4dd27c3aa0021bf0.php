<?php

/* design/index.twig */
class __TwigTemplate_ac725af4bea7be0d122a0f3fc55a291a2f5a7092f951725746150cccab74967d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "design/index.twig", 1);
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
                                    <th>Тираж</th>
                                    <th>Красочность печати</th>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Почта</th>
                                    <th>Комментарий</th>
                                </tr>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["design"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                                    <tr>
                                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "date", array()), "d-m-Y h:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "count", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "color", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "phone", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "comment", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "design/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  58 => 21,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
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
                                    <th>Тираж</th>
                                    <th>Красочность печати</th>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Почта</th>
                                    <th>Комментарий</th>
                                </tr>
                                {% for i in design %}
                                    <tr>
                                        <td>{{ i.date | date('d-m-Y h:i') }}</td>
                                        <td>{{ i.count }}</td>
                                        <td>{{ i.color }}</td>
                                        <td>{{ i.name }}</td>
                                        <td>{{ i.phone }}</td>
                                        <td>{{ i.email }}</td>
                                        <td>{{ i.comment }}</td>
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
{% endblock %}", "design/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/design/index.twig");
    }
}
