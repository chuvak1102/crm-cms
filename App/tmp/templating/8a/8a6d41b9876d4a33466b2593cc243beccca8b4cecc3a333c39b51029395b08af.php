<?php

/* register.twig */
class __TwigTemplate_1fb959dbd81ab10d07834ef60f95e35f8b3acda4f5b3f9abf12ac6c900333da6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "register.twig", 1);
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
        echo "    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Регистрация</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/register\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>Ваше имя (или название компании)<span>*</span></label>
                    <input name=\"name\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 13
        if (($context["submit"] ?? null)) {
            // line 14
            echo "                        ";
            if (twig_test_empty(($context["name"] ?? null))) {
                // line 15
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span></label>
                    <input name=\"email\" type=\"text\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 22
        if (($context["submit"] ?? null)) {
            // line 23
            echo "                        ";
            if (twig_test_empty(($context["email"] ?? null))) {
                // line 24
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 26
            echo "                        ";
            if ((($context["email_ok"] ?? null) == 0)) {
                // line 27
                echo "                            <p>Не верный email</p>
                        ";
            }
            // line 29
            echo "                        ";
            if (($context["exist"] ?? null)) {
                // line 30
                echo "                            <p>Пользователь уже существует</p>
                        ";
            }
            // line 32
            echo "                    ";
        }
        // line 33
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (английские буквы и цифры)<span>*</span></label>
                    <input name=\"password\" type=\"password\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 37
        if (($context["submit"] ?? null)) {
            // line 38
            echo "                        ";
            if (twig_test_empty(($context["password"] ?? null))) {
                // line 39
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 41
            echo "                        ";
            if ((($context["password_type"] ?? null) == 0)) {
                // line 42
                echo "                            <p>Только английские буквы и цифры</p>
                        ";
            }
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (подтверждение)<span>*</span></label>
                    <input name=\"confirm\" type=\"password\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["confirm"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 49
        if (($context["submit"] ?? null)) {
            // line 50
            echo "                        ";
            if (twig_test_empty(($context["confirm"] ?? null))) {
                // line 51
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 53
            echo "                        ";
            if ((($context["password_ok"] ?? null) == 0)) {
                // line 54
                echo "                            <p>Пароли не совпадают</p>
                        ";
            }
            // line 56
            echo "                    ";
        }
        // line 57
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
        return array (  153 => 57,  150 => 56,  146 => 54,  143 => 53,  139 => 51,  136 => 50,  134 => 49,  130 => 48,  125 => 45,  122 => 44,  118 => 42,  115 => 41,  111 => 39,  108 => 38,  106 => 37,  102 => 36,  97 => 33,  94 => 32,  90 => 30,  87 => 29,  83 => 27,  80 => 26,  76 => 24,  73 => 23,  71 => 22,  67 => 21,  62 => 18,  59 => 17,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Регистрация</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/register\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>Ваше имя (или название компании)<span>*</span></label>
                    <input name=\"name\" type=\"text\" value=\"{{ name }}\">
                    {% if submit %}
                        {% if name is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>E-mail:<span>*</span></label>
                    <input name=\"email\" type=\"text\" value=\"{{ email }}\">
                    {% if submit %}
                        {% if email is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                        {% if email_ok == 0 %}
                            <p>Не верный email</p>
                        {% endif %}
                        {% if exist %}
                            <p>Пользователь уже существует</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (английские буквы и цифры)<span>*</span></label>
                    <input name=\"password\" type=\"password\" value=\"{{ password }}\">
                    {% if submit %}
                        {% if password is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                        {% if password_type == 0 %}
                            <p>Только английские буквы и цифры</p>
                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (подтверждение)<span>*</span></label>
                    <input name=\"confirm\" type=\"password\" value=\"{{ confirm }}\">
                    {% if submit %}
                        {% if confirm is empty %}
                            <p>Поле обязательно для заполнения</p>
                        {% endif %}
                        {% if password_ok == 0 %}
                            <p>Пароли не совпадают</p>
                        {% endif %}
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
