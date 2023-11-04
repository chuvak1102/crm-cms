<?php

/* login.twig */
class __TwigTemplate_37cfb26c7833e9e98ae19d84e7ce12bb42bf2201d1e69ce683c2d0c8fb331f96 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>EcoPacking (CRM)</title>

    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

    <link href=\"/css/animate.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">

</head>

<body class=\"gray-bg\">
<h1 class=\"logo-name\" style=\"text-align: center\">CRM</h1>
<div class=\"middle-box text-center loginscreen animated fadeInDown\">
    <div>
";
        // line 24
        echo "        <p>Пожалуйста, авторизуйтесь.</p>
        <form class=\"m-t\" role=\"form\" method=\"post\" action=\"/login\">
            <div class=\"form-group\">
                <input name=\"login\" type=\"text\" class=\"form-control\" placeholder=\"Логин\" required=\"\">
            </div>
            <div class=\"form-group\">
                <input name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Пароль\" required=\"\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary block full-width m-b\">Войти</button>
        </form>
        <p class=\"m-t\"> <small>&copy; EcoPacking 2020</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src=\"js/jquery-3.1.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>EcoPacking (CRM)</title>

    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

    <link href=\"/css/animate.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">

</head>

<body class=\"gray-bg\">
<h1 class=\"logo-name\" style=\"text-align: center\">CRM</h1>
<div class=\"middle-box text-center loginscreen animated fadeInDown\">
    <div>
{#        <h3>ECOPACKING</h3>#}
        <p>Пожалуйста, авторизуйтесь.</p>
        <form class=\"m-t\" role=\"form\" method=\"post\" action=\"/login\">
            <div class=\"form-group\">
                <input name=\"login\" type=\"text\" class=\"form-control\" placeholder=\"Логин\" required=\"\">
            </div>
            <div class=\"form-group\">
                <input name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Пароль\" required=\"\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary block full-width m-b\">Войти</button>
        </form>
        <p class=\"m-t\"> <small>&copy; EcoPacking 2020</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src=\"js/jquery-3.1.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>

</body>

</html>
", "login.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/login.twig");
    }
}
