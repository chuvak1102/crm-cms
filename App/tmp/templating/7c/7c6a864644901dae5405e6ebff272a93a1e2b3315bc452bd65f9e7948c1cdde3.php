<?php

/* supplier/list_edit.twig */
class __TwigTemplate_96e597d11ee06a6095fce2c8f04cfbb6dfcca02a7e48310b82fc17adba782c99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "supplier/list_edit.twig", 1);
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
                            <form action=\"/supplier/list/edit/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "name", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Email, через запятую</td>
                                        <td><input name=\"email\" class=\"form-control\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "email", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>ООО</td>
                                        <td><input name=\"ooo\" class=\"form-control\" type=\"text\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "ooo", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>ИНН</td>
                                        <td><input name=\"inn\" class=\"form-control\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "inn", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес склада</td>
                                        <td><input name=\"warehouse_address\" class=\"form-control\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "warehouse_address", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Время работы</td>
                                        <td><input name=\"work_time\" class=\"form-control\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "work_time", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>ФИО</td>
                                        <td><input name=\"fio\" class=\"form-control\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "fio", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td>Телефоны, через запятую</td>
                                        <td><input name=\"phone\" class=\"form-control\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["supplier"] ?? null), "phone", array()), "html", null, true);
        echo "\"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                    </tr>
                                </table>
                            </form>
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
        return "supplier/list_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  92 => 37,  85 => 33,  78 => 29,  71 => 25,  64 => 21,  57 => 17,  50 => 13,  43 => 9,  35 => 3,  32 => 2,  15 => 1,);
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
                            <form action=\"/supplier/list/edit/{{ supplier.id }}\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\" value=\"{{ supplier.name }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>Email, через запятую</td>
                                        <td><input name=\"email\" class=\"form-control\" type=\"text\" value=\"{{ supplier.email }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>ООО</td>
                                        <td><input name=\"ooo\" class=\"form-control\" type=\"text\" value=\"{{ supplier.ooo }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>ИНН</td>
                                        <td><input name=\"inn\" class=\"form-control\" type=\"text\" value=\"{{ supplier.inn }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес склада</td>
                                        <td><input name=\"warehouse_address\" class=\"form-control\" type=\"text\" value=\"{{ supplier.warehouse_address }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>Время работы</td>
                                        <td><input name=\"work_time\" class=\"form-control\" type=\"text\" value=\"{{ supplier.work_time }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>ФИО</td>
                                        <td><input name=\"fio\" class=\"form-control\" type=\"text\" value=\"{{ supplier.fio }}\"></td>
                                    </tr>
                                    <tr>
                                        <td>Телефоны, через запятую</td>
                                        <td><input name=\"phone\" class=\"form-control\" type=\"text\" value=\"{{ supplier.phone }}\"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button name=\"submit\" value=\"submit\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "supplier/list_edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/supplier/list_edit.twig");
    }
}
