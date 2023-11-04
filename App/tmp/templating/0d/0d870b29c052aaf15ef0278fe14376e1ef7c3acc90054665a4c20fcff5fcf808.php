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

/* category.twig */
class __TwigTemplate_469469232293eba61431cc465c2e6c37a2bddfac148ec060df4dd101273e936b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"row\">
        <div class=\"bread\">
            <h1>";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            echo " ";
        } else {
            echo " Поиск ";
        }
        echo "</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        ";
        // line 8
        if ( !twig_test_empty(($context["sub_category"] ?? null))) {
            // line 9
            echo "            <ul class=\"index-catalog category\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sub_category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 11
                echo "                    <li>
                        <span class=\"product\">
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                                <div class=\"img\">
                                    <img class=\"image\" src=\"/files/mini/";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 15), "html", null, true);
                echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 17);
                echo "</span>
                            </a>
                        </span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </ul>
        ";
        }
        // line 24
        echo "        <div class=\"clear\"></div>
        <ul class=\"index-catalog product\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                <li>
                    <span class=\"product\">
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 33);
            echo "</span>
                        </a>
                        <span class=\"price\">Цена: <i>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", [], "any", false, false, false, 35), "html", null, true);
            echo " руб.</i></span>
                        <span class=\"count\">
                            <span class=\"price-cont count-container\">
                                <input data-product=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
            echo "\" data-multiply-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 39), "value", [], "any", false, false, false, 39), "html", null, true);
            echo "\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 40), "value", [], "any", false, false, false, 40), "html", null, true);
            echo "\">-</span>
                            </span>
                        </span>
                        <span class=\"cart-add\">в корзину</span>
                        <i class=\"in-cart\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                    </span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </ul>
        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  153 => 40,  149 => 39,  141 => 38,  135 => 35,  130 => 33,  125 => 31,  118 => 29,  114 => 27,  110 => 26,  106 => 24,  102 => 22,  91 => 17,  86 => 15,  79 => 13,  75 => 11,  71 => 10,  68 => 9,  66 => 8,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"bread\">
            <h1>{% if category.name is not empty %} {{ category.name }} {% else %} Поиск {% endif %}</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        {% if sub_category is not empty %}
            <ul class=\"index-catalog category\">
                {% for i in sub_category %}
                    <li>
                        <span class=\"product\">
                            <a href=\"{{ path }}/{{ i.alias }}\">
                                <div class=\"img\">
                                    <img class=\"image\" src=\"/files/mini/{{ i.image }}\" alt=\"\">
                                </div>
                                <span class=\"name\">{{ i.name | raw }}</span>
                            </a>
                        </span>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
        <div class=\"clear\"></div>
        <ul class=\"index-catalog product\">
            {% for i in products %}
                <li>
                    <span class=\"product\">
                        <a href=\"{{ path }}/{{ i.alias }}\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/{{ i.image }}\" alt=\"\">
                            </div>
                            <span class=\"name\">{{ i.name | raw }}</span>
                        </a>
                        <span class=\"price\">Цена: <i>{{ i.price_site }} руб.</i></span>
                        <span class=\"count\">
                            <span class=\"price-cont count-container\">
                                <input data-product=\"{{ i.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.getPackCount().value }}\" data-multiply-value=\"{{ i.getPackCount().value }}\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"{{ i.getPackCount().value }}\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"{{ i.getPackCount().value }}\">-</span>
                            </span>
                        </span>
                        <span class=\"cart-add\">в корзину</span>
                        <i class=\"in-cart\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                    </span>
                </li>
            {% endfor %}
        </ul>
        <div class=\"clear\"></div>
    </div>
{% endblock %}
", "category.twig", "/var/www/u0742521/data/www/eco/App/Site/View/category.twig");
    }
}
