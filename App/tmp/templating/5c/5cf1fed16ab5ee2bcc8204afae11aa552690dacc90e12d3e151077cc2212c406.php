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

/* register.twig */
class __TwigTemplate_22d87d374c18e316ae3cb797773fe5f352a792d156b73e63d0d224047a3d46be extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Регистрация</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/submit\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>Ваше имя:<span>*</span></label>
                    <input name=\"company_name\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
                    ";
        // line 13
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 13))) {
            // line 14
            echo "                        <p>Поле обязательно для заполнения</p>
                    ";
        }
        // line 16
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span></label>
                    <input name=\"email\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                    ";
        // line 20
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 20))) {
            // line 21
            echo "                        <p>Поле обязательно для заполнения</p>
                    ";
        }
        // line 23
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль<span>*</span></label>
                    <input name=\"password\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                    ";
        // line 27
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 27))) {
            // line 28
            echo "                        <p>Поле обязательно для заполнения</p>
                    ";
        }
        // line 30
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (подтверждение)<span>*</span></label>
                    <input name=\"password_confirm\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
                    ";
        // line 34
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 34))) {
            // line 35
            echo "                        <p>Поле обязательно для заполнения</p>
                    ";
        }
        // line 37
        echo "                </div>
                <div class=\"withlogo-row\">
                    <button class=\"btn\" type=\"submit\" name=\"submit\" value=\"register\">Продолжить</button>
                </div>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  112 => 35,  110 => 34,  106 => 33,  101 => 30,  97 => 28,  95 => 27,  91 => 26,  86 => 23,  82 => 21,  80 => 20,  76 => 19,  71 => 16,  67 => 14,  65 => 13,  61 => 12,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Регистрация</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/submit\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>Ваше имя:<span>*</span></label>
                    <input name=\"company_name\" type=\"text\" value=\"{{ client.name }}\">
                    {% if client.name is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span></label>
                    <input name=\"email\" type=\"text\" value=\"{{ client.email }}\">
                    {% if client.email is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль<span>*</span></label>
                    <input name=\"password\" type=\"text\" value=\"{{ client.phone }}\">
                    {% if client.email is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (подтверждение)<span>*</span></label>
                    <input name=\"password_confirm\" type=\"text\" value=\"{{ client.phone }}\">
                    {% if client.email is empty %}
                        <p>Поле обязательно для заполнения</p>
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <button class=\"btn\" type=\"submit\" name=\"submit\" value=\"register\">Продолжить</button>
                </div>
            </form>
        </div>
    </div>

{% endblock %}", "register.twig", "/var/www/u0742521/data/www/eco/App/Site/View/register.twig");
    }
}
