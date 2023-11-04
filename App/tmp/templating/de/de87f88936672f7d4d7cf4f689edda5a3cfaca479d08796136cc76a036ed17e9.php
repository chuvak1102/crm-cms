<?php

/* client/create.twig */
class __TwigTemplate_139fbb5330783378f2700333ab9790fea7b5ecf248d3765992b216949d7163a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "client/create.twig", 1);
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
                            <form action=\"/client/create\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\"></td>
                                    </tr>
                                    <tr>
                                        <td>Логин / email</td>
                                        <td><input name=\"login\" class=\"form-control\" type=\"text\"></td>
                                    </tr>
                                    <tr>
                                        <td>Пароль</td>
                                        <td><input name=\"password\" class=\"form-control\" type=\"text\" value=\"12345678\"></td>
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
        return "client/create.twig";
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
                            <form action=\"/client/create\" method=\"post\">
                                <table class=\"table table-hover issue-tracker\" style=\"width: 100%\">
                                    <tr>
                                        <td>Название</td>
                                        <td><input name=\"name\" class=\"form-control\" type=\"text\"></td>
                                    </tr>
                                    <tr>
                                        <td>Логин / email</td>
                                        <td><input name=\"login\" class=\"form-control\" type=\"text\"></td>
                                    </tr>
                                    <tr>
                                        <td>Пароль</td>
                                        <td><input name=\"password\" class=\"form-control\" type=\"text\" value=\"12345678\"></td>
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
{% endblock %}", "client/create.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/client/create.twig");
    }
}
