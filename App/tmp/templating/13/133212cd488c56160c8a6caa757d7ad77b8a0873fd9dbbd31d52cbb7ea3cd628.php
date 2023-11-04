<?php

/* cart.twig */
class __TwigTemplate_ef774f20deb9b99f12c262221b64853dcb4afd0bcb7d17e4db7840d65e9fb9ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "cart.twig", 1);
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
        echo "    <div class=\"bread\">
        <h1>КОРЗИНА ТОВАРОВ</h1>
        <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
    </div>
    <div class=\"clear\"></div>
    ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", array()))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                echo "                    <tr>
                        <td style=\"width: 5%\"><img src=\"/files/mini/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></td>
                        <td style=\"width: 55%\"><a href=\"/katalog-tovarov/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "alias", array()), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "name", array());
                echo "</a></td>
                        <td style=\"width: 10%\">
                    <span class=\"count\">
                        <span class=\"price-cont count-container\">
                            <input data-product=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"count-value\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "count", array()), "html", null, true);
                echo "\" data-multiply-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
                echo "\">
                            <span class=\"plus cart-count-plus-btn\" data-plus-value=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
                echo "\">+</span>
                            <span class=\"minus cart-count-minus-btn\" data-minus-value=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
                echo "\">-</span>
                        </span>
                    </span>
                        </td>
                        <td style=\"width: 10%\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "price_site", array()), "html", null, true);
                echo "</td>
                        <td style=\"width: 10%\">";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "total", array()), 2, ".", " "), "html", null, true);
                echo "</td>
                        <td style=\"width: 2%\"><span class=\"close\"><a href=\"/cart/remove/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "product", array()), "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total_price", array()), 2, ".", " "), "html", null, true);
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
                    ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", array())) {
                // line 61
                echo "                        <input name=\"company_name\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 63
                echo "                        <input name=\"company_name\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array()), "html", null, true);
                echo "\">
                        ";
                // line 64
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array()))) {
                    // line 65
                    echo "                            <p>Поле обязательно для заполнения</p>
                        ";
                }
                // line 67
                echo "                    ";
            }
            // line 68
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span>:</label>
                    ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", array())) {
                // line 72
                echo "                        <input name=\"email\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 74
                echo "                        <input name=\"email\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", array()), "html", null, true);
                echo "\">
                        ";
                // line 75
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", array()))) {
                    // line 76
                    echo "                            <p>Поле обязательно для заполнения</p>
                        ";
                }
                // line 78
                echo "                    ";
            }
            // line 79
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Контактные телефоны (с кодом города)<span>*</span>:</label>
                    ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "phone", array())) {
                // line 83
                echo "                        <input name=\"phone\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "phone", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 85
                echo "                        <input name=\"phone\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", array()), "html", null, true);
                echo "\">
                        ";
                // line 86
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", array()))) {
                    // line 87
                    echo "                            <p>Поле обязательно для заполнения</p>
                        ";
                }
                // line 89
                echo "                    ";
            }
            // line 90
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Дата доставки (когда Вам нужна поставка):</label>
                    <input name=\"delivery_date\" type=\"text\"  value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "delivery_date", array()), "html", null, true);
            echo "\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Время работы Вашей компании:</label>
                    ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "work_time", array())) {
                // line 99
                echo "                        <input name=\"work_time\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "work_time", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 101
                echo "                        <input name=\"work_time\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "work_time", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 104
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Индекс:</label>
                    ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "index", array())) {
                // line 108
                echo "                        <input name=\"index\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "index", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 110
                echo "                        <input name=\"index\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_index", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 113
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Город:</label>
                    ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "city", array())) {
                // line 117
                echo "                        <input name=\"city\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "city", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 119
                echo "                        <input name=\"city\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 122
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Улица, проспект и пр.:</label>
                    ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "street", array())) {
                // line 126
                echo "                        <input name=\"street\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "street", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 128
                echo "                        <input name=\"street\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "street", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 131
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Номер дома:</label>
                    ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "house", array())) {
                // line 135
                echo "                        <input name=\"house\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "house", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 137
                echo "                        <input name=\"house\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "house", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 140
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Корпус:</label>
                    ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "block", array())) {
                // line 144
                echo "                        <input name=\"block\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "block", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 146
                echo "                        <input name=\"block\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "block", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 149
            echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Квартира, офис:</label>
                    ";
            // line 152
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "office", array())) {
                // line 153
                echo "                        <input name=\"office\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "office", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 155
                echo "                        <input name=\"office\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "office", array()), "html", null, true);
                echo "\">
                        <p></p>
                    ";
            }
            // line 158
            echo "                </div>
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
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "advanced", array()), "html", null, true);
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
            // line 182
            echo "        <div class=\"content-right-wp\">
            <h2>Корзина товаров пуста, вы можете <a href=\"/katalog-tovarov\">перейти к покупкам</a></h2>
        </div>
    ";
        }
        // line 186
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
        return array (  399 => 186,  393 => 182,  381 => 173,  364 => 158,  357 => 155,  351 => 153,  349 => 152,  344 => 149,  337 => 146,  331 => 144,  329 => 143,  324 => 140,  317 => 137,  311 => 135,  309 => 134,  304 => 131,  297 => 128,  291 => 126,  289 => 125,  284 => 122,  277 => 119,  271 => 117,  269 => 116,  264 => 113,  257 => 110,  251 => 108,  249 => 107,  244 => 104,  237 => 101,  231 => 99,  229 => 98,  221 => 93,  216 => 90,  213 => 89,  209 => 87,  207 => 86,  202 => 85,  196 => 83,  194 => 82,  189 => 79,  186 => 78,  182 => 76,  180 => 75,  175 => 74,  169 => 72,  167 => 71,  162 => 68,  159 => 67,  155 => 65,  153 => 64,  148 => 63,  142 => 61,  140 => 60,  125 => 48,  118 => 43,  109 => 40,  105 => 39,  101 => 38,  94 => 34,  90 => 33,  82 => 32,  73 => 28,  69 => 27,  66 => 26,  62 => 25,  44 => 9,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
                            <input data-product=\"{{ i.product.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.count }}\" data-multiply-value=\"{{ i.pack_count }}\">
                            <span class=\"plus cart-count-plus-btn\" data-plus-value=\"{{ i.pack_count }}\">+</span>
                            <span class=\"minus cart-count-minus-btn\" data-minus-value=\"{{ i.pack_count }}\">-</span>
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
                    {% if company.name %}
                        <input name=\"company_name\" type=\"text\" value=\"{{ company.name }}\">
                    {% else %}
                        <input name=\"company_name\" type=\"text\" value=\"{{ client.name }}\">
                        {% if client.name is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span>:</label>
                    {% if company.email %}
                        <input name=\"email\" type=\"text\" value=\"{{ company.email }}\">
                    {% else %}
                        <input name=\"email\" type=\"text\" value=\"{{ client.email }}\">
                        {% if client.email is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Контактные телефоны (с кодом города)<span>*</span>:</label>
                    {% if company.phone %}
                        <input name=\"phone\" type=\"text\" value=\"{{ company.phone }}\">
                    {% else %}
                        <input name=\"phone\" type=\"text\" value=\"{{ client.phone }}\">
                        {% if client.phone is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Дата доставки (когда Вам нужна поставка):</label>
                    <input name=\"delivery_date\" type=\"text\"  value=\"{{ client.delivery_date }}\">
                    <p></p>
                </div>
                <div class=\"withlogo-row\">
                    <label>Время работы Вашей компании:</label>
                    {% if company.work_time %}
                        <input name=\"work_time\" type=\"text\" value=\"{{ company.work_time }}\">
                    {% else %}
                        <input name=\"work_time\" type=\"text\" value=\"{{ client.work_time }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Индекс:</label>
                    {% if company.index %}
                        <input name=\"index\" type=\"text\" value=\"{{ company.index }}\">
                    {% else %}
                        <input name=\"index\" type=\"text\" value=\"{{ client.address_index }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Город:</label>
                    {% if company.city %}
                        <input name=\"city\" type=\"text\" value=\"{{ company.city }}\">
                    {% else %}
                        <input name=\"city\" type=\"text\" value=\"{{ client.city }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Улица, проспект и пр.:</label>
                    {% if company.street %}
                        <input name=\"street\" type=\"text\" value=\"{{ company.street }}\">
                    {% else %}
                        <input name=\"street\" type=\"text\" value=\"{{ client.street }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Номер дома:</label>
                    {% if company.house %}
                        <input name=\"house\" type=\"text\" value=\"{{ company.house }}\">
                    {% else %}
                        <input name=\"house\" type=\"text\" value=\"{{ client.house }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Корпус:</label>
                    {% if company.block %}
                        <input name=\"block\" type=\"text\" value=\"{{ company.block }}\">
                    {% else %}
                        <input name=\"block\" type=\"text\" value=\"{{ client.block }}\">
                        <p></p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Квартира, офис:</label>
                    {% if company.office %}
                        <input name=\"office\" type=\"text\" value=\"{{ company.office }}\">
                    {% else %}
                        <input name=\"office\" type=\"text\" value=\"{{ client.office }}\">
                        <p></p>
                    {% endif %}
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
