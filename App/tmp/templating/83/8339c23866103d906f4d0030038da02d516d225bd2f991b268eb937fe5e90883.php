<?php

/* layout.twig */
class __TwigTemplate_aa859981cb29bd81d5e53e7111acdc65da68790d1ddf3661e2ff00688308ef28 extends Twig_Template
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
        // line 26
        echo "
<body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    <script src=\"/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <title>Личный кабинет - EcoPacking</title>

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
    public function block_body($context, array $blocks = array())
    {
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
    public function block_content($context, array $blocks = array())
    {
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
        return array (  111 => 48,  108 => 47,  102 => 50,  99 => 47,  97 => 46,  80 => 31,  78 => 30,  75 => 29,  72 => 28,  47 => 4,  44 => 3,  38 => 53,  36 => 28,  32 => 26,  30 => 3,  26 => 1,);
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

        <title>Личный кабинет - EcoPacking</title>

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
    <script src=\"/js/bootstrap.min.js\"></script>
</body>
</html>", "layout.twig", "/var/www/u0742521/data/www/eco/App/Client/View/layout.twig");
    }
}
