<?php

/* job.twig */
class __TwigTemplate_3990c0e0b5d7a9b6a3e8fad8206a6116dbf9ab40b011c457739f83968c928b11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "job.twig", 1);
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
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
