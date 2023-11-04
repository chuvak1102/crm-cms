<?php

/* supplier/order_edit.twig */
class __TwigTemplate_777aed7930415b0830909db5f920a6e6803365f7af644dd87b3da7c6168230ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "supplier/order_edit.twig", 1);
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
                        <div class=\"table-responsive\">
                            <form action=\"/supplier/order/edit/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th>Изображение</th>
                                        <th>Название</th>
                                        <th>Количество в заявке</th>
                                        <th>Количество по факту</th>
                                        <th>Нет в наличии</th>
                                        <th>Цена</th>
                                    </tr>
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                                        <tr>
                                            <td><img style=\"max-width: 50px\" src=\"/files/mini/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                            <td><a href=\"/product/edit/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "name", array());
            echo "</a></td>
                                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "cnt", array()), "html", null, true);
            echo "</td>
                                            <td><input class=\"form-control\" name=\"fact[";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "]\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "cnt", array()), "html", null, true);
            echo "\"></td>
                                            <td><input name=\"avail[";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "id", array()), "html", null, true);
            echo "]\" type=\"checkbox\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "avail", array()) == 1)) {
                echo "checked";
            }
            echo "></td>
                                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price", array()), "html", null, true);
            echo " р.</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                                    <tr class=\"search\">
                                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "id", array()), "html", null, true);
        echo "</td>
                                        <td>
                                            <input data-id=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getSupplier", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control item-search\" type=\"text\" placeholder=\"Добавить...\">
                                            <ul class=\"float-list\"></ul>
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"text\" name=\"comment\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "comment", array()), "html", null, true);
        echo "\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"text\" name=\"mail_to\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mail_to", array()), "html", null, true);
        echo "\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class=\"form-control\" name=\"status\" id=\"\" style=\"width: 250px\">
                                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "                                                    <option ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))) {
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
        // line 58
        echo "                                            </select>
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", array()) == ($context["open"] ?? null))) {
            // line 65
            echo "                                                <button name=\"submit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Сохранить и добавить на склад</button>
                                            ";
        }
        // line 67
        echo "                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <form class=\"extend\" action=\"/supplier/order/extend/";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\" style=\"visibility: hidden\">
                                <table class=\"table table-hover issue-tracker checkbox-container order-row\">
                                    <tbody>
                                    <tr>
                                        <td>
                                            ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", array()) == ($context["open"] ?? null))) {
            // line 79
            echo "                                                <button name=\"submit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Добавить в заявку</button>
                                            ";
        }
        // line 81
        echo "                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
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
                            list.append(`<li data-image=\${e.image} data-id=\${e.id} data-name=\"\${e.name}\" data-cur=\${e.cur} data-min=\${e.min} data-supplier=\"\${e.supplier}\"><span>\${e.name}</span></li>`);
                        });
                        list.addClass('show');
                    }
                });
            }
        });

        \$('.float-list').on('click', 'li', e => {

            let list = \$(e.target).parents('.float-list');
            let i = \$(e.target).closest('li').data();

            \$('.extend').css({visibility: \"visible\"});

            \$('.order-row').prepend(`<tr>
                 <td><img style=\"max-width: 50px\" src=\"/files/mini/\${i.image}\" alt=\"\"></td>
                 <td><a href=\"/product/edit/\${i.id}\">\${i.name}</a></td>
                 <td><input name=\"count[\${i.id}][]\" type=\"text\" class=\"form-control\" placeholder=\"количество\"></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>`);

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
        return "supplier/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  191 => 79,  189 => 78,  181 => 73,  173 => 67,  169 => 65,  167 => 64,  159 => 58,  144 => 56,  140 => 55,  131 => 49,  123 => 44,  109 => 33,  104 => 31,  101 => 30,  92 => 27,  84 => 26,  78 => 25,  74 => 24,  68 => 23,  64 => 22,  61 => 21,  57 => 20,  43 => 9,  35 => 3,  32 => 2,  15 => 1,);
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
                        <div class=\"table-responsive\">
                            <form action=\"/supplier/order/edit/{{ order.id }}\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <th>Изображение</th>
                                        <th>Название</th>
                                        <th>Количество в заявке</th>
                                        <th>Количество по факту</th>
                                        <th>Нет в наличии</th>
                                        <th>Цена</th>
                                    </tr>
                                    {% for i in items %}
                                        <tr>
                                            <td><img style=\"max-width: 50px\" src=\"/files/mini/{{ i.getProduct.image }}\" alt=\"\"></td>
                                            <td><a href=\"/product/edit/{{ i.getProduct.id }}\">{{ i.getProduct.name | raw}}</a></td>
                                            <td>{{ i.cnt }}</td>
                                            <td><input class=\"form-control\" name=\"fact[{{ i.getProduct.id }}]\" type=\"text\" value=\"{{ i.cnt }}\"></td>
                                            <td><input name=\"avail[{{ i.getProduct.id }}]\" type=\"checkbox\" {% if i.avail == 1 %}checked{% endif %}></td>
                                            <td>{{ i.price }} р.</td>
                                        </tr>
                                    {% endfor %}
                                    <tr class=\"search\">
                                        <td>{{ i.id }}</td>
                                        <td>
                                            <input data-id=\"{{ order.getSupplier.id }}\" class=\"form-control item-search\" type=\"text\" placeholder=\"Добавить...\">
                                            <ul class=\"float-list\"></ul>
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"text\" name=\"comment\" value=\"{{ order.comment }}\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"text\" name=\"mail_to\" value=\"{{ order.mail_to }}\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class=\"form-control\" name=\"status\" id=\"\" style=\"width: 250px\">
                                                {% for i in status %}
                                                    <option {% if order.status == i.id %}selected{% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                                {% endfor %}
                                            </select>
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {% if order.status == open %}
                                                <button name=\"submit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Сохранить и добавить на склад</button>
                                            {% endif %}
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <form class=\"extend\" action=\"/supplier/order/extend/{{ order.id }}\" method=\"post\" style=\"visibility: hidden\">
                                <table class=\"table table-hover issue-tracker checkbox-container order-row\">
                                    <tbody>
                                    <tr>
                                        <td>
                                            {% if order.status == open %}
                                                <button name=\"submit\" type=\"submit\" value=\"submit\" class=\"btn btn-primary\">Добавить в заявку</button>
                                            {% endif %}
                                        </td>
                                        <td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
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
                            list.append(`<li data-image=\${e.image} data-id=\${e.id} data-name=\"\${e.name}\" data-cur=\${e.cur} data-min=\${e.min} data-supplier=\"\${e.supplier}\"><span>\${e.name}</span></li>`);
                        });
                        list.addClass('show');
                    }
                });
            }
        });

        \$('.float-list').on('click', 'li', e => {

            let list = \$(e.target).parents('.float-list');
            let i = \$(e.target).closest('li').data();

            \$('.extend').css({visibility: \"visible\"});

            \$('.order-row').prepend(`<tr>
                 <td><img style=\"max-width: 50px\" src=\"/files/mini/\${i.image}\" alt=\"\"></td>
                 <td><a href=\"/product/edit/\${i.id}\">\${i.name}</a></td>
                 <td><input name=\"count[\${i.id}][]\" type=\"text\" class=\"form-control\" placeholder=\"количество\"></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>`);

            list.find('li').remove();
            list.hide();
        });

        \$(document).on('click', 'button.btn-danger', e => {
            \$(e.target).parent().parent().remove();
        });
    </script>
{% endblock %}", "supplier/order_edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/supplier/order_edit.twig");
    }
}
