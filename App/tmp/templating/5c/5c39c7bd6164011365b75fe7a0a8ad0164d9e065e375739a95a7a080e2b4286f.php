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

/* cart.twig */
class __TwigTemplate_c7074365448e981a465ffec870a80aad60388eae6d46531ce42172c8516c2222 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "cart.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"bread\">
        <h1>КОРЗИНА ТОВАРОВ</h1>
        <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
    </div>
    <div class=\"clear\"></div>
    ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <div class=\"bread\" style=\"background-color: #F0F0F3\">
            <table class=\"cart\">
                <tr>
                    <th style=\"width: 5%\"></th>
                    <th style=\"width: 55%\">Наименование товара</th>
                    <th style=\"width: 10%\">Количество</th>
                    <th style=\"width: 10%\">Цена, руб</th>
                    <th style=\"width: 10%\">Сумма, руб</th>
                    <th style=\"width: 2%\"></th>
                </tr>
            </table>
            <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"row\">
            <table class=\"cart\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                echo "                    <tr>
                        <td style=\"width: 5%\"><img src=\"/files/mini/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27), "html", null, true);
                echo "\" alt=\"\"></td>
                        <td style=\"width: 55%\"><a href=\"/katalog-tovarov/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 28), "alias", [], "any", false, false, false, 28), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28);
                echo "</a></td>
                        <td style=\"width: 10%\">
                    <span class=\"count\">
                        <span class=\"price-cont count-container\">
                            <input data-product=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"count-value\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "count", [], "any", false, false, false, 32), "html", null, true);
                echo "\" data-multiply-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 32), "getPackCount", [], "method", false, false, false, 32), "value", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                            <span class=\"plus cart-count-plus-btn\" data-plus-value=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 33), "getPackCount", [], "method", false, false, false, 33), "value", [], "any", false, false, false, 33), "html", null, true);
                echo "\">+</span>
                            <span class=\"minus cart-count-minus-btn\" data-minus-value=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 34), "getPackCount", [], "method", false, false, false, 34), "value", [], "any", false, false, false, 34), "html", null, true);
                echo "\">-</span>
                        </span>
                    </span>
                        </td>
                        <td style=\"width: 10%\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 38), "price_site", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                        <td style=\"width: 10%\">";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "total", [], "any", false, false, false, 39), 2, ".", " "), "html", null, true);
                echo "</td>
                        <td style=\"width: 2%\"><span class=\"close\"><a href=\"/cart/remove/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">x</a></span></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                <tr>
                    <td style=\"padding: 25px\"><h3>Итого</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total_price", [], "any", false, false, false, 48), 2, ".", " "), "html", null, true);
            echo "</b></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class=\"bread order\">
            <h1>ОФОРМЛЕНИЕ ЗАКАЗА</h1>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/submit\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>ФИО или название компании:<span>*</span>:</label>
                    <input name=\"company_name\" type=\"text\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                    ";
            // line 61
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 61))) {
                // line 62
                echo "                        <p>Поле обязательно для заполнения</p>
                    ";
            }
            // line 64
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span>:</label>
                    <input name=\"email\" type=\"text\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
                    ";
            // line 68
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 68))) {
                // line 69
                echo "                        <p>Поле обязательно для заполнения</p>
                    ";
            }
            // line 71
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Контактные телефоны (с кодом города)<span>*</span>:</label>
                    <input name=\"phone\" type=\"text\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 74), "html", null, true);
            echo "\">
                    ";
            // line 75
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 75))) {
                // line 76
                echo "                        <p>Поле обязательно для заполнения</p>
                    ";
            }
            // line 78
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Дата доставки (когда Вам нужна поставка):</label>
                    <input name=\"delivery_date\" type=\"text\"  value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "delivery_date", [], "any", false, false, false, 81), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Время работы Вашей компании:</label>
                    <input name=\"work_time\" type=\"text\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "work_time", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Индекс:</label>
                    <input name=\"index\" type=\"text\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_index", [], "any", false, false, false, 91), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Город:</label>
                    <input name=\"city\" type=\"text\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", [], "any", false, false, false, 96), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Улица, проспект и пр.:</label>
                    <input name=\"street\" type=\"text\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "street", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Номер дома:</label>
                    <input name=\"house\" type=\"text\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "house", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Корпус:</label>
                    <input name=\"block\" type=\"text\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "block", [], "any", false, false, false, 111), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Квартира, офис:</label>
                    <input name=\"office\" type=\"text\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "office", [], "any", false, false, false, 116), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Способ оплаты:</label>
                </div>
                <div class=\"withlogo-row payment-type\">
                    <label><b>На расчетный счет компании</b></label>
                    <label>Если Вы работаете с нами первый раз, необходимо отправить реквизиты нам на почту.</label>
                    <input checked name=\"payment_type\" type=\"radio\" value=\"online\">
                    <label><b>Наличными курьеру</b></label>
                    <label>Заказ необходимо оплатить курьеру наличными при получении заказа.</label>
                    <input name=\"payment_type\" type=\"radio\" value=\"cash\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Дополнительно:</label>
                    <textarea name=\"comment\" id=\"\" cols=\"10\" rows=\"5\" value=\"";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "advanced", [], "any", false, false, false, 133), "html", null, true);
            echo "\"></textarea>
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <button class=\"btn\" type=\"submit\" name=\"submit\" value=\"cart_order\">Отправить заказ</button>
                </div>
            </form>
        </div>
    ";
        } else {
            // line 142
            echo "        <div class=\"content-right-wp\">
            <h2>Корзина товаров пуста, вы можете <a href=\"/katalog-tovarov\">перейти к покупкам</a></h2>
        </div>
    ";
        }
        // line 146
        echo "
";
    }

    public function getTemplateName()
    {
        return "cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 146,  288 => 142,  276 => 133,  256 => 116,  248 => 111,  240 => 106,  232 => 101,  224 => 96,  216 => 91,  208 => 86,  200 => 81,  195 => 78,  191 => 76,  189 => 75,  185 => 74,  180 => 71,  176 => 69,  174 => 68,  170 => 67,  165 => 64,  161 => 62,  159 => 61,  155 => 60,  140 => 48,  133 => 43,  124 => 40,  120 => 39,  116 => 38,  109 => 34,  105 => 33,  97 => 32,  88 => 28,  84 => 27,  81 => 26,  77 => 25,  59 => 9,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"bread\">
        <h1>КОРЗИНА ТОВАРОВ</h1>
        <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
    </div>
    <div class=\"clear\"></div>
    {% if cart.products is not empty %}
        <div class=\"bread\" style=\"background-color: #F0F0F3\">
            <table class=\"cart\">
                <tr>
                    <th style=\"width: 5%\"></th>
                    <th style=\"width: 55%\">Наименование товара</th>
                    <th style=\"width: 10%\">Количество</th>
                    <th style=\"width: 10%\">Цена, руб</th>
                    <th style=\"width: 10%\">Сумма, руб</th>
                    <th style=\"width: 2%\"></th>
                </tr>
            </table>
            <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"row\">
            <table class=\"cart\">
                {% for i in cart.products %}
                    <tr>
                        <td style=\"width: 5%\"><img src=\"/files/mini/{{ i.product.image }}\" alt=\"\"></td>
                        <td style=\"width: 55%\"><a href=\"/katalog-tovarov/{{ i.product.alias }}\">{{ i.product.name | raw}}</a></td>
                        <td style=\"width: 10%\">
                    <span class=\"count\">
                        <span class=\"price-cont count-container\">
                            <input data-product=\"{{ i.product.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.count }}\" data-multiply-value=\"{{ i.product.getPackCount().value }}\">
                            <span class=\"plus cart-count-plus-btn\" data-plus-value=\"{{ i.product.getPackCount().value }}\">+</span>
                            <span class=\"minus cart-count-minus-btn\" data-minus-value=\"{{ i.product.getPackCount().value }}\">-</span>
                        </span>
                    </span>
                        </td>
                        <td style=\"width: 10%\">{{ i.product.price_site }}</td>
                        <td style=\"width: 10%\">{{ i.total | number_format(2, '.', ' ') }}</td>
                        <td style=\"width: 2%\"><span class=\"close\"><a href=\"/cart/remove/{{ i.product.id }}\">x</a></span></td>
                    </tr>
                {% endfor %}
                <tr>
                    <td style=\"padding: 25px\"><h3>Итого</h3></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>{{ cart.total_price | number_format(2, '.', ' ') }}</b></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class=\"bread order\">
            <h1>ОФОРМЛЕНИЕ ЗАКАЗА</h1>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/submit\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>ФИО или название компании:<span>*</span>:</label>
                    <input name=\"company_name\" type=\"text\" value=\"{{ client.name }}\">
                    {% if client.name is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span>:</label>
                    <input name=\"email\" type=\"text\" value=\"{{ client.email }}\">
                    {% if client.email is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Контактные телефоны (с кодом города)<span>*</span>:</label>
                    <input name=\"phone\" type=\"text\" value=\"{{ client.phone }}\">
                    {% if client.phone is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Дата доставки (когда Вам нужна поставка):</label>
                    <input name=\"delivery_date\" type=\"text\"  value=\"{{ client.delivery_date }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Время работы Вашей компании:</label>
                    <input name=\"work_time\" type=\"text\" value=\"{{ client.work_time }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Индекс:</label>
                    <input name=\"index\" type=\"text\" value=\"{{ client.address_index }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Город:</label>
                    <input name=\"city\" type=\"text\" value=\"{{ client.city }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Улица, проспект и пр.:</label>
                    <input name=\"street\" type=\"text\" value=\"{{ client.street }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Номер дома:</label>
                    <input name=\"house\" type=\"text\" value=\"{{ client.house }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Корпус:</label>
                    <input name=\"block\" type=\"text\" value=\"{{ client.block }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Квартира, офис:</label>
                    <input name=\"office\" type=\"text\" value=\"{{ client.office }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Способ оплаты:</label>
                </div>
                <div class=\"withlogo-row payment-type\">
                    <label><b>На расчетный счет компании</b></label>
                    <label>Если Вы работаете с нами первый раз, необходимо отправить реквизиты нам на почту.</label>
                    <input checked name=\"payment_type\" type=\"radio\" value=\"online\">
                    <label><b>Наличными курьеру</b></label>
                    <label>Заказ необходимо оплатить курьеру наличными при получении заказа.</label>
                    <input name=\"payment_type\" type=\"radio\" value=\"cash\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Дополнительно:</label>
                    <textarea name=\"comment\" id=\"\" cols=\"10\" rows=\"5\" value=\"{{ client.advanced }}\"></textarea>
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <button class=\"btn\" type=\"submit\" name=\"submit\" value=\"cart_order\">Отправить заказ</button>
                </div>
            </form>
        </div>
    {% else %}
        <div class=\"content-right-wp\">
            <h2>Корзина товаров пуста, вы можете <a href=\"/katalog-tovarov\">перейти к покупкам</a></h2>
        </div>
    {% endif %}

{#    {{ dump() }}#}
{% endblock %}", "cart.twig", "/var/www/u0742521/data/www/eco/App/Site/View/cart.twig");
    }
}
