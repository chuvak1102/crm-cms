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

/* document/sticker.twig */
class __TwigTemplate_405956c124bd6f90682245f316844cabe365fc97dc78d50d4e7e366da2ff789d extends \Twig\Template
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
        echo "<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <style type=\"text/css\">
        body {font-family: Arial, Helvetica, sans-serif;margin: 0;padding: 0;}
        .text14 {font-family:\"Times New Roman\", Times, serif;font-size:14px;border:2px dashed #000;width: 100mm;max-width: 100mm;height: 70mm;max-height: 70mm;;margin-bottom:2px;font-weight:normal;padding:10px;}
        .cont {margin-right: 100px;}
    </style>
</head>
<body>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["range"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "    ";
            $context["left"] = ((($context["i"] == 1)) ? (200) : ((200 + (($context["i"] - 1) * 430))));
            // line 14
            echo "    <div class=\"cont\"
         style=\"
             width: 100mm;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
                position: relative;
    \"
    >
        <div class=\"text14\" style=\"position: absolute; top: -100px; left: ";
            // line 25
            echo twig_escape_filter($this->env, ($context["left"] ?? null), "html", null, true);
            echo "px\">
            <h1 style=\"text-align: center;\">Заказ № ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 26), "html", null, true);
            echo "</h1>
            <div style=\"text-align: center; font-weight: bold; font-size: 20px\">Место № ";
            // line 27
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
            <div style=\"padding-top:20px; font-weight: bold; font: 20px Arial, Helvetica, sans-serif\">
                Клиент: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo " <br>
                Город: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 30), "city", [], "any", false, false, false, 30), "html", null, true);
            echo "<br>
                Улица, проспект и пр.: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 31), "street", [], "any", false, false, false, 31), "html", null, true);
            echo "<br>
                Номер дома: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 32), "house", [], "any", false, false, false, 32), "html", null, true);
            echo "<br>
                Корпус: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 33), "block", [], "any", false, false, false, 33), "html", null, true);
            echo "<br>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "document/sticker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  78 => 27,  74 => 26,  70 => 25,  57 => 14,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <style type=\"text/css\">
        body {font-family: Arial, Helvetica, sans-serif;margin: 0;padding: 0;}
        .text14 {font-family:\"Times New Roman\", Times, serif;font-size:14px;border:2px dashed #000;width: 100mm;max-width: 100mm;height: 70mm;max-height: 70mm;;margin-bottom:2px;font-weight:normal;padding:10px;}
        .cont {margin-right: 100px;}
    </style>
</head>
<body>

{% for i in range %}
    {% set left = (i == 1 ? 200 : ( 200 + ((i - 1) * 430) )) %}
    <div class=\"cont\"
         style=\"
             width: 100mm;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
                position: relative;
    \"
    >
        <div class=\"text14\" style=\"position: absolute; top: -100px; left: {{ left }}px\">
            <h1 style=\"text-align: center;\">Заказ № {{ order.number }}</h1>
            <div style=\"text-align: center; font-weight: bold; font-size: 20px\">Место № {{ i }}</div>
            <div style=\"padding-top:20px; font-weight: bold; font: 20px Arial, Helvetica, sans-serif\">
                Клиент: {{ order.getDetail.name }} <br>
                Город: {{ order.getDetail.city }}<br>
                Улица, проспект и пр.: {{ order.getDetail.street }}<br>
                Номер дома: {{ order.getDetail.house }}<br>
                Корпус: {{ order.getDetail.block }}<br>
            </div>
        </div>
    </div>
{% endfor %}

</body>
</html>", "document/sticker.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/document/sticker.twig");
    }
}
