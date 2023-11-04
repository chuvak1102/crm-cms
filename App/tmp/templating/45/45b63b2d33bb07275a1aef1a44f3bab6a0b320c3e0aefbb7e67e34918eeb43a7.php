<?php

/* product/index.twig */
class __TwigTemplate_d3a5615f4a003856cceaf3d59ed623a2db3cfeeb6230ff3f85eb4773903b33f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "product/index.twig", 1);
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
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/product\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" name=\"category\">
                                    <option value=\"\">Категория</option>
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 21
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["root"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "category", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["root"], "extend", array())) {
                // line 23
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["root"], "extend", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 24
                    echo "                                                <option ";
                    if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "category", array()))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                    echo "\">--";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                        ";
            }
            // line 27
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"supplier\" class=\"form-control\">
                                    <option value=\"\">Поставщик</option>
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supplier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "supplier", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))) {
                echo "selected";
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
        // line 36
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", array()), "html", null, true);
        echo "\" name=\"name\" style=\"min-width: 150px\" type=\"text\" placeholder=\"Поиск\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <input style=\"margin-left: 5px\" type=\"checkbox\" name=\"active\" ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "active", array())) {
            echo "checked";
        }
        echo " value=\"1\"> Активные
                            </div>
                            <a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-danger pull-right m-t-n-xs\" href=\"/product\"><strong><i class=\"fa fa-times\"></i></strong></a>
                            <button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\">Применить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary print-price\" href=\"#\">Печатать ценники</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"/product/create\">Добавить товар</a>
                        </div>
                        <br>
                        <div class=\"checkbox-container\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker\">
                                    <tbody>
                                    <tr>
                                        <td width=\"5%\"></td>
                                        <td width=\"1%\"><input class=\"checkbox-all\" type=\"checkbox\" value=\"0\"></td>
                                        <td width=\"10%\">Изображение</td>
                                        <td width=\"10%\">Артикул</td>
                                        <td width=\"20%\">Название</td>
                                        <td width=\"10%\">Цена на сайте</td>
                                        <td width=\"10%\">В упаковке</td>
                                        <td width=\"10%\">В коробке</td>
                                        <td width=\"10%\">Продажи за месяц</td>
                                        <td width=\"10%\">За прошлый месяц</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker\">
                                    <tbody id=\"sortable\">
                                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 83
            echo "                                        <tr class=\"category-row\">
                                            <td width=\"5%\" class=\"resort sorting-handle\" data-category=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "category", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" data-sort=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "sort", array()), "html", null, true);
            echo "\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                            <td width=\"1%\">
                                                <input class=\"checkbox-check\" type=\"checkbox\" data-value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">
                                            </td>
                                            <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                            <td width=\"10%\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "article", array()), "html", null, true);
            echo "</td>
                                            <td width=\"20%\">
                                                <a style=\"color: #4e5153; \" href=\"/product/edit/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</a>
                                            </td>
                                            <td width=\"10%\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", array()), "html", null, true);
            echo "</td>
                                            <td width=\"10%\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "</td>
                                            <td width=\"10%\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "box_count", array()), "html", null, true);
            echo "</td>
                                            <td width=\"10%\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "salesPerCurrentMonth", array()), "html", null, true);
            echo "</td>
                                            <td width=\"10%\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "salesPerPastMonth", array()), "html", null, true);
            echo "</td>
";
            // line 99
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"display: flex; justify-content: center\">
            ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "render", array(), "method"), "html", null, true);
        echo "
        </div>
    </div>
    <script>
        \$('[name=sorting]').on('input', e => {

            \$.ajax({
                url: \"/product/sort\",
                data: {
                    'id': parseInt(\$(e.target).data('id')),
                    'sort': parseInt(\$(e.target).val())
                }
            });
        });
        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {

                    let d = [];

                    \$('.sorting-handle').map((i, e) => {
                        d.push({
                            category: \$(e).data('category'),
                            id: \$(e).data('id'),
                            sort: parseInt(i) + 1
                        })
                    });

                    console.log(d);

                    \$.ajax({
                        type: \"POST\",
                        url: '/product/sort',
                        data: {
                            values: d
                        },
                        success: e => {
                            // console.log(JSON.parse(e));
                        }
                    })
                },
            })
            .disableSelection();

        // \$('#sortable').sortable(
        //     {
        //         handle: '.sorting-handle',
        //         tolerance: 'pointer',
        //         forcePlaceholderSize: true,
        //         opacity: 0.8,
        //         update: (e, ui) => {
        //
        //             let current;
        //             let next;
        //
        //             console.log(ui.item[0].children[0].getAttribute('data-id'));
        //
        //             // console.log(d);
        //
        //             // \$.ajax({
        //             //     type: \"POST\",
        //             //     url: '/product/sort',
        //             //     data: {
        //             //         values: d
        //             //     },
        //             //     success: e => {
        //             //         // console.log(JSON.parse(e));
        //             //     }
        //             // })
        //         },
        //     })
        //     .disableSelection();

    </script>
";
    }

    public function getTemplateName()
    {
        return "product/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 110,  246 => 101,  239 => 99,  235 => 97,  231 => 96,  227 => 95,  223 => 94,  219 => 93,  212 => 91,  207 => 89,  203 => 88,  198 => 86,  189 => 84,  186 => 83,  182 => 82,  137 => 42,  131 => 39,  126 => 36,  111 => 34,  107 => 33,  100 => 28,  94 => 27,  91 => 26,  76 => 24,  71 => 23,  69 => 22,  58 => 21,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Фильтр</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <form action=\"/product\" role=\"form\" class=\"form-inline\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" name=\"category\">
                                    <option value=\"\">Категория</option>
                                    {% for root in category %}
                                        <option {% if root.id == filter.category %} selected {% endif %} value=\"{{ root.id }}\">{{ root.name }}</option>
                                        {% if root.extend %}
                                            {% for i in root.extend %}
                                                <option {% if i.id == filter.category %} selected {% endif %} value=\"{{ i.id }}\">--{{ i.name }}</option>
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"supplier\" class=\"form-control\">
                                    <option value=\"\">Поставщик</option>
                                    {% for i in supplier %}
                                        <option {% if filter.supplier == i.id %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input value=\"{{ filter.name }}\" name=\"name\" style=\"min-width: 150px\" type=\"text\" placeholder=\"Поиск\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <input style=\"margin-left: 5px\" type=\"checkbox\" name=\"active\" {% if filter.active %}checked{% endif %} value=\"1\"> Активные
                            </div>
                            <a style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-danger pull-right m-t-n-xs\" href=\"/product\"><strong><i class=\"fa fa-times\"></i></strong></a>
                            <button style=\"margin-top: 0; margin-right: 5px\" class=\"btn btn-sm btn-primary pull-right m-t-n-xs\" type=\"submit\">Применить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div>
                            <a class=\"btn btn-sm btn-primary print-price\" href=\"#\">Печатать ценники</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"/product/create\">Добавить товар</a>
                        </div>
                        <br>
                        <div class=\"checkbox-container\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker\">
                                    <tbody>
                                    <tr>
                                        <td width=\"5%\"></td>
                                        <td width=\"1%\"><input class=\"checkbox-all\" type=\"checkbox\" value=\"0\"></td>
                                        <td width=\"10%\">Изображение</td>
                                        <td width=\"10%\">Артикул</td>
                                        <td width=\"20%\">Название</td>
                                        <td width=\"10%\">Цена на сайте</td>
                                        <td width=\"10%\">В упаковке</td>
                                        <td width=\"10%\">В коробке</td>
                                        <td width=\"10%\">Продажи за месяц</td>
                                        <td width=\"10%\">За прошлый месяц</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker\">
                                    <tbody id=\"sortable\">
                                    {% for i in product %}
                                        <tr class=\"category-row\">
                                            <td width=\"5%\" class=\"resort sorting-handle\" data-category=\"{{ filter.category }}\" data-id=\"{{ i.id }}\" data-sort=\"{{ i.sort }}\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                            <td width=\"1%\">
                                                <input class=\"checkbox-check\" type=\"checkbox\" data-value=\"{{ i.id }}\">
                                            </td>
                                            <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.image }}\" alt=\"\"></td>
                                            <td width=\"10%\">{{ i.article }}</td>
                                            <td width=\"20%\">
                                                <a style=\"color: #4e5153; \" href=\"/product/edit/{{ i.id }}\">{{ i.name | raw }}</a>
                                            </td>
                                            <td width=\"10%\">{{ i.price_site }}</td>
                                            <td width=\"10%\">{{ i.pack_count }}</td>
                                            <td width=\"10%\">{{ i.box_count }}</td>
                                            <td width=\"10%\">{{ i.salesPerCurrentMonth }}</td>
                                            <td width=\"10%\">{{ i.salesPerPastMonth }}</td>
{#                                            <td><input name=\"sorting\" data-id=\"{{ i.id }}\" style=\"width: 60px\" class=\"form-control\" type=\"text\" value=\"{{ i.sort }}\"></td>#}
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"display: flex; justify-content: center\">
            {{ pagination.render() }}
        </div>
    </div>
    <script>
        \$('[name=sorting]').on('input', e => {

            \$.ajax({
                url: \"/product/sort\",
                data: {
                    'id': parseInt(\$(e.target).data('id')),
                    'sort': parseInt(\$(e.target).val())
                }
            });
        });
        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {

                    let d = [];

                    \$('.sorting-handle').map((i, e) => {
                        d.push({
                            category: \$(e).data('category'),
                            id: \$(e).data('id'),
                            sort: parseInt(i) + 1
                        })
                    });

                    console.log(d);

                    \$.ajax({
                        type: \"POST\",
                        url: '/product/sort',
                        data: {
                            values: d
                        },
                        success: e => {
                            // console.log(JSON.parse(e));
                        }
                    })
                },
            })
            .disableSelection();

        // \$('#sortable').sortable(
        //     {
        //         handle: '.sorting-handle',
        //         tolerance: 'pointer',
        //         forcePlaceholderSize: true,
        //         opacity: 0.8,
        //         update: (e, ui) => {
        //
        //             let current;
        //             let next;
        //
        //             console.log(ui.item[0].children[0].getAttribute('data-id'));
        //
        //             // console.log(d);
        //
        //             // \$.ajax({
        //             //     type: \"POST\",
        //             //     url: '/product/sort',
        //             //     data: {
        //             //         values: d
        //             //     },
        //             //     success: e => {
        //             //         // console.log(JSON.parse(e));
        //             //     }
        //             // })
        //         },
        //     })
        //     .disableSelection();

    </script>
{% endblock %}", "product/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/product/index.twig");
    }
}
