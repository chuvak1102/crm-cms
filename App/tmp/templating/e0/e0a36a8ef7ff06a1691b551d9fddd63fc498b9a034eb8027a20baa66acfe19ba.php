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

/* document/order_check.twig */
class __TwigTemplate_ac98517a4c1e829e3aed08fb1c677afed121fa31e10433ae107a9a509242a6f3 extends \Twig\Template
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
    <title>Товарный чек</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <style type=\"text/css\">
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            padding: 5px 0px 0px 5px;
        }

        .vas ul {
            padding: 0px 10px 0px 15px;
        }

        .vas li {
            list-style-type: circle;
        }

        h3 {
            padding: 0px 0px 0px 5px;
            font-size: 100%;
        }

        h1 {
            padding: 0px 0px 0px 5px;
            font-size: 120%;
        }

        li {
            list-style-type: none;
            padding-bottom: 5px;
            padding: 6px 0px 0px 5px;
        }

        .main {
            font-size: 12px;
        }

        .list {
            font-size: 12px;
            padding: 6px 15px 0px 5px;
        }

        .main input {
            font-size: 12px;
            background-color: #CCFFCC;
        }

        .text14 {
            font-family: \"Times New Roman\", Times, serif;
            font-size: 14px;
        }

        .text14 strong {
            font-family: \"Times New Roman\", Times, serif;
            font-size: 11px;
        }

        .link {
            font-size: 12px;
        }

        .link a {
            text-decoration: none;
            color: #006400;
        }

        .link_u {
            font-size: 12px;
        }

        .link_u a {
            color: #006400;
        }

        table td {
            border: #000000 1px solid;
            padding: 5px;
        }
    </style>
    <script src=\"https://api-maps.yandex.ru/2.1/?apikey=06c58ca5-399e-44e1-b58d-03d62eea6c10&lang=ru_RU\" type=\"text/javascript\"></script>
</head>
<body>
<div class=\"text14\">
    <p>ecopacking.ru<br><font size=\"5\">ЭкоПак</font></p><br>
    <h1 style=\"width:720px; text-align: center;\">Товарный чек № ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        echo " от ";
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo " г.</h1>
    <h1>
        <table width=\"720\" bordercolor=\"#000000\" style=\"border:#000000 1px solid;\" cellpadding=\"0\" cellspacing=\"0\">

            <tbody>
            <tr>
                <td><b>Наименование</b></td>
                <td><b>Артикул</b></td>
                <td><b>Ед. изм.</b></td>
                <td><b>
                        <nobr>Кол-во</nobr>
                    </b></td>
                <td><b>Кол-во упаковок</b></td>
                <td><b>Цена, руб.</b></td>
                <td><b>Сумма, руб.</b></td>
                <td><b>Место<br>(№&nbsp;коробки)</b></td>
            </tr>
            ";
        // line 106
        $context["total_count"] = 0;
        // line 107
        echo "            ";
        $context["total_packs"] = 0;
        // line 108
        echo "            ";
        $context["total_price"] = 0;
        // line 109
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            echo "                ";
            $context["total_count"] = (($context["total_count"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "product_count", [], "any", false, false, false, 110));
            // line 111
            echo "                ";
            $context["packs"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 111), "getPackCount", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111) / twig_get_attribute($this->env, $this->source, $context["i"], "product_count", [], "any", false, false, false, 111));
            // line 112
            echo "                ";
            $context["total_packs"] = (($context["total_packs"] ?? null) + ($context["packs"] ?? null));
            // line 113
            echo "                ";
            $context["total_price"] = (($context["total_price"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", [], "any", false, false, false, 113));
            // line 114
            echo "            <tr>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 115), "name", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 116), "article", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", [], "any", false, false, false, 117), "countCurrent", [], "any", false, false, false, 117), "dictionaryField", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_round(($context["packs"] ?? null)), "html", null, true);
            echo "</td>
                <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_one", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", [], "any", false, false, false, 121), "html", null, true);
            echo "</td>
                <td></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            <tr>
                <td>Итого</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><b>";
        // line 129
        echo twig_escape_filter($this->env, ($context["total_count"] ?? null), "html", null, true);
        echo "</b></td>
                <td><b>";
        // line 130
        echo twig_escape_filter($this->env, twig_round(($context["total_packs"] ?? null)), "html", null, true);
        echo "</b></td>
                <td>&nbsp;</td>
                <td style=\"width: 15%\"><b>";
        // line 132
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_price"] ?? null), 2, ".", " "), "html", null, true);
        echo "</b></td>
                <td style=\"border-right:none;border-bottom:none;\">&nbsp;</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div style=\"width:720px;text-align:right;\">Комплектовщик_____________</div>
        <br>
        <div class=\"itogo\" style=\"width:720px; text-align: left; padding: 30px 0 0 0;\">Итого: <u>";
        // line 140
        echo twig_escape_filter($this->env, ($context["total_string"] ?? null), "html", null, true);
        echo "</u> <br>
            Подпись _____________________<br>
            МП
        </div>
        <div style=\"width:720px; padding-top:40px;\">
            <hr>
            Покупатель: ";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
        echo "<br>
            Телефон: ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 147), "phone", [], "any", false, false, false, 147), "html", null, true);
        echo "<br>
            Адрес доставки: ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAddress", [], "any", false, false, false, 148), "html", null, true);
        echo "<br>
            Дата доставки: ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", [], "any", false, false, false, 149), "delivery_date", [], "any", false, false, false, 149), "html", null, true);
        echo "<br>

            <hr>
            <div id=\"map\" style=\"width: 720px; height: 300px\"></div>
        </div>
    </h1>
</div>
<script>
    window.onload = () => {
        console.log('asd');
        ymaps.ready(function () {
            var map = new ymaps.Map(\"map\", {
                center: [55.76, 37.64],
                zoom: 10
            });

            if (map) {
                ymaps.modules.require(['Placemark', 'Circle'], function (Placemark, Circle) {
                    var placemark = new Placemark([55.37, 35.45]);
                });
            }

            ymaps.geocode('Москва', {})
                .then((res) => {

                    var firstGeoObject = res.geoObjects.get(0),
                        // Координаты геообъекта.
                        coords = firstGeoObject.geometry.getCoordinates();
                    console.log(res, coords);
                });
        });
    };



    // ymaps.ready(init);
    //
    // function init() {
    //
    // }

</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "document/order_check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 149,  254 => 148,  250 => 147,  246 => 146,  237 => 140,  226 => 132,  221 => 130,  217 => 129,  211 => 125,  201 => 121,  197 => 120,  193 => 119,  189 => 118,  185 => 117,  181 => 116,  177 => 115,  174 => 114,  171 => 113,  168 => 112,  165 => 111,  162 => 110,  157 => 109,  154 => 108,  151 => 107,  149 => 106,  127 => 89,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <title>Товарный чек</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <style type=\"text/css\">
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            padding: 5px 0px 0px 5px;
        }

        .vas ul {
            padding: 0px 10px 0px 15px;
        }

        .vas li {
            list-style-type: circle;
        }

        h3 {
            padding: 0px 0px 0px 5px;
            font-size: 100%;
        }

        h1 {
            padding: 0px 0px 0px 5px;
            font-size: 120%;
        }

        li {
            list-style-type: none;
            padding-bottom: 5px;
            padding: 6px 0px 0px 5px;
        }

        .main {
            font-size: 12px;
        }

        .list {
            font-size: 12px;
            padding: 6px 15px 0px 5px;
        }

        .main input {
            font-size: 12px;
            background-color: #CCFFCC;
        }

        .text14 {
            font-family: \"Times New Roman\", Times, serif;
            font-size: 14px;
        }

        .text14 strong {
            font-family: \"Times New Roman\", Times, serif;
            font-size: 11px;
        }

        .link {
            font-size: 12px;
        }

        .link a {
            text-decoration: none;
            color: #006400;
        }

        .link_u {
            font-size: 12px;
        }

        .link_u a {
            color: #006400;
        }

        table td {
            border: #000000 1px solid;
            padding: 5px;
        }
    </style>
    <script src=\"https://api-maps.yandex.ru/2.1/?apikey=06c58ca5-399e-44e1-b58d-03d62eea6c10&lang=ru_RU\" type=\"text/javascript\"></script>
</head>
<body>
<div class=\"text14\">
    <p>ecopacking.ru<br><font size=\"5\">ЭкоПак</font></p><br>
    <h1 style=\"width:720px; text-align: center;\">Товарный чек № {{ order.id }} от {{ date }} г.</h1>
    <h1>
        <table width=\"720\" bordercolor=\"#000000\" style=\"border:#000000 1px solid;\" cellpadding=\"0\" cellspacing=\"0\">

            <tbody>
            <tr>
                <td><b>Наименование</b></td>
                <td><b>Артикул</b></td>
                <td><b>Ед. изм.</b></td>
                <td><b>
                        <nobr>Кол-во</nobr>
                    </b></td>
                <td><b>Кол-во упаковок</b></td>
                <td><b>Цена, руб.</b></td>
                <td><b>Сумма, руб.</b></td>
                <td><b>Место<br>(№&nbsp;коробки)</b></td>
            </tr>
            {% set total_count = 0 %}
            {% set total_packs = 0 %}
            {% set total_price = 0 %}
            {% for i in items %}
                {% set total_count = total_count + i.product_count %}
                {% set packs = i.getProduct.getPackCount.value / i.product_count %}
                {% set total_packs = total_packs + packs %}
                {% set total_price = total_price + i.price_row_total %}
            <tr>
                <td>{{ i.getProduct.name }}</td>
                <td>{{ i.getProduct.article }}</td>
                <td>{{ i.getProduct.countCurrent.dictionaryField.name }}</td>
                <td>{{ i.product_count }}</td>
                <td>{{ packs | round }}</td>
                <td>{{ i.price_one }}</td>
                <td>{{ i.price_row_total }}</td>
                <td></td>
            </tr>
            {% endfor %}
            <tr>
                <td>Итого</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><b>{{ total_count }}</b></td>
                <td><b>{{ total_packs | round }}</b></td>
                <td>&nbsp;</td>
                <td style=\"width: 15%\"><b>{{ total_price | number_format(2, '.', ' ') }}</b></td>
                <td style=\"border-right:none;border-bottom:none;\">&nbsp;</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div style=\"width:720px;text-align:right;\">Комплектовщик_____________</div>
        <br>
        <div class=\"itogo\" style=\"width:720px; text-align: left; padding: 30px 0 0 0;\">Итого: <u>{{ total_string }}</u> <br>
            Подпись _____________________<br>
            МП
        </div>
        <div style=\"width:720px; padding-top:40px;\">
            <hr>
            Покупатель: {{ order.getDetail.name }}<br>
            Телефон: {{ order.getDetail.phone }}<br>
            Адрес доставки: {{ order.getAddress }}<br>
            Дата доставки: {{ order.getDetail.delivery_date }}<br>

            <hr>
            <div id=\"map\" style=\"width: 720px; height: 300px\"></div>
        </div>
    </h1>
</div>
<script>
    window.onload = () => {
        console.log('asd');
        ymaps.ready(function () {
            var map = new ymaps.Map(\"map\", {
                center: [55.76, 37.64],
                zoom: 10
            });

            if (map) {
                ymaps.modules.require(['Placemark', 'Circle'], function (Placemark, Circle) {
                    var placemark = new Placemark([55.37, 35.45]);
                });
            }

            ymaps.geocode('Москва', {})
                .then((res) => {

                    var firstGeoObject = res.geoObjects.get(0),
                        // Координаты геообъекта.
                        coords = firstGeoObject.geometry.getCoordinates();
                    console.log(res, coords);
                });
        });
    };



    // ymaps.ready(init);
    //
    // function init() {
    //
    // }

</script>
</body>
</html>", "document/order_check.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/document/order_check.twig");
    }
}
