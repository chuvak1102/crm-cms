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

/* task/create.twig */
class __TwigTemplate_c63f1e68b9f3bba04f23a2cabf62261b41df6a5d190626fd5dc92db0a863e0e5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "task/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Новая задача</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form class=\"form-horizontal\" action=\"/task/save\">
                            <div class=\"form-group\"><label class=\"col-lg-2 control-label\">Название</label>
                                <div class=\"col-lg-10\">
                                    <input required name=\"name\" type=\"text\" placeholder=\"Название\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-lg-2 control-label\">Содержание</label>
                                <div class=\"col-lg-10\">
                                    <textarea required name=\"text\" placeholder=\"Содержание\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"15\"></textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Исполнитель</label>
                                <div class=\"col-lg-10\">
                                    <select class=\"form-control m-b\" name=\"user\">
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Отведенное время</label>
                                <div class=\"col-lg-10\">
                                    <input value=\"8ч\" required name=\"time\" type=\"text\" placeholder=\"4ч\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Приоритет</label>
                                <div class=\"col-lg-10\">
                                    <select class=\"form-control m-b\" name=\"priority\">
                                        <option value=\"1\">Нормальный</option>
                                        <option value=\"2\">Высокий</option>
                                        <option value=\"3\">Срочный</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-offset-2 col-lg-10\">
                                    <div class=\"i-checks\"><label> <input name=\"template\" type=\"checkbox\"><i></i> Сохранить как шаблон </label></div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать задачу</button>
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
        return "task/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  79 => 27,  75 => 26,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content animated fadeInRight\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>Новая задача</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <form class=\"form-horizontal\" action=\"/task/save\">
                            <div class=\"form-group\"><label class=\"col-lg-2 control-label\">Название</label>
                                <div class=\"col-lg-10\">
                                    <input required name=\"name\" type=\"text\" placeholder=\"Название\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-lg-2 control-label\">Содержание</label>
                                <div class=\"col-lg-10\">
                                    <textarea required name=\"text\" placeholder=\"Содержание\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"15\"></textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Исполнитель</label>
                                <div class=\"col-lg-10\">
                                    <select class=\"form-control m-b\" name=\"user\">
                                        {% for i in user %}
                                            <option value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Отведенное время</label>
                                <div class=\"col-lg-10\">
                                    <input value=\"8ч\" required name=\"time\" type=\"text\" placeholder=\"4ч\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Приоритет</label>
                                <div class=\"col-lg-10\">
                                    <select class=\"form-control m-b\" name=\"priority\">
                                        <option value=\"1\">Нормальный</option>
                                        <option value=\"2\">Высокий</option>
                                        <option value=\"3\">Срочный</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-offset-2 col-lg-10\">
                                    <div class=\"i-checks\"><label> <input name=\"template\" type=\"checkbox\"><i></i> Сохранить как шаблон </label></div>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-w-m btn-primary\">Создать задачу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "task/create.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/task/create.twig");
    }
}
