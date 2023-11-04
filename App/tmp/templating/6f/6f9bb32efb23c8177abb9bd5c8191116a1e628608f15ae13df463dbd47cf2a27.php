<?php

/* layout.twig */
class __TwigTemplate_d4ea5b28ef73dd60059d173f2c962845a4f47a148ed19f94a59f2ca81e924e86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 63
        echo "
<body>
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "    <script src=\"/js/script.js\"></script>
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
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
</head>
";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "    <div id=\"wrapper\">
        ";
        // line 67
        $this->loadTemplate("menu.twig", "layout.twig", 67)->display($context);
        // line 68
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
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "user", array()), "name", array()), "html", null, true);
        echo ")
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            ";
        // line 83
        $this->loadTemplate("breadcrumbs.twig", "layout.twig", 83)->display($context);
        // line 84
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "        </div>
    </div>
";
    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        // line 85
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  148 => 84,  142 => 86,  139 => 84,  137 => 83,  128 => 77,  117 => 68,  115 => 67,  112 => 66,  109 => 65,  47 => 4,  44 => 3,  38 => 89,  36 => 65,  32 => 63,  30 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
    <script src=\"/js/script.js\"></script>
</body>
</html>", "layout.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/layout.twig");
    }
}
