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

/* job.twig */
class __TwigTemplate_8073640d253f7865861ea1a634eebc4a3856f666f981cce73ec5afafeb962314 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "job.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Вакансии</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"summernote-content\">
            <p>Требуется менеджер по продажам.</p>
            <p>Условия:</p>
            <p>График работы с 10.00 до 18.30‚ 5/2‚ сб.вс. – выходные</p>
            <p>Оформление по ТК РФ</p>
            <p>З/п (оклад + % от продаж )</p>
            <br>
            <p>Обязанности:</p>
            <p>Активный поиск‚ холодные звонки</p>
            <p>Подготовка коммерческих предложений</p>
            <p>Заключение договоров</p>
            <p>Выставление счетов</p>
            <p>Контроль оплаты</p>
            <p>Требования:</p>
            <p>Опыт работы в продажах приветствуется</p>
            <p>Уверенный пользователь ПК</p>
            <p>Опыт работы на должности менеджера по продажам</p>
            <p>Наличие авто не требуется</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "job.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1 id=\"title\">Вакансии</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"summernote-content\">
            <p>Требуется менеджер по продажам.</p>
            <p>Условия:</p>
            <p>График работы с 10.00 до 18.30‚ 5/2‚ сб.вс. – выходные</p>
            <p>Оформление по ТК РФ</p>
            <p>З/п (оклад + % от продаж )</p>
            <br>
            <p>Обязанности:</p>
            <p>Активный поиск‚ холодные звонки</p>
            <p>Подготовка коммерческих предложений</p>
            <p>Заключение договоров</p>
            <p>Выставление счетов</p>
            <p>Контроль оплаты</p>
            <p>Требования:</p>
            <p>Опыт работы в продажах приветствуется</p>
            <p>Уверенный пользователь ПК</p>
            <p>Опыт работы на должности менеджера по продажам</p>
            <p>Наличие авто не требуется</p>
        </div>
    </div>

{% endblock %}", "job.twig", "/var/www/u0742521/data/www/eco/App/Site/View/job.twig");
    }
}
