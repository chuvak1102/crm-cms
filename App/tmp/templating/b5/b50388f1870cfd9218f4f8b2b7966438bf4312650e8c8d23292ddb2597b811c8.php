<?php

/* category/index.twig */
class __TwigTemplate_c167bf82c3a8b52e2deffa97ed7906c9537dcbaf4e72eaa48c2350b0da320b3e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "category/index.twig", 1);
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
                        <h5>Категории</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td>
                                        Статус
                                    </td>
                                    <td>
                                        Название
                                    </td>
                                    <td>
                                        Родитель
                                    </td>
                                    <td>
                                        Сортировка
                                    </td>
                                    <td>Изображение</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class=\"category-row\">
                                    <td>
                                        <span style=\"cursor: pointer\" class=\"category-status label label-primary\">Активно</span>
                                    </td>
                                    <td style=\"width: 50%\">
                                        <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\">
                                        <input class=\"form-control\" name=\"id\" type=\"hidden\">
                                    </td>
                                    <td style=\"width: 10%\" class=\"issue-info\">
                                        <select class=\"form-control\" name=\"parent\" id=\"\">
                                            <option value=\"0\">Без категории</option>
                                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 44
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["j"], "name", array());
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                        </select>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "sort", array()), "html", null, true);
        echo "\">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Создать</a>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "                                    <tr class=\"category-row\">
                                        <td>
                                            <span style=\"cursor: pointer\" class=\"category-status label ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "active", array())) {
                echo "label-primary";
            } else {
                echo "label-default";
            }
            echo "\">Активно</span>
                                        </td>
                                        <td style=\"width: 50%\">
                                            <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\" value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "name", array());
            echo "\">
                                            <input class=\"form-control\" name=\"id\" type=\"hidden\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "id", array()), "html", null, true);
            echo "\">
                                        </td>
                                        <td></td>
                                        <td>
                                            <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "sort", array()), "html", null, true);
            echo "\">
                                        </td>
                                        <td>
                                            <form method=\"post\" action=\"/category/save/image\" name=\"image\" enctype=\"multipart/form-data\">
                                                <input type=\"file\" name=\"image\">
                                                <input type=\"hidden\" name=\"category\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "id", array()), "html", null, true);
            echo "\">
                                            </form>
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                        </td>
                                        <td>
                                            <a href=\"/category/delete/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "category", array()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">Удалить</a>
                                        </td>
                                    </tr>
                                    ";
            // line 87
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "extend", array()))) {
                // line 88
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "extend", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 89
                    echo "                                            <tr class=\"category-row\">
                                                <td>
                                                    <span style=\"cursor: pointer\" class=\"category-status label ";
                    // line 91
                    if (twig_get_attribute($this->env, $this->source, $context["j"], "active", array())) {
                        echo "label-primary";
                    } else {
                        echo "label-default";
                    }
                    echo "\">Активно</span>
                                                </td>
                                                <td style=\"width: 50%; padding-left: 50px\">
                                                    <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\" value=\"";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["j"], "name", array());
                    echo "\">
                                                    <input class=\"form-control\" name=\"id\" type=\"hidden\" value=\"";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", array()), "html", null, true);
                    echo "\">
                                                </td>
                                                <td style=\"\" class=\"issue-info\">
                                                    <select class=\"form-control\" name=\"parent\" id=\"\">
                                                        <option value=\"0\">Без категории</option>

                                                        ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                        // line 102
                        echo "                                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["j"], "parent_id", array()) == twig_get_attribute($this->env, $this->source, $context["k"], "id", array()))) {
                            // line 103
                            echo "                                                                <option selected value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "id", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "name", array()), "html", null, true);
                            echo "</option>
                                                            ";
                        } else {
                            // line 105
                            echo "                                                                <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "id", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "name", array()), "html", null, true);
                            echo "</option>
                                                            ";
                        }
                        // line 107
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                                                    </select>
                                                </td>
                                                <td>
                                                    <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "sort", array()), "html", null, true);
                    echo "\">
                                                </td>
                                                <td>
                                                    <form method=\"post\" action=\"/category/save/image\" name=\"image\" enctype=\"multipart/form-data\">
                                                        <input type=\"file\" name=\"image\">
                                                        <input type=\"hidden\" name=\"category\" value=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", array()), "html", null, true);
                    echo "\">
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                                </td>
                                                <td>
                                                    <a href=\"/category/delete/";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">Удалить</a>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                                    ";
            }
            // line 128
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('input[type=file]').change(e => {
            \$(e.target)
                .parents('form')
                .submit();
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "category/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 129,  264 => 128,  261 => 127,  251 => 123,  241 => 116,  233 => 111,  228 => 108,  222 => 107,  214 => 105,  206 => 103,  203 => 102,  199 => 101,  190 => 95,  186 => 94,  176 => 91,  172 => 89,  167 => 88,  165 => 87,  159 => 84,  149 => 77,  141 => 72,  134 => 68,  130 => 67,  120 => 64,  116 => 62,  112 => 61,  97 => 49,  92 => 46,  81 => 44,  77 => 43,  35 => 3,  32 => 2,  15 => 1,);
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
                        <h5>Категории</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td>
                                        Статус
                                    </td>
                                    <td>
                                        Название
                                    </td>
                                    <td>
                                        Родитель
                                    </td>
                                    <td>
                                        Сортировка
                                    </td>
                                    <td>Изображение</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class=\"category-row\">
                                    <td>
                                        <span style=\"cursor: pointer\" class=\"category-status label label-primary\">Активно</span>
                                    </td>
                                    <td style=\"width: 50%\">
                                        <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\">
                                        <input class=\"form-control\" name=\"id\" type=\"hidden\">
                                    </td>
                                    <td style=\"width: 10%\" class=\"issue-info\">
                                        <select class=\"form-control\" name=\"parent\" id=\"\">
                                            <option value=\"0\">Без категории</option>
                                            {% for j in category %}
                                                <option value=\"{{ j.id }}\">{{ j.name | raw }}</option>
                                            {% endfor %}
                                        </select>
                                    </td>
                                    <td>
                                        <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"{{ i.sort }}\">
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Создать</a>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                {% for i in tree %}
                                    <tr class=\"category-row\">
                                        <td>
                                            <span style=\"cursor: pointer\" class=\"category-status label {% if i.category.active %}label-primary{% else %}label-default{% endif %}\">Активно</span>
                                        </td>
                                        <td style=\"width: 50%\">
                                            <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\" value=\"{{ i.category.name | raw }}\">
                                            <input class=\"form-control\" name=\"id\" type=\"hidden\" value=\"{{ i.category.id }}\">
                                        </td>
                                        <td></td>
                                        <td>
                                            <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"{{ i.category.sort }}\">
                                        </td>
                                        <td>
                                            <form method=\"post\" action=\"/category/save/image\" name=\"image\" enctype=\"multipart/form-data\">
                                                <input type=\"file\" name=\"image\">
                                                <input type=\"hidden\" name=\"category\" value=\"{{ i.category.id }}\">
                                            </form>
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                        </td>
                                        <td>
                                            <a href=\"/category/delete/{{ i.category.id }}\" class=\"btn btn-danger btn-xs\">Удалить</a>
                                        </td>
                                    </tr>
                                    {% if i.extend is not empty %}
                                        {% for j in i.extend %}
                                            <tr class=\"category-row\">
                                                <td>
                                                    <span style=\"cursor: pointer\" class=\"category-status label {% if j.active %}label-primary{% else %}label-default{% endif %}\">Активно</span>
                                                </td>
                                                <td style=\"width: 50%; padding-left: 50px\">
                                                    <input class=\"form-control\" name=\"name\" style=\"width: 100%\" type=\"text\" value=\"{{ j.name | raw }}\">
                                                    <input class=\"form-control\" name=\"id\" type=\"hidden\" value=\"{{ j.id }}\">
                                                </td>
                                                <td style=\"\" class=\"issue-info\">
                                                    <select class=\"form-control\" name=\"parent\" id=\"\">
                                                        <option value=\"0\">Без категории</option>

                                                        {% for k in category %}
                                                            {% if j.parent_id == k.id %}
                                                                <option selected value=\"{{ k.id }}\">{{ k.name }}</option>
                                                            {% else %}
                                                                <option value=\"{{ k.id }}\">{{ k.name }}</option>
                                                            {% endif %}
                                                        {% endfor %}
                                                    </select>
                                                </td>
                                                <td>
                                                    <input class=\"form-control\" name=\"sort\" type=\"text\" value=\"{{ j.sort }}\">
                                                </td>
                                                <td>
                                                    <form method=\"post\" action=\"/category/save/image\" name=\"image\" enctype=\"multipart/form-data\">
                                                        <input type=\"file\" name=\"image\">
                                                        <input type=\"hidden\" name=\"category\" value=\"{{ j.id }}\">
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href=\"#\" class=\"btn btn-primary btn-xs save-category\">Сохранить</a>
                                                </td>
                                                <td>
                                                    <a href=\"/category/delete/{{ j.id }}\" class=\"btn btn-danger btn-xs\">Удалить</a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('input[type=file]').change(e => {
            \$(e.target)
                .parents('form')
                .submit();
        })
    </script>
{% endblock %}", "category/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/category/index.twig");
    }
}
