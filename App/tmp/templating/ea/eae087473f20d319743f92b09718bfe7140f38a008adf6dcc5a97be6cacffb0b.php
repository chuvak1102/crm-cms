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

/* task/template.twig */
class __TwigTemplate_d311c2da7e9e27e4c7cafc2ccdb4b54bf11db92ee0eca0fc759144e6d69f34d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "task/template.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Создать из шаблона</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["task"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                                    <tr>
                                        <td class=\"issue-info\">
                                            <a href=\"/task/template/create/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                                                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "
                                            </a>
                                            <small>
                                                ";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", [], "any", false, false, false, 22), 0, 100), "html", null, true);
            echo "...
                                            </small>
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/template/delete/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-2x fa-trash\"></i> </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  89 => 26,  82 => 22,  76 => 19,  72 => 18,  68 => 16,  64 => 15,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-title\">
                        <h5>Создать из шаблона</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <div class=\"m-b-md\"></div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                {% for i in task %}
                                    <tr>
                                        <td class=\"issue-info\">
                                            <a href=\"/task/template/create/{{ i.id }}\">
                                                {{ i.name }}
                                            </a>
                                            <small>
                                                {{ i.text | slice(0, 100) }}...
                                            </small>
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/template/delete/{{ i.id }}\">
                                                <button type=\"button\" class=\"btn btn-sm btn-white\"> <i class=\"fa fa-2x fa-trash\"></i> </button>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "task/template.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/task/template.twig");
    }
}
