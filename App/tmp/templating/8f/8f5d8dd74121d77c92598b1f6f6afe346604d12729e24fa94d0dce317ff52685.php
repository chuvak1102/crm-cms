<?php

/* index.twig */
class __TwigTemplate_c132101c27e8b9b70796dfdade6e830457661341765a684849a265b4f0349dc1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tabs-container\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-1\">Заказы</a></li>
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-2\">Карточка клиента / статистика</a></li>
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-3\">Список товаров</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div id=\"tab-1\" class=\"tab-pane active\">
                                <div class=\"panel-body\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th style=\"border-top: none\">Дата Заказа</th>
                                            <th style=\"border-top: none\">Дата Доставки</th>
                                            <th style=\"border-top: none\">Статус офис</th>
                                            <th style=\"border-top : none\">Статус склад</th>
                                            <th style=\"border-top: none\">Адрес доставки</th>
                                            <th style=\"border-top: none\">Сумма заказа</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                                            <tr>
                                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "created", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["i"], "shipped", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "shipped", array()), "d.m.Y"), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</td>
                                                <td style=\"color: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "name", array()), "html", null, true);
            echo "</td>
                                                <td style=\"color: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatusWarehouse", array()), "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatusWarehouse", array()), "name", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getAddress", array()), "html", null, true);
            echo "</td>
                                                <td style=\"color: #0f4bac\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getTotalPrice", array()), "html", null, true);
            echo " руб.</td>
                                                <td><a class=\"btn btn-primary\" target=\"_blank\" href=\"http://";
            // line 37
            echo twig_escape_filter($this->env, ($context["site_domain"] ?? null), "html", null, true);
            echo "/reorder/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Повторить заказ</a></td>
                                                <td><a class=\"btn btn-primary\" href=\"/order/show/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Просмотреть заказ</a></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id=\"tab-2\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <div class=\"col-sm-3\">
                                        <p>Реквизиты</p>
                                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["company"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "                                            <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</div>
                                            <div>Расчетный счет - ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "account_r", array()), "html", null, true);
            echo "</div>
                                            <div>Коррсчет - ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "account_k", array()), "html", null, true);
            echo "</div>
                                            <div>ИНН - ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "inn", array()), "html", null, true);
            echo "</div>
                                            <div>ОГРН - ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ogrn", array()), "html", null, true);
            echo "</div>
                                            <div>БИК - ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "bik", array()), "html", null, true);
            echo "</div>
                                            <div>Банк - ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "bank", array()), "html", null, true);
            echo "</div>
                                            <div>Ген. Директор - ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "director", array()), "html", null, true);
            echo "</div>
                                            <br>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Договор</p>
                                        <div class=\"contract contract-red\"><b>Без договора</b></div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Адреса / Контакты</p>
                                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["address"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "                                            <div>Адрес - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "address", array()), "html", null, true);
            echo "</div>
                                            <div>Почта - ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", array()), "html", null, true);
            echo "</div>
                                            <div>Телефон - ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "phone", array()), "html", null, true);
            echo "</div>
                                            <br>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Статистика</p>
                                            <div>Кол-во заказов в месяц - <span style=\"color: #0d8ddb\">";
        // line 76
        echo twig_escape_filter($this->env, ($context["order_per_month"] ?? null), "html", null, true);
        echo "</span></div>
                                            <div>Сумма в месяц - <span style=\"color: #0d8ddb\">";
        // line 77
        echo twig_escape_filter($this->env, ($context["money_per_month"] ?? null), "html", null, true);
        echo " руб.</span></div>
                                            <div>Сумма скидки в месяц - <span style=\"color: #0d8ddb\">";
        // line 78
        echo twig_escape_filter($this->env, ($context["discount_per_month"] ?? null), "html", null, true);
        echo " руб.</span></div>
                                            <div>Товаров - <span style=\"color: #0d8ddb\">";
        // line 79
        echo twig_escape_filter($this->env, ($context["items_per_month"] ?? null), "html", null, true);
        echo "</span></div>
                                            <div>Сумма заказов год - <span style=\"color: #0d8ddb\">";
        // line 80
        echo twig_escape_filter($this->env, ($context["money_per_year"] ?? null), "html", null, true);
        echo " руб.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab-3\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <form action=\"/order\" method=\"post\">
                                        <table class=\"table\" style=\"width: 100%\">
                                            <tbody>
                                            <tr>
                                                <th style=\"border-top: none; width: 25px\"></th>
                                                <th style=\"border-top: none\"></th>
                                                <th style=\"border-top: none\">Наименование товара</th>
                                                <th style=\"border-top: none\">Статистика в месяц</th>
                                                <th style=\"border-top: none\">Цена</th>
                                                <th style=\"border-top: none\">Скидка</th>
                                                <th style=\"border-top: none\">Резерв</th>
                                                <th style=\"border-top: none\">Заказать</th>
                                            </tr>
                                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 100
            echo "                                                <tr>
                                                    <td style=\"width: 25px\"><input name=\"order[";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "][checked]\" value=\"1\" type=\"checkbox\" class=\"form-control small\"></td>
                                                    <td><img style=\"max-width: 40px\" src=\"/files/mini/";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                                    <td>";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</td>
                                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ordersPerMonth", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPrice", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDiscount", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "reserved", array()), "html", null, true);
            echo "</td>
                                                    <td><input style=\"width: 75px\" name=\"order[";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "][count]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                                <tr>
                                                    <td>
                                                        <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"1\">Заказать</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-12\">
                    <div class=\"ibox\">

                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 111,  277 => 108,  273 => 107,  269 => 106,  265 => 105,  261 => 104,  257 => 103,  253 => 102,  249 => 101,  246 => 100,  242 => 99,  220 => 80,  216 => 79,  212 => 78,  208 => 77,  204 => 76,  199 => 73,  190 => 70,  186 => 69,  181 => 68,  177 => 67,  168 => 60,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  130 => 50,  126 => 49,  116 => 41,  107 => 38,  101 => 37,  97 => 36,  93 => 35,  87 => 34,  81 => 33,  73 => 32,  69 => 31,  66 => 30,  62 => 29,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tabs-container\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-1\">Заказы</a></li>
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-2\">Карточка клиента / статистика</a></li>
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-3\">Список товаров</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div id=\"tab-1\" class=\"tab-pane active\">
                                <div class=\"panel-body\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th style=\"border-top: none\">Дата Заказа</th>
                                            <th style=\"border-top: none\">Дата Доставки</th>
                                            <th style=\"border-top: none\">Статус офис</th>
                                            <th style=\"border-top : none\">Статус склад</th>
                                            <th style=\"border-top: none\">Адрес доставки</th>
                                            <th style=\"border-top: none\">Сумма заказа</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        {% for i in orders %}
                                            <tr>
                                                <td>{{ i.created | date('d.m.Y') }}</td>
                                                <td>{% if i.shipped %}{{ i.shipped | date('d.m.Y') }}{% else %} - {% endif %}</td>
                                                <td style=\"color: {{ i.getStatus.color }}\">{{ i.getStatus.name }}</td>
                                                <td style=\"color: {{ i.getStatusWarehouse.color }}\">{{ i.getStatusWarehouse.name }}</td>
                                                <td>{{ i.getAddress }}</td>
                                                <td style=\"color: #0f4bac\">{{ i.getTotalPrice }} руб.</td>
                                                <td><a class=\"btn btn-primary\" target=\"_blank\" href=\"http://{{ site_domain }}/reorder/{{ i.id }}\">Повторить заказ</a></td>
                                                <td><a class=\"btn btn-primary\" href=\"/order/show/{{ i.id }}\">Просмотреть заказ</a></td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id=\"tab-2\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <div class=\"col-sm-3\">
                                        <p>Реквизиты</p>
                                        {% for i in company %}
                                            <div>{{ i.name }}</div>
                                            <div>Расчетный счет - {{ i.account_r }}</div>
                                            <div>Коррсчет - {{ i.account_k }}</div>
                                            <div>ИНН - {{ i.inn }}</div>
                                            <div>ОГРН - {{ i.ogrn }}</div>
                                            <div>БИК - {{ i.bik }}</div>
                                            <div>Банк - {{ i.bank }}</div>
                                            <div>Ген. Директор - {{ i.director }}</div>
                                            <br>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Договор</p>
                                        <div class=\"contract contract-red\"><b>Без договора</b></div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Адреса / Контакты</p>
                                        {% for i in address %}
                                            <div>Адрес - {{ i.address }}</div>
                                            <div>Почта - {{ i.email }}</div>
                                            <div>Телефон - {{ i.phone }}</div>
                                            <br>
                                        {% endfor %}
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <p>Статистика</p>
                                            <div>Кол-во заказов в месяц - <span style=\"color: #0d8ddb\">{{ order_per_month }}</span></div>
                                            <div>Сумма в месяц - <span style=\"color: #0d8ddb\">{{ money_per_month }} руб.</span></div>
                                            <div>Сумма скидки в месяц - <span style=\"color: #0d8ddb\">{{ discount_per_month }} руб.</span></div>
                                            <div>Товаров - <span style=\"color: #0d8ddb\">{{ items_per_month }}</span></div>
                                            <div>Сумма заказов год - <span style=\"color: #0d8ddb\">{{ money_per_year }} руб.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab-3\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <form action=\"/order\" method=\"post\">
                                        <table class=\"table\" style=\"width: 100%\">
                                            <tbody>
                                            <tr>
                                                <th style=\"border-top: none; width: 25px\"></th>
                                                <th style=\"border-top: none\"></th>
                                                <th style=\"border-top: none\">Наименование товара</th>
                                                <th style=\"border-top: none\">Статистика в месяц</th>
                                                <th style=\"border-top: none\">Цена</th>
                                                <th style=\"border-top: none\">Скидка</th>
                                                <th style=\"border-top: none\">Резерв</th>
                                                <th style=\"border-top: none\">Заказать</th>
                                            </tr>
                                            {% for i in product %}
                                                <tr>
                                                    <td style=\"width: 25px\"><input name=\"order[{{ i.id }}][checked]\" value=\"1\" type=\"checkbox\" class=\"form-control small\"></td>
                                                    <td><img style=\"max-width: 40px\" src=\"/files/mini/{{ i.image }}\" alt=\"\"></td>
                                                    <td>{{ i.name | raw }}</td>
                                                    <td>{{ i.ordersPerMonth }}</td>
                                                    <td>{{ i.getPrice }}</td>
                                                    <td>{{ i.getDiscount }}</td>
                                                    <td>{{ i.reserved }}</td>
                                                    <td><input style=\"width: 75px\" name=\"order[{{ i.id }}][count]\" value=\"{{ i.pack_count }}\" type=\"text\" class=\"form-control\"></td>
                                                </tr>
                                            {% endfor %}
                                                <tr>
                                                    <td>
                                                        <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"1\">Заказать</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-12\">
                    <div class=\"ibox\">

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "index.twig", "/var/www/u0742521/data/www/eco/App/Client/View/index.twig");
    }
}
