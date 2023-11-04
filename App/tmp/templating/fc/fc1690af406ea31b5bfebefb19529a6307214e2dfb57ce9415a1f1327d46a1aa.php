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

/* withlogo_product.twig */
class __TwigTemplate_9da5ff0a02d87175bfa94728f1430422d38aebb9a2bbcc784e0d952bdc691c2e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "withlogo_product.twig", 1);
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
                <form action=\"/submit\" class=\"form-withlogo\" method=\"post\">
                    <div class=\"withlogo-row\">
                        <label for=\"\">Тираж, шт<span>*</span>:</label>
                        <select name=\"count\" id=\"\">
                            <option value=\"3000\">от 3 000</option>
                            <option value=\"5000\">от 5 000</option>
                            <option value=\"10000\">от 10 000</option>
                            <option value=\"15000\">от 15 000</option>
                            <option value=\"20000\">от 20 000</option>
                            <option value=\"25000\">от 25 000</option>
                            <option value=\"30000\">от 30 000</option>
                            <option value=\"50000\">от 50 000</option>
                            <option value=\"100000\">от 100 000</option>
                        </select>
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Красочность печати(CMYK,Pantone 6+0):</label>
                        <input name=\"color\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваше имя<span>*</span>:</label>
                        <input name=\"name\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваш телефон<span>*</span>:</label>
                        <input name=\"phone\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваш e-mail<span>*</span>:</label>
                        <input name=\"email\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Комментарий:</label>
                        <textarea name=\"comment\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
                    </div>
                    <div class=\"withlogo-row\">
                        <button type=\"submit\" name=\"submit\" value=\"custom_print\">Отправить</button>
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\"><span>*</span> - Поля, обязательные для заполнения</label>
                    </div>
                </form>
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["similar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 76
            echo "            <li>
            <span class=\"product\">
                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
                    <div class=\"img\">
                        <img class=\"image\" src=\"/files/mini/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 80), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <span class=\"name\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 82);
            echo "</span>
                </a>
                <span class=\"price\">Цена: <i>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", [], "any", false, false, false, 84), "html", null, true);
            echo " руб.</i></span>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
            echo "\" data-multiply-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 88), "value", [], "any", false, false, false, 88), "html", null, true);
            echo "\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getPackCount", [], "method", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
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
        // line 97
        echo "    </ul>

    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "withlogo_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 97,  173 => 89,  169 => 88,  161 => 87,  155 => 84,  150 => 82,  145 => 80,  138 => 78,  134 => 76,  130 => 75,  61 => 9,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
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
                <form action=\"/submit\" class=\"form-withlogo\" method=\"post\">
                    <div class=\"withlogo-row\">
                        <label for=\"\">Тираж, шт<span>*</span>:</label>
                        <select name=\"count\" id=\"\">
                            <option value=\"3000\">от 3 000</option>
                            <option value=\"5000\">от 5 000</option>
                            <option value=\"10000\">от 10 000</option>
                            <option value=\"15000\">от 15 000</option>
                            <option value=\"20000\">от 20 000</option>
                            <option value=\"25000\">от 25 000</option>
                            <option value=\"30000\">от 30 000</option>
                            <option value=\"50000\">от 50 000</option>
                            <option value=\"100000\">от 100 000</option>
                        </select>
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Красочность печати(CMYK,Pantone 6+0):</label>
                        <input name=\"color\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваше имя<span>*</span>:</label>
                        <input name=\"name\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваш телефон<span>*</span>:</label>
                        <input name=\"phone\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Ваш e-mail<span>*</span>:</label>
                        <input name=\"email\" type=\"text\">
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\">Комментарий:</label>
                        <textarea name=\"comment\" id=\"\" cols=\"30\" rows=\"10\"></textarea>
                    </div>
                    <div class=\"withlogo-row\">
                        <button type=\"submit\" name=\"submit\" value=\"custom_print\">Отправить</button>
                    </div>
                    <div class=\"withlogo-row\">
                        <label for=\"\"><span>*</span> - Поля, обязательные для заполнения</label>
                    </div>
                </form>
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
{% endblock %}", "withlogo_product.twig", "/var/www/u0742521/data/www/eco/App/Site/View/withlogo_product.twig");
    }
}
