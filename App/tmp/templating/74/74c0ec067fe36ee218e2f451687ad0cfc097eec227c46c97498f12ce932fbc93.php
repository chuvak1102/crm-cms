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

/* contacts.twig */
class __TwigTemplate_53b4b59356a50422cd57bfc8d91d465b33065044728f5562e5bf12b3fd1a2c0b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "contacts.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <style>
        h1, .h1 {
            padding: 25px 0;
            color: #488ca6;
            font: 15px \"Calibri\";
            text-transform: uppercase;
            font-weight: bold;
        }
        .contacts-l-tab {
            margin-bottom: 25px;
        }
        .contacts-bar p {
            line-height: 20px;
        }
        .contacts-bar p a{
            font-size: 16px;
        }

    </style>
    <div class=\"contacts-bar clearfix\">
        <div>
            <h1>Контакты</h1><div class=\"contacts-l-tab\">
                <p><b>Адрес:</b></p>
                <p>Офис,склад(самовывоз):Москва, проезд Одоевского дом 2А</p>
                <p>Адрес магазина-шоурум (самовывоз): г.Москва,поселение Сосенское 22-Й КМ КАЛУЖСКОГО ШОССЕ, здание №10 ОПЦ \"ФУДСИТИ\" 2 этаж пав. № 2-5-46</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p><b>Контактный телефон: </b></p>
                <p>+7 (495) 923-98-78 (офис)</p>
                <p>+7 (916)-137-48-93 (склад,c 9-00 -18-00)</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p>+7 (916)146-20-20 (ОПЦ \"ФУДСИТИ\"&nbsp;)&nbsp;</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p><b>Электронная почта:</b></p>
                <p><b>info@ecopacking.ru</b></p>
                <p>ecopackingmsk@gmail.com</p>
                <p><a href=\"https://www.instagram.com/ecopacking.ru/\">https://www.instagram.com/ecopacking.ru</a>/</p>
                <p><a href=\"https://www.facebook.com/profile.php?id=100010990998235\">https://www.facebook.com/profile.php?id=100010990998235</a></p>
            </div>
        </div>
        <div>
            <div class=\"h1\">Схема проезда</div>

            <div class=\"maps-here\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.9703418471045!2d37.46948182779786!3d55.599847695261445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3c04bd03311aff4!2z0KTRg9C0INCh0LjRgtC4!5e0!3m2!1sru!2sru!4v1491232911169\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contacts.twig";
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
    <style>
        h1, .h1 {
            padding: 25px 0;
            color: #488ca6;
            font: 15px \"Calibri\";
            text-transform: uppercase;
            font-weight: bold;
        }
        .contacts-l-tab {
            margin-bottom: 25px;
        }
        .contacts-bar p {
            line-height: 20px;
        }
        .contacts-bar p a{
            font-size: 16px;
        }

    </style>
    <div class=\"contacts-bar clearfix\">
        <div>
            <h1>Контакты</h1><div class=\"contacts-l-tab\">
                <p><b>Адрес:</b></p>
                <p>Офис,склад(самовывоз):Москва, проезд Одоевского дом 2А</p>
                <p>Адрес магазина-шоурум (самовывоз): г.Москва,поселение Сосенское 22-Й КМ КАЛУЖСКОГО ШОССЕ, здание №10 ОПЦ \"ФУДСИТИ\" 2 этаж пав. № 2-5-46</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p><b>Контактный телефон: </b></p>
                <p>+7 (495) 923-98-78 (офис)</p>
                <p>+7 (916)-137-48-93 (склад,c 9-00 -18-00)</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p>+7 (916)146-20-20 (ОПЦ \"ФУДСИТИ\"&nbsp;)&nbsp;</p>
            </div>
            <div class=\"contacts-l-tab\">
                <p><b>Электронная почта:</b></p>
                <p><b>info@ecopacking.ru</b></p>
                <p>ecopackingmsk@gmail.com</p>
                <p><a href=\"https://www.instagram.com/ecopacking.ru/\">https://www.instagram.com/ecopacking.ru</a>/</p>
                <p><a href=\"https://www.facebook.com/profile.php?id=100010990998235\">https://www.facebook.com/profile.php?id=100010990998235</a></p>
            </div>
        </div>
        <div>
            <div class=\"h1\">Схема проезда</div>

            <div class=\"maps-here\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.9703418471045!2d37.46948182779786!3d55.599847695261445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3c04bd03311aff4!2z0KTRg9C0INCh0LjRgtC4!5e0!3m2!1sru!2sru!4v1491232911169\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
    </div>
{% endblock %}", "contacts.twig", "/var/www/u0742521/data/www/eco/App/Site/View/contacts.twig");
    }
}
