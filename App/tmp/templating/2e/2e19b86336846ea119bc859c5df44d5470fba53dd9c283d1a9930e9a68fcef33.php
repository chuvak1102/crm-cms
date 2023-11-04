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

/* about.twig */
class __TwigTemplate_300cfd57e8f7091241987c89e11900667ca83157fed7faadb6c82fd613c111b6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "about.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"content-right-wp\">
        <div class=\"bread\">
            <h1>О КОМПАНИИ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <p><strong><span style=\"font-size: large; color: #000000;\">Компания \"Экопакинг\" занимается продажей ,производством упаковки и одноразовой посуды для предприятий общественного питания и сферы гостеприимства.В нашем ассортименте широкий спектр товаров различного назначения.</span></strong></p>
        <br>
        <p><strong><span style=\"font-size: large; color: #000000;\">Одно из основных направлений деятельности нашей компании-производство упаковки с индивидуальным дизайном.Компания имеет успешный опыт производства упаковки,начиная с уровня её разработки.</span></strong></p>
        <br>
        <p><strong><span style=\"font-size: large; color: #000000;\">Основные принципы в нашей работе-это индивидуальный подход к&nbsp; клиенту,качество продукции,высокий сервис.Наша задача предлагать качественную продукцию по доступным ценам и радовать клиентов своей работой!</span></strong></p>
        <br>
        <p><span style=\"font-size: large; color: #000000;\">Наименование: ООО «ЭкоПак» </span><br><span style=\"font-size: large; color: #000000;\">Юридический адрес: 117449, РФ, г. Москва, ул. Винокурова, д.9, кв. 53. </span><br><span style=\"font-size: large; color: #000000;\">Банковские данные: ИНН/КПП: 7727280804/772701001 </span><br><span style=\"font-size: large; color: #000000;\">Расч. счет No 40702810800000200042 в филиал 7701 Банка ВТБ (ПАО) г. Москва</span><br><span style=\"font-size: large; color: #000000;\">к/с No 3101810345250000745</span><br><span style=\"font-size: large; color: #000000;\">БИК 044525745&nbsp;</span><br><span style=\"font-size: large; color: #000000;\">ОКПО 52716050 </span><br><span style=\"font-size: large; color: #000000;\">ОКАТО 45293554000 </span><br><span style=\"font-size: large; color: #000000;\">ОГРН No 1167746076145 от 20.01.2016 </span><br><span style=\"font-size: large; color: #000000;\">ОКТМО 45397000</span></p>
        <br>
        <p><br><span style=\"font-size: large; color: #000000;\">Телефон: +7(495)923-98-78 </span><br><span style=\"font-size: large; color: #000000;\">Электронный адрес: ecopackingmsk@gmail.com</span></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "about.twig";
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
            <h1>О КОМПАНИИ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <p><strong><span style=\"font-size: large; color: #000000;\">Компания \"Экопакинг\" занимается продажей ,производством упаковки и одноразовой посуды для предприятий общественного питания и сферы гостеприимства.В нашем ассортименте широкий спектр товаров различного назначения.</span></strong></p>
        <br>
        <p><strong><span style=\"font-size: large; color: #000000;\">Одно из основных направлений деятельности нашей компании-производство упаковки с индивидуальным дизайном.Компания имеет успешный опыт производства упаковки,начиная с уровня её разработки.</span></strong></p>
        <br>
        <p><strong><span style=\"font-size: large; color: #000000;\">Основные принципы в нашей работе-это индивидуальный подход к&nbsp; клиенту,качество продукции,высокий сервис.Наша задача предлагать качественную продукцию по доступным ценам и радовать клиентов своей работой!</span></strong></p>
        <br>
        <p><span style=\"font-size: large; color: #000000;\">Наименование: ООО «ЭкоПак» </span><br><span style=\"font-size: large; color: #000000;\">Юридический адрес: 117449, РФ, г. Москва, ул. Винокурова, д.9, кв. 53. </span><br><span style=\"font-size: large; color: #000000;\">Банковские данные: ИНН/КПП: 7727280804/772701001 </span><br><span style=\"font-size: large; color: #000000;\">Расч. счет No 40702810800000200042 в филиал 7701 Банка ВТБ (ПАО) г. Москва</span><br><span style=\"font-size: large; color: #000000;\">к/с No 3101810345250000745</span><br><span style=\"font-size: large; color: #000000;\">БИК 044525745&nbsp;</span><br><span style=\"font-size: large; color: #000000;\">ОКПО 52716050 </span><br><span style=\"font-size: large; color: #000000;\">ОКАТО 45293554000 </span><br><span style=\"font-size: large; color: #000000;\">ОГРН No 1167746076145 от 20.01.2016 </span><br><span style=\"font-size: large; color: #000000;\">ОКТМО 45397000</span></p>
        <br>
        <p><br><span style=\"font-size: large; color: #000000;\">Телефон: +7(495)923-98-78 </span><br><span style=\"font-size: large; color: #000000;\">Электронный адрес: ecopackingmsk@gmail.com</span></p>
    </div>
{% endblock %}", "about.twig", "/var/www/u0742521/data/www/eco/App/Site/View/about.twig");
    }
}
