<?php

/* task/create.twig */
class __TwigTemplate_e52a29c84f10b4236dbfa107b16af95ecd2ca594c18df173e596e534ed3a21cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "task/create.twig", 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
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
        return array (  75 => 29,  64 => 27,  60 => 26,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
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
