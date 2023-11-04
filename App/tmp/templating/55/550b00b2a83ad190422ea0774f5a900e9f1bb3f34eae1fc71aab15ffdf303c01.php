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

/* content/fields.twig */
class __TwigTemplate_f498cfa383689daa589be94c4ccc23257aba1b354cb5e48254e52c9de606bdd0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "content/fields.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <form action=\"/content/fields/save/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" method=\"post\">
                        <div class=\"ibox-content\">
                            <div>
                                <button type=\"submit\" name=\"submit\" value=\"1\" class=\"btn btn-sm btn-primary\">Сохранить</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field\">+ Простое поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-link\">+ Связанное поле</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primary add-field-dictionary\">+ Словарь</button>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_field"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "column_name", [], "any", false, false, false, 29), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" id=\"\" class=\"form-control\">
                                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 33
                echo "                                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, $context["i"], "field_id", [], "any", false, false, false, 33))) {
                    echo "selected";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 33), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 33), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
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
        // line 45
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45) == "static") && twig_test_empty(($context["content_field"] ?? null)))) {
            // line 46
            echo "                                        <tr class=\"field-row\">
                                            <td><input name=\"canonical[]\" value=\"ID\" type=\"text\" class=\"form-control\"></td>
                                            <td><input name=\"column[]\" value=\"id\" type=\"text\" class=\"form-control\"></td>
                                            <td>
                                                <select name=\"type[]\" class=\"form-control\">
                                                    <option value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["id_type"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["id_type"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
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
        // line 62
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", [], "any", false, false, false, 62), "slug", [], "any", false, false, false, 62) == "dictionary")) {
            // line 63
            echo "
                                    ";
        }
        // line 65
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "getType", [], "any", false, false, false, 65), "slug", [], "any", false, false, false, 65) == "category_tree")) {
            // line 66
            echo "
                                    ";
        }
        // line 68
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
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 84), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 103), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constraint"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            echo "                        <option value=\"constraint:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getContent", [], "any", false, false, false, 110), "canonical", [], "any", false, false, false, 110), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 110), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
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
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 124
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 124), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 124), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </select>
            </td>
            <td>
                <select name=\"advanced[]\" id=\"\" class=\"form-control\">
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constraint"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 131
            echo "                        <option value=\"dictionary:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "\">Словарь: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getContent", [], "any", false, false, false, 131), "canonical", [], "any", false, false, false, 131), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
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
        return array (  316 => 133,  303 => 131,  299 => 130,  293 => 126,  280 => 124,  276 => 123,  263 => 112,  250 => 110,  246 => 109,  240 => 105,  227 => 103,  223 => 102,  205 => 86,  192 => 84,  188 => 83,  171 => 68,  167 => 66,  164 => 65,  160 => 63,  157 => 62,  141 => 51,  134 => 46,  131 => 45,  116 => 35,  99 => 33,  95 => 32,  89 => 29,  85 => 28,  82 => 27,  78 => 26,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
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

        \$('body').on('click', 'button.delete-field', e => {

            \$(e.target)
                .parents('.field-row')
                .remove();
        });
    </script>
{% endblock %}", "content/fields.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/fields.twig");
    }
}
