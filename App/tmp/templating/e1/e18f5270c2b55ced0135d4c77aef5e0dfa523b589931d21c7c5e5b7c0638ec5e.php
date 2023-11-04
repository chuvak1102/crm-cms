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

/* termoprint.twig */
class __TwigTemplate_3da540bcb9d36f128938dd61413ce524f8c125401e3bbcc67d1d2f54f4f949ca extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "termoprint.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"row\">
        <div class=\"bread\">
            <h1>НАКЛЕЙКИ/ТЕРМОЭТИКЕТКИ С ПЕЧАТЬЮ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"shop_cat_text\"><p><span style=\"color: #99cc00; font-size: x-large;\">ИЗГОТОВЛЕНИЕ НАКЛЕЕК С ДИЗАЙНОМ ЗАКАЗЧИКА МЕТОДОМ ФЛЕКСОПЕЧАТИ.</span></p>
            <p><br><span style=\"color: #000000; font-size: large;\">Для расчета стоимости тиража необходимо уточнить информацию:</span></p>
            <br>

            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Количество (тираж) минимальный 1000шт.</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\"></span><span style=\"font-size: large;\">-Материал (бумага/пленка)</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Количество цветов печати (печать в один/два/три и пр цвета)</span><br><span style=\"font-size: large;\"></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Размер (см.) и формат (круг/квадрат/прямоугольник и пр)</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">Срок производства 5 рабочих дней.</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\">Просьба отправлять заявки на расчет на эл. почту:</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\"><span><strong>ecopackingmsk@gmail.com или info@ecopacking.ru</strong> , </span></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\"><span>а так же по тел. +7(495) 923 -98-78</span></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\"><br></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">&nbsp;&nbsp;</span></p>
            <br>
            <p><span style=\"font-size: large;\">&nbsp;<img src=\"http://ecopacking.ru/userfiles/editor/large/1802_nakleyki_50_mm.png\" alt=\"\" title=\"\" width=\"344\" height=\"1200\"></span></p></div>
        <div class=\"clear\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "termoprint.twig";
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
    <div class=\"row\">
        <div class=\"bread\">
            <h1>НАКЛЕЙКИ/ТЕРМОЭТИКЕТКИ С ПЕЧАТЬЮ</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"shop_cat_text\"><p><span style=\"color: #99cc00; font-size: x-large;\">ИЗГОТОВЛЕНИЕ НАКЛЕЕК С ДИЗАЙНОМ ЗАКАЗЧИКА МЕТОДОМ ФЛЕКСОПЕЧАТИ.</span></p>
            <p><br><span style=\"color: #000000; font-size: large;\">Для расчета стоимости тиража необходимо уточнить информацию:</span></p>
            <br>

            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Количество (тираж) минимальный 1000шт.</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\"></span><span style=\"font-size: large;\">-Материал (бумага/пленка)</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Количество цветов печати (печать в один/два/три и пр цвета)</span><br><span style=\"font-size: large;\"></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">-Размер (см.) и формат (круг/квадрат/прямоугольник и пр)</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">Срок производства 5 рабочих дней.</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\">Просьба отправлять заявки на расчет на эл. почту:</span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\"><span><strong>ecopackingmsk@gmail.com или info@ecopacking.ru</strong> , </span></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: x-large;\"><span>а так же по тел. +7(495) 923 -98-78</span></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\"><br></span></p>
            <br>
            <p style=\"text-align: left;\"><span style=\"font-size: large;\">&nbsp;&nbsp;</span></p>
            <br>
            <p><span style=\"font-size: large;\">&nbsp;<img src=\"http://ecopacking.ru/userfiles/editor/large/1802_nakleyki_50_mm.png\" alt=\"\" title=\"\" width=\"344\" height=\"1200\"></span></p></div>
        <div class=\"clear\"></div>
    </div>
{% endblock %}
", "termoprint.twig", "/var/www/u0742521/data/www/eco/App/Site/View/termoprint.twig");
    }
}
