<?php

/* delivery.twig */
class __TwigTemplate_496585bfb7efd209a8683d97983421e8cdd312f5f621c5cc57dfbeeed8a280cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "delivery.twig", 1);
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
            <h1 id=\"title\">Доставка</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"summernote-content\">
            <p><span style=\"font-size: x-large;\">Время работы:</span><br><span style=\"font-size: x-large;\">Понедельник – пятница с <strong>9:00 до 19:00</strong></span><br><span style=\"font-size: x-large;\">Суббота с <strong>10:00 до 17:00</strong></span></p>
            <br>

            <p><span style=\"font-size: x-large;\">Способы оформления заказов:</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">-на сайте</span><br><span style=\"font-size: x-large;\">-по телефону </span><br><span style=\"font-size: x-large;\">-по электронной почте</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Бесплатная доставка по г. Москве(в пределах МКАД) осуществляется при заказе от <strong>5000</strong> рублей,</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">при заказе от 3500 до 5000 рублей-сумма доставки 350 руб, </span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">при заказе до 3500 руб-500руб.&nbsp;</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">Доставка осуществляется в рабочие дни&nbsp;</span><strong style=\"font-size: large;\">с <span style=\"font-size: x-large;\">10:00 до 19:00</span></strong><span style=\"font-size: x-large;\">. </span></p>
            <br>
            <p><span style=\"font-size: x-large;\">При размещении заказа доставка выполняется&nbsp;&nbsp;</span><strong style=\"font-size: large;\">через один рабочий день</strong><span style=\"font-size: x-large;\">.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Возможен самовывоз с нашего склада по адресу МОСКВА П.СОСЕНСКОЕ, 22-Й КМ КАЛУЖСКОГО ШОССЕ, ЗДАНИЕ №10(24-26 дебаркадер)&nbsp;.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Доставка в регионы РФ возможна через транспортные компании.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"><br></span></p>
            <br>
            <p><span style=\"font-size: x-large;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "delivery.twig";
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
            <h1 id=\"title\">Доставка</h1>
            <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
        </div>
        <div class=\"summernote-content\">
            <p><span style=\"font-size: x-large;\">Время работы:</span><br><span style=\"font-size: x-large;\">Понедельник – пятница с <strong>9:00 до 19:00</strong></span><br><span style=\"font-size: x-large;\">Суббота с <strong>10:00 до 17:00</strong></span></p>
            <br>

            <p><span style=\"font-size: x-large;\">Способы оформления заказов:</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">-на сайте</span><br><span style=\"font-size: x-large;\">-по телефону </span><br><span style=\"font-size: x-large;\">-по электронной почте</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Бесплатная доставка по г. Москве(в пределах МКАД) осуществляется при заказе от <strong>5000</strong> рублей,</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">при заказе от 3500 до 5000 рублей-сумма доставки 350 руб, </span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">при заказе до 3500 руб-500руб.&nbsp;</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"></span><span style=\"font-size: x-large;\">Доставка осуществляется в рабочие дни&nbsp;</span><strong style=\"font-size: large;\">с <span style=\"font-size: x-large;\">10:00 до 19:00</span></strong><span style=\"font-size: x-large;\">. </span></p>
            <br>
            <p><span style=\"font-size: x-large;\">При размещении заказа доставка выполняется&nbsp;&nbsp;</span><strong style=\"font-size: large;\">через один рабочий день</strong><span style=\"font-size: x-large;\">.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Возможен самовывоз с нашего склада по адресу МОСКВА П.СОСЕНСКОЕ, 22-Й КМ КАЛУЖСКОГО ШОССЕ, ЗДАНИЕ №10(24-26 дебаркадер)&nbsp;.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\">Доставка в регионы РФ возможна через транспортные компании.</span></p>
            <br>
            <p><span style=\"font-size: x-large;\"><br></span></p>
            <br>
            <p><span style=\"font-size: x-large;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
        </div>

    </div>
{% endblock %}", "delivery.twig", "/var/www/u0742521/data/www/eco/App/Site/View/delivery.twig");
    }
}
