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

/* menu.twig */
class __TwigTemplate_9145eb62eab96a046d5ad60c88dea3062ca680df3e1bb13d8a9fbbc740fb5e1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 11) == "Index")) {
            echo "active";
        }
        echo "\">
                <a href=\"/\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Главная</span></a>
            </li>
            <li class=\"";
        // line 14
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 14), [0 => "Category", 1 => "Product", 2 => "Critical", 3 => "Order"])) {
            echo "active";
        }
        echo "\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-primary pull-right\">(онлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 17) == "Order")) {
            echo "active";
        }
        echo "\"><a href=\"/order\">Заказы</a></li>
                    <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 18) == "Category")) {
            echo "active";
        }
        echo "\"><a href=\"/category\">Категории</a></li>
                    <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 19) == "Product")) {
            echo "active";
        }
        echo "\"><a href=\"/product\">Товары</a></li>
                    <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 20) == "Critical")) {
            echo "active";
        }
        echo "\"><a href=\"/critical\">Остатки</a></li>
                    <li class=\"\"><a href=\"#\">Клиенты</a></li>
                    <li class=\"\"><a href=\"#\">Обратный звонок</a></li>
                </ul>
            </li>
            <li class=\"\">
                <a href=\"index.html\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-danger pull-right\">(офлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"\"><a href=\"#\">Товары</a></li>
                    <li class=\"\"><a href=\"#\">Товары с дизайном</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики сырья</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики услуг</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики готовой продукции</a></li>
                    <li class=\"\"><a href=\"#\">Заказы с индивидуальным дизайном</a></li>
                </ul>
            </li>
            <li class=\"";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 36) == "Task")) {
            echo "active";
        }
        echo "\">
                <a href=\"/task\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Задачи</span></a>
            </li>
            <li class=\"";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 39) == "User")) {
            echo "active";
        }
        echo "\">
                <a href=\"/user\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Персонал</span></a>
            </li>
            <li class=\"\">
                <a href=\"#\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Транспортные компании</span></a>
            </li>
            <li class=\"\">
            <li class=\"";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "controller", [], "any", false, false, false, 46) == "Content")) {
            echo "active";
        }
        echo "\"><a href=\"/content\">Контент</a></li>
            </li>
        </ul>
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
        return array (  124 => 46,  112 => 39,  104 => 36,  83 => 20,  77 => 19,  71 => 18,  65 => 17,  57 => 14,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
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
            <li class=\"{% if application.controller in ['Category', 'Product', 'Critical', 'Order'] %}active{% endif %}\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-primary pull-right\">(онлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"{% if application.controller == 'Order' %}active{% endif %}\"><a href=\"/order\">Заказы</a></li>
                    <li class=\"{% if application.controller == 'Category' %}active{% endif %}\"><a href=\"/category\">Категории</a></li>
                    <li class=\"{% if application.controller == 'Product' %}active{% endif %}\"><a href=\"/product\">Товары</a></li>
                    <li class=\"{% if application.controller == 'Critical' %}active{% endif %}\"><a href=\"/critical\">Остатки</a></li>
                    <li class=\"\"><a href=\"#\">Клиенты</a></li>
                    <li class=\"\"><a href=\"#\">Обратный звонок</a></li>
                </ul>
            </li>
            <li class=\"\">
                <a href=\"index.html\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Магазин</span><span class=\"label label-danger pull-right\">(офлайн)</span></a>
                <ul class=\"nav nav-second-level\">
                    <li class=\"\"><a href=\"#\">Товары</a></li>
                    <li class=\"\"><a href=\"#\">Товары с дизайном</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики сырья</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики услуг</a></li>
                    <li class=\"\"><a href=\"#\">Поставщики готовой продукции</a></li>
                    <li class=\"\"><a href=\"#\">Заказы с индивидуальным дизайном</a></li>
                </ul>
            </li>
            <li class=\"{% if application.controller == 'Task' %}active{% endif %}\">
                <a href=\"/task\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Задачи</span></a>
            </li>
            <li class=\"{% if application.controller == 'User' %}active{% endif %}\">
                <a href=\"/user\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Персонал</span></a>
            </li>
            <li class=\"\">
                <a href=\"#\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Транспортные компании</span></a>
            </li>
            <li class=\"\">
            <li class=\"{% if application.controller == 'Content' %}active{% endif %}\"><a href=\"/content\">Контент</a></li>
            </li>
        </ul>
    </div>
</nav>", "menu.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/menu.twig");
    }
}
