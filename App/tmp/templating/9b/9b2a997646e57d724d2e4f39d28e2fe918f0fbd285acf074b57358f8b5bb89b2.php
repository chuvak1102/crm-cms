<?php

/* order/index.twig */
class __TwigTemplate_2754e6312e06cdc9725e73d94dd63a7aedba034531cfb3ada504fe919f193d84 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "order/index.twig", 1);
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
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Текущая дата -  ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d.m.Y"), "html", null, true);
        echo "</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/order\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "from", array()), "html", null, true);
        echo "\" name=\"from\" type=\"date\" class=\"form-control\" placeholder=\"С\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "to", array()), "html", null, true);
        echo "\" name=\"to\" type=\"date\" class=\"form-control\" placeholder=\"По\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "number", array()), "html", null, true);
        echo "\" name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Номер\"></div>
                            <div class=\"form-group\" style=\"width: 15%\">
                                <select name=\"status\" class=\"form-control\" style=\"width: 100%\">
                                    <option value=\"0\">Статус</option>
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "status", array()))) {
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
        // line 26
        echo "                                </select>
                            </div>
                            <div class=\"form-group\" style=\"width: 20%\"><input value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "client", array()), "html", null, true);
        echo "\" name=\"client\" type=\"text\" class=\"form-control\" placeholder=\"Клиент\"></div>
                            <div class=\"form-group\" style=\"width: 8%\"><button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button></div>
                            <div class=\"form-group\" style=\"width: 8%\"><a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/order\"><strong>Сбросить</strong></a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isManager", array())) {
            // line 38
            echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-content\">
                            <span class=\"\">Заказов сегодня &nbsp;<label class=\"label label-success\">";
            // line 42
            echo twig_escape_filter($this->env, ($context["order_today"] ?? null), "html", null, true);
            echo " шт.</label></span>
                            &nbsp;
                            <span class=\"\">Сумма заказов сегодня &nbsp;<label class=\"label label-success\">";
            // line 44
            echo twig_escape_filter($this->env, ($context["sum_today"] ?? null), "html", null, true);
            echo " руб.</label></span>
                            &nbsp;
                            <span class=\"\">Сумма заказов месяц &nbsp;<label class=\"label label-success\">";
            // line 46
            echo twig_escape_filter($this->env, ($context["sum_month"] ?? null), "html", null, true);
            echo " руб.</label></span>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 52
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <div class=\"form-inline\">
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=new\">Новые</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=out\">Просроченные</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=tod\">За сегодня</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=tom\">Доставка завтра</a>
                                ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isManager", array())) {
            // line 64
            echo "                                    <div class=\"form-group\" style=\"margin-left: 20px\">
                                        <select name=\"warehouse\" class=\"form-control\">
                                            <option value=\"0\">Статус склада</option>
                                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 68
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                        </select>
                                    </div>
                                    <a id=\"status\" style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"#\">Изменить</a>
                                    <div class=\"form-group\" style=\"margin-left: 20px\">
                                        <select name=\"driver\" class=\"form-control\">
                                            <option value=\"0\">Водитель</option>
                                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["drivers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 77
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
                                        </select>
                                    </div>
                                    <a id=\"driver\" style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"#\">Назначить</a>
                                ";
        }
        // line 84
        echo "                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order/today\">Товары на сегодня</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order/tomorrow\">Товары на завтра</a>
                            </div>

                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 5%\">
                                        <input class=\"checkbox-all\" type=\"checkbox\" value=\"0\">
                                    </th>
                                    <th style=\"width: 10%\">Дата заказа</th>
                                    <th style=\"width: 5%\">Доставка</th>
                                    <th style=\"width: 5%\">Номер</th>
                                    ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isManager", array())) {
            // line 101
            echo "                                    <th style=\"width: 10%\">Статус заказа</th>
                                    ";
        }
        // line 103
        echo "                                    <th style=\"width: 10%\">Статус склада</th>
                                    <th style=\"width: 10%\">Итого</th>
                                    <th style=\"width: 10%\">Клиент</th>
                                    <th>Контакт</th>
                                </tr>
                                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "                                    <tr>
                                        <td><input class=\"checkbox-check\" type=\"checkbox\" data-value=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\"></td>
                                        <td><a href=\"/order/edit/";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "created", array()), "d.m.Y H:i"), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"/order/edit/";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "deliveryDate", array()), "d.m.Y"), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "number", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isManager", array())) {
                // line 115
                echo "                                        <td><b class=\"label label-success\" style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "color", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatus", array()), "name", array()), "html", null, true);
                echo "</b></td>
                                        ";
            }
            // line 117
            echo "                                        <td>";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getDetail", array()), "driver", array())) {
                echo "<i class=\"fa fa-car\" style=\"margin-right: 15px\"></i>";
            }
            echo "<b class=\"label label-success\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatusWarehouse", array()), "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getStatusWarehouse", array()), "name", array()), "html", null, true);
            echo "</b></td>
                                        <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getTotalPrice", array()), 2, ".", " "), "html", null, true);
            echo "</td>
                                        ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, $context["i"], "user_id", array())) {
                // line 120
                echo "                                            <td><a href=\"/client/cabinet/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "user_id", array()), "html", null, true);
                echo "\"><b class=\"label label-success\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getUser", array()), "getCompany", array()), "name", array()), "html", null, true);
                echo "</b></a></td>
                                        ";
            } else {
                // line 122
                echo "                                            <td><a href=\"/client/create\"><b class=\"label label-danger\" >Создать</b></a></td>
                                        ";
            }
            // line 124
            echo "                                        <td style=\"width: 15%\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getClient", array()), "html", null, true);
            echo "</td>
";
            // line 128
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row pagination\">
            ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", array()), "html", null, true);
        echo "
        </div>
    </div>
    <script>

        \$('#status').click(e => {

            let ids = '';

            \$('.checkbox-check').map((i, el) => {
                ids += (el.checked ? `&id[]=\${\$(el).data('value')}` : '')
            });

            \$.ajax({
                url: `/order/warehouse?\${ids}`,
                data: {
                    warehouse: \$('[name=warehouse]').val()
                },
                success: s => {
                    location.reload();
                }
            });

        });
        \$('#driver').click(e => {
            let ids = '';

            \$('.checkbox-check').map((i, el) => {
                ids += (el.checked ? `&id[]=\${\$(el).data('value')}` : '')
            });

            \$.ajax({
                url: `/order/driver?\${ids}`,
                data: {
                    driver: \$('[name=driver]').val()
                },
                success: s => {
                    location.reload();
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 138,  305 => 130,  298 => 128,  293 => 124,  289 => 122,  281 => 120,  279 => 119,  275 => 118,  264 => 117,  256 => 115,  254 => 114,  250 => 113,  244 => 112,  238 => 111,  234 => 110,  231 => 109,  227 => 108,  220 => 103,  216 => 101,  214 => 100,  196 => 84,  189 => 79,  178 => 77,  174 => 76,  166 => 70,  155 => 68,  151 => 67,  146 => 64,  144 => 63,  131 => 52,  122 => 46,  117 => 44,  112 => 42,  106 => 38,  104 => 37,  92 => 28,  88 => 26,  73 => 24,  69 => 23,  62 => 19,  58 => 18,  54 => 17,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Текущая дата -  {{ 'now' | date('d.m.Y') }}</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/order\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.from }}\" name=\"from\" type=\"date\" class=\"form-control\" placeholder=\"С\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.to }}\" name=\"to\" type=\"date\" class=\"form-control\" placeholder=\"По\"></div>
                            <div class=\"form-group\" style=\"width: 15%\"><input value=\"{{ filter.number }}\" name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Номер\"></div>
                            <div class=\"form-group\" style=\"width: 15%\">
                                <select name=\"status\" class=\"form-control\" style=\"width: 100%\">
                                    <option value=\"0\">Статус</option>
                                    {% for i in filter_status %}
                                        <option {% if i.id == filter.status %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\" style=\"width: 20%\"><input value=\"{{ filter.client }}\" name=\"client\" type=\"text\" class=\"form-control\" placeholder=\"Клиент\"></div>
                            <div class=\"form-group\" style=\"width: 8%\"><button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\"><strong>Фильтровать</strong></button></div>
                            <div class=\"form-group\" style=\"width: 8%\"><a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" href=\"/order\"><strong>Сбросить</strong></a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {% if global.user.isManager %}
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-content\">
                            <span class=\"\">Заказов сегодня &nbsp;<label class=\"label label-success\">{{ order_today }} шт.</label></span>
                            &nbsp;
                            <span class=\"\">Сумма заказов сегодня &nbsp;<label class=\"label label-success\">{{ sum_today }} руб.</label></span>
                            &nbsp;
                            <span class=\"\">Сумма заказов месяц &nbsp;<label class=\"label label-success\">{{ sum_month }} руб.</label></span>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <div class=\"form-inline\">
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=new\">Новые</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=out\">Просроченные</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=tod\">За сегодня</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order?show=tom\">Доставка завтра</a>
                                {% if global.user.isManager %}
                                    <div class=\"form-group\" style=\"margin-left: 20px\">
                                        <select name=\"warehouse\" class=\"form-control\">
                                            <option value=\"0\">Статус склада</option>
                                            {% for i in statuses %}
                                                <option value=\"{{ i.id }}\">{{ i.name }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <a id=\"status\" style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"#\">Изменить</a>
                                    <div class=\"form-group\" style=\"margin-left: 20px\">
                                        <select name=\"driver\" class=\"form-control\">
                                            <option value=\"0\">Водитель</option>
                                            {% for i in drivers %}
                                                <option value=\"{{ i.id }}\">{{ i.name }}</option>
                                            {% endfor %}

                                        </select>
                                    </div>
                                    <a id=\"driver\" style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"#\">Назначить</a>
                                {% endif %}
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order/today\">Товары на сегодня</a>
                                <a style=\"display: inline-block\" class=\"btn btn-sm btn-primary\" href=\"/order/tomorrow\">Товары на завтра</a>
                            </div>

                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 5%\">
                                        <input class=\"checkbox-all\" type=\"checkbox\" value=\"0\">
                                    </th>
                                    <th style=\"width: 10%\">Дата заказа</th>
                                    <th style=\"width: 5%\">Доставка</th>
                                    <th style=\"width: 5%\">Номер</th>
                                    {% if global.user.isManager %}
                                    <th style=\"width: 10%\">Статус заказа</th>
                                    {% endif %}
                                    <th style=\"width: 10%\">Статус склада</th>
                                    <th style=\"width: 10%\">Итого</th>
                                    <th style=\"width: 10%\">Клиент</th>
                                    <th>Контакт</th>
                                </tr>
                                {% for i in orders %}
                                    <tr>
                                        <td><input class=\"checkbox-check\" type=\"checkbox\" data-value=\"{{ i.id }}\"></td>
                                        <td><a href=\"/order/edit/{{ i.id }}\">{{ i.created | date('d.m.Y H:i') }}</a></td>
                                        <td><a href=\"/order/edit/{{ i.id }}\">{{ i.deliveryDate | date('d.m.Y') }}</a></td>
                                        <td>{{ i.number }}</td>
                                        {% if global.user.isManager %}
                                        <td><b class=\"label label-success\" style=\"background-color: {{ i.getStatus.color }}\">{{ i.getStatus.name }}</b></td>
                                        {% endif %}
                                        <td>{% if i.getDetail.driver %}<i class=\"fa fa-car\" style=\"margin-right: 15px\"></i>{% endif %}<b class=\"label label-success\" style=\"background-color: {{ i.getStatusWarehouse.color }}\">{{ i.getStatusWarehouse.name }}</b></td>
                                        <td>{{ i.getTotalPrice | number_format(2, '.', ' ') }}</td>
                                        {% if i.user_id %}
                                            <td><a href=\"/client/cabinet/{{ i.user_id }}\"><b class=\"label label-success\" >{{ i.getUser.getCompany.name }}</b></a></td>
                                        {% else %}
                                            <td><a href=\"/client/create\"><b class=\"label label-danger\" >Создать</b></a></td>
                                        {% endif %}
                                        <td style=\"width: 15%\">{{ i.getClient }}</td>
{#                                        <td></td>#}
{#                                        <td></td>#}
{#                                        <td></td>#}
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row pagination\">
            {{ pagination.render }}
        </div>
    </div>
    <script>

        \$('#status').click(e => {

            let ids = '';

            \$('.checkbox-check').map((i, el) => {
                ids += (el.checked ? `&id[]=\${\$(el).data('value')}` : '')
            });

            \$.ajax({
                url: `/order/warehouse?\${ids}`,
                data: {
                    warehouse: \$('[name=warehouse]').val()
                },
                success: s => {
                    location.reload();
                }
            });

        });
        \$('#driver').click(e => {
            let ids = '';

            \$('.checkbox-check').map((i, el) => {
                ids += (el.checked ? `&id[]=\${\$(el).data('value')}` : '')
            });

            \$.ajax({
                url: `/order/driver?\${ids}`,
                data: {
                    driver: \$('[name=driver]').val()
                },
                success: s => {
                    location.reload();
                }
            });
        });
    </script>
{% endblock %}", "order/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/order/index.twig");
    }
}
