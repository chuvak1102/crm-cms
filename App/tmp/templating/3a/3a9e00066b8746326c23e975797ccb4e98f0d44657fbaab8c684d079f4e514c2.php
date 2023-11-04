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

/* order/edit.twig */
class __TwigTemplate_2809a05604867f4280a10cdcb750d445cef1fd707ea0423a6b9b3030e3322de3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "order/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <form action=\"/order/edit/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"ibox\">
                        <div class=\"ibox-title\">
                            <h5>Заказ № ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 9), "html", null, true);
        echo "</h5>
                        </div>
                        <div class=\"ibox-content\">
                            <div>
                                <a class=\"btn btn-sm btn-primary\" href=\"#\">Добавить товар</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/order/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">Товарная накладная</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/account/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">Бухгалтерская накладная</a>
                                <a class=\"btn btn-sm btn-primary\" href=\"#\">Этикетки =></a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "/1\">1</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "/2\">2</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "/3\">3</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "/4\">4</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "/5\">5</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "/6\">6</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "/7\">7</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "/8\">8</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "/9\">9</a>
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                                        <tr>
                                            <td><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 45), "image", [], "any", false, false, false, 45), "html", null, true);
            echo "\" alt=\"\"></td>
                                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 47), "countCurrent", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 48), "countReserve", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                            <td><input name=\"product[";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "][count]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "][price_one]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_one", [], "any", false, false, false, 50), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "][discount]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_discount", [], "any", false, false, false, 51), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "][price_one_total]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_with_discount", [], "any", false, false, false, 52), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"product[";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
            echo "][price_all]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", [], "any", false, false, false, 53), "html", null, true);
            echo "\"></td>
                                            <td><a class=\"btn btn-danger\" href=\"/order/edit/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 54), "html", null, true);
            echo "/remove/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">X</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                        <tr>
                                            <td></td>
                                            <td><h3>Итого: ";
        // line 59
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
                    <label for=\"\">Отправить транспортной компанией</label>
                    <select name=\"delivery_company\" id=\"\" class=\"form-control\">
                            <option value=\"0\">Выберите из списка</option>
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["delivery_company"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 74
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 74) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_company", [], "any", false, false, false, 74))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </select>
                    <label for=\"\">Самовывоз</label>
                    <select name=\"delivery_self\" id=\"\" class=\"form-control\">
                            <option value=\"0\">Выберите из списка</option>
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["delivery_self"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 81
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 81) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_self", [], "any", false, false, false, 81))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </select>
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Статус склада</label>
                    <select name=\"status_warehouse\" id=\"\" class=\"form-control\">
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status_warehouse"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 89
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 89) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_warehouse", [], "any", false, false, false, 89))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </select>
                    <label for=\"\">Статус офиса</label>
                    <select name=\"status_office\" id=\"\" class=\"form-control\">
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status_office"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 95
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 95))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    </select>
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Менеджер</label>
                    <select name=\"manager\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 104
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 104) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manager", [], "any", false, false, false, 104))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </select>
                    <label for=\"\">Комплектовщик</label>
                    <select name=\"packing\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 111
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 111) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packing", [], "any", false, false, false, 111))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 111), "html", null, true);
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
            <br><br>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <label>ФИО или название компании</label>
                    <input class=\"form-control\" name=\"company_name\" type=\"text\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
        echo "\">
                    <label>E-mail</label>
                    <input class=\"form-control\" name=\"email\" type=\"text\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 122), "email", [], "any", false, false, false, 122), "html", null, true);
        echo "\">
                    <label>Контактные телефоны (с кодом города)</label>
                    <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 124), "phone", [], "any", false, false, false, 124), "html", null, true);
        echo "\">
                    <label>Дата доставки (когда Вам нужна поставка)</label>
                    <input class=\"form-control\" name=\"delivery_date\" type=\"text\"  value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 126), "delivery_date", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                    <label>Время работы Вашей компании</label>
                    <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 128), "work_time", [], "any", false, false, false, 128), "html", null, true);
        echo "\">
                    <label>Индекс</label>
                    <input class=\"form-control\" name=\"index\" type=\"text\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 130), "address_index", [], "any", false, false, false, 130), "html", null, true);
        echo "\">
                    <label>Город</label>
                    <input class=\"form-control\" name=\"city\" type=\"text\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 132), "city", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                    <label>Улица, проспект и пр</label>
                    <input class=\"form-control\" name=\"street\" type=\"text\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 134), "street", [], "any", false, false, false, 134), "html", null, true);
        echo "\">
                    <label>Номер дома</label>
                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 136), "house", [], "any", false, false, false, 136), "html", null, true);
        echo "\">
                    <label>Корпус</label>
                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 138), "block", [], "any", false, false, false, 138), "html", null, true);
        echo "\">
                    <label>Квартира, офис</label>
                    <input class=\"form-control\" name=\"office\" type=\"text\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 140), "office", [], "any", false, false, false, 140), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-6\">
                    <label>Способ оплаты:</label>
                    <br>
                    <label><b>На расчетный счет компании</b></label>
                    <br>
                    <input ";
        // line 147
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 147), "payment_type", [], "any", false, false, false, 147) == "online")) {
            echo "checked";
        }
        echo " class=\"\" name=\"payment_type\" type=\"radio\" value=\"online\">
                    <br>
                    <label><b>Наличными курьеру</b></label>
                    <br>
                    <input ";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 151), "payment_type", [], "any", false, false, false, 151) == "cash")) {
            echo "checked";
        }
        echo " class=\"\" name=\"payment_type\" type=\"radio\" value=\"cash\">
                    <br>
                    <label>Дополнительно:</label>
                    <textarea class=\"form-control\" name=\"comment\" id=\"\" cols=\"10\" rows=\"5\" >";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 154), "advanced", [], "any", false, false, false, 154), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br>
                    <button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
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
        return array (  448 => 154,  440 => 151,  431 => 147,  421 => 140,  416 => 138,  411 => 136,  406 => 134,  401 => 132,  396 => 130,  391 => 128,  386 => 126,  381 => 124,  376 => 122,  371 => 120,  362 => 113,  347 => 111,  343 => 110,  337 => 106,  322 => 104,  318 => 103,  310 => 97,  295 => 95,  291 => 94,  286 => 91,  271 => 89,  267 => 88,  260 => 83,  245 => 81,  241 => 80,  235 => 76,  220 => 74,  216 => 73,  199 => 59,  195 => 57,  184 => 54,  178 => 53,  172 => 52,  166 => 51,  160 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  135 => 44,  131 => 43,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  61 => 9,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
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
                                <a class=\"btn btn-sm btn-primary\" href=\"#\">Этикетки =></a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/1\">1</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/2\">2</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/3\">3</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/4\">4</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/5\">5</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/6\">6</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/7\">7</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/8\">8</a>
                                <a class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"/document/sticker/{{ order.id }}/9\">9</a>
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
                                            <td>{{ i.getProduct.name }}</td>
                                            <td>{{ i.getProduct.countCurrent.value }}</td>
                                            <td>{{ i.getProduct.countReserve.value }}</td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][count]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.product_count }}\"></td>
                                            <td><input name=\"product[{{ i.getProduct.id }}][price_one]\" style=\"width: 75px\" type=\"text\" class=\"form-control\" value=\"{{ i.price_one }}\"></td>
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
                    <label for=\"\">Отправить транспортной компанией</label>
                    <select name=\"delivery_company\" id=\"\" class=\"form-control\">
                            <option value=\"0\">Выберите из списка</option>
                        {% for i in delivery_company %}
                            <option {% if i.id == order.delivery_company %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                    <label for=\"\">Самовывоз</label>
                    <select name=\"delivery_self\" id=\"\" class=\"form-control\">
                            <option value=\"0\">Выберите из списка</option>
                        {% for i in delivery_self %}
                            <option {% if i.id == order.delivery_self %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Статус склада</label>
                    <select name=\"status_warehouse\" id=\"\" class=\"form-control\">
                        {% for i in status_warehouse %}
                            <option {% if i.id == order.status_warehouse %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                    <label for=\"\">Статус офиса</label>
                    <select name=\"status_office\" id=\"\" class=\"form-control\">
                        {% for i in status_office %}
                            <option {% if i.id == order.status %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-sm-4\">
                    <label for=\"\">Менеджер</label>
                    <select name=\"manager\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        {% for i in users %}
                            <option {% if i.id == order.manager %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                    <label for=\"\">Комплектовщик</label>
                    <select name=\"packing\" id=\"\" class=\"form-control\">
                        <option value=\"0\">Выберите из списка</option>
                        {% for i in users %}
                            <option {% if i.id == order.packing %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <br><br>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <label>ФИО или название компании</label>
                    <input class=\"form-control\" name=\"company_name\" type=\"text\" value=\"{{ order.getDetail.name }}\">
                    <label>E-mail</label>
                    <input class=\"form-control\" name=\"email\" type=\"text\" value=\"{{ order.getDetail.email }}\">
                    <label>Контактные телефоны (с кодом города)</label>
                    <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"{{ order.getDetail.phone }}\">
                    <label>Дата доставки (когда Вам нужна поставка)</label>
                    <input class=\"form-control\" name=\"delivery_date\" type=\"text\"  value=\"{{ order.getDetail.delivery_date }}\">
                    <label>Время работы Вашей компании</label>
                    <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"{{ order.getDetail.work_time }}\">
                    <label>Индекс</label>
                    <input class=\"form-control\" name=\"index\" type=\"text\" value=\"{{ order.getDetail.address_index }}\">
                    <label>Город</label>
                    <input class=\"form-control\" name=\"city\" type=\"text\" value=\"{{ order.getDetail.city }}\">
                    <label>Улица, проспект и пр</label>
                    <input class=\"form-control\" name=\"street\" type=\"text\" value=\"{{ order.getDetail.street }}\">
                    <label>Номер дома</label>
                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"{{ order.getDetail.house }}\">
                    <label>Корпус</label>
                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"{{ order.getDetail.block }}\">
                    <label>Квартира, офис</label>
                    <input class=\"form-control\" name=\"office\" type=\"text\" value=\"{{ order.getDetail.office }}\">
                </div>
                <div class=\"col-sm-6\">
                    <label>Способ оплаты:</label>
                    <br>
                    <label><b>На расчетный счет компании</b></label>
                    <br>
                    <input {% if order.getDetail.payment_type == 'online' %}checked{% endif %} class=\"\" name=\"payment_type\" type=\"radio\" value=\"online\">
                    <br>
                    <label><b>Наличными курьеру</b></label>
                    <br>
                    <input {% if order.getDetail.payment_type == 'cash' %}checked{% endif %} class=\"\" name=\"payment_type\" type=\"radio\" value=\"cash\">
                    <br>
                    <label>Дополнительно:</label>
                    <textarea class=\"form-control\" name=\"comment\" id=\"\" cols=\"10\" rows=\"5\" >{{ order.getDetail.advanced }}</textarea>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br>
                    <button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "order/edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/order/edit.twig");
    }
}
