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

/* color.twig */
class __TwigTemplate_b43f15e0672fe43b7a06ebb7778dfce8037a5f8ca083f0a1bfe2cc5353d22d5d extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <style>
        *{margin: 0; padding: 0}
        .i{width: 25px; height: 25px; position: absolute}
    </style>
</head>
<body>
<style>

</style>

<div id=\"id\" style=\" position: relative\">

</div>


</body>
</html>
";
        // line 56
        echo "<script>

    let pos = 0;

    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(255,\${i*16},0); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(\${255 - i*16},255,0); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(0,255,\${i*16}); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(0,\${255 - i*16},255); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(\${i*16},0,255); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }







</script>";
    }

    public function getTemplateName()
    {
        return "color.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 56,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <script src=\"/site/jquery-3.1.1.min.js\"></script>
    <style>
        *{margin: 0; padding: 0}
        .i{width: 25px; height: 25px; position: absolute}
    </style>
</head>
<body>
<style>

</style>

<div id=\"id\" style=\" position: relative\">

</div>


</body>
</html>
{# rgb(255,255,255) #}
{#rgb(255,0,0)#}
{#rgb(255,128,0)#}
{#rgb(255,160,0)#}
{#rgb(255,220,0)#}
{#rgb(255,255,0)#}
{#rgb(200,255,0)#}
{#rgb(0,255,0)#}
{#rgb(0,255,150)#}
{#rgb(0,255,255)#}
{#rgb(0,175,255)#}
{#rgb(0,0,255)#}
{#rgb(150,0,255)#}
{#rgb(255,0,255)#}
{#rgb(255,0,155)#}
{#rgb(255,0,0)#}
{#rgb(,,)#}



{#------#}

{#255-(0-255)-0 -#}
{#(255-0)-255-0 -#}
{#0-255-(0-255) -#}
{#0-(255-0)-255 -#}
{#(0-255)-0-255 -#}


<script>

    let pos = 0;

    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(255,\${i*16},0); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(\${255 - i*16},255,0); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(0,255,\${i*16}); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(0,\${255 - i*16},255); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }
    for(let i = 0; i < 16; i++) {
        \$('#id').append(`<div class=\"i\" style=\"background-color: rgb(\${i*16},0,255); left: \${pos}px; top:0\"></div>`)
        pos+= 25;
    }







</script>", "color.twig", "/var/www/u0742521/data/www/eco/App/Site/View/color.twig");
    }
}
