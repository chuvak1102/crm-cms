<?php

/* menu.twig */
class __TwigTemplate_518693d9d10d108fd4bc261a20b09a122c81419871223c67e728b024af27ee09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\" style=\"padding: 10px\">
                <div class=\"dropdown profile-element\">
                    <span>
                        <img style=\"max-width: 125px\" alt=\"image\" class=\"img-circle\" src=\"/img/logo.png\" />
                    </span>
                </div>
            </li>
            <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Index")) {
            echo "active";
        }
        echo "\">
                <a href=\"/\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Главная</span></a>
            </li>
            <li class=\"";
        // line 14
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()), array(0 => "Category", 1 => "Product", 2 => "Critical", 3 => "Order", 4 => "Client", 5 => "Callback", 6 => "Design", 7 => "Supplier", 8 => "Gallery"))) {
            echo "active";
        }
        echo "\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-primary pull-right\">(онлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Order")) {
            echo "active";
        }
        echo "\"><a href=\"/order\">Заказы</a></li>
                    <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Category")) {
            echo "active";
        }
        echo "\"><a href=\"/category\">Категории</a></li>
                    <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Product")) {
            echo "active";
        }
        echo "\"><a href=\"/product\">Товары</a></li>
                    ";
        // line 20
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()), array(0 => "Critical"))) {
            // line 21
            echo "                        <li class=\"active\"><a href=\"/critical\">Остатки</a></li>
                    ";
        } else {
            // line 23
            echo "                        <li><a href=\"/critical\">Остатки</a></li>
                    ";
        }
        // line 25
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isAdmin", array())) {
            // line 26
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Gallery")) {
                echo "active";
            }
            echo "\"><a href=\"/gallery\">Наша продукция</a></li>
                    <li class=\"";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Client")) {
                echo "active";
            }
            echo "\"><a href=\"/client\">Клиенты</a></li>
                    <li class=\"";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Callback")) {
                echo "active";
            }
            echo "\"><a href=\"/callback\">Обратный звонок</a></li>
                    <li class=\"";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Design")) {
                echo "active";
            }
            echo "\"><a href=\"/design\">Заказы с индивидуальным дизайном</a></li>
                    <li class=\"";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Supplier")) {
                echo "active";
            }
            echo "\"><a href=\"/supplier/list\">Поставщики</a></li>
                    ";
        }
        // line 32
        echo "                </ul>
            </li>
            ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "user", array()), "isAdmin", array())) {
            // line 35
            echo "            <li class=\"\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-danger pull-right\">(офлайн)</span></a>
            </li>
            <li class=\"";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "Task")) {
                echo "active";
            }
            echo "\">
                <a href=\"/task\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Задачи</span></a>
            </li>
            <li class=\"";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", array()) == "User")) {
                echo "active";
            }
            echo "\">
                <a href=\"/user\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Персонал</span></a>
            </li>
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "menus", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["i"], "show", array()) == 1)) {
                    // line 46
                    echo "                    <li class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["i"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["global"] ?? null), "content_id", array()))) {
                        echo "active";
                    }
                    echo "\">
                        <a href=\"/content/";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "canonical", array()), "html", null, true);
                    echo "</span></a>
                    </li>
                ";
                }
                // line 50
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
        }
        // line 53
        echo "        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  169 => 52,  163 => 50,  155 => 47,  148 => 46,  145 => 45,  141 => 44,  133 => 41,  125 => 38,  120 => 35,  118 => 34,  114 => 32,  107 => 30,  101 => 29,  95 => 28,  89 => 27,  82 => 26,  79 => 25,  75 => 23,  71 => 21,  69 => 20,  63 => 19,  57 => 18,  51 => 17,  43 => 14,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\" style=\"padding: 10px\">
                <div class=\"dropdown profile-element\">
                    <span>
                        <img style=\"max-width: 125px\" alt=\"image\" class=\"img-circle\" src=\"/img/logo.png\" />
                    </span>
                </div>
            </li>
            <li class=\"{% if application.controller == 'Index' %}active{% endif %}\">
                <a href=\"/\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Главная</span></a>
            </li>
            <li class=\"{% if application.controller in ['Category', 'Product', 'Critical', 'Order', 'Client', 'Callback', 'Design', 'Supplier', 'Gallery'] %}active{% endif %}\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-primary pull-right\">(онлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"{% if application.controller == 'Order' %}active{% endif %}\"><a href=\"/order\">Заказы</a></li>
                    <li class=\"{% if application.controller == 'Category' %}active{% endif %}\"><a href=\"/category\">Категории</a></li>
                    <li class=\"{% if application.controller == 'Product' %}active{% endif %}\"><a href=\"/product\">Товары</a></li>
                    {% if application.controller in ['Critical'] %}
                        <li class=\"active\"><a href=\"/critical\">Остатки</a></li>
                    {% else %}
                        <li><a href=\"/critical\">Остатки</a></li>
                    {% endif %}
                    {% if global.user.isAdmin %}
                    <li class=\"{% if application.controller == 'Gallery' %}active{% endif %}\"><a href=\"/gallery\">Наша продукция</a></li>
                    <li class=\"{% if application.controller == 'Client' %}active{% endif %}\"><a href=\"/client\">Клиенты</a></li>
                    <li class=\"{% if application.controller == 'Callback' %}active{% endif %}\"><a href=\"/callback\">Обратный звонок</a></li>
                    <li class=\"{% if application.controller == 'Design' %}active{% endif %}\"><a href=\"/design\">Заказы с индивидуальным дизайном</a></li>
                    <li class=\"{% if application.controller == 'Supplier' %}active{% endif %}\"><a href=\"/supplier/list\">Поставщики</a></li>
                    {% endif %}
                </ul>
            </li>
            {% if global.user.isAdmin %}
            <li class=\"\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-danger pull-right\">(офлайн)</span></a>
            </li>
            <li class=\"{% if application.controller == 'Task' %}active{% endif %}\">
                <a href=\"/task\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Задачи</span></a>
            </li>
            <li class=\"{% if application.controller == 'User' %}active{% endif %}\">
                <a href=\"/user\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Персонал</span></a>
            </li>
            {% for i in global.menus %}
                {% if i.show == 1 %}
                    <li class=\"{% if i.id == global.content_id %}active{% endif %}\">
                        <a href=\"/content/{{ i.id }}\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">{{ i.canonical }}</span></a>
                    </li>
                {% endif %}
            {% endfor %}
{#            <li class=\"{% if application.controller == 'Error' %}active{% endif %}\"><a href=\"/errors\">Ошибки</a></li>#}
            {% endif %}
        </ul>
    </div>
</nav>", "menu.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/menu.twig");
    }
}
