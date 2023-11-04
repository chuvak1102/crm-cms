<?php

/* document/sticker.twig */
class __TwigTemplate_f48bde438307d38e9492e3e928f754c52ba70623ff3283e50fb9b0aeded3782c extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", array()), "html", null, true);
            echo "</h1>
            <div style=\"text-align: center; font-weight: bold; font-size: 20px\">Место № ";
            // line 27
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</div>
            <div style=\"padding-top:20px; font-weight: bold; font: 20px Arial, Helvetica, sans-serif\">
                Клиент: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "name", array()), "html", null, true);
            echo " <br>
                Город: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "city", array()), "html", null, true);
            echo "<br>
                Улица, проспект и пр.: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "street", array()), "html", null, true);
            echo "<br>
                Номер дома: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "house", array()), "html", null, true);
            echo "<br>
                Корпус: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "block", array()), "html", null, true);
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
        return array (  96 => 38,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  64 => 27,  60 => 26,  56 => 25,  43 => 14,  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
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
