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
class __TwigTemplate_e0e87637ddc4abb2b7f886866a7725d6293a90af4f866b60fef56bbb62b40cf0 extends \Twig\Template
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
        // line 53
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

<script src=\"/js/script.js\"></script>
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <head>
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
                                <i class=\"fa fa-sign-out\"></i> Выйти из системы
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
        // line 50
        echo "        </div>
    </div>
";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  163 => 47,  157 => 50,  154 => 47,  152 => 46,  135 => 31,  133 => 30,  130 => 29,  126 => 28,  101 => 4,  97 => 3,  52 => 53,  50 => 28,  46 => 26,  44 => 3,  40 => 1,);
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
                                <i class=\"fa fa-sign-out\"></i> Выйти из системы
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

<script src=\"/js/script.js\"></script>
</body>
</html>", "layout.twig", "/var/www/u0742521/data/www/eco/App/Client/View/layout.twig");
    }
}
