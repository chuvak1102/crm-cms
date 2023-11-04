<?php

/* galery.twig */
class __TwigTemplate_27b9b89d4427bec163ddad2405c123caafa2c73c3803d2a3a4e8cdec72ddb768 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "galery.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"bread\">
            <h1>";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()), "html", null, true);
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
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["i"], "active", array())) {
                    // line 12
                    echo "                        <li>
                            <span class=\"product\">
                                <a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
                    echo "\">
                                    <div class=\"img\">
                                        <img class=\"image\" src=\"/files/mini/";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
                    echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
                    echo "</span>
                                </a>
                            </span>
                        </li>
                    ";
                }
                // line 23
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </ul>
        ";
        }
        // line 26
        echo "        <div class=\"clear\"></div>
        <ul class=\"index-catalog product\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "                <li>
                    <span class=\"product\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</span>
                        </a>
                        <span class=\"price\">Цена: <i>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", array()), "html", null, true);
            echo " руб.</i></span>
                        <span class=\"count\">
                            <span class=\"price-cont count-container\">
                                <input data-product=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\" data-multiply-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
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
        // line 50
        echo "        </ul>
        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "galery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  144 => 42,  140 => 41,  132 => 40,  126 => 37,  121 => 35,  116 => 33,  109 => 31,  105 => 29,  101 => 28,  97 => 26,  93 => 24,  87 => 23,  79 => 18,  74 => 16,  67 => 14,  63 => 12,  60 => 11,  56 => 10,  53 => 9,  51 => 8,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"bread\">
            <h1>{% if category.name is not empty %} {{ category.name }} {% else %} Поиск {% endif %}</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        {% if sub_category is not empty %}
            <ul class=\"index-catalog category\">
                {% for i in sub_category %}
                    {% if i.active %}
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
                    {% endif %}
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
                                <input data-product=\"{{ i.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.pack_count }}\" data-multiply-value=\"{{ i.pack_count }}\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"{{ i.pack_count }}\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"{{ i.pack_count }}\">-</span>
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
", "galery.twig", "/var/www/u0742521/data/www/eco/App/Site/View/galery.twig");
    }
}
