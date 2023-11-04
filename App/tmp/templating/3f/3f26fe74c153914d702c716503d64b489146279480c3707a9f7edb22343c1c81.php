<?php

/* index.twig */
class __TwigTemplate_5608078d166ba63470c0ed0266d36fdb67db301a7218df3fe7b1d3c489c94130 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"slider-cont\">
            <div class=\"index-slider\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "                    <div class=\"slide\" style=\"object-fit: cover\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "link", array()), "html", null, true);
            echo "\"><img src=\"/files/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        <h2 class=\"index-head\">Наша продукция</h2>
        <ul class=\"index-catalog main\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["our_product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                <li>
                    <a href=\"/gallery/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">
                        <img src=\"/files/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</p>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
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
        return array (  88 => 24,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  55 => 10,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"slider-cont\">
            <div class=\"index-slider\">
                {% for i in slider %}
                    <div class=\"slide\" style=\"object-fit: cover\"><a href=\"{{ i.link }}\"><img src=\"/files/{{ i.image }}\" alt=\"\"></a></div>
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <h2 class=\"index-head\">Наша продукция</h2>
        <ul class=\"index-catalog main\">
            {% for i in our_product %}
                <li>
                    <a href=\"/gallery/{{ i.alias }}\">
                        <img src=\"/files/{{ i.image }}\" alt=\"\">
                        <p>{{ i.name }}</p>
                    </a>
                </li>
            {% endfor %}
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
{% endblock %}", "index.twig", "/var/www/u0742521/data/www/eco/App/Site/View/index.twig");
    }
}
