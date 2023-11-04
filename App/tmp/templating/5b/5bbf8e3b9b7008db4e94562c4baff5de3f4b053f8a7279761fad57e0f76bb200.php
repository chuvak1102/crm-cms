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

/* layout.twig */
class __TwigTemplate_e4285768aa3eb5b78b1ed5537babc570d65ef63e4233301cd3fef90cbf2c89f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/site/style.css\">
</head>
<body>
<header>
    <div class=\"cont\">
        <ul class=\"header\">
            <li><a href=\"/\"><img src=\"/site/img/logo.png\" alt=\"\"></a></li>
            <li>
                <form class=\"fts_search\" action=\"/katalog-tovarov/search\" method=\"post\">
                    <label for=\"fts_search\">Поиск по товарам</label>
                    <input id=\"fts_search\" placeholder=\"Название/Артикул\" name=\"fts_search\" type=\"text\">
                    <input type=\"submit\" value=\"Найти\">
                </form>
            </li>
            <li>
                <div>
                    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                        <form id=\"login-form logged\" method=\"post\" action=\"#\">
                            <a class=\"logged-link\" href=\"#\">Здравствуйте, ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
                            <br>
                            <a class=\"login-btn\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "client_domain", [], "any", false, false, false, 30), "html", null, true);
            echo "\" target=\"_blank\">Личный кабинет</a>
                            <a class=\"login-btn\" href=\"/logout\">Выйти</a>
                        </form>
                    ";
        } else {
            // line 34
            echo "                        <form id=\"login-form\" method=\"post\" action=\"/login\">
                            <input name=\"login\" class=\"login-input\" type=\"text\" placeholder=\"логин\"><a class=\"\" href=\"/register\">Регистрация</a>
                            <input name=\"password\" class=\"login-input\" type=\"password\" placeholder=\"пароль\"><button class=\"login-btn\" value=\"login\" type=\"submit\">Войти</button>
                        </form>
                    ";
        }
        // line 39
        echo "                </div>
                <div class=\"clear\"></div>
            </li>
            <li>
                <div class=\"left\"><img src=\"/site/img/icon-102.png\" alt=\"\"></div>
                <div class=\"right\">
                    <div class=\"up\" id=\"callback\"><a href=\"#\">+7 (495) 923-98-78</a></div>
                    <div class=\"down\">Заказать звонок</div>
                </div>
                <div class=\"clear\"></div>
            </li>
            <li>
                <div class=\"left\"><img src=\"/site/img/icon-103.png\" alt=\"\"></div>
                <div class=\"right\">
                    <div class=\"up\"><a href=\"#\">Как к нам проехать</a></div>
                    <div class=\"down\">Показать на карте</div>
                </div>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <div class=\"clear\"></div>
    </div>
    <div class=\"cont\">
        <div class=\"row-cart\"><a href=\"/korzina-tovarov\">Корзина</a> товаров <span id=\"cart-global-cnt\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "cart_items", [], "any", false, false, false, 62), "html", null, true);
        echo "</span> на <span id=\"cart-global-price\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "cart_price", [], "any", false, false, false, 62), "html", null, true);
        echo "</span> руб.</div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"cont\">
        <div class=\"menu\">
            <ul>
                <li class=\"";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 68) == "index")) {
            echo " active ";
        }
        echo "\"><a href=\"/\">Главная</a></li>
                <li class=\"";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 69) == "about")) {
            echo " active ";
        }
        echo "\"><a href=\"/o-kompanii\">О компании</a></li>
                <li class=\"";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 70) == "news")) {
            echo " active ";
        }
        echo "\"><a href=\"/novosti\">Новости</a></li>
                <li class=\"";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 71) == "delivery")) {
            echo " active ";
        }
        echo "\"><a href=\"/oplata-i-dostavka\">Доставка</a></li>
                <li class=\"";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 72) == "job")) {
            echo " active ";
        }
        echo "\"><a href=\"/vakansii\">Вакансии</a></li>
                <li class=\"";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", [], "any", false, false, false, 73) == "contacts")) {
            echo " active ";
        }
        echo "\"><a href=\"/kontakty\">Контакты</a></li>
                <li><a href=\"/\">Скачать прайс</a></li>
            </ul>
        </div>
        <div class=\"clear\"></div>
    </div>
</header>
<section>
    <div class=\"cont\">
        <div class=\"catalog\">
            <h2>КАТАЛОГ ПРОДУКЦИИ</h2>
            <ul>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "menu", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "category", [], "any", false, false, false, 86) == twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 86))) {
                echo " active ";
            }
            echo "\">
                        <a href=\"/katalog-tovarov/";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 87);
            echo "</a>
                        ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, $context["i"], "extend", [], "any", false, false, false, 88)) {
                // line 89
                echo "                            <ul>
                                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "extend", [], "any", false, false, false, 90));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 91
                    echo "                                <li>
                                    <a href=\"/katalog-tovarov/";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 92), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "alias", [], "any", false, false, false, 92), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["j"], "name", [], "any", false, false, false, 92);
                    echo "</a>
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                            </ul>
                        ";
            }
            // line 97
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </ul>
        </div>
        <div class=\"content\">
            ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "        </div>
        <div class=\"clear\"></div>
    </div>
</section>
<footer>
    <div class=\"cont\">
        <div class=\"left\">
            <h2>КОМПАНИЯ</h2>
            <ul>
                <li><a href=\"/\">Контакты</a></li>
                <li><a href=\"/\">Вакансии</a></li>
                <li><a href=\"/\">Доставка</a></li>
                <li><a href=\"/\">Как сделать заказ</a></li>
            </ul>
        </div>
        <div class=\"mid\">
            <h2>ПРОДУКЦИЯ</h2>
            <ul>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "menu", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 122
            echo "                    <li>
                        <a href=\"/";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", [], "any", false, false, false, 123), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 123);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </ul>
            <div class=\"clear\"></div>
        </div>
        <div class=\"right\">
            <h2>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h2>
            <div class=\"media\"><img src=\"/site/img/twitter.png\" alt=\"\"></div>
            <div class=\"media\"><img src=\"/site/img/f-icon.png\" alt=\"\"></div>
            <div class=\"clear\"></div>
            <p style=\"padding-left: 40px\"><a style=\"color: #fff\" href=\"\">https://www.instagram.com/ecopacking.ru</a></p>
            <p style=\"padding-left: 40px; color: #fff\">2020 г.</p>
        </div>
        <div class=\"clear\"></div>
    </div>
</footer>
<div id=\"dialog\" class=\"callback\" title=\"Задать вопрос\">
    <form action=\"/submit\" method=\"post\" class=\"form-withlogo callback\">
        <h2>Задать вопрос</h2>
        <div class=\"withlogo-row\">
            <label>Ваше имя:</label>
            <input name=\"name\" type=\"text\" >
        </div>
        <div class=\"withlogo-row\">
            <label>Контактный телефон:</label>
            <input name=\"phone\" type=\"text\" >
        </div>
        <div class=\"withlogo-row\">
            <button name=\"submit\" type=\"submit\" value=\"callback\">Отправить</button>
        </div>
    </form>
</div>
<div id=\"overlay\"></div>
<script src=\"/site/script.js\"></script>
</body>
</html>";
    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 102,  273 => 126,  262 => 123,  259 => 122,  255 => 121,  235 => 103,  233 => 102,  228 => 99,  221 => 97,  217 => 95,  204 => 92,  201 => 91,  197 => 90,  194 => 89,  192 => 88,  186 => 87,  179 => 86,  175 => 85,  158 => 73,  152 => 72,  146 => 71,  140 => 70,  134 => 69,  128 => 68,  117 => 62,  92 => 39,  85 => 34,  78 => 30,  73 => 28,  70 => 27,  68 => 26,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{{ global.title }}</title>
    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/site/style.css\">
</head>
<body>
<header>
    <div class=\"cont\">
        <ul class=\"header\">
            <li><a href=\"/\"><img src=\"/site/img/logo.png\" alt=\"\"></a></li>
            <li>
                <form class=\"fts_search\" action=\"/katalog-tovarov/search\" method=\"post\">
                    <label for=\"fts_search\">Поиск по товарам</label>
                    <input id=\"fts_search\" placeholder=\"Название/Артикул\" name=\"fts_search\" type=\"text\">
                    <input type=\"submit\" value=\"Найти\">
                </form>
            </li>
            <li>
                <div>
                    {% if global.user %}
                        <form id=\"login-form logged\" method=\"post\" action=\"#\">
                            <a class=\"logged-link\" href=\"#\">Здравствуйте, {{ global.user }}</a>
                            <br>
                            <a class=\"login-btn\" href=\"{{ global.client_domain }}\" target=\"_blank\">Личный кабинет</a>
                            <a class=\"login-btn\" href=\"/logout\">Выйти</a>
                        </form>
                    {% else %}
                        <form id=\"login-form\" method=\"post\" action=\"/login\">
                            <input name=\"login\" class=\"login-input\" type=\"text\" placeholder=\"логин\"><a class=\"\" href=\"/register\">Регистрация</a>
                            <input name=\"password\" class=\"login-input\" type=\"password\" placeholder=\"пароль\"><button class=\"login-btn\" value=\"login\" type=\"submit\">Войти</button>
                        </form>
                    {% endif %}
                </div>
                <div class=\"clear\"></div>
            </li>
            <li>
                <div class=\"left\"><img src=\"/site/img/icon-102.png\" alt=\"\"></div>
                <div class=\"right\">
                    <div class=\"up\" id=\"callback\"><a href=\"#\">+7 (495) 923-98-78</a></div>
                    <div class=\"down\">Заказать звонок</div>
                </div>
                <div class=\"clear\"></div>
            </li>
            <li>
                <div class=\"left\"><img src=\"/site/img/icon-103.png\" alt=\"\"></div>
                <div class=\"right\">
                    <div class=\"up\"><a href=\"#\">Как к нам проехать</a></div>
                    <div class=\"down\">Показать на карте</div>
                </div>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <div class=\"clear\"></div>
    </div>
    <div class=\"cont\">
        <div class=\"row-cart\"><a href=\"/korzina-tovarov\">Корзина</a> товаров <span id=\"cart-global-cnt\">{{ global.cart_items }}</span> на <span id=\"cart-global-price\">{{ global.cart_price }}</span> руб.</div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"cont\">
        <div class=\"menu\">
            <ul>
                <li class=\"{% if global.action == 'index' %} active {% endif %}\"><a href=\"/\">Главная</a></li>
                <li class=\"{% if global.action == 'about' %} active {% endif %}\"><a href=\"/o-kompanii\">О компании</a></li>
                <li class=\"{% if global.action == 'news' %} active {% endif %}\"><a href=\"/novosti\">Новости</a></li>
                <li class=\"{% if global.action == 'delivery' %} active {% endif %}\"><a href=\"/oplata-i-dostavka\">Доставка</a></li>
                <li class=\"{% if global.action == 'job' %} active {% endif %}\"><a href=\"/vakansii\">Вакансии</a></li>
                <li class=\"{% if global.action == 'contacts' %} active {% endif %}\"><a href=\"/kontakty\">Контакты</a></li>
                <li><a href=\"/\">Скачать прайс</a></li>
            </ul>
        </div>
        <div class=\"clear\"></div>
    </div>
</header>
<section>
    <div class=\"cont\">
        <div class=\"catalog\">
            <h2>КАТАЛОГ ПРОДУКЦИИ</h2>
            <ul>
                {% for i in global.menu %}
                    <li class=\"{% if global.category == i.alias %} active {% endif %}\">
                        <a href=\"/katalog-tovarov/{{ i.alias }}\">{{ i.name | raw }}</a>
                        {% if i.extend %}
                            <ul>
                                {% for j in i.extend %}
                                <li>
                                    <a href=\"/katalog-tovarov/{{ i.alias }}/{{ j.alias }}\">{{ j.name | raw }}</a>
                                </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"content\">
            {% block content %}{% endblock %}
        </div>
        <div class=\"clear\"></div>
    </div>
</section>
<footer>
    <div class=\"cont\">
        <div class=\"left\">
            <h2>КОМПАНИЯ</h2>
            <ul>
                <li><a href=\"/\">Контакты</a></li>
                <li><a href=\"/\">Вакансии</a></li>
                <li><a href=\"/\">Доставка</a></li>
                <li><a href=\"/\">Как сделать заказ</a></li>
            </ul>
        </div>
        <div class=\"mid\">
            <h2>ПРОДУКЦИЯ</h2>
            <ul>
                {% for i in global.menu %}
                    <li>
                        <a href=\"/{{ i.alias }}\">{{ i.name | raw }}</a>
                    </li>
                {% endfor %}
            </ul>
            <div class=\"clear\"></div>
        </div>
        <div class=\"right\">
            <h2>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h2>
            <div class=\"media\"><img src=\"/site/img/twitter.png\" alt=\"\"></div>
            <div class=\"media\"><img src=\"/site/img/f-icon.png\" alt=\"\"></div>
            <div class=\"clear\"></div>
            <p style=\"padding-left: 40px\"><a style=\"color: #fff\" href=\"\">https://www.instagram.com/ecopacking.ru</a></p>
            <p style=\"padding-left: 40px; color: #fff\">2020 г.</p>
        </div>
        <div class=\"clear\"></div>
    </div>
</footer>
<div id=\"dialog\" class=\"callback\" title=\"Задать вопрос\">
    <form action=\"/submit\" method=\"post\" class=\"form-withlogo callback\">
        <h2>Задать вопрос</h2>
        <div class=\"withlogo-row\">
            <label>Ваше имя:</label>
            <input name=\"name\" type=\"text\" >
        </div>
        <div class=\"withlogo-row\">
            <label>Контактный телефон:</label>
            <input name=\"phone\" type=\"text\" >
        </div>
        <div class=\"withlogo-row\">
            <button name=\"submit\" type=\"submit\" value=\"callback\">Отправить</button>
        </div>
    </form>
</div>
<div id=\"overlay\"></div>
<script src=\"/site/script.js\"></script>
</body>
</html>", "layout.twig", "/var/www/u0742521/data/www/eco/App/Site/View/layout.twig");
    }
}
