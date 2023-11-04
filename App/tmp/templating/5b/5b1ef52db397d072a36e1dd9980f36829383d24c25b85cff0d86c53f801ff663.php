<?php

/* critical/matrix.twig */
class __TwigTemplate_2402fa712f0ad45b455a2df8d98b8817100d960a8c7a2abbe0976b79d849d4fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "critical/matrix.twig", 1);
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
                        <a class=\"btn btn-primary\" href=\"/supplier/list\">Поставщики</a>
                        <a class=\"btn btn-primary\" href=\"/supplier/order\">Заявки поставщикам</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"matrix\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                                <a class=\"matrix-single ";
            if (twig_get_attribute($this->env, $this->source, $context["i"], "finished", array())) {
                echo "error";
            } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "finished", array())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["i"], "critical", array())))) {
                echo "warning";
            } else {
            }
            echo "\" href=\"/critical?all=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "supplier", array()), "html", null, true);
            echo "&critical=1\">

                                    <div class=\"name\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</div>
                                    <div class=\"spec\">Нет товара: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "finished", array()), "html", null, true);
            echo "</div>
                                    <div class=\"spec\">Критично: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "critical", array()), "html", null, true);
            echo "</div>
                                    <div class=\"spec\">Всего: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "total", array()), "html", null, true);
            echo "</div>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
";
    }

    public function getTemplateName()
    {
        return "critical/matrix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  57 => 20,  53 => 19,  35 => 3,  32 => 2,  15 => 1,);
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
                        <a class=\"btn btn-primary\" href=\"/supplier/list\">Поставщики</a>
                        <a class=\"btn btn-primary\" href=\"/supplier/order\">Заявки поставщикам</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox\">
                    <div class=\"ibox-content\">
                        <div class=\"matrix\">
                            {% for i in suppliers %}
                                <a class=\"matrix-single {% if i.finished %}error{% elseif i.finished is empty and i.critical is not empty %}warning{% else %}{% endif %}\" href=\"/critical?all={{ i.supplier }}&critical=1\">

                                    <div class=\"name\">{{ i.name }}</div>
                                    <div class=\"spec\">Нет товара: {{ i.finished }}</div>
                                    <div class=\"spec\">Критично: {{ i.critical }}</div>
                                    <div class=\"spec\">Всего: {{ i.total }}</div>
                                </a>
                            {% endfor %}
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
{% endblock %}", "critical/matrix.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/critical/matrix.twig");
    }
}
