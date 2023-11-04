<?php

/* ordershow.twig */
class __TwigTemplate_b67759527fa7c3792f75048aeb5c762eddad7873e1d06df717d90653dcf14295 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "ordershow.twig", 1);
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
        <form action=\"/order/edit/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-content\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Название</th>
                                        <th>Количество</th>
                                        <th>Цена</th>
                                        <th>Скидка</th>
                                        <th>Итоговая цена</th>
                                        <th>Сумма</th>
                                    </tr>
                                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                                        <tr>
                                            <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                            <td>";
            // line 24
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "name", array());
            echo "</td>
                                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "getPrice", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_discount", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_with_discount", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                    <tr>
                                        <td></td>
                                        <td><h3>Итого: ";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", " "), "html", null, true);
        echo " руб.</h3></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ordershow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  98 => 32,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  62 => 22,  58 => 21,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <form action=\"/order/edit/{{ order.id }}\" method=\"post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-content\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Название</th>
                                        <th>Количество</th>
                                        <th>Цена</th>
                                        <th>Скидка</th>
                                        <th>Итоговая цена</th>
                                        <th>Сумма</th>
                                    </tr>
                                    {% for i in items %}
                                        <tr>
                                            <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.getProduct.image }}\" alt=\"\"></td>
                                            <td>{{ i.getProduct.name | raw }}</td>
                                            <td>{{ i.product_count }}</td>
                                            <td>{{ i.getProduct.getPrice }}</td>
                                            <td>{{ i.price_discount }}</td>
                                            <td>{{ i.price_with_discount }}</td>
                                            <td>{{ i.price_row_total }}</td>
                                        </tr>
                                    {% endfor %}
                                    <tr>
                                        <td></td>
                                        <td><h3>Итого: {{ total | number_format(2, '.', ' ')  }} руб.</h3></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "ordershow.twig", "/var/www/u0742521/data/www/eco/App/Client/View/ordershow.twig");
    }
}
