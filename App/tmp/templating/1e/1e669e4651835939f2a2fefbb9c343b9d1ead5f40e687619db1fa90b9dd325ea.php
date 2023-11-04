<?php

/* critical/index.twig */
class __TwigTemplate_d135485114de81e81e84a9ce8c5f4b719958a4cac9705f33512b55b1d81a525d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "critical/index.twig", 1);
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
                    <div class=\"ibox-content\">
                        <a class=\"btn btn-primary\" href=\"/supplier/order?id=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "id", array()), "html", null, true);
        echo "\">Заявки поставщику</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 10%\">Изображение</th>
                                    <th style=\"width: 25%\">Название</th>
                                    <th style=\"width: 10%\">Текущий остаток</th>
                                    <th style=\"width: 10%\">Критичный остаток</th>
                                    <th style=\"\">Продажи в месяц</th>
                                    <th style=\"width: 10%\">Количество в коробке</th>
                                    <th style=\"width: 10%\">Коробок для заказа</th>
                                    <th style=\"width: 15%\">Последний заказ от</th>
                                </tr>
                                </tbody>
                            </table>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
        foreach ($context['_seq'] as $context["supplier_id"] => $context["s"]) {
            // line 33
            echo "                                <form action=\"/critical\" method=\"post\">
                                    <table class=\"table table-hover issue-tracker order-row\">
                                        <tbody>
                                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["s"]);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "                                                <tr>
                                                    <td style=\"width: 10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
                echo "\" alt=\"\"></td>
                                                    <td style=\"width: 25%\"><a target=\"_blank\" href=\"/product/edit/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
                echo "</a></td>
                                                    <td style=\"width: 10%\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "cur", array()), "html", null, true);
                echo "</td>
                                                    <td style=\"width: 10%\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "min", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "monthlySales", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "inBox", array()), "html", null, true);
                echo "</td>
                                                    <td style=\"width: 10%\"><input name=\"count[";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "]\" style=\"width: 100px\" type=\"text\" class=\"form-control\"></td>
                                                    <td style=\"width: 15%\">";
                // line 45
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "last_order", array()))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "last_order", array()), "H:i d-m-Y"), "html", null, true);
                }
                echo "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, $context["supplier_id"], "html", null, true);
            echo "\" class=\"form-control item-search\" type=\"text\" placeholder=\"Добавить...\">
                                                    <ul class=\"float-list\"></ul>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Комментарий к заказу</p>
                                    <input type=\"text\" name=\"comment\" class=\"form-control\"><br>
                                    <p>Адрес для отправки заказа</p>
                                    ";
            // line 65
            if (twig_test_empty((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["emails"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))) {
                // line 66
                echo "                                        <p>Не добавлено ни одной почты</p>
                                    ";
            } else {
                // line 68
                echo "                                        <select name=\"mail_to\" id=\"\" class=\"form-control\">
                                            ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                        </select>
                                    ";
            }
            // line 74
            echo "                                    <br>
                                    <button name=\"submit\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $context["supplier_id"], "html", null, true);
            echo "\" class=\"btn btn-primary\" type=\"submit\">Заказать</button>
                                </form>
                                <br><br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['supplier_id'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                <a href=\"/critical?all=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default\">Показать все</a>
                                <a href=\"/critical\" class=\"btn btn-default\">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('.item-search').on('input', e => {

            let list = \$(e.target).parent().find('.float-list');

            list.find('li').remove();

            if (\$(e.target).val().length >= 3) {

                \$.ajax({
                    url: \"/critical/items\",
                    data: {str: \$(e.target).val(), id: \$(e.target).data('id')},

                    success: (json) => {

                        let items = JSON.parse(json);
                        items.map(e => {
                            list.append(`<li data-id=\${e.id} data-name=\"\${e.name}\" data-cur=\${e.cur} data-min=\${e.min} data-supplier=\"\${e.supplier}\"><span>\${e.name}</span></li>`);
                        });
                        list.addClass('show');
                    }
                });
            }
        });

        \$('.float-list').on('click', 'li', e => {

            let list = \$(e.target).parents('.float-list');
            let i = \$(e.target).closest('li').data();

            \$(e.target).parents('.order-row').prepend(
                `<tr>
                    <td style=\"width: 10%\"></td>
                    <td style=\"width: 35%\"><a target=\"_blank\" href=\"/product/edit/\${i.id}\">\${i.name}</a></td>
                    <td style=\"width: 10%\">\${i.cur}</td>
                    <td style=\"width: 10%\">\${i.min}</td>
                    <td style=\"width: 10%\"><input value=\"\${i.min}\" name=\"count[\${i.supplier}]\" style=\"width: 100px\" type=\"text\" class=\"form-control\"></td>
                    <td style=\"width: 15%\"></td>
                    <td ><button class=\"btn btn-danger\" type=\"button\">x</button></td>
                </tr>`
            );

            list.find('li').remove();
            list.hide();
        });

        \$(document).on('click', 'button.btn-danger', e => {
            \$(e.target).parent().parent().remove();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "critical/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 79,  179 => 75,  176 => 74,  172 => 72,  161 => 70,  157 => 69,  154 => 68,  150 => 66,  148 => 65,  131 => 51,  126 => 48,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  89 => 39,  85 => 38,  82 => 37,  78 => 36,  73 => 33,  69 => 32,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <a class=\"btn btn-primary\" href=\"/supplier/order?id={{ supplier.id }}\">Заявки поставщику</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker checkbox-container\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 10%\">Изображение</th>
                                    <th style=\"width: 25%\">Название</th>
                                    <th style=\"width: 10%\">Текущий остаток</th>
                                    <th style=\"width: 10%\">Критичный остаток</th>
                                    <th style=\"\">Продажи в месяц</th>
                                    <th style=\"width: 10%\">Количество в коробке</th>
                                    <th style=\"width: 10%\">Коробок для заказа</th>
                                    <th style=\"width: 15%\">Последний заказ от</th>
                                </tr>
                                </tbody>
                            </table>
                            {% for supplier_id, s in suppliers %}
                                <form action=\"/critical\" method=\"post\">
                                    <table class=\"table table-hover issue-tracker order-row\">
                                        <tbody>
                                            {% for i in s %}
                                                <tr>
                                                    <td style=\"width: 10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.image }}\" alt=\"\"></td>
                                                    <td style=\"width: 25%\"><a target=\"_blank\" href=\"/product/edit/{{ i.id }}\">{{ i.name | raw }}</a></td>
                                                    <td style=\"width: 10%\">{{ i.cur }}</td>
                                                    <td style=\"width: 10%\">{{ i.min }}</td>
                                                    <td>{{ i.monthlySales }}</td>
                                                    <td>{{ i.inBox }}</td>
                                                    <td style=\"width: 10%\"><input name=\"count[{{ i.id }}]\" style=\"width: 100px\" type=\"text\" class=\"form-control\"></td>
                                                    <td style=\"width: 15%\">{% if i.last_order is not empty %}{{ i.last_order | date('H:i d-m-Y') }}{% endif %}</td>
                                                </tr>
                                            {% endfor %}
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input data-id=\"{{ supplier_id }}\" class=\"form-control item-search\" type=\"text\" placeholder=\"Добавить...\">
                                                    <ul class=\"float-list\"></ul>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Комментарий к заказу</p>
                                    <input type=\"text\" name=\"comment\" class=\"form-control\"><br>
                                    <p>Адрес для отправки заказа</p>
                                    {% if emails[0] is empty %}
                                        <p>Не добавлено ни одной почты</p>
                                    {% else %}
                                        <select name=\"mail_to\" id=\"\" class=\"form-control\">
                                            {% for i in emails %}
                                                <option value=\"{{ i }}\">{{ i }}</option>
                                            {% endfor %}
                                        </select>
                                    {% endif %}
                                    <br>
                                    <button name=\"submit\" value=\"{{ supplier_id }}\" class=\"btn btn-primary\" type=\"submit\">Заказать</button>
                                </form>
                                <br><br>
                            {% endfor %}
                                <a href=\"/critical?all={{ supplier.id }}\" class=\"btn btn-default\">Показать все</a>
                                <a href=\"/critical\" class=\"btn btn-default\">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('.item-search').on('input', e => {

            let list = \$(e.target).parent().find('.float-list');

            list.find('li').remove();

            if (\$(e.target).val().length >= 3) {

                \$.ajax({
                    url: \"/critical/items\",
                    data: {str: \$(e.target).val(), id: \$(e.target).data('id')},

                    success: (json) => {

                        let items = JSON.parse(json);
                        items.map(e => {
                            list.append(`<li data-id=\${e.id} data-name=\"\${e.name}\" data-cur=\${e.cur} data-min=\${e.min} data-supplier=\"\${e.supplier}\"><span>\${e.name}</span></li>`);
                        });
                        list.addClass('show');
                    }
                });
            }
        });

        \$('.float-list').on('click', 'li', e => {

            let list = \$(e.target).parents('.float-list');
            let i = \$(e.target).closest('li').data();

            \$(e.target).parents('.order-row').prepend(
                `<tr>
                    <td style=\"width: 10%\"></td>
                    <td style=\"width: 35%\"><a target=\"_blank\" href=\"/product/edit/\${i.id}\">\${i.name}</a></td>
                    <td style=\"width: 10%\">\${i.cur}</td>
                    <td style=\"width: 10%\">\${i.min}</td>
                    <td style=\"width: 10%\"><input value=\"\${i.min}\" name=\"count[\${i.supplier}]\" style=\"width: 100px\" type=\"text\" class=\"form-control\"></td>
                    <td style=\"width: 15%\"></td>
                    <td ><button class=\"btn btn-danger\" type=\"button\">x</button></td>
                </tr>`
            );

            list.find('li').remove();
            list.hide();
        });

        \$(document).on('click', 'button.btn-danger', e => {
            \$(e.target).parent().parent().remove();
        });
    </script>
{% endblock %}", "critical/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/critical/index.twig");
    }
}
