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

/* content/create.twig */
class __TwigTemplate_fff0500bcabeacc166e5fd3b90afb4c4d08f5e9d3e394a186ab53ea14d24ff46 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "content/create.twig", 1);
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
                    <div class=\"ibox-content\">
                        <form enctype=\"multipart/form-data\" method=\"post\" class=\"form-horizontal\" action=\"/content/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "/create\">

                            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 11
            echo "
                                ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12) == "text")) {
                // line 13
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", [], "any", false, false, false, 14), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                ";
            }
            // line 17
            echo "
                                ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18) == "integer_11")) {
                // line 19
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", [], "any", false, false, false, 20), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                ";
            }
            // line 23
            echo "
                                ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24) == "file_image")) {
                // line 25
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"btn-group\">
                                                <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                                    <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                                    Выбрать
                                                </label>
                                            </div>
                                            <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                                <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/976_-konteyner-duni-salat-apet-178x115x.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 39
            echo "
                                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40) == "date")) {
                // line 41
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", [], "any", false, false, false, 42), "html", null, true);
                echo "\" type=\"datetime-local\" class=\"form-control\"></div>
                                    </div>
                                ";
            }
            // line 45
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

";
        // line 51
        echo "
";
        // line 61
        echo "
";
        // line 68
        echo "
";
        // line 77
        echo "                            <button name=\"submit\" value=\"1\" type=\"submit\" class=\"btn btn-primary\">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 77,  154 => 68,  151 => 61,  148 => 51,  144 => 47,  137 => 45,  131 => 42,  126 => 41,  124 => 40,  121 => 39,  103 => 25,  101 => 24,  98 => 23,  92 => 20,  87 => 19,  85 => 18,  82 => 17,  76 => 14,  71 => 13,  69 => 12,  66 => 11,  62 => 10,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <form enctype=\"multipart/form-data\" method=\"post\" class=\"form-horizontal\" action=\"/content/{{ content.id }}/create\">

                            {% for field in fields %}

                                {% if field.getField.value == 'text' %}
                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">{{ field.name }}</label>
                                        <div class=\"col-sm-10\"><input name=\"{{ field.column_name }}\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                {% endif %}

                                {% if field.getField.value == 'integer_11' %}
                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">{{ field.name }}</label>
                                        <div class=\"col-sm-10\"><input name=\"{{ field.column_name }}\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                {% endif %}

                                {% if field.getField.value == 'file_image' %}
                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">{{ field.name }}</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"btn-group\">
                                                <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                                    <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                                    Выбрать
                                                </label>
                                            </div>
                                            <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                                <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/976_-konteyner-duni-salat-apet-178x115x.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {% if field.getField.value == 'date' %}
                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">{{ field.name }}</label>
                                        <div class=\"col-sm-10\"><input name=\"{{ field.column_name }}\" type=\"datetime-local\" class=\"form-control\"></div>
                                    </div>
                                {% endif %}

                            {% endfor %}


{#                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Checkboxes and radios <br>#}
{#                                    <small class=\"text-navy\">Normal Bootstrap elements</small></label>#}

{#                                <div class=\"col-sm-10\">#}
{#                                    <div><label> <input type=\"checkbox\" value=\"\"> Option one is this and that—be sure to include why it's great </label></div>#}
{#                                    <div><label> <input type=\"radio\" checked=\"\" value=\"option1\" id=\"optionsRadios1\" name=\"optionsRadios\"> Option one is this and that—be sure to#}
{#                                            include why it's great </label></div>#}
{#                                    <div><label> <input type=\"radio\" value=\"option2\" id=\"optionsRadios2\" name=\"optionsRadios\"> Option two can be something else and selecting it will#}
{#                                            deselect option one </label></div>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Select</label>#}

{#                                <div class=\"col-sm-10\"><select class=\"form-control m-b\" name=\"account\">#}
{#                                        <option>option 1</option>#}
{#                                        <option>option 2</option>#}
{#                                        <option>option 3</option>#}
{#                                        <option>option 4</option>#}
{#                                    </select>#}

{#                                    <div class=\"col-lg-4 m-l-n\"><select class=\"form-control\" multiple=\"\">#}
{#                                            <option>option 1</option>#}
{#                                            <option>option 2</option>#}
{#                                            <option>option 3</option>#}
{#                                            <option>option 4</option>#}
{#                                        </select></div>#}
{#                                </div>#}
{#                            </div>#}
                            <button name=\"submit\" value=\"1\" type=\"submit\" class=\"btn btn-primary\">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "content/create.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/content/create.twig");
    }
}
