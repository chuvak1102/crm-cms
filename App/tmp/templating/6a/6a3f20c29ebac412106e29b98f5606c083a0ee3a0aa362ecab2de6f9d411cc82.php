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

/* product/edit.twig */
class __TwigTemplate_b66f5df6c6384b086780bc97efc18e7f8fd36e85f168898023ae26d5e3988dee extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "product/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7);
        echo "</h5>
                </div>
                <div class=\"ibox-content\">
                    <h3>Карточка товара</h3>
                    <br>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Название</label>
                                <div class=\"col-sm-8\"><input name=\"name\" value=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-warning\"><label class=\"col-sm-4 control-label\">Цена на сайте за 1 шт</label>
                                <div class=\"col-sm-8\"><input value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site", [], "any", false, false, false, 18), "html", null, true);
        echo "\" name=\"price_site\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена на сайте опт.</label>
                                <div class=\"col-sm-2\"><input name=\"price_site_opt\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site_opt", [], "any", false, false, false, 21), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">От</label>
                                <div class=\"col-sm-2\"><input name=\"price_site_opt_count[value]\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPriceSiteOptCount", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"price_site_opt_count[key]\">
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPriceSiteOptCount", [], "any", false, false, false, 27), "dictionaryField", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 27))) {
                echo " selected ";
            }
            echo ">";
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
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество на складе</label>
                                <div class=\"col-sm-6\"><input value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countCurrent", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "html", null, true);
        echo "\" name=\"count_current[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_current[key]\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countCurrent", [], "any", false, false, false, 37), "dictionaryField", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 37))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Резерв</label>
                                <div class=\"col-sm-6\"><input value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countReserve", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43), "html", null, true);
        echo "\" name=\"count_reserve[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_reserve[key]\">
                                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countReserve", [], "any", false, false, false, 47), "dictionaryField", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 47))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Критичный остаток</label>
                                <div class=\"col-sm-6\"><input value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countMinimal", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "html", null, true);
        echo "\" name=\"count_minimal[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_minimal[key]\">
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "countMinimal", [], "any", false, false, false, 58), "dictionaryField", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group has-success\"><label class=\"col-sm-4 control-label\">Артикул</label>
                                <div class=\"col-sm-8\"><input name=\"article\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "article", [], "any", false, false, false, 64), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Категория</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control m-b\" name=\"category\">
                                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 70
            echo "                                            <option ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", [], "any", false, false, false, 70))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</option>
                                            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 71)) {
                // line 72
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 73
                    echo "                                                    <option ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", [], "any", false, false, false, 73))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "\">--";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 73), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                            ";
            }
            // line 76
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Дополнительная категория</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"col-lg-12 m-l-n\">
                                        <select class=\"form-control\" multiple name=\"category_extra[]\" style=\"height: 200px\">
                                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 85
            echo "                                                <option ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", [], "any", false, false, false, 85))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</option>
                                                ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 86)) {
                // line 87
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["root"], "extend", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 88
                    echo "                                                        <option ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", [], "any", false, false, false, 88))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "\">--";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 88), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                                                ";
            }
            // line 91
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 96)) {
            // line 97
            echo "                                <a href=\"/product/sticker/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary\" type=\"button\">Печать этикетки</a>
                            ";
        }
        // line 99
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Контрагент</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control m-b\" name=\"supplier\">
                                        <option value=\"0\">Выберите из списка</option>
                                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supplier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 108
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productToSupplier", [], "any", false, false, false, 108), "supplier", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 108))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"price_supplier\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_supplier", [], "any", false, false, false, 114), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Наименование у поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_product_name\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_product_name", [], "any", false, false, false, 117), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Артикул поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_article\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_article", [], "any", false, false, false, 120), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-error\"><label class=\"col-sm-4 control-label\">Дата поступления на склад поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_date_arrive\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_date_arrive", [], "any", false, false, false, 123), "Y-m-d"), "html", null, true);
        echo "\" type=\"date\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Товар временно отсутствует</label>
                                <div class=\"col-sm-8\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"available\" ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", [], "any", false, false, false, 128)) {
            echo " checked ";
        }
        echo " type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Отображать на сайте</label>
                                <div class=\"col-sm-8\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"active\" ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 135)) {
            echo " checked ";
        }
        echo " type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Изображение</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                        <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 142), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                            <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <br>
                    <h3>Особые свойства</h3>
                    <hr>
                    <br>
                    <div class=\"form-horizontal\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label> <input name=\"share\" type=\"checkbox\" ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "share", [], "any", false, false, false, 163)) {
            echo " checked ";
        }
        echo "> <i></i> Акция </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"hit\" type=\"checkbox\" ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hit", [], "any", false, false, false, 164)) {
            echo " checked ";
        }
        echo "> <i></i> Хит </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"new\" type=\"checkbox\" ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "new", [], "any", false, false, false, 165)) {
            echo " checked ";
        }
        echo "> <i></i> Новинка </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"kit\" type=\"checkbox\" ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "kit", [], "any", false, false, false, 166)) {
            echo " checked ";
        }
        echo "> <i></i> Цена за комплект </label></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label><i></i> Теги, через запятую: </label></div>
                                    <input value=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tags", [], "any", false, false, false, 174), "html", null, true);
        echo "\" name=\"tags\" type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label>  <i></i> Особые свойства: </label></div>
                                    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 183
            echo "                                        <div class=\"i-checks\"><label> <input ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 183), ($context["additionals"] ?? null))) {
                echo " checked ";
            }
            echo " name=\"additional[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 183), "html", null, true);
            echo "]\" type=\"checkbox\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 183), "html", null, true);
            echo " </label></div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"col-sm-10\">
                                <div class=\"i-checks\"><label>  <i></i> Логотипирование: </label></div>
                                <div class=\"i-checks\"><label> <input name=\"logo\" type=\"checkbox\" ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "logo", [], "any", false, false, false, 191)) {
            echo " checked ";
        }
        echo "> <i></i> Товар с логотипом </label></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <h3>Физические характеристики</h3>
                    <hr>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество в упаковке</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "any", false, false, false, 200), "value", [], "any", false, false, false, 200), "html", null, true);
        echo "\" name=\"pack_count[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_count[key]\">
                                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 204
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 204), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackCount", [], "any", false, false, false, 204), "dictionaryField", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 204))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 204), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Вес упаковки</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackWeight", [], "any", false, false, false, 210), "value", [], "any", false, false, false, 210), "html", null, true);
        echo "\" name=\"pack_weight[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_weight[key]\">
                                    ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 214
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 214), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackWeight", [], "any", false, false, false, 214), "dictionaryField", [], "any", false, false, false, 214), "id", [], "any", false, false, false, 214) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 214))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 214), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Объем упаковки</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackVolume", [], "any", false, false, false, 220), "value", [], "any", false, false, false, 220), "html", null, true);
        echo "\" name=\"pack_volume[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_volume[key]\">
                                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 224
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 224), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPackVolume", [], "any", false, false, false, 224), "dictionaryField", [], "any", false, false, false, 224), "id", [], "any", false, false, false, 224) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 224))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 224), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество в коробке</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxCount", [], "any", false, false, false, 232), "value", [], "any", false, false, false, 232), "html", null, true);
        echo "\" name=\"box_count[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_count[key]\">
                                    ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 236
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 236), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxCount", [], "any", false, false, false, 236), "dictionaryField", [], "any", false, false, false, 236), "id", [], "any", false, false, false, 236) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 236))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 236), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Вес коробки</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxWeight", [], "any", false, false, false, 242), "value", [], "any", false, false, false, 242), "html", null, true);
        echo "\" name=\"box_weight[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_weight[key]\">
                                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 246
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 246), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxWeight", [], "any", false, false, false, 246), "dictionaryField", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 246))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 246), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Объем коробки</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxVolume", [], "any", false, false, false, 252), "value", [], "any", false, false, false, 252), "html", null, true);
        echo "\" name=\"box_volume[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_volume[key]\">
                                    ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 256
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 256), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getBoxVolume", [], "any", false, false, false, 256), "dictionaryField", [], "any", false, false, false, 256), "id", [], "any", false, false, false, 256) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 256))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 256), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <hr>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Длина</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLength", [], "any", false, false, false, 266), "value", [], "any", false, false, false, 266), "html", null, true);
        echo "\" name=\"length[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"length[key]\">
                                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 270
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 270), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLength", [], "any", false, false, false, 270), "dictionaryField", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 270))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 270), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Ширина</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getWidth", [], "any", false, false, false, 276), "value", [], "any", false, false, false, 276), "html", null, true);
        echo "\" name=\"width[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"width[key]\">
                                    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 280
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 280), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getWidth", [], "any", false, false, false, 280), "dictionaryField", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 280))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 280), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Высота</label>
                            <div class=\"col-sm-4\"><input value=\"";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getHeight", [], "any", false, false, false, 286), "value", [], "any", false, false, false, 286), "html", null, true);
        echo "\" name=\"height[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"height[key]\">
                                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dictionary"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 290
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 290), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getHeight", [], "any", false, false, false, 290), "dictionaryField", [], "any", false, false, false, 290), "id", [], "any", false, false, false, 290) == twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 290))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 290), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Описание товара</label>
                            <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 299), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Материал</label>
                            <input name=\"material\" value=\"";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "material", [], "any", false, false, false, 303), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                            <label class=\"control-label\">Цвет</label>
                            <input name=\"color\" value=\"";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "color", [], "any", false, false, false, 305), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <br>
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Сохранить изменения\">
                    <a href=\"/product/\" class=\"btn btn-primary\" type=\"submit\">Назад в каталог</a>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 305,  822 => 303,  815 => 299,  806 => 292,  791 => 290,  787 => 289,  781 => 286,  775 => 282,  760 => 280,  756 => 279,  750 => 276,  744 => 272,  729 => 270,  725 => 269,  719 => 266,  709 => 258,  694 => 256,  690 => 255,  684 => 252,  678 => 248,  663 => 246,  659 => 245,  653 => 242,  647 => 238,  632 => 236,  628 => 235,  622 => 232,  614 => 226,  599 => 224,  595 => 223,  589 => 220,  583 => 216,  568 => 214,  564 => 213,  558 => 210,  552 => 206,  537 => 204,  533 => 203,  527 => 200,  513 => 191,  505 => 185,  490 => 183,  486 => 182,  475 => 174,  462 => 166,  456 => 165,  450 => 164,  444 => 163,  420 => 142,  408 => 135,  396 => 128,  388 => 123,  382 => 120,  376 => 117,  370 => 114,  364 => 110,  349 => 108,  345 => 107,  335 => 99,  329 => 97,  327 => 96,  321 => 92,  315 => 91,  312 => 90,  297 => 88,  292 => 87,  290 => 86,  279 => 85,  275 => 84,  266 => 77,  260 => 76,  257 => 75,  242 => 73,  237 => 72,  235 => 71,  224 => 70,  220 => 69,  212 => 64,  206 => 60,  191 => 58,  187 => 57,  181 => 54,  174 => 49,  159 => 47,  155 => 46,  149 => 43,  143 => 39,  128 => 37,  124 => 36,  118 => 33,  112 => 29,  97 => 27,  93 => 26,  87 => 23,  82 => 21,  76 => 18,  70 => 15,  59 => 7,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <form action=\"{{ formAction }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>{{ product.name | raw }}</h5>
                </div>
                <div class=\"ibox-content\">
                    <h3>Карточка товара</h3>
                    <br>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Название</label>
                                <div class=\"col-sm-8\"><input name=\"name\" value=\"{{ product.name | raw }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-warning\"><label class=\"col-sm-4 control-label\">Цена на сайте за 1 шт</label>
                                <div class=\"col-sm-8\"><input value=\"{{ product.price_site }}\" name=\"price_site\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена на сайте опт.</label>
                                <div class=\"col-sm-2\"><input name=\"price_site_opt\" value=\"{{ product.price_site_opt }}\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">От</label>
                                <div class=\"col-sm-2\"><input name=\"price_site_opt_count[value]\" value=\"{{ product.getPriceSiteOptCount.value }}\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"price_site_opt_count[key]\">
                                        {% for i in dictionary %}
                                            <option value=\"{{ i.id }}\" {% if product.getPriceSiteOptCount.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество на складе</label>
                                <div class=\"col-sm-6\"><input value=\"{{ product.countCurrent.value }}\" name=\"count_current[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_current[key]\">
                                        {% for i in dictionary %}
                                            <option value=\"{{ i.id }}\" {% if product.countCurrent.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Резерв</label>
                                <div class=\"col-sm-6\"><input value=\"{{ product.countReserve.value }}\" name=\"count_reserve[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_reserve[key]\">
                                        {% for i in dictionary %}
                                            <option value=\"{{ i.id }}\" {% if product.countReserve.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Критичный остаток</label>
                                <div class=\"col-sm-6\"><input value=\"{{ product.countMinimal.value }}\" name=\"count_minimal[value]\" type=\"text\" class=\"form-control\"></div>
                                <div class=\"col-sm-2\">
                                    <select class=\"form-control m-b\" name=\"count_minimal[key]\">
                                        {% for i in dictionary %}
                                            <option value=\"{{ i.id }}\" {% if product.countMinimal.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group has-success\"><label class=\"col-sm-4 control-label\">Артикул</label>
                                <div class=\"col-sm-8\"><input name=\"article\" value=\"{{ product.article }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Категория</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control m-b\" name=\"category\">
                                        {% for root in category %}
                                            <option {% if root.id in product.categoryIds %} selected {% endif %} value=\"{{ root.id }}\">{{ root.name }}</option>
                                            {% if root.extend %}
                                                {% for i in root.extend %}
                                                    <option {% if i.id in product.categoryIds %} selected {% endif %} value=\"{{ i.id }}\">--{{ i.name }}</option>
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Дополнительная категория</label>
                                <div class=\"col-sm-8\">
                                    <div class=\"col-lg-12 m-l-n\">
                                        <select class=\"form-control\" multiple name=\"category_extra[]\" style=\"height: 200px\">
                                            {% for root in category %}
                                                <option {% if root.id in product.categoryIds %} selected {% endif %} value=\"{{ root.id }}\">{{ root.name }}</option>
                                                {% if root.extend %}
                                                    {% for i in root.extend %}
                                                        <option {% if i.id in product.categoryIds %} selected {% endif %} value=\"{{ i.id }}\">--{{ i.name }}</option>
                                                    {% endfor %}
                                                {% endif %}
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {% if product.id %}
                                <a href=\"/product/sticker/{{ product.id }}\" target=\"_blank\" class=\"btn btn-primary\" type=\"button\">Печать этикетки</a>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Контрагент</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control m-b\" name=\"supplier\">
                                        <option value=\"0\">Выберите из списка</option>
                                        {% for i in supplier %}
                                            <option {% if product.productToSupplier.supplier.id == i.id %} selected {% endif %} value=\"{{ i.id }}\">{{ i.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"price_supplier\" value=\"{{ product.price_supplier }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Наименование у поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_product_name\" value=\"{{ product.supplier_product_name }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Артикул поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_article\" value=\"{{ product.supplier_article }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-error\"><label class=\"col-sm-4 control-label\">Дата поступления на склад поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_date_arrive\" value=\"{{ product.supplier_date_arrive | date('Y-m-d') }}\" type=\"date\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Товар временно отсутствует</label>
                                <div class=\"col-sm-8\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"available\" {% if product.available %} checked {% endif %} type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Отображать на сайте</label>
                                <div class=\"col-sm-8\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"active\" {% if product.active %} checked {% endif %} type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Изображение</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                        <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/{{ product.image }}\" alt=\"\">
                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                            <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <br>
                    <h3>Особые свойства</h3>
                    <hr>
                    <br>
                    <div class=\"form-horizontal\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label> <input name=\"share\" type=\"checkbox\" {% if product.share %} checked {% endif %}> <i></i> Акция </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"hit\" type=\"checkbox\" {% if product.hit %} checked {% endif %}> <i></i> Хит </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"new\" type=\"checkbox\" {% if product.new %} checked {% endif %}> <i></i> Новинка </label></div>
                                    <div class=\"i-checks\"><label> <input name=\"kit\" type=\"checkbox\" {% if product.kit %} checked {% endif %}> <i></i> Цена за комплект </label></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label><i></i> Теги, через запятую: </label></div>
                                    <input value=\"{{ product.tags }}\" name=\"tags\" type=\"text\" class=\"form-control\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <div class=\"i-checks\"><label>  <i></i> Особые свойства: </label></div>
                                    {% for i in additional %}
                                        <div class=\"i-checks\"><label> <input {% if i.id in additionals %} checked {% endif %} name=\"additional[{{ i.id }}]\" type=\"checkbox\"> {{ i.name }} </label></div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"col-sm-10\">
                                <div class=\"i-checks\"><label>  <i></i> Логотипирование: </label></div>
                                <div class=\"i-checks\"><label> <input name=\"logo\" type=\"checkbox\" {% if product.logo %} checked {% endif %}> <i></i> Товар с логотипом </label></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <h3>Физические характеристики</h3>
                    <hr>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество в упаковке</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getPackCount.value }}\" name=\"pack_count[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_count[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getPackCount.dictionaryField.id == i.id %} selected {% endif %} >{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Вес упаковки</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getPackWeight.value }}\" name=\"pack_weight[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_weight[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getPackWeight.dictionaryField.id == i.id %} selected {% endif %} >{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Объем упаковки</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getPackVolume.value }}\" name=\"pack_volume[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"pack_volume[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getPackVolume.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество в коробке</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getBoxCount.value }}\" name=\"box_count[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_count[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getBoxCount.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Вес коробки</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getBoxWeight.value }}\" name=\"box_weight[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_weight[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getBoxWeight.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Объем коробки</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getBoxVolume.value }}\" name=\"box_volume[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"box_volume[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getBoxVolume.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <hr>
                    <div class=\"col-sm-6\" style=\"padding: 0\">
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Длина</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getLength.value }}\" name=\"length[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"length[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getLength.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Ширина</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getWidth.value }}\" name=\"width[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"width[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getWidth.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Высота</label>
                            <div class=\"col-sm-4\"><input value=\"{{ product.getHeight.value }}\" name=\"height[value]\" type=\"text\" class=\"form-control\"></div>
                            <div class=\"col-sm-4\">
                                <select class=\"form-control m-b\" name=\"height[key]\">
                                    {% for i in dictionary %}
                                        <option value=\"{{ i.id }}\" {% if product.getHeight.dictionaryField.id == i.id %} selected {% endif %}>{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Описание товара</label>
                            <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">{{ product.description }}</textarea>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Материал</label>
                            <input name=\"material\" value=\"{{ product.material }}\" type=\"text\" class=\"form-control\">
                            <label class=\"control-label\">Цвет</label>
                            <input name=\"color\" value=\"{{ product.color }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <br>
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Сохранить изменения\">
                    <a href=\"/product/\" class=\"btn btn-primary\" type=\"submit\">Назад в каталог</a>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </form>
    </div>
{% endblock %}", "product/edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/product/edit.twig");
    }
}
