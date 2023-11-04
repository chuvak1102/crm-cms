<?php

/* layout.twig */
class __TwigTemplate_b6b5a46060dc845b3ff22b299e22fcb26372499d9d7230b0229c8e0da81b164a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/site/style.css\">

    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"/site/plugins/lightbox/css/lightbox.min.css\">
    <script src=\"/site/plugins/lightbox/js/lightbox.min.js\"></script>

    <meta name=\"Description\" content=\"";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "seo_description", array());
        echo "\">
    <title>";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "seo_title", array());
        echo "</title>
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
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array())) {
            // line 34
            echo "                        <form id=\"login-form logged\" method=\"post\" action=\"#\">
                            <a class=\"logged-link\" href=\"#\">Здравствуйте, ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "html", null, true);
            echo "</a>
                            <br>
                            <a class=\"login-btn\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "client_domain", array()), "html", null, true);
            echo "\" target=\"_blank\">Личный кабинет</a>
                            <a class=\"login-btn\" href=\"/logout\">Выйти</a>
                        </form>
                    ";
        } else {
            // line 41
            echo "                        <form id=\"login-form\" method=\"post\" action=\"/login\">
                            <input name=\"login\" class=\"login-input\" type=\"text\" placeholder=\"логин\"><a class=\"\" href=\"/register\">Регистрация</a>
                            <input name=\"password\" class=\"login-input\" type=\"password\" placeholder=\"пароль\"><button class=\"login-btn\" value=\"login\" type=\"submit\">Войти</button>
                        </form>
                    ";
        }
        // line 46
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
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "cart_items", array()), "html", null, true);
        echo "</span> на <span id=\"cart-global-price\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "cart_price", array()), "html", null, true);
        echo "</span> руб.</div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"cont\">
        <div class=\"menu\">
            <ul>
                <li class=\"";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "index")) {
            echo " active ";
        }
        echo "\"><a href=\"/\">Главная</a></li>
                <li class=\"";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "about")) {
            echo " active ";
        }
        echo "\"><a href=\"/o-kompanii\">О компании</a></li>
                <li class=\"";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "news")) {
            echo " active ";
        }
        echo "\"><a href=\"/novosti\">Новости</a></li>
                <li class=\"";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "delivery")) {
            echo " active ";
        }
        echo "\"><a href=\"/oplata-i-dostavka\">Доставка</a></li>
                <li class=\"";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "job")) {
            echo " active ";
        }
        echo "\"><a href=\"/vakansii\">Вакансии</a></li>
                <li class=\"";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "action", array()) == "contacts")) {
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 93
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "category", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()))) {
                echo " active ";
            }
            echo "\">
                        <a href=\"/katalog-tovarov/";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</a>
                        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["i"], "extend", array())) {
                // line 96
                echo "                            <ul>
                                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "extend", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 98
                    echo "                                <li>
                                    <a href=\"/katalog-tovarov/";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "alias", array()), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["j"], "name", array());
                    echo "</a>
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                            </ul>
                        ";
            }
            // line 104
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </ul>
        </div>
        <div class=\"content\">
            ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 110
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            echo "                    <li>
                        <a href=\"/";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
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

    // line 109
    public function block_content($context, array $blocks = array())
    {
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
        return array (  307 => 109,  270 => 133,  259 => 130,  256 => 129,  252 => 128,  232 => 110,  230 => 109,  225 => 106,  218 => 104,  214 => 102,  201 => 99,  198 => 98,  194 => 97,  191 => 96,  189 => 95,  183 => 94,  176 => 93,  172 => 92,  155 => 80,  149 => 79,  143 => 78,  137 => 77,  131 => 76,  125 => 75,  114 => 69,  89 => 46,  82 => 41,  75 => 37,  70 => 35,  67 => 34,  65 => 33,  46 => 17,  42 => 16,  37 => 13,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"/site/style.css\">

    {# lightbox #}
    <link rel=\"stylesheet\" href=\"/site/plugins/lightbox/css/lightbox.min.css\">
    <script src=\"/site/plugins/lightbox/js/lightbox.min.js\"></script>

    <meta name=\"Description\" content=\"{{ global.seo_description | raw }}\">
    <title>{{ global.seo_title | raw }}</title>
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
