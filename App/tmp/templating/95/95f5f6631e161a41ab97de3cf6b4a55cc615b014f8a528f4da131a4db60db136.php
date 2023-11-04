<?php

/* supplier/list_create.twig */
class __TwigTemplate_95a8629939404c803f4c5c92ee8b337a4920623eeb05e717787d3995c0c65339 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "supplier/list_create.twig", 1);
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
                            <form action=\"/supplier/list/create/\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\"Название\"></td>
                                    </tr>
                                    <tr>
                                        <td>Email, через запятую</td>
                                        <td><input name=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email, через запятую\"></td>
                                    </tr>
                                    <tr>
                                        <td>ООО</td>
                                        <td><input name=\"ooo\" class=\"form-control\" type=\"text\" placeholder=\"ООО\"></td>
                                    </tr>
                                    <tr>
                                        <td>ИНН</td>
                                        <td><input name=\"inn\" class=\"form-control\" type=\"text\" placeholder=\"ИНН\"></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес склада</td>
                                        <td><input name=\"warehouse_address\" class=\"form-control\" type=\"text\" placeholder=\"Адрес склада\"></td>
                                    </tr>
                                    <tr>
                                        <td>Время работы</td>
                                        <td><input name=\"work_time\" class=\"form-control\" type=\"text\" placeholder=\"Время работы\"></td>
                                    </tr>
                                    <tr>
                                        <td>ФИО</td>
                                        <td><input name=\"fio\" class=\"form-control\" type=\"text\" placeholder=\"ФИО\"></td>
                                    </tr>
                                    <tr>
                                        <td>Телефоны, через запятую</td>
                                        <td><input name=\"phone\" class=\"form-control\" type=\"text\" placeholder=\"Телефоны, через запятую\"></td>
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
        return "supplier/list_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  15 => 1,);
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
                            <form action=\"/supplier/list/create/\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\"Название\"></td>
                                    </tr>
                                    <tr>
                                        <td>Email, через запятую</td>
                                        <td><input name=\"email\" class=\"form-control\" type=\"text\" placeholder=\"Email, через запятую\"></td>
                                    </tr>
                                    <tr>
                                        <td>ООО</td>
                                        <td><input name=\"ooo\" class=\"form-control\" type=\"text\" placeholder=\"ООО\"></td>
                                    </tr>
                                    <tr>
                                        <td>ИНН</td>
                                        <td><input name=\"inn\" class=\"form-control\" type=\"text\" placeholder=\"ИНН\"></td>
                                    </tr>
                                    <tr>
                                        <td>Адрес склада</td>
                                        <td><input name=\"warehouse_address\" class=\"form-control\" type=\"text\" placeholder=\"Адрес склада\"></td>
                                    </tr>
                                    <tr>
                                        <td>Время работы</td>
                                        <td><input name=\"work_time\" class=\"form-control\" type=\"text\" placeholder=\"Время работы\"></td>
                                    </tr>
                                    <tr>
                                        <td>ФИО</td>
                                        <td><input name=\"fio\" class=\"form-control\" type=\"text\" placeholder=\"ФИО\"></td>
                                    </tr>
                                    <tr>
                                        <td>Телефоны, через запятую</td>
                                        <td><input name=\"phone\" class=\"form-control\" type=\"text\" placeholder=\"Телефоны, через запятую\"></td>
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
{% endblock %}", "supplier/list_create.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/supplier/list_create.twig");
    }
}
