<?php

/* order/edit.twig */
class __TwigTemplate_37ebff6051e8c737c644b21f6d2c8948ef97e7886bb6edfad6a8abf5bf50160f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "order/edit.twig", 1);
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
                        <div class=\"ibox-title\">
                            <h5>Заказ № ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", array()), "html", null, true);
        echo "</h5>
                        </div>
                        <div class=\"ibox-content\">
                            <div>
                                <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить товар</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/order/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\">Товарная накладная</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/account/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\">Бухгалтерская накладная</a>
                                <a class=\"btn btn-sm btn-primary sticker-btn\" target=\"_blank\" data-order=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\" href=\"/document/sticker/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "/1\">Этикетки</a>
                                <input type=\"text\" class=\"form-control sticker-count\" style=\"width: 50px; display: inline-block\">
                            </div>
                            <br>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Название</th>
                                        <th>На складе</th>
                                        <th>Резерв</th>
                                        <th>В заказе</th>
                                        <th>Цена</th>
                                        <th>Скидка</th>
                                        <th>Итоговая цена</th>
                                        <th>Сумма</th>
                                        <th></th>
                                    </tr>
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "                                        <tr>
                                            <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                            <td>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "name", array());
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "countCurrent", array()), "value", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "countReserve", array()), "value", array()), "html", null, true);
            echo "</td>
                                            <td><input name=\"product[";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "][count]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "][price_one]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "getPrice", array()), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "][discount]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_discount", array()), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "][price_one_total]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_with_discount", array()), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "][price_all]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()), "html", null, true);
            echo "\"></td>
                                            <td><a class=\"btn btn-danger\" href=\"/order/edit/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", array()), "html", null, true);
            echo "/remove/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">X</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                        <tr>
                                            <td></td>
                                            <td><h3>Итого: ";
        // line 51
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
            <div class=\"row\">
                <div class=\"col-sm-4\">
";
        // line 76
        echo "                    <label for=\"\">Число мест</label>
                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "sticker", array()), "html", null, true);
        echo "\" name=\"sticker\">
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Статус склада</label>
                    <select name=\"status_warehouse\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите</option>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status_warehouse"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_warehouse", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </select>
";
        // line 98
        echo "                </div>
                <div class=\"col-sm-4\">
";
        // line 107
        echo "                    <label for=\"\">Комплектовщик</label>
                    <select name=\"packing\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 111
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packing", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                    </select>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Привязать к клиенту</label>
                    <input data-order=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" name=\"client_search\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client_search", array()), "html", null, true);
        echo "\" placeholder=\"поиск...\">
                    <ul class=\"float-list client\"></ul>
                </div>
                <div class=\"col-sm-4\">
                    <label>ФИО или название компании</label>
                    <input class=\"form-control\" name=\"company_name\" type=\"text\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "name", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>E-mail</label>
                    <input class=\"form-control\" name=\"email\" type=\"text\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "email", array()), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Контактные телефоны (с кодом города)</label>
                    <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "phone", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Дата доставки (когда Вам нужна поставка)</label>
                    <input class=\"form-control\" name=\"delivery_date\" type=\"text\"  value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "delivery_date", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Время работы Вашей компании</label>
                    <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "work_time", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Индекс</label>
                    <input class=\"form-control\" name=\"index\" type=\"text\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "address_index", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Город</label>
                    <input class=\"form-control\" name=\"city\" type=\"text\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "city", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Улица, проспект и пр</label>
                    <input class=\"form-control\" name=\"street\" type=\"text\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "street", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Номер дома</label>
                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "house", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Корпус</label>
                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "block", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Квартира, офис</label>
                    <input class=\"form-control\" name=\"office\" type=\"text\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "office", array()), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
";
        // line 193
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br>
                    <button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$('.sticker-count').on('input', e => {

            let a = \$('.sticker-btn');

            a.attr('href', `/document/sticker/\${a.data('order')}/\${parseInt(\$(e.target).val())}`);
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "order/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 193,  326 => 172,  319 => 168,  312 => 164,  303 => 158,  296 => 154,  289 => 150,  280 => 144,  273 => 140,  266 => 136,  256 => 129,  249 => 125,  239 => 120,  230 => 113,  215 => 111,  211 => 110,  206 => 107,  202 => 98,  199 => 86,  184 => 84,  180 => 83,  171 => 77,  168 => 76,  154 => 51,  150 => 49,  139 => 46,  133 => 45,  127 => 44,  121 => 43,  115 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  90 => 36,  86 => 35,  62 => 16,  58 => 15,  54 => 14,  46 => 9,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
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
                        <div class=\"ibox-title\">
                            <h5>Заказ № {{ order.number }}</h5>
                        </div>
                        <div class=\"ibox-content\">
                            <div>
                                <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить товар</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/order/{{ order.id }}\">Товарная накладная</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/account/{{ order.id }}\">Бухгалтерская накладная</a>
                                <a class=\"btn btn-sm btn-primary sticker-btn\" target=\"_blank\" data-order=\"{{ order.id }}\" href=\"/document/sticker/{{ order.id }}/1\">Этикетки</a>
                                <input type=\"text\" class=\"form-control sticker-count\" style=\"width: 50px; display: inline-block\">
                            </div>
                            <br>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Название</th>
                                        <th>На складе</th>
                                        <th>Резерв</th>
                                        <th>В заказе</th>
                                        <th>Цена</th>
                                        <th>Скидка</th>
                                        <th>Итоговая цена</th>
                                        <th>Сумма</th>
                                        <th></th>
                                    </tr>
                                    {% for i in items %}
                                        <tr>
                                            <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.getProduct.image }}\" alt=\"\"></td>
                                            <td>{{ i.getProduct.name | raw }}</td>
                                            <td>{{ i.getProduct.countCurrent.value }}</td>
                                            <td>{{ i.getProduct.countReserve.value }}</td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][count]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.product_count }}\"></td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][price_one]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.getProduct.getPrice }}\"></td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][discount]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.price_discount }}\"></td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][price_one_total]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.price_with_discount }}\"></td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][price_all]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.price_row_total }}\"></td>
                                            <td><a class=\"btn btn-danger\" href=\"/order/edit/{{ order.number }}/remove/{{ i.id }}\">X</a></td>
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
            <div class=\"row\">
                <div class=\"col-sm-4\">
{#                    <label for=\"\">Отправить транспортной компанией</label>#}
{#                    <select name=\"delivery_company\" id=\"\" class=\"form-control\">#}
{#                            <option value=\"0\">Выберите из списка</option>#}
{#                        {% for i in delivery_company %}#}
{#                            <option {% if i.id == order.delivery_company %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>#}
{#                        {% endfor %}#}
{#                    </select>#}
{#                    <label for=\"\">Самовывоз</label>#}
{#                    <select name=\"delivery_self\" id=\"\" class=\"form-control\">#}
{#                            <option value=\"0\">Выберите из списка</option>#}
{#                        {% for i in delivery_self %}#}
{#                            <option {% if i.id == order.delivery_self %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>#}
{#                        {% endfor %}#}
{#                    </select>#}
                    <label for=\"\">Число мест</label>
                    <input type=\"text\" class=\"form-control\" value=\"{{ order.getDetail.sticker }}\" name=\"sticker\">
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Статус склада</label>
                    <select name=\"status_warehouse\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите</option>
                        {% for i in status_warehouse %}
                            <option {% if i.id == order.status_warehouse %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
{#                    {% if global.user.isManager %}#}
{#                    <label for=\"\">Статус офиса</label>#}
{#                    <select name=\"status_office\" id=\"\" class=\"form-control\">#}
{#                        <option value=\"0\">Выберите</option>#}
{#                        {% for i in status_office %}#}
{#                            <option {% if i.id == order.status %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>#}
{#                        {% endfor %}#}
{#                    </select>#}
{#                    {% else %}#}
{#                        <input type=\"hidden\" name=\"status_office\" value=\"{{ order.status }}\">#}
{#                    {% endif %}#}
                </div>
                <div class=\"col-sm-4\">
{#                    <label for=\"\">Менеджер</label>#}
{#                    <select name=\"manager\" id=\"\" class=\"form-control\">#}
{#                        <option value=\"0\">Выберите из списка</option>#}
{#                        {% for i in users %}#}
{#                            <option {% if i.id == order.manager %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>#}
{#                        {% endfor %}#}
{#                    </select>#}
                    <label for=\"\">Комплектовщик</label>
                    <select name=\"packing\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        {% for i in users %}
                            <option {% if i.id == order.packing %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Привязать к клиенту</label>
                    <input data-order=\"{{ order.id }}\" class=\"form-control\" name=\"client_search\" type=\"text\" value=\"{{ order.client_search }}\" placeholder=\"поиск...\">
                    <ul class=\"float-list client\"></ul>
                </div>
                <div class=\"col-sm-4\">
                    <label>ФИО или название компании</label>
                    <input class=\"form-control\" name=\"company_name\" type=\"text\" value=\"{{ order.getDetail.name }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>E-mail</label>
                    <input class=\"form-control\" name=\"email\" type=\"text\" value=\"{{ order.getDetail.email }}\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Контактные телефоны (с кодом города)</label>
                    <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"{{ order.getDetail.phone }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Дата доставки (когда Вам нужна поставка)</label>
                    <input class=\"form-control\" name=\"delivery_date\" type=\"text\"  value=\"{{ order.getDetail.delivery_date }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Время работы Вашей компании</label>
                    <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"{{ order.getDetail.work_time }}\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Индекс</label>
                    <input class=\"form-control\" name=\"index\" type=\"text\" value=\"{{ order.getDetail.address_index }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Город</label>
                    <input class=\"form-control\" name=\"city\" type=\"text\" value=\"{{ order.getDetail.city }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Улица, проспект и пр</label>
                    <input class=\"form-control\" name=\"street\" type=\"text\" value=\"{{ order.getDetail.street }}\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <label>Номер дома</label>
                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"{{ order.getDetail.house }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Корпус</label>
                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"{{ order.getDetail.block }}\">
                </div>
                <div class=\"col-sm-4\">
                    <label>Квартира, офис</label>
                    <input class=\"form-control\" name=\"office\" type=\"text\" value=\"{{ order.getDetail.office }}\">
                </div>
            </div>

            <div class=\"row\">
{#                <div class=\"col-sm-6\">#}
{#                </div>#}
{#                <div class=\"col-sm-6\">#}
{#                    <label>Способ оплаты:</label>#}
{#                    <br>#}
{#                    <label><b>На расчетный счет компании</b></label>#}
{#                    <br>#}
{#                    <input {% if order.getDetail.payment_type == 'online' %}checked{% endif %} class=\"\" name=\"payment_type\" type=\"radio\" value=\"online\">#}
{#                    <br>#}
{#                    <label><b>Наличными курьеру</b></label>#}
{#                    <br>#}
{#                    <input {% if order.getDetail.payment_type == 'cash' %}checked{% endif %} class=\"\" name=\"payment_type\" type=\"radio\" value=\"cash\">#}
{#                    <br>#}
{#                    <label>Дополнительно:</label>#}
{#                    <textarea class=\"form-control\" name=\"comment\" id=\"\" cols=\"10\" rows=\"5\" >{{ order.getDetail.advanced }}</textarea>#}
{#                </div>#}
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br>
                    <button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$('.sticker-count').on('input', e => {

            let a = \$('.sticker-btn');

            a.attr('href', `/document/sticker/\${a.data('order')}/\${parseInt(\$(e.target).val())}`);
        })
    </script>
{% endblock %}", "order/edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/order/edit.twig");
    }
}
