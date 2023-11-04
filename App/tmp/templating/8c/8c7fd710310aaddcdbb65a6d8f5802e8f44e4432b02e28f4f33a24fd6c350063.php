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

/* user/index.twig */
class __TwigTemplate_0722f6707e85c83d304d9fc2132fb9473b050d5717d67b2a029a6304e35ffd91 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "user/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content animated fadeIn\">
        <div class=\"row m-t-lg\">
            <div class=\"col-lg-12\">
                <div class=\"tabs-container\">
                    <div class=\"tabs-left\">
                        <ul class=\"nav nav-tabs\">
                            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                                <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) == 1)) {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#tab-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></li>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-7\">Добавить</a></li>
                        </ul>
                        <div class=\"tab-content \">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                                <div id=\"tab-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) == 1)) {
                echo "active";
            }
            echo "\">
                                    <div class=\"panel-body\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                            <tr>
                                                <th>ФИО</th>
                                                <th>Должность</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 28
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["u"], "department", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 28))) {
                    // line 29
                    echo "                                                    <tr>
                                                        <td>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "position", [], "any", false, false, false, 31), "html", null, true);
                    echo "</td>
                                                        <td>
";
                    // line 34
                    echo "                                                            <a href=\"/user/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">

                                                                <button type=\"button\" class=\"btn btn-sm btn-danger\"> <i class=\"fa fa-remove\"></i> </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 41
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                            <div id=\"tab-7\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <form action=\"/user/create\">
                                        <div class=\"form-group\"><label class=\"control-label\">ФИО</label>
                                            <div class=\"\"><input required name=\"name\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Отдел</label>
                                            <select class=\"form-control\" name=\"department\">
                                                <option value=\"1\">Производство</option>
                                                <option value=\"2\">Менеджеры</option>
                                                <option value=\"3\">Работники склада</option>
                                                <option value=\"4\">Бухгалтерия</option>
                                                <option value=\"5\">Водители</option>
                                                <option value=\"6\">Закупщики</option>
                                            </select>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Должность</label>
                                            <div class=\"\"><input required name=\"position\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Логин</label>
                                            <div class=\"\"><input required name=\"login\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Пароль</label>
                                            <div class=\"\"><input required name=\"password\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать пользователя</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 47,  175 => 42,  169 => 41,  158 => 34,  153 => 31,  149 => 30,  146 => 29,  143 => 28,  139 => 27,  120 => 16,  103 => 15,  98 => 12,  75 => 10,  58 => 9,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content animated fadeIn\">
        <div class=\"row m-t-lg\">
            <div class=\"col-lg-12\">
                <div class=\"tabs-container\">
                    <div class=\"tabs-left\">
                        <ul class=\"nav nav-tabs\">
                            {% for i in departments %}
                                <li class=\"{% if loop.index == 1 %}active{% endif %}\"><a data-toggle=\"tab\" href=\"#tab-{{ i.id }}\">{{ i.name }}</a></li>
                            {% endfor %}
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-7\">Добавить</a></li>
                        </ul>
                        <div class=\"tab-content \">
                            {% for i in departments %}
                                <div id=\"tab-{{ i.id }}\" class=\"tab-pane {% if loop.index == 1 %}active{% endif %}\">
                                    <div class=\"panel-body\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                            <tr>
                                                <th>ФИО</th>
                                                <th>Должность</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for u in users %}
                                                {% if u.department == i.id %}
                                                    <tr>
                                                        <td>{{ u.name }}</td>
                                                        <td>{{ u.position }}</td>
                                                        <td>
{#                                                            <button type=\"button\" class=\"btn btn-sm btn-default\"> <i class=\"fa fa-pencil\"></i> </button>#}
                                                            <a href=\"/user/delete/{{ u.id }}\">

                                                                <button type=\"button\" class=\"btn btn-sm btn-danger\"> <i class=\"fa fa-remove\"></i> </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            {% endfor %}

                            <div id=\"tab-7\" class=\"tab-pane\">
                                <div class=\"panel-body\">
                                    <form action=\"/user/create\">
                                        <div class=\"form-group\"><label class=\"control-label\">ФИО</label>
                                            <div class=\"\"><input required name=\"name\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Отдел</label>
                                            <select class=\"form-control\" name=\"department\">
                                                <option value=\"1\">Производство</option>
                                                <option value=\"2\">Менеджеры</option>
                                                <option value=\"3\">Работники склада</option>
                                                <option value=\"4\">Бухгалтерия</option>
                                                <option value=\"5\">Водители</option>
                                                <option value=\"6\">Закупщики</option>
                                            </select>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Должность</label>
                                            <div class=\"\"><input required name=\"position\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Логин</label>
                                            <div class=\"\"><input required name=\"login\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <div class=\"form-group\"><label class=\"control-label\">Пароль</label>
                                            <div class=\"\"><input required name=\"password\" type=\"text\" class=\"form-control\"></div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать пользователя</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/user/index.twig");
    }
}
