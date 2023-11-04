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

/* news.twig */
class __TwigTemplate_fa8fbc7376e7203c2dc67e0147a7824ce2aa3c53965cf0bac6bf11114950ac26 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "news.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"bread\">
        <h1>НОВОСТИ</h1>
        <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
    </div>
    <style>
        .news_list .news {
            border: 1px solid #ececec;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
    <div class=\"news_list\">
        <div class=\"news\">
            <div class=\"news_date\">31 декабря</div>
            <div class=\"news_name\"><a
                        href=\"http://ecopacking.ru/novosti/rezhim-raboty-v-novogodnie-prazdniki-2018-goda/\">режим работы
                    в новогодние праздники 2018 года</a></div>
            <div class=\"news_anons\"><p>Уважаемые клиенты, поздравляем Вас с новым годом и рождеством! Сообщаем Вам.что
                    мы работаем для Вас 3-5 января,далее с 9-го.</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">04 июля</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-stakany-krasnye/\">Двухслойные
                    стаканы \"красные\"</a></div>
            <div class=\"news_img\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-stakany-krasnye/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/1407_red-300.jpg\" width=\"150\" height=\"150\"
                            alt=\"Двухслойные стаканы &quot;красные&quot;\"
                            title=\"Двухслойные стаканы &quot;красные&quot;\"></a></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">10 января</div>
            <div class=\"news_name\"><a
                        href=\"http://ecopacking.ru/novosti/aktsiya-na-bumazhnye-stakany-dlya-goryachikh-napit/\">Акция на
                    бумажные стаканы для горячих напитков</a></div>
            <div class=\"news_img\"><a
                        href=\"http://ecopacking.ru/novosti/aktsiya-na-bumazhnye-stakany-dlya-goryachikh-napit/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/890_aktsiya-2016.jpg\" width=\"150\"
                            height=\"120\" alt=\"Акция на бумажные стаканы для горячих напитков\"
                            title=\"Акция на бумажные стаканы для горячих напитков\"></a></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">08 декабря</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-bumazhnye-stakany-250-ml350-ml/\">Двухслойные
                    бумажные стаканы 250 мл/350 мл</a></div>
            <div class=\"news_img\"><a
                        href=\"http://ecopacking.ru/novosti/dvukhsloynye-bumazhnye-stakany-250-ml350-ml/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/889_kraft.png\" width=\"124\" height=\"150\"
                            alt=\"Двухслойные бумажные стаканы 250 мл/350 мл\"
                            title=\"Двухслойные бумажные стаканы 250 мл/350 мл\"></a></div>
            <div class=\"news_anons\"><p>Двухслойный бумажный стакан 250 мл \"КРАФТ\"</p>
                <p>Двухслойный бумажный стакан 350 мл \"КРАФТ\"</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">29 ноября</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/konverty-dlya-priborov/\">Конверты для
                    приборов</a></div>
            <div class=\"news_img\"><a href=\"http://ecopacking.ru/novosti/konverty-dlya-priborov/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/850_konverty-dlya-priborov.jpg\" width=\"150\"
                            height=\"150\" alt=\"Конверты для приборов\" title=\"Конверты для приборов\"></a></div>
            <div class=\"news_anons\"><p>Уважаемые клиенты!Мы рады предложить Вам конверты для приборов DUNI&nbsp;SACCHETTO-оригинальное
                    решение для сервировки стола.</p>
                <p>DUNI&nbsp;SACCHETTO-это высокое качество и разнообразие цветов.</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">04 октября</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/ekoposuda/\">Нанесение логотипа на костеры</a>
            </div>
            <div class=\"news_anons\"><p><span>Мы рады предложить костеры с Вашим логотипом!</span></p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">03 мая</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/novost-v-razdel/\">Нанесение логотипа на
                    салфетки и подсвечники.</a></div>
            <div class=\"news_anons\"><p>Мы рады предложить Вам салфетки и подсвечники с логотипом!&nbsp;</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">28 апреля</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/testovaya-novost/\">Лого на бумажных
                    стаканах</a></div>
            <div class=\"news_anons\"><p>Наша компания рада предложить логотипирование белых бумажных стаканов от
                    100шт.</p></div>
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "news.twig";
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
    <div class=\"bread\">
        <h1>НОВОСТИ</h1>
        <div class=\"phone-book\"><a href=\"/korzina-tovarov/\">Корзина товаров</a></div>
    </div>
    <style>
        .news_list .news {
            border: 1px solid #ececec;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
    <div class=\"news_list\">
        <div class=\"news\">
            <div class=\"news_date\">31 декабря</div>
            <div class=\"news_name\"><a
                        href=\"http://ecopacking.ru/novosti/rezhim-raboty-v-novogodnie-prazdniki-2018-goda/\">режим работы
                    в новогодние праздники 2018 года</a></div>
            <div class=\"news_anons\"><p>Уважаемые клиенты, поздравляем Вас с новым годом и рождеством! Сообщаем Вам.что
                    мы работаем для Вас 3-5 января,далее с 9-го.</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">04 июля</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-stakany-krasnye/\">Двухслойные
                    стаканы \"красные\"</a></div>
            <div class=\"news_img\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-stakany-krasnye/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/1407_red-300.jpg\" width=\"150\" height=\"150\"
                            alt=\"Двухслойные стаканы &quot;красные&quot;\"
                            title=\"Двухслойные стаканы &quot;красные&quot;\"></a></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">10 января</div>
            <div class=\"news_name\"><a
                        href=\"http://ecopacking.ru/novosti/aktsiya-na-bumazhnye-stakany-dlya-goryachikh-napit/\">Акция на
                    бумажные стаканы для горячих напитков</a></div>
            <div class=\"news_img\"><a
                        href=\"http://ecopacking.ru/novosti/aktsiya-na-bumazhnye-stakany-dlya-goryachikh-napit/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/890_aktsiya-2016.jpg\" width=\"150\"
                            height=\"120\" alt=\"Акция на бумажные стаканы для горячих напитков\"
                            title=\"Акция на бумажные стаканы для горячих напитков\"></a></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">08 декабря</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/dvukhsloynye-bumazhnye-stakany-250-ml350-ml/\">Двухслойные
                    бумажные стаканы 250 мл/350 мл</a></div>
            <div class=\"news_img\"><a
                        href=\"http://ecopacking.ru/novosti/dvukhsloynye-bumazhnye-stakany-250-ml350-ml/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/889_kraft.png\" width=\"124\" height=\"150\"
                            alt=\"Двухслойные бумажные стаканы 250 мл/350 мл\"
                            title=\"Двухслойные бумажные стаканы 250 мл/350 мл\"></a></div>
            <div class=\"news_anons\"><p>Двухслойный бумажный стакан 250 мл \"КРАФТ\"</p>
                <p>Двухслойный бумажный стакан 350 мл \"КРАФТ\"</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">29 ноября</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/konverty-dlya-priborov/\">Конверты для
                    приборов</a></div>
            <div class=\"news_img\"><a href=\"http://ecopacking.ru/novosti/konverty-dlya-priborov/\"><img
                            src=\"http://ecopacking.ru/userfiles/news/small/850_konverty-dlya-priborov.jpg\" width=\"150\"
                            height=\"150\" alt=\"Конверты для приборов\" title=\"Конверты для приборов\"></a></div>
            <div class=\"news_anons\"><p>Уважаемые клиенты!Мы рады предложить Вам конверты для приборов DUNI&nbsp;SACCHETTO-оригинальное
                    решение для сервировки стола.</p>
                <p>DUNI&nbsp;SACCHETTO-это высокое качество и разнообразие цветов.</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">04 октября</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/ekoposuda/\">Нанесение логотипа на костеры</a>
            </div>
            <div class=\"news_anons\"><p><span>Мы рады предложить костеры с Вашим логотипом!</span></p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">03 мая</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/novost-v-razdel/\">Нанесение логотипа на
                    салфетки и подсвечники.</a></div>
            <div class=\"news_anons\"><p>Мы рады предложить Вам салфетки и подсвечники с логотипом!&nbsp;</p></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"news\">
            <div class=\"news_date\">28 апреля</div>
            <div class=\"news_name\"><a href=\"http://ecopacking.ru/novosti/testovaya-novost/\">Лого на бумажных
                    стаканах</a></div>
            <div class=\"news_anons\"><p>Наша компания рада предложить логотипирование белых бумажных стаканов от
                    100шт.</p></div>
            <div class=\"clear\"></div>
        </div>
    </div>
{% endblock %}", "news.twig", "/var/www/u0742521/data/www/eco/App/Site/View/news.twig");
    }
}
