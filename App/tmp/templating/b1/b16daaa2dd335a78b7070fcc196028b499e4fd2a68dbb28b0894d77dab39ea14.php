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

/* login.twig */
class __TwigTemplate_8a07ccb7ffb45d69a8f609db520ffdd32eecb8d4a32258096efa118686fdec24 extends \Twig\Template
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
        return array (  61 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
