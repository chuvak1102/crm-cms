<?php

/* gallery/items.twig */
class __TwigTemplate_0a1a8c4735d350d4195c3c990b79eb4b2ce2d7e5c838fd0bc30f83bc9175cadc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "gallery/items.twig", 1);
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
                        <div class=\"col-md-6\">
                            <input data-gallery=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["gallery"] ?? null), "html", null, true);
        echo "\" name=\"catalog\" type=\"text\" class=\"form-control\" placeholder=\"Поиск по каталогу\">
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"btn btn-primary save\">Сохранить</div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class=\"ibox-content\" style=\"min-height: 1000px\">
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"table-responsive\">
                                    <table class=\"table catalog-table\"></table>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"table-responsive\">
                                    <table class=\"table gallery-table\">
                                        <tbody id=\"sortable\">
                                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "                                                <tr style=\"height: 50px\" class=\"gallery-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" data-gallery=\"";
            echo twig_escape_filter($this->env, ($context["gallery"] ?? null), "html", null, true);
            echo "\">
                                                    <td width=\"5%\" class=\"sorting-handle\" data-id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                                    <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                                                    <td width=\"75%\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</td>
                                                    <td width=\"5%\" class=\"gallery-delete\"><div href=\"\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></div></td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('[name=catalog]').on('input', e => {

            let gallery = \$(e.target).data('gallery');

            if (\$(e.target).val().length >= 3) {
                \$.ajax({
                    url: \"/gallery/search\",
                    method: \"post\",
                    data: {
                        value: \$(e.target).val()
                    },
                    success: text => {
                        if (text) {

                            \$('.catalog-table').empty();

                            let json = JSON.parse(text);

                            json.map((e, i) => {

                                \$('.catalog-table').append(
                                    `
                                        <tr style=\"height: 50px\">
                                            <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/\${e.image}\" alt=\"\"></td>
                                            <td width=\"75%\">\${e.name}</td>
                                            <td width=\"5%\"><div class=\"btn btn-primary move-right\" data-id=\"\${e.id}\" data-name=\"\${e.name}\" data-image=\"\${e.image}\" data-gallery=\"\${gallery}\"><i class=\"fa fa-angle-double-right\"></i></div></td>
                                        </tr>
                                    `
                                );
                            })
                        }
                    }
                });
            }
        })
        \$(document).on('click', '.move-right', e => {

            let id = \$(e.target).closest('.move-right').data('id');
            let name = \$(e.target).closest('.move-right').data('name');
            let image = \$(e.target).closest('.move-right').data('image');
            let gallery = \$(e.target).closest('.move-right').data('gallery');

            \$('.gallery-table tbody').append(
                `
                    <tr style=\"height: 50px\" class=\"gallery-item\" data-id=\"\${id}\" data-gallery=\"\${gallery}\">
                        <td width=\"5%\" class=\"sorting-handle\" data-id=\"\${id}\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                        <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/\${image}\" alt=\"\"></td>
                        <td width=\"75%\">\${name}</td>
                        <td width=\"5%\" class=\"gallery-delete\"><div href=\"\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></div></td>
                    </tr>
                `
            );
        });

        \$(document).on('click', '.gallery-delete', e => {
            \$(e.target).parents('tr').remove();
        });

        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {},
            })
            .disableSelection();

        \$(document).on('click', '.save', ev => {

            let list = \$('.gallery-item');
            let data = [];

            list.map((i, e) => {
                data.push(\$(e).data('id'));
            });

            \$.ajax({
                type: \"POST\",
                url: '/gallery/save',
                data: {items: data, gallery: \$('[name=catalog]').data('gallery')},
                success: e => {
                    window.location.href = '/gallery';
                }
            })

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "gallery/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  86 => 34,  82 => 33,  78 => 32,  71 => 31,  67 => 30,  43 => 9,  35 => 3,  32 => 2,  15 => 1,);
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
                        <div class=\"col-md-6\">
                            <input data-gallery=\"{{ gallery }}\" name=\"catalog\" type=\"text\" class=\"form-control\" placeholder=\"Поиск по каталогу\">
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"btn btn-primary save\">Сохранить</div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class=\"ibox-content\" style=\"min-height: 1000px\">
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"table-responsive\">
                                    <table class=\"table catalog-table\"></table>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"table-responsive\">
                                    <table class=\"table gallery-table\">
                                        <tbody id=\"sortable\">
                                            {% for i in items %}
                                                <tr style=\"height: 50px\" class=\"gallery-item\" data-id=\"{{ i.id }}\" data-gallery=\"{{ gallery }}\">
                                                    <td width=\"5%\" class=\"sorting-handle\" data-id=\"{{ i.id }}\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                                                    <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/{{ i.image }}\" alt=\"\"></td>
                                                    <td width=\"75%\">{{ i.name }}</td>
                                                    <td width=\"5%\" class=\"gallery-delete\"><div href=\"\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></div></td>
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
        </div>
    </div>
    <script>
        \$('[name=catalog]').on('input', e => {

            let gallery = \$(e.target).data('gallery');

            if (\$(e.target).val().length >= 3) {
                \$.ajax({
                    url: \"/gallery/search\",
                    method: \"post\",
                    data: {
                        value: \$(e.target).val()
                    },
                    success: text => {
                        if (text) {

                            \$('.catalog-table').empty();

                            let json = JSON.parse(text);

                            json.map((e, i) => {

                                \$('.catalog-table').append(
                                    `
                                        <tr style=\"height: 50px\">
                                            <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/\${e.image}\" alt=\"\"></td>
                                            <td width=\"75%\">\${e.name}</td>
                                            <td width=\"5%\"><div class=\"btn btn-primary move-right\" data-id=\"\${e.id}\" data-name=\"\${e.name}\" data-image=\"\${e.image}\" data-gallery=\"\${gallery}\"><i class=\"fa fa-angle-double-right\"></i></div></td>
                                        </tr>
                                    `
                                );
                            })
                        }
                    }
                });
            }
        })
        \$(document).on('click', '.move-right', e => {

            let id = \$(e.target).closest('.move-right').data('id');
            let name = \$(e.target).closest('.move-right').data('name');
            let image = \$(e.target).closest('.move-right').data('image');
            let gallery = \$(e.target).closest('.move-right').data('gallery');

            \$('.gallery-table tbody').append(
                `
                    <tr style=\"height: 50px\" class=\"gallery-item\" data-id=\"\${id}\" data-gallery=\"\${gallery}\">
                        <td width=\"5%\" class=\"sorting-handle\" data-id=\"\${id}\" align=\"center\"><i style=\"cursor: move; opacity: 0.7\" class=\"fa fa-arrows fa-2x\"></i></td>
                        <td width=\"10%\"><img style=\"max-width: 50px; max-height: 50px\" src=\"/files/\${image}\" alt=\"\"></td>
                        <td width=\"75%\">\${name}</td>
                        <td width=\"5%\" class=\"gallery-delete\"><div href=\"\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></div></td>
                    </tr>
                `
            );
        });

        \$(document).on('click', '.gallery-delete', e => {
            \$(e.target).parents('tr').remove();
        });

        \$('#sortable').sortable(
            {
                handle: '.sorting-handle',
                tolerance: 'pointer',
                forcePlaceholderSize: true,
                opacity: 0.8,
                update: () => {},
            })
            .disableSelection();

        \$(document).on('click', '.save', ev => {

            let list = \$('.gallery-item');
            let data = [];

            list.map((i, e) => {
                data.push(\$(e).data('id'));
            });

            \$.ajax({
                type: \"POST\",
                url: '/gallery/save',
                data: {items: data, gallery: \$('[name=catalog]').data('gallery')},
                success: e => {
                    window.location.href = '/gallery';
                }
            })

        });
    </script>
{% endblock %}", "gallery/items.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/gallery/items.twig");
    }
}
