<?php

/* task/template.twig */
class __TwigTemplate_5f6dac29a2fdef8935e4bbe9911fc52ee4fc1849c89931e59c2a60daac574139 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "task/template.twig", 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "
                                            </a>
                                            <small>
                                                ";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "text", array()), 0, 100), "html", null, true);
            echo "...
                                            </small>
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"/task/template/delete/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
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
        return array (  86 => 32,  74 => 26,  67 => 22,  61 => 19,  57 => 18,  53 => 16,  49 => 15,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
