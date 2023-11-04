<?php

/* termoprint.twig */
class __TwigTemplate_07f42e9a6edd96622f4a6759f06b3de33fed115d64d4aaf595f74073b92baa2e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "termoprint.twig", 1);
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
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
