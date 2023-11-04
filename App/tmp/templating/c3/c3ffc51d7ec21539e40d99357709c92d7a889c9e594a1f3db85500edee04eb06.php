<?php

/* content/fields.twig */
class __TwigTemplate_61d8357c3400957501b45e89360c9bd424a315d57359d64e9081f244087c2f91 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "content/fields.twig", 1);
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
                    <form action=\"/content/fields/save/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                        <div class=\"ibox-content\">
                            <div>
                                <button type=\"submit\" name=\"submit\" value=\"1\" class=\"btn btn-sm btn-primary\">Сохранить</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field\">+ Простое поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-link\">+ Связанное поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-dictionary\">+ Словарь</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-alias\">+ Алиас</button>
                            </div>
                            <br>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker fields\">
                                    <tbody>
                                    <tr>
                                        <th >Название</th>
                                        <th >Колонка</th>
                                        <th >Тип</th>
                                        <th >Ссылается на</th>
                                        <th ></th>
                                    </tr>
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_field"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "column_name", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" id=\"\" class=\"form-control\">
                                                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 34
                echo "                                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["f"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "field_id", array()))) {
                    echo "selected";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "type", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "type", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                                </select>
                                            </td>
                                            <td>
                                                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                                                    <option value=\"\">...</option>
                                                </select>
                                            </td>
                                            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", array()), "slug", array()) == "static") && twig_test_empty(($context["content_field"] ?? null)))) {
            // line 47
            echo "                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"ID\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"id\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" class=\"form-control\">
                                                    <option value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["id_type"] ?? null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["id_type"] ?? null), "name", array()), "html", null, true);
            echo "</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                                                    <option value=\"static:\">...</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                    ";
        }
        // line 63
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", array()), "slug", array()) == "alias")) {
            // line 64
            echo "
                                    ";
        }
        // line 66
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", array()), "slug", array()) == "dictionary")) {
            // line 67
            echo "
                                    ";
        }
        // line 69
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", array()), "slug", array()) == "category_tree")) {
            // line 70
            echo "
                                    ";
        }
        // line 72
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class=\"new-field\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 88
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                        <option value=\"static:\">...</option>
                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-link\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 107
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constraint"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 114
            echo "                        <option value=\"constraint:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getContent", array()), "canonical", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-dictionary\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 128
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constraint"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 135
            echo "                        <option value=\"dictionary:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Словарь: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getContent", array()), "canonical", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-alias\">
        <tr style=\"visibility: hidden\" class=\"field-row field-row-alias\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 149
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                </select>
            </td>
            <td class=\"alias-select\">
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                        <option value=\"alias:\">Выбрать поле</option>
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constraint"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 157
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>

    <script>

        \$('button.add-field').click(e => {

            let row = \$('.new-field tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-link').click(e => {

            let row = \$('.new-field-link tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-dictionary').click(e => {

            let row = \$('.new-field-dictionary tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-alias').click(e => {

            let row = \$('.new-field-alias tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('body').on('click', '.alias-select', e => {

            let select = \$(e.target);

            select.empty();
            select.append(`<option value=\"alias:\">Выбрать поле</option>`);

            \$('[name=column\\\\[\\\\]]').map((i, el) => {

                if (\$(el).css('visibility') !== 'hidden') {

                    select.append(`<option value=\"alias:\${\$(el).val()}\">\${\$(el).val()}</option>`);

                }

                console.log(el);
            })
        });


        \$('body').on('click', 'button.delete-field', e => {

            \$(e.target)
                .parents('.field-row')
                .remove();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "content/fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 159,  350 => 157,  346 => 156,  339 => 151,  326 => 149,  322 => 148,  309 => 137,  296 => 135,  292 => 134,  286 => 130,  273 => 128,  269 => 127,  256 => 116,  243 => 114,  239 => 113,  233 => 109,  220 => 107,  216 => 106,  198 => 90,  185 => 88,  181 => 87,  164 => 72,  160 => 70,  157 => 69,  153 => 67,  150 => 66,  146 => 64,  143 => 63,  127 => 52,  120 => 47,  117 => 46,  102 => 36,  85 => 34,  81 => 33,  75 => 30,  71 => 29,  68 => 28,  64 => 27,  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <form action=\"/content/fields/save/{{ content.id }}\" method=\"post\">
                        <div class=\"ibox-content\">
                            <div>
                                <button type=\"submit\" name=\"submit\" value=\"1\" class=\"btn btn-sm btn-primary\">Сохранить</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field\">+ Простое поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-link\">+ Связанное поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-dictionary\">+ Словарь</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-alias\">+ Алиас</button>
                            </div>
                            <br>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover issue-tracker fields\">
                                    <tbody>
                                    <tr>
                                        <th >Название</th>
                                        <th >Колонка</th>
                                        <th >Тип</th>
                                        <th >Ссылается на</th>
                                        <th ></th>
                                    </tr>
                                    {% for i in content_field %}
                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"{{ i.name }}\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"{{ i.column_name }}\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" id=\"\" class=\"form-control\">
                                                    {% for f in fields %}
                                                        <option {% if f.id == i.field_id %}selected{% endif %} value=\"{{ f.type }}\">{{ f.name }} {{ f.type }}</option>
                                                    {% endfor %}
                                                </select>
                                            </td>
                                            <td>
                                                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                                                    <option value=\"\">...</option>
                                                </select>
                                            </td>
                                            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
                                        </tr>
                                    {% endfor %}
                                    {% if content.getType.slug == 'static' and content_field is empty %}
                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"ID\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"id\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" class=\"form-control\">
                                                    <option value=\"{{ id_type.id }}\">{{ id_type.name }}</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                                                    <option value=\"static:\">...</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                    {% endif %}
                                    {% if content.getType.slug == 'alias' %}

                                    {% endif %}
                                    {% if content.getType.slug == 'dictionary' %}

                                    {% endif %}
                                    {% if content.getType.slug == 'category_tree' %}

                                    {% endif %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class=\"new-field\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    {% for i in fields %}
                        <option value=\"{{ i.id }}\">{{ i.name }} {{ i.type }}</option>
                    {% endfor %}
                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                        <option value=\"static:\">...</option>
                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-link\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    {% for i in fields %}
                        <option value=\"{{ i.id }}\">{{ i.name }} {{ i.type }}</option>
                    {% endfor %}
                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    {% for i in constraint %}
                        <option value=\"constraint:{{ i.id }}\">{{ i.getContent.canonical }} : {{ i.name }}</option>
                    {% endfor %}
                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-dictionary\">
        <tr style=\"visibility: hidden\" class=\"field-row\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    {% for i in fields %}
                        <option value=\"{{ i.id }}\">{{ i.name }} {{ i.type }}</option>
                    {% endfor %}
                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    {% for i in constraint %}
                        <option value=\"dictionary:{{ i.id }}\">Словарь: {{ i.getContent.canonical }} - {{ i.name }}</option>
                    {% endfor %}
                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>
    <table class=\"new-field-alias\">
        <tr style=\"visibility: hidden\" class=\"field-row field-row-alias\">
            <td><input name=\"canonical[]\" type=\"text\" class=\"form-control\"></td>
            <td><input name=\"column[]\" type=\"text\" class=\"form-control\"></td>
            <td>
                <select name=\"type[]\" id=\"\" class=\"form-control\">
                    {% for i in fields %}
                        <option value=\"{{ i.id }}\">{{ i.name }} {{ i.type }}</option>
                    {% endfor %}
                </select>
            </td>
            <td class=\"alias-select\">
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                        <option value=\"alias:\">Выбрать поле</option>
                    {% for i in constraint %}

                    {% endfor %}
                </select>
            </td>
            <td><button type=\"button\" class=\"btn btn-sm btn-danger delete-field\" >Удалить</button></td>
        </tr>
    </table>

    <script>

        \$('button.add-field').click(e => {

            let row = \$('.new-field tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-link').click(e => {

            let row = \$('.new-field-link tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-dictionary').click(e => {

            let row = \$('.new-field-dictionary tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('button.add-field-alias').click(e => {

            let row = \$('.new-field-alias tr').clone();

            row.css({visibility: \"visible\"});
            \$('table.fields')
                .append(row);
        });

        \$('body').on('click', '.alias-select', e => {

            let select = \$(e.target);

            select.empty();
            select.append(`<option value=\"alias:\">Выбрать поле</option>`);

            \$('[name=column\\\\[\\\\]]').map((i, el) => {

                if (\$(el).css('visibility') !== 'hidden') {

                    select.append(`<option value=\"alias:\${\$(el).val()}\">\${\$(el).val()}</option>`);

                }

                console.log(el);
            })
        });


        \$('body').on('click', 'button.delete-field', e => {

            \$(e.target)
                .parents('.field-row')
                .remove();
        });
    </script>
{% endblock %}", "content/fields.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/fields.twig");
    }
}
