<?php

/* withlogo.twig */
class __TwigTemplate_3704ca3a42681b6820a566f1b214c120578d8bb042770407fdb5cbfa4afc06c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "withlogo.twig", 1);
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
            <h1>БУМАЖНЫЕ СТАКАНЫ С ЛОГОТИПОМ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"shop_cat_text\"><p><span style=\"font-size: medium;\">Компания \"Экопакинг\" производит бумажные стаканы с индивидуальным дизайном.</span>
            </p>
            <br>
            <ul>
                <li><span style=\"font-size: small;\"><strong><span
                                    style=\"font-size: small;\">СРОК ПРОИЗВОДСТВ</span>А:</strong> 2-3 недели</span></li>
                <br>
                <li><span style=\"font-size: small;\"><strong style=\"font-size: small;\"><span size=\"3\">ПЛОТНЫЙ ЕВРОПЕЙСКИЙ КАРТОН</span></strong></span>
                </li>
                <br>
                <li><span style=\"font-size: x-small;\"><span style=\"font-size: small;\"><strong><span size=\"3\">КАЧЕСТВЕННАЯ ПОЛНОЦВЕТНАЯ ПЕЧАТЬ</span></strong></span><span
                                size=\"3\"></span><span size=\"3\"> (специализированные краски)</span></span></li>
                <br>
            </ul>
            <p><span style=\"font-size: small;\"><strong>КАК СДЕЛАТЬ ЗАКАЗ:</strong></span></p>
            <br>
            <p><span style=\"font-size: small;\">Кликните на интересующий Вас тип стакана или добавьте кнопкой \"заказать\" необходимое количество товара в корзину,перейдите в корзину (в правом верхнем углу экрана),оформите заказ.Менеджер оперативно свяжется с Вами для уточнения деталей заказа и оформления договора,</span><span
                        style=\"font-size: medium;\"><span
                            style=\"font-size: small;\">ИЛИ ПРОСТО ПОЗВОНИТЕ НАМ</span> : <span
                            style=\"text-decoration: underline;\"><strong>8-(495)-923-98-78</strong></span></span></p>
            <br>
            <p><span style=\"font-size: medium;\"><span
                            style=\"text-decoration: underline;\"><strong></strong></span></span><span
                        style=\"text-decoration: underline;\"><strong>Актуальные цены 2019г.</strong></span><span
                        style=\"font-size: medium;\">:</span></p></div>
        ";
        // line 33
        if ( !twig_test_empty(($context["sub_category"] ?? null))) {
            // line 34
            echo "            <ul class=\"index-catalog category\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sub_category"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                    <li>
                        <span class=\"product\">
                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
                echo "\">
                                <div class=\"img\">
                                    <img class=\"image\" src=\"/files/mini/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
                echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
                echo "</span>
                            </a>
                        </span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </ul>
        ";
        }
        // line 49
        echo "        <div class=\"clear\"></div>
        <ul class=\"index-catalog product\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "                <li style=\"height: 330px\">
                    <span class=\"product\">
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</span>
                        </a>
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "getPrices", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 61
                echo "                            <span class=\"price\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "dictionaryField", array()), "name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "value", array()), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        <span class=\"count\" style=\"display: none\">
                            <span class=\"price-cont count-container\">
                                <input data-product=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\" data-multiply-value=\"1000\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"1000\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"1000\">-</span>
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
        // line 75
        echo "        </ul>
        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "withlogo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 75,  155 => 65,  151 => 63,  140 => 61,  136 => 60,  131 => 58,  126 => 56,  119 => 54,  115 => 52,  111 => 51,  107 => 49,  103 => 47,  92 => 42,  87 => 40,  80 => 38,  76 => 36,  72 => 35,  69 => 34,  67 => 33,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"bread\">
            <h1>БУМАЖНЫЕ СТАКАНЫ С ЛОГОТИПОМ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"shop_cat_text\"><p><span style=\"font-size: medium;\">Компания \"Экопакинг\" производит бумажные стаканы с индивидуальным дизайном.</span>
            </p>
            <br>
            <ul>
                <li><span style=\"font-size: small;\"><strong><span
                                    style=\"font-size: small;\">СРОК ПРОИЗВОДСТВ</span>А:</strong> 2-3 недели</span></li>
                <br>
                <li><span style=\"font-size: small;\"><strong style=\"font-size: small;\"><span size=\"3\">ПЛОТНЫЙ ЕВРОПЕЙСКИЙ КАРТОН</span></strong></span>
                </li>
                <br>
                <li><span style=\"font-size: x-small;\"><span style=\"font-size: small;\"><strong><span size=\"3\">КАЧЕСТВЕННАЯ ПОЛНОЦВЕТНАЯ ПЕЧАТЬ</span></strong></span><span
                                size=\"3\"></span><span size=\"3\"> (специализированные краски)</span></span></li>
                <br>
            </ul>
            <p><span style=\"font-size: small;\"><strong>КАК СДЕЛАТЬ ЗАКАЗ:</strong></span></p>
            <br>
            <p><span style=\"font-size: small;\">Кликните на интересующий Вас тип стакана или добавьте кнопкой \"заказать\" необходимое количество товара в корзину,перейдите в корзину (в правом верхнем углу экрана),оформите заказ.Менеджер оперативно свяжется с Вами для уточнения деталей заказа и оформления договора,</span><span
                        style=\"font-size: medium;\"><span
                            style=\"font-size: small;\">ИЛИ ПРОСТО ПОЗВОНИТЕ НАМ</span> : <span
                            style=\"text-decoration: underline;\"><strong>8-(495)-923-98-78</strong></span></span></p>
            <br>
            <p><span style=\"font-size: medium;\"><span
                            style=\"text-decoration: underline;\"><strong></strong></span></span><span
                        style=\"text-decoration: underline;\"><strong>Актуальные цены 2019г.</strong></span><span
                        style=\"font-size: medium;\">:</span></p></div>
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
                <li style=\"height: 330px\">
                    <span class=\"product\">
                        <a href=\"{{ path }}/{{ i.alias }}\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/{{ i.image }}\" alt=\"\">
                            </div>
                            <span class=\"name\">{{ i.name | raw }}</span>
                        </a>
                        {% for p in i.getPrices %}
                            <span class=\"price\">{{ p.dictionaryField.name }} - {{ p.value }}</span>
                        {% endfor %}
                        <span class=\"count\" style=\"display: none\">
                            <span class=\"price-cont count-container\">
                                <input data-product=\"{{ i.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.pack_count }}\" data-multiply-value=\"1000\">
                                <span class=\"plus count-plus-btn\" data-plus-value=\"1000\">+</span>
                                <span class=\"minus count-minus-btn\" data-minus-value=\"1000\">-</span>
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
", "withlogo.twig", "/var/www/u0742521/data/www/eco/App/Site/View/withlogo.twig");
    }
}
