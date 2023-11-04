<?php

/* gallery/index.twig */
class __TwigTemplate_f585b4e21b1802ca9f9bcf2c82f52b29922ac5b0300558d11e4dfd01f7dc8609 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "gallery/index.twig", 1);
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
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td width=\"5%\">Сорт</td>
                                    <td width=\"10%\">Изображение</td>
                                    <td width=\"65%\">Название</td>
                                    <td width=\"5%\">Товары</td>
                                    <td width=\"5%\">Удалить</td>
                                    <td width=\"10%\"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody id=\"sortable\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "                                    <form method=\"post\" action=\"/gallery/create/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                                        <tr>
                                            <td width=\"5%\" class=\"resort sorting-handle\" data-id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                            <td width=\"10%\">
                                                <img style=\"max-width: 50px\" src=\"/files/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                                                <input type=\"file\" name=\"image\">
                                            </td>
                                            <td width=\"65%\"><input type=\"text\" name=\"name\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "\" class=\"form-control\"></td>
                                            <td width=\"5%\"><a href=\"/gallery/items/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                            <td width=\"5%\"><a href=\"/gallery/delete/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
                                            <td width=\"10%\"><button type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                        </tr>
                                    </form>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                </tbody>
                            </table>
                        </div>
                        <div>
                            <form method=\"post\" action=\"/gallery/create\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Название\">
                                    </div>
                                    <div class=\"col-md-3\">
                                        <input type=\"file\" name=\"image\" class=\"form-control\" placeholder=\"Изображение\">
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\" href=\"\">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {

                    let sort = [];

                    \$('.sorting-handle').map((i, e) => {
                        sort.push(\$(e).data('id'))
                    });

                    \$.ajax({
                        type: \"POST\",
                        url: '/gallery/sort',
                        data: {
                            sort: sort
                        },
                        success: e => {
                            console.log(e);
                        }
                    })
                },
            })
            .disableSelection();
    </script>
";
    }

    public function getTemplateName()
    {
        return "gallery/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  88 => 35,  84 => 34,  80 => 33,  74 => 30,  69 => 28,  63 => 26,  59 => 25,  35 => 3,  32 => 2,  15 => 1,);
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
                            <table class=\"table table-hover issue-tracker\">
                                <tbody>
                                <tr>
                                    <td width=\"5%\">Сорт</td>
                                    <td width=\"10%\">Изображение</td>
                                    <td width=\"65%\">Название</td>
                                    <td width=\"5%\">Товары</td>
                                    <td width=\"5%\">Удалить</td>
                                    <td width=\"10%\"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover issue-tracker\">
                                <tbody id=\"sortable\">
                                {% for i in gallery %}
                                    <form method=\"post\" action=\"/gallery/create/{{ i.id }}\" enctype=\"multipart/form-data\">
                                        <tr>
                                            <td width=\"5%\" class=\"resort sorting-handle\" data-id=\"{{ i.id }}\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                            <td width=\"10%\">
                                                <img style=\"max-width: 50px\" src=\"/files/{{ i.image }}\" alt=\"\">
                                                <input type=\"file\" name=\"image\">
                                            </td>
                                            <td width=\"65%\"><input type=\"text\" name=\"name\" value=\"{{ i.name }}\" class=\"form-control\"></td>
                                            <td width=\"5%\"><a href=\"/gallery/items/{{ i.id }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                            <td width=\"5%\"><a href=\"/gallery/delete/{{ i.id }}\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
                                            <td width=\"10%\"><button type=\"submit\" class=\"btn btn-primary\">Сохранить</button></td>
                                        </tr>
                                    </form>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <form method=\"post\" action=\"/gallery/create\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Название\">
                                    </div>
                                    <div class=\"col-md-3\">
                                        <input type=\"file\" name=\"image\" class=\"form-control\" placeholder=\"Изображение\">
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\" href=\"\">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {

                    let sort = [];

                    \$('.sorting-handle').map((i, e) => {
                        sort.push(\$(e).data('id'))
                    });

                    \$.ajax({
                        type: \"POST\",
                        url: '/gallery/sort',
                        data: {
                            sort: sort
                        },
                        success: e => {
                            console.log(e);
                        }
                    })
                },
            })
            .disableSelection();
    </script>
{% endblock %}", "gallery/index.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/gallery/index.twig");
    }
}
