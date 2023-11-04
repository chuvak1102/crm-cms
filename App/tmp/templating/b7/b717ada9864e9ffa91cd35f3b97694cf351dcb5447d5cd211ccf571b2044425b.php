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

/* layout.twig */
class __TwigTemplate_1018ae31bd8d5fb2ff43c4ad7e6bbf56d473ba740af4b6cafd7fff599dc33dd6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "
<body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
    <!-- Mainly scripts -->
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
    <script src=\"/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>

    <!-- Flot -->
    <script src=\"/js/plugins/flot/jquery.flot.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.tooltip.min.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.spline.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.resize.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.pie.js\"></script>

    <!-- Peity -->
    <script src=\"/js/plugins/peity/jquery.peity.min.js\"></script>
    <script src=\"/js/demo/peity-demo.js\"></script>

    <!-- Custom and plugin javascript -->
    <script src=\"/js/inspinia.js\"></script>
    <script src=\"/js/plugins/pace/pace.min.js\"></script>

    <!-- jQuery UI -->
    <script src=\"/js/plugins/jquery-ui/jquery-ui.min.js\"></script>

    <!-- GITTER -->
    <script src=\"/js/plugins/gritter/jquery.gritter.min.js\"></script>

    <!-- Sparkline -->
    <script src=\"/js/plugins/sparkline/jquery.sparkline.min.js\"></script>

    <!-- Sparkline demo data  -->
    <script src=\"/js/demo/sparkline-demo.js\"></script>

    <!-- ChartJS-->
    <script src=\"/js/plugins/chartJs/Chart.min.js\"></script>

    <!-- Toastr -->
    <script src=\"/js/plugins/toastr/toastr.min.js\"></script>


    <script>
        \$(document).ready(function() {

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            \$(\"#flot-dashboard-chart\").length && \$.plot(\$(\"#flot-dashboard-chart\"), [
                    data1, data2
                ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: \"#d5d5d5\",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: [\"#1ab394\", \"#1C84C6\"],
                    xaxis:{
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
            );

            var doughnutData = {
                labels: [\"App\",\"Software\",\"Laptop\" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: [\"#a3e1d4\",\"#dedede\",\"#9CC3DA\"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById(\"doughnutChart\").getContext(\"2d\");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: [\"App\",\"Software\",\"Laptop\" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: [\"#a3e1d4\",\"#dedede\",\"#9CC3DA\"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById(\"doughnutChart2\").getContext(\"2d\");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
    <script src=\"/js/script.js\"></script>
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>EcoPacking (CRM)</title>

    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

    <!-- Toastr style -->
    <link href=\"/css/plugins/toastr/toastr.min.css\" rel=\"stylesheet\">

    <!-- Gritter -->
    <link href=\"/js/plugins/gritter/jquery.gritter.css\" rel=\"stylesheet\">

    <link href=\"/css/animate.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    <script src=\"/js/jquery-3.1.1.min.js\"></script>

</head>
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div id=\"wrapper\">
        ";
        // line 30
        $this->loadTemplate("menu.twig", "layout.twig", 30)->display($context);
        // line 31
        echo "        <div id=\"page-wrapper\" class=\"gray-bg dashbard-1\">
            <div class=\"row border-bottom\">
                <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>
                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li>
                            <a href=\"/logout\">
                                <i class=\"fa fa-sign-out\"></i> Выйти (";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "user", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo ")
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            ";
        // line 46
        $this->loadTemplate("breadcrumbs.twig", "layout.twig", 46)->display($context);
        // line 47
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 48,  256 => 47,  250 => 49,  247 => 47,  245 => 46,  236 => 40,  225 => 31,  223 => 30,  220 => 29,  216 => 28,  191 => 4,  187 => 3,  52 => 52,  50 => 28,  46 => 26,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% block head %}
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>EcoPacking (CRM)</title>

    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

    <!-- Toastr style -->
    <link href=\"/css/plugins/toastr/toastr.min.css\" rel=\"stylesheet\">

    <!-- Gritter -->
    <link href=\"/js/plugins/gritter/jquery.gritter.css\" rel=\"stylesheet\">

    <link href=\"/css/animate.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    <script src=\"/js/jquery-3.1.1.min.js\"></script>

</head>
{% endblock %}

<body>
{% block body %}
    <div id=\"wrapper\">
        {% include 'menu.twig' %}
        <div id=\"page-wrapper\" class=\"gray-bg dashbard-1\">
            <div class=\"row border-bottom\">
                <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>
                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li>
                            <a href=\"/logout\">
                                <i class=\"fa fa-sign-out\"></i> Выйти ({{ application.user.name }})
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            {% include 'breadcrumbs.twig' %}
            {% block content %}
            {% endblock %}
        </div>
    </div>
{% endblock %}

    <!-- Mainly scripts -->
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
    <script src=\"/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>

    <!-- Flot -->
    <script src=\"/js/plugins/flot/jquery.flot.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.tooltip.min.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.spline.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.resize.js\"></script>
    <script src=\"/js/plugins/flot/jquery.flot.pie.js\"></script>

    <!-- Peity -->
    <script src=\"/js/plugins/peity/jquery.peity.min.js\"></script>
    <script src=\"/js/demo/peity-demo.js\"></script>

    <!-- Custom and plugin javascript -->
    <script src=\"/js/inspinia.js\"></script>
    <script src=\"/js/plugins/pace/pace.min.js\"></script>

    <!-- jQuery UI -->
    <script src=\"/js/plugins/jquery-ui/jquery-ui.min.js\"></script>

    <!-- GITTER -->
    <script src=\"/js/plugins/gritter/jquery.gritter.min.js\"></script>

    <!-- Sparkline -->
    <script src=\"/js/plugins/sparkline/jquery.sparkline.min.js\"></script>

    <!-- Sparkline demo data  -->
    <script src=\"/js/demo/sparkline-demo.js\"></script>

    <!-- ChartJS-->
    <script src=\"/js/plugins/chartJs/Chart.min.js\"></script>

    <!-- Toastr -->
    <script src=\"/js/plugins/toastr/toastr.min.js\"></script>


    <script>
        \$(document).ready(function() {

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            \$(\"#flot-dashboard-chart\").length && \$.plot(\$(\"#flot-dashboard-chart\"), [
                    data1, data2
                ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: \"#d5d5d5\",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: [\"#1ab394\", \"#1C84C6\"],
                    xaxis:{
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
            );

            var doughnutData = {
                labels: [\"App\",\"Software\",\"Laptop\" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: [\"#a3e1d4\",\"#dedede\",\"#9CC3DA\"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById(\"doughnutChart\").getContext(\"2d\");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: [\"App\",\"Software\",\"Laptop\" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: [\"#a3e1d4\",\"#dedede\",\"#9CC3DA\"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById(\"doughnutChart2\").getContext(\"2d\");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
    <script src=\"/js/script.js\"></script>
</body>
</html>", "layout.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/layout.twig");
    }
}
