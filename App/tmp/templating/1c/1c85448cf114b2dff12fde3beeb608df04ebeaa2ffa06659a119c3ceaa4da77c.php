<?php

/* user/index.twig */
class __TwigTemplate_bb37fe216540f93a8f09f964c118090d0659235521285e4fc7c5b2414b3ff01d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "user/index.twig", 1);
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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) != 8)) {
                // line 11
                echo "                                    <li class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 13
            echo "                            ";
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
        // line 14
        echo "                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-100\">Добавить</a></li>
                        </ul>
                        <div class=\"tab-content \">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "                                <div id=\"tab-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) {
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
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 30
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["u"], "department", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))) {
                    // line 31
                    echo "                                                    <tr>
                                                        <td>";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "name", array()), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "position", array()), "html", null, true);
                    echo "</td>
                                                        <td>
";
                    // line 36
                    echo "                                                            <a href=\"/user/delete/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", array()), "html", null, true);
                    echo "\">

                                                                <button type=\"button\" class=\"btn btn-sm btn-danger\"> <i class=\"fa fa-remove\"></i> </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 43
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
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
        // line 49
        echo "
                            <div id=\"tab-100\" class=\"tab-pane\">
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
        return array (  184 => 49,  166 => 44,  160 => 43,  149 => 36,  144 => 33,  140 => 32,  137 => 31,  134 => 30,  130 => 29,  111 => 18,  94 => 17,  89 => 14,  75 => 13,  63 => 11,  60 => 10,  43 => 9,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content animated fadeIn\">
        <div class=\"row m-t-lg\">
            <div class=\"col-lg-12\">
                <div class=\"tabs-container\">
                    <div class=\"tabs-left\">
                        <ul class=\"nav nav-tabs\">
                            {% for i in departments %}
                                {% if i.id != 8 %}
                                    <li class=\"{% if loop.index == 1 %}active{% endif %}\"><a data-toggle=\"tab\" href=\"#tab-{{ i.id }}\">{{ i.name }}</a></li>
                                {% endif %}
                            {% endfor %}
                            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-100\">Добавить</a></li>
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

                            <div id=\"tab-100\" class=\"tab-pane\">
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
