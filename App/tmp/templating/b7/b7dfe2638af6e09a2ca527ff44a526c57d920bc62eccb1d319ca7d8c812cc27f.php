<?php

/* document/account_check.twig */
class __TwigTemplate_902d7a2a07d64cde6ae3a8919f93c858bd4b6a2ba53a7cb93f9080c38ee034c2 extends Twig_Template
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
    <h1 style=\"width:720px; text-align: center;\">Бухгалтерcкая накладная № ";
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
                <td><b>Ед. изм.</b></td>
                <td><b><nobr>Кол-во</nobr></b></td>
                <td><b>Цена, руб.</b></td>
                <td><b>Сумма, руб.</b></td>
            </tr>
            ";
        // line 101
        $context["total_count"] = 0;
        // line 102
        echo "            ";
        $context["total_price"] = 0;
        // line 103
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 104
            echo "                ";
            $context["total_count"] = (($context["total_count"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()));
            // line 105
            echo "                ";
            $context["total_packs"] = (($context["total_packs"] ?? null) + ($context["packs"] ?? null));
            // line 106
            echo "                ";
            $context["total_price"] = (($context["total_price"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()));
            // line 107
            echo "                <tr>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getProduct", array()), "countCurrent", array()), "dictionaryField", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "product_count", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_one", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_row_total", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            <tr>
                <td>Итого</td>
                <td>&nbsp;</td>
                <td><b>";
        // line 118
        echo twig_escape_filter($this->env, ($context["total_count"] ?? null), "html", null, true);
        echo "</b></td>
                <td>&nbsp;</td>
                <td style=\"width: 15%\"><b>";
        // line 120
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_price"] ?? null), 2, ".", " "), "html", null, true);
        echo "</b></td>
            </tr>
            </tbody>
        </table>
        <br>
        <div style=\"width:720px;text-align:right;\">Комплектовщик_____________</div>
        <br>
        <div class=\"itogo\" style=\"width:720px; text-align: left; padding: 30px 0 0 0;\">Итого: <u>";
        // line 127
        echo twig_escape_filter($this->env, ($context["total_string"] ?? null), "html", null, true);
        echo "</u> <br>
            Подпись _____________________<br>
            МП
        </div>
        <div style=\"width:720px; padding-top:40px;\">
            <hr>
            Покупатель: ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "name", array()), "html", null, true);
        echo "<br>
            Телефон: ";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDetail", array()), "phone", array()), "html", null, true);
        echo "<br>
            Адрес доставки: ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAddress", array()), "html", null, true);
        echo "<br>
            Дата доставки: ";
        // line 136
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
        return "document/account_check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 136,  214 => 135,  210 => 134,  206 => 133,  197 => 127,  187 => 120,  182 => 118,  177 => 115,  168 => 112,  164 => 111,  160 => 110,  156 => 109,  152 => 108,  149 => 107,  146 => 106,  143 => 105,  140 => 104,  135 => 103,  132 => 102,  130 => 101,  113 => 89,  23 => 1,);
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
    <h1 style=\"width:720px; text-align: center;\">Бухгалтерcкая накладная № {{ order.id }} от {{ date }} г.</h1>
    <h1>
        <table width=\"720\" bordercolor=\"#000000\" style=\"border:#000000 1px solid;\" cellpadding=\"0\" cellspacing=\"0\">

            <tbody>
            <tr>
                <td><b>Наименование</b></td>
                <td><b>Ед. изм.</b></td>
                <td><b><nobr>Кол-во</nobr></b></td>
                <td><b>Цена, руб.</b></td>
                <td><b>Сумма, руб.</b></td>
            </tr>
            {% set total_count = 0 %}
            {% set total_price = 0 %}
            {% for i in items %}
                {% set total_count = total_count + i.product_count %}
                {% set total_packs = total_packs + packs %}
                {% set total_price = total_price + i.price_row_total %}
                <tr>
                    <td>{{ i.getProduct.name }}</td>
                    <td>{{ i.getProduct.countCurrent.dictionaryField.name }}</td>
                    <td>{{ i.product_count }}</td>
                    <td>{{ i.price_one }}</td>
                    <td>{{ i.price_row_total }}</td>
                </tr>
            {% endfor %}
            <tr>
                <td>Итого</td>
                <td>&nbsp;</td>
                <td><b>{{ total_count }}</b></td>
                <td>&nbsp;</td>
                <td style=\"width: 15%\"><b>{{ total_price | number_format(2, '.', ' ') }}</b></td>
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
</html>", "document/account_check.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/document/account_check.twig");
    }
}
