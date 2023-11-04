<?php

/* error/index.twig */
class __TwigTemplate_64c41da12db0199d5369da047190a024162cee4081328bcf8f53a420d2757e3c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "error/index.twig", 1);
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
                        <div class=\"table-responsive\">
                            <form action=\"/content/save\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                                        <tr>
                                            <td style=\"width: 5%\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "</td>
                                            <td style=\"width: 15%\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "time", array()), "d.m.Y H:i"), "html", null, true);
            echo "</td>
                                            <td style=\"width: 85%\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                                    </tbody>
                                </table>
                            </form>
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
        return "error/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  61 => 16,  57 => 15,  53 => 14,  50 => 13,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
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
                        <div class=\"table-responsive\">
                            <form action=\"/content/save\" method=\"post\">
                                <table class=\"table table-hover issue-tracker checkbox-container\">
                                    <tbody>
                                    {% for i in errors %}
                                        <tr>
                                            <td style=\"width: 5%\">{{ i.id }}</td>
                                            <td style=\"width: 15%\">{{ i.time | date(\"d.m.Y H:i\") }}</td>
                                            <td style=\"width: 85%\">{{ i.text }}</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "error/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/error/index.twig");
    }
}
