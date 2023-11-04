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

/* product.twig */
class __TwigTemplate_9b50401f2cdcb0471f2d507ecde007e4487a0561bba76122daaf166cd8fe4559 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "product.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"product-single\">
        <div class=\"product\">
            <div class=\"left\">
                <img src=\"/files/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"right\">
                <h1 class=\"name\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 9);
        echo "</h1>
                <div class=\"article\">Артикул: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "article", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
                <div class=\"price\">Цена за 1 шт. <i>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site", [], "any", false, false, false, 11), "html", null, true);
        echo " руб.</i></div>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"count-value\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "method", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
        echo "\" data-multiply-value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "method", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "method", false, false, false, 15), "value", [], "any", false, false, false, 15), "html", null, true);
        echo "\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "method", false, false, false, 16), "value", [], "any", false, false, false, 16), "html", null, true);
        echo "\">-</span>
                    </span>
                </span>
                <div class=\"cart-add\">в корзину</div>
                <i class=\"in-cart\" style=\"margin-top: 0\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                <div class=\"params\">
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                                class=\"shop_param_value\">500 штук</span></div>
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                                class=\"shop_param_value\">25 шт.</span></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"product\">
            <div class=\"params-name\">Характеристики:</div>
            <div class=\"params\">
                <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                            class=\"shop_param_value\">500 штук</span></div>
                <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                            class=\"shop_param_value\">25 шт.</span></div>
            </div>
        </div>
    </div>
    <div class=\"bread\">
        <h1>С ЭТИМ ТОВАРОМ ОБЫЧНО ПОКУПАЮТ</h1>
    </div>
    <ul class=\"index-catalog product\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["similar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "            <li>
            <span class=\"product\">
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                    <div class=\"img\">
                        <img class=\"image\" src=\"/files/mini/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 49), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <span class=\"name\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 51);
            echo "</span>
                </a>
                <span class=\"price\">Цена: <i>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", [], "any", false, false, false, 53), "html", null, true);
            echo " руб.</i></span>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 56), "value", [], "any", false, false, false, 56), "html", null, true);
            echo "\" data-multiply-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 56), "value", [], "any", false, false, false, 56), "html", null, true);
            echo "\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 57), "value", [], "any", false, false, false, 57), "html", null, true);
            echo "\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 58), "value", [], "any", false, false, false, 58), "html", null, true);
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
        // line 66
        echo "    </ul>

    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  161 => 58,  157 => 57,  149 => 56,  143 => 53,  138 => 51,  133 => 49,  126 => 47,  122 => 45,  118 => 44,  87 => 16,  83 => 15,  75 => 14,  69 => 11,  65 => 10,  61 => 9,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"product-single\">
        <div class=\"product\">
            <div class=\"left\">
                <img src=\"/files/{{ product.image }}\" alt=\"\">
            </div>
            <div class=\"right\">
                <h1 class=\"name\">{{ product.name | raw }}</h1>
                <div class=\"article\">Артикул: {{ product.article }}</div>
                <div class=\"price\">Цена за 1 шт. <i>{{ product.price_site }} руб.</i></div>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"{{ product.id }}\" class=\"count-value\" type=\"text\" value=\"{{ product.getPackCount().value }}\" data-multiply-value=\"{{ product.getPackCount().value }}\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"{{ product.getPackCount().value }}\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"{{ product.getPackCount().value }}\">-</span>
                    </span>
                </span>
                <div class=\"cart-add\">в корзину</div>
                <i class=\"in-cart\" style=\"margin-top: 0\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                <div class=\"params\">
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                                class=\"shop_param_value\">500 штук</span></div>
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                                class=\"shop_param_value\">25 шт.</span></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"product\">
            <div class=\"params-name\">Характеристики:</div>
            <div class=\"params\">
                <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                            class=\"shop_param_value\">500 штук</span></div>
                <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                            class=\"shop_param_value\">25 шт.</span></div>
            </div>
        </div>
    </div>
    <div class=\"bread\">
        <h1>С ЭТИМ ТОВАРОМ ОБЫЧНО ПОКУПАЮТ</h1>
    </div>
    <ul class=\"index-catalog product\">
        {% for i in similar %}
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
{% endblock %}", "product.twig", "/var/www/u0742521/data/www/eco/App/Site/View/product.twig");
    }
}
