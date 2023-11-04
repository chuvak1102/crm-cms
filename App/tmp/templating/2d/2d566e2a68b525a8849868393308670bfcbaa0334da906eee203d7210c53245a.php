<?php

/* document/order_check.twig */
class __TwigTemplate_5a4c684adc01ff95cbc059de0feb86b4104b9482b6231c26b5e360c6de0a43e3 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", array()), "html", null, true);
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
            $context["total_count"] = (($context["total_count"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()));
            // line 111
            echo "                ";
            $context["packs"] = (twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()) / twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()));
            // line 112
            echo "                ";
            $context["total_packs"] = (($context["total_packs"] ?? null) + ($context["packs"] ?? null));
            // line 113
            echo "                ";
            $context["total_price"] = (($context["total_price"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()));
            // line 114
            echo "            <tr>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "article", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "countCurrent", array()), "dictionaryField", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_round(($context["packs"] ?? null)), "html", null, true);
            echo "</td>
                <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_one", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "name", array()), "html", null, true);
        echo "<br>
            Телефон: ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "phone", array()), "html", null, true);
        echo "<br>
            Адрес доставки: ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAddress", array()), "html", null, true);
        echo "<br>
            Дата доставки: ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "delivery_date", array()), "html", null, true);
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
        return array (  244 => 149,  240 => 148,  236 => 147,  232 => 146,  223 => 140,  212 => 132,  207 => 130,  203 => 129,  197 => 125,  187 => 121,  183 => 120,  179 => 119,  175 => 118,  171 => 117,  167 => 116,  163 => 115,  160 => 114,  157 => 113,  154 => 112,  151 => 111,  148 => 110,  143 => 109,  140 => 108,  137 => 107,  135 => 106,  113 => 89,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
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
                {% set packs = i.pack_count / i.product_count %}
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
