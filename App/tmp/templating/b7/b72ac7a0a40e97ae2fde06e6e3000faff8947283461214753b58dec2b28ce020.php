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

/* index.twig */
class __TwigTemplate_5540eef61232bf31bd05435725b5c84bd9b25a41dd0bff00842e4eab34836bcb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
        <div class=\"slider-cont\">
            <div class=\"index-slider\">
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/korobochka-dlya-edy-15015090-quotkraftquot\"><img src=\"/files/index-slider/banner-burger-boks_11.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/supnitsa-s-kryshkoj-300ml-belaya-eco-soup-12w\"><img src=\"/files/index-slider/168009_15.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/kartonnyj-kontejner-s-plastikovoj-kryshkoj-750ml-quotkraftquot\"><img src=\"/files/index-slider/162671_17.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-salata/kartonnyj-kontejner-s-plastikovoj-kryshkoj-750ml-quotkraftquot\"><img src=\"/files/index-slider/green-business-plan-business-presentation-2_21.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-fast-fuda/korobka-dlya-kartofelyafri-150180gr-bolshaya-eco-fry-l\"><img src=\"/files/index-slider/img_7349_18.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-fast-fuda/korobka-dlya-kartofelyafri-150180gr-bolshaya-eco-fry-l\"><img src=\"/files/index-slider/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <h2 class=\"index-head\">Наша продукция</h2>
        <ul class=\"index-catalog main\">
            <li>
                <a href=\"/katalog-tovarov/bumazhnye-stakany-s-logotipom\">
                    <img src=\"/files/mini/2016_bumazhnye-stakany-s-individ.png\" alt=\"\">
                    <p>Бумажные стаканы с индивидуальным дизайном</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-quotfastfoodquot-c-dizajnom\">
                    <img src=\"/files/mini/1950_upakovka-dlya-fastfood-c-dizayn.png\" alt=\"\">
                    <p>Картонная упаковка для \"fastfood\" c дизайном</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-pervykh-blyud\">
                    <img src=\"/files/mini/1608_upakovka-dlya-pervykh-blyud.png\" alt=\"\">
                    <p>Упаковка для первых блюд</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-salata\">
                    <img src=\"/files/mini/1438_upakovka-dlya-salata.png\" alt=\"\">
                    <p>Упаковка для салата</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-sendvichejbuterbrodov\">
                    <img src=\"/files/mini/1709_-dlya-sendvicheyrollov.png\" alt=\"\">
                    <p> для сэндвичей/роллов</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/konditerskaya-upakovka\">
                    <img src=\"/files/mini/1700_konditerskaya-upakovka.png\" alt=\"\">
                    <p>Кондитерская упаковка</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-quotaziatskaya-kukhnyaquot\">
                    <img src=\"/files/mini/1857_upakovka-black.png\" alt=\"\">
                    <p>Упаковка \"АЗИАТСКАЯ КУХНЯ\"</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/plastikovye-kontejnery\">
                    <img src=\"/files/mini/1952_upakovka-kraft.png\" alt=\"\">
                    <p>Упаковка \"КРАФТ\"</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/nakleykitermoetiketki-s-pechatyu\">
                    <img src=\"/files/mini/1800_nakleykitermoetiketki-s-p.png\" alt=\"\">
                    <p>Наклейки/Термоэтикетки с печатью</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/bytovaya-khimiya\">
                    <img src=\"/files/mini/1242_bytovaya-khimiya.png\" alt=\"\">
                    <p>Бытовая химия</p>
                </a>
            </li>
        </ul>
        <div class=\"clear\"></div>
    </div>
    <div class=\"row\">
        <div class=\"index-news\">
            <h2 class=\"index-head\">Новости</h2>
            <ul>
                <li>
                    <p class=\"date\">31 декабря</p>
                    <p class=\"name\">режим работы в новогодние праздники 2018 года</p>
                    <p class=\"text\">Уважаемые клиенты, поздравляем Вас с новым годом и рождеством! Сообщаем Вам.что мы работаем для
                        Вас 3-5 января,далее с 9-го.</p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
                <li>
                    <p class=\"date\">04 июля</p>
                    <p class=\"name\">Двухслойные стаканы \"красные\"</p>
                    <p class=\"text\"></p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
                <li>
                    <p class=\"date\">10 января</p>
                    <p class=\"name\">Акция на бумажные стаканы для горячих напитков</p>
                    <p class=\"text\"></p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
            </ul>
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"slider-cont\">
            <div class=\"index-slider\">
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/korobochka-dlya-edy-15015090-quotkraftquot\"><img src=\"/files/index-slider/banner-burger-boks_11.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/supnitsa-s-kryshkoj-300ml-belaya-eco-soup-12w\"><img src=\"/files/index-slider/168009_15.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/kartonnyj-kontejner-s-plastikovoj-kryshkoj-750ml-quotkraftquot\"><img src=\"/files/index-slider/162671_17.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-salata/kartonnyj-kontejner-s-plastikovoj-kryshkoj-750ml-quotkraftquot\"><img src=\"/files/index-slider/green-business-plan-business-presentation-2_21.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-fast-fuda/korobka-dlya-kartofelyafri-150180gr-bolshaya-eco-fry-l\"><img src=\"/files/index-slider/img_7349_18.jpg\" alt=\"\"></a></div>
                <div class=\"slide\" style=\"object-fit: cover\"><a href=\"/katalog-tovarov/upakovka-dlya-fast-fuda/korobka-dlya-kartofelyafri-150180gr-bolshaya-eco-fry-l\"><img src=\"/files/index-slider/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <h2 class=\"index-head\">Наша продукция</h2>
        <ul class=\"index-catalog main\">
            <li>
                <a href=\"/katalog-tovarov/bumazhnye-stakany-s-logotipom\">
                    <img src=\"/files/mini/2016_bumazhnye-stakany-s-individ.png\" alt=\"\">
                    <p>Бумажные стаканы с индивидуальным дизайном</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-quotfastfoodquot-c-dizajnom\">
                    <img src=\"/files/mini/1950_upakovka-dlya-fastfood-c-dizayn.png\" alt=\"\">
                    <p>Картонная упаковка для \"fastfood\" c дизайном</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-pervykh-blyud\">
                    <img src=\"/files/mini/1608_upakovka-dlya-pervykh-blyud.png\" alt=\"\">
                    <p>Упаковка для первых блюд</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-salata\">
                    <img src=\"/files/mini/1438_upakovka-dlya-salata.png\" alt=\"\">
                    <p>Упаковка для салата</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-dlya-sendvichejbuterbrodov\">
                    <img src=\"/files/mini/1709_-dlya-sendvicheyrollov.png\" alt=\"\">
                    <p> для сэндвичей/роллов</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/konditerskaya-upakovka\">
                    <img src=\"/files/mini/1700_konditerskaya-upakovka.png\" alt=\"\">
                    <p>Кондитерская упаковка</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/upakovka-quotaziatskaya-kukhnyaquot\">
                    <img src=\"/files/mini/1857_upakovka-black.png\" alt=\"\">
                    <p>Упаковка \"АЗИАТСКАЯ КУХНЯ\"</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/plastikovye-kontejnery\">
                    <img src=\"/files/mini/1952_upakovka-kraft.png\" alt=\"\">
                    <p>Упаковка \"КРАФТ\"</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/nakleykitermoetiketki-s-pechatyu\">
                    <img src=\"/files/mini/1800_nakleykitermoetiketki-s-p.png\" alt=\"\">
                    <p>Наклейки/Термоэтикетки с печатью</p>
                </a>
            </li>
            <li>
                <a href=\"/katalog-tovarov/bytovaya-khimiya\">
                    <img src=\"/files/mini/1242_bytovaya-khimiya.png\" alt=\"\">
                    <p>Бытовая химия</p>
                </a>
            </li>
        </ul>
        <div class=\"clear\"></div>
    </div>
    <div class=\"row\">
        <div class=\"index-news\">
            <h2 class=\"index-head\">Новости</h2>
            <ul>
                <li>
                    <p class=\"date\">31 декабря</p>
                    <p class=\"name\">режим работы в новогодние праздники 2018 года</p>
                    <p class=\"text\">Уважаемые клиенты, поздравляем Вас с новым годом и рождеством! Сообщаем Вам.что мы работаем для
                        Вас 3-5 января,далее с 9-го.</p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
                <li>
                    <p class=\"date\">04 июля</p>
                    <p class=\"name\">Двухслойные стаканы \"красные\"</p>
                    <p class=\"text\"></p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
                <li>
                    <p class=\"date\">10 января</p>
                    <p class=\"name\">Акция на бумажные стаканы для горячих напитков</p>
                    <p class=\"text\"></p>
                    <p><a href=\"/\">Подробнее</a></p>
                </li>
            </ul>
            <div class=\"clear\"></div>
        </div>
    </div>
{#    <div class=\"row\">#}
{#        <div class=\"slider-partner\">#}
{#            <h2 class=\"index-head\">Партнеры</h2>#}
{#            <div class=\"slider-cont\">#}
{#                <div class=\"index-slider\">#}
{#                    <div class=\"slide\"><a href=\"/shit\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                    <div class=\"slide\"><a href=\"/\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                    <div class=\"slide\"><a href=\"/\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                    <div class=\"slide\"><a href=\"/\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                    <div class=\"slide\"><a href=\"/\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                    <div class=\"slide\"><a href=\"/\"><img src=\"http://ecopacking.ru/userfiles/bs/codelen-petaca-chips-kraft_19.jpg\" alt=\"\"></a></div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{% endblock %}", "index.twig", "/var/www/u0742521/data/www/eco/App/Site/View/index.twig");
    }
}
