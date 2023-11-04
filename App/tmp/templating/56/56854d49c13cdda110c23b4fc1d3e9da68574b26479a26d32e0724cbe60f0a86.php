<?php

/* breadcrumbs.twig */
class __TwigTemplate_ab3b210c02fb07368b1018e0855ef9a9f69944da7f118f5fb193a2a68db82a4b extends Twig_Template
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
        echo "<div class=\"row wrapper border-bottom white-bg page-heading\">
    <div class=\"col-lg-10\">
        <h2></h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">Главная</a>
            </li>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["application"] ?? null), "breadcrumbs", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 10
                echo "                    <li class=\"active\">
                        <strong>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
                echo "</strong>
                    </li>
                ";
            } else {
                // line 14
                echo "                    <li>
                        <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
                echo "</a>
                    </li>
                ";
            }
            // line 18
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ol>
    </div>
    <div class=\"col-lg-2\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "breadcrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  72 => 18,  64 => 15,  61 => 14,  55 => 11,  52 => 10,  49 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row wrapper border-bottom white-bg page-heading\">
    <div class=\"col-lg-10\">
        <h2></h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"/\">Главная</a>
            </li>
            {% for i in application.breadcrumbs %}
                {% if loop.last %}
                    <li class=\"active\">
                        <strong>{{ i.name | raw }}</strong>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ i.url }}\">{{ i.name | raw }}</a>
                    </li>
                {% endif %}
            {% endfor %}
        </ol>
    </div>
    <div class=\"col-lg-2\"></div>
</div>", "breadcrumbs.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/breadcrumbs.twig");
    }
}
