<?php

/* restore.twig */
class __TwigTemplate_8b17e00e36ee44220af018ddb1d6f5a0fb7716bb157ba4c0eab68e0cbe1f20dd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "restore.twig", 1);
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
            <h1 id=\"title\">Восстановить пароль</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/restore\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>E-mail, указанный при регистрации<span>*</span></label>
                    <input name=\"email\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 13
        if (($context["submit"] ?? null)) {
            // line 14
            echo "                        ";
            if (twig_test_empty(($context["email"] ?? null))) {
                // line 15
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 17
            echo "                        ";
            if ((($context["email_ok"] ?? null) == 0)) {
                // line 18
                echo "                            <p>Не верный email</p>
                        ";
            }
            // line 20
            echo "                        ";
            if (($context["exist"] ?? null)) {
                // line 21
                echo "                            <p>Пользователь уже существует</p>
                        ";
            }
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (английские буквы и цифры)<span>*</span></label>
                    <input name=\"password\" type=\"password\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 28
        if (($context["submit"] ?? null)) {
            // line 29
            echo "                        ";
            if (twig_test_empty(($context["password"] ?? null))) {
                // line 30
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 32
            echo "                        ";
            if ((($context["password_type"] ?? null) == 0)) {
                // line 33
                echo "                            <p>Только английские буквы и цифры</p>
                        ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                </div>
                <div class=\"withlogo-row\">
                    <label>Пароль (подтверждение)<span>*</span></label>
                    <input name=\"confirm\" type=\"password\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["confirm"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 40
        if (($context["submit"] ?? null)) {
            // line 41
            echo "                        ";
            if (twig_test_empty(($context["confirm"] ?? null))) {
                // line 42
                echo "                            <p>Поле обязательно для заполнения</p>
                        ";
            }
            // line 44
            echo "                        ";
            if ((($context["password_ok"] ?? null) == 0)) {
                // line 45
                echo "                            <p>Пароли не совпадают</p>
                        ";
            }
            // line 47
            echo "                    ";
        }
        // line 48
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
        return "restore.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  129 => 47,  125 => 45,  122 => 44,  118 => 42,  115 => 41,  113 => 40,  109 => 39,  104 => 36,  101 => 35,  97 => 33,  94 => 32,  90 => 30,  87 => 29,  85 => 28,  81 => 27,  76 => 24,  73 => 23,  69 => 21,  66 => 20,  62 => 18,  59 => 17,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Восстановить пароль</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"row\">
            <form method=\"POST\" action=\"/restore\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                <div class=\"withlogo-row\">
                    <label>E-mail, указанный при регистрации<span>*</span></label>
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
{% endblock %}", "restore.twig", "/var/www/u0742521/data/www/eco/App/Site/View/restore.twig");
    }
}
