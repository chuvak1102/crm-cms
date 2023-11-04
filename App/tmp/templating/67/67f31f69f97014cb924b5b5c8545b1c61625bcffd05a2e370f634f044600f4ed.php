<?php

/* content/create.twig */
class __TwigTemplate_c70eb5ff2d2c1769cca9d91f6ecf0a318907084eaa4a4e8b3338071a2a5868e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "content/create.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <form enctype=\"multipart/form-data\" method=\"post\" class=\"form-horizontal\" action=\"/content/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "id", array()), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", array()), "value", array()) == "text")) {
                // line 13
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", array()), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                ";
            }
            // line 17
            echo "
                                ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", array()), "value", array()) == "integer_11")) {
                // line 19
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", array()), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\"></div>
                                    </div>
                                ";
            }
            // line 23
            echo "
                                ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", array()), "value", array()) == "file_image")) {
                // line 25
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "getField", array()), "value", array()) == "date")) {
                // line 41
                echo "                                    <div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-10\"><input name=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_name", array()), "html", null, true);
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
        return array (  142 => 77,  139 => 68,  136 => 61,  133 => 51,  129 => 47,  122 => 45,  116 => 42,  111 => 41,  109 => 40,  106 => 39,  88 => 25,  86 => 24,  83 => 23,  77 => 20,  72 => 19,  70 => 18,  67 => 17,  61 => 14,  56 => 13,  54 => 12,  51 => 11,  47 => 10,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
