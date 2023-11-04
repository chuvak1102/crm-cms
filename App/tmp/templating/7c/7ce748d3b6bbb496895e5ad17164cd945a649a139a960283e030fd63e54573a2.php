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

/* withlogo.twig */
class __TwigTemplate_ef35262c71ac921805813c05548f027101bbe5e3f3a31e1903920bee7f52fee6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "withlogo.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
                                <div class=\"img\">
                                    <img class=\"image\" src=\"/files/mini/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 40), "html", null, true);
                echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 42);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                            <div class=\"img\">
                                <img class=\"image\" src=\"/files/mini/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 56), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 58);
            echo "</span>
                        </a>
                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "getPrices", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 61
                echo "                            <span class=\"price\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "dictionaryField", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "value", [], "any", false, false, false, 61), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
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
        return array (  188 => 75,  170 => 65,  166 => 63,  155 => 61,  151 => 60,  146 => 58,  141 => 56,  134 => 54,  130 => 52,  126 => 51,  122 => 49,  118 => 47,  107 => 42,  102 => 40,  95 => 38,  91 => 36,  87 => 35,  84 => 34,  82 => 33,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
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
                                <input data-product=\"{{ i.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.getPackCount().value }}\" data-multiply-value=\"1000\">
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
