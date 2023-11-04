<?php

/* menu.twig */
class __TwigTemplate_6ea1715c42dcc96a41eb318128ddbe0358ec00214bd959b604de24507ad2cb99 extends Twig_Template
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
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "action", array()), array(0 => "index", 1 => "orderShow"))) {
            echo "active";
        }
        echo "\">
                <a href=\"/\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Главная</span></a>
            </li>
";
        // line 17
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
        return array (  43 => 17,  35 => 11,  23 => 1,);
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
            <li class=\"{% if application.action in ['index', 'orderShow'] %}active{% endif %}\">
                <a href=\"/\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"nav-label\">Главная</span></a>
            </li>
{#            <li class=\"{% if application.action == 'profile' %}active{% endif %}\">#}
{#                <a href=\"/profile\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Изменить профиль</span></a>#}
{#            </li>#}
        </ul>
    </div>
</nav>", "menu.twig", "/var/www/u0742521/data/www/eco/App/Client/View/menu.twig");
    }
}
