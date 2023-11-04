<?php

/* product/edit.twig */
class __TwigTemplate_bfe46220683b14f15bd651ec5a0ec17ad45abf1abd0d98fcafc37dbbe2b70218 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "product/edit.twig", 1);
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
        <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-content\">
                    <br>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Название</label>
                                <div class=\"col-sm-8\"><input name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Артикул</label>
                                <div class=\"col-sm-3\"><input name=\"article\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "article", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Цена за шт</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site", array()), "html", null, true);
        echo "\" name=\"price_site\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена на сайте опт.</label>
                                <div class=\"col-sm-3\"><input name=\"price_site_opt\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site_opt", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">От, шт</label>
                                <div class=\"col-sm-3\"><input name=\"price_site_opt_count\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site_opt_count", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество на складе</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "count_current", array()), "html", null, true);
        echo "\" name=\"count_current\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Резерв</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "count_reserve", array()), "html", null, true);
        echo "\" name=\"count_reserve\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Критичный остаток</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "count_minimal", array()), "html", null, true);
        echo "\" name=\"count_minimal\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Категории</label>
                                <div class=\"col-sm-8\"><br>
                                    <select style=\"height: 320px; margin-top: -15px\" class=\"form-control\" multiple name=\"category_extra[]\" style=\"height: 200px\">
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 35
            echo "                                            <option ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["root"], "id", array()), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["root"], "name", array()), "html", null, true);
            echo "</option>
                                            ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["root"], "extend", array())) {
                // line 37
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["root"], "extend", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 38
                    echo "                                                    <option ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categoryIds", array()))) {
                        echo " selected ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
                    echo "\">--";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                                            ";
            }
            // line 41
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Особоые свойства</label>

                            </div>
                            <div class=\"form-horizontal\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-10\">
                                            <div class=\"i-checks\"><label> <input name=\"share\" type=\"checkbox\" ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "share", array())) {
            echo " checked ";
        }
        echo "> <i></i> Акция </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"hit\" type=\"checkbox\" ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hit", array())) {
            echo " checked ";
        }
        echo "> <i></i> Хит </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"new\" type=\"checkbox\" ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "new", array())) {
            echo " checked ";
        }
        echo "> <i></i> Новинка </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"kit\" type=\"checkbox\" ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "kit", array())) {
            echo " checked ";
        }
        echo "> <i></i> Цена за комплект </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-10\">
                                            <div class=\"i-checks\"><label>  <i></i> Особые свойства: </label></div>
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "                                                <div class=\"i-checks\"><label> <input ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), ($context["additionals"] ?? null))) {
                echo " checked ";
            }
            echo " name=\"additional[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "]\" type=\"checkbox\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo " </label></div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"col-sm-10\">
                                        <div class=\"i-checks\"><label>  <i></i> Логотипирование: </label></div>
                                        <div class=\"i-checks\"><label> <input name=\"logo\" type=\"checkbox\" ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "logo", array())) {
            echo " checked ";
        }
        echo "> <i></i> Товар с логотипом </label></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                            ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array())) {
            // line 78
            echo "                                <a href=\"/product/sticker/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary\" type=\"button\">Печать этикетки</a>
                            ";
        }
        // line 80
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Контрагент</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control m-b\" name=\"supplier\">
                                        <option value=\"0\">Выберите из списка</option>
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supplier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 89
            echo "                                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productToSupplier", array()), "supplier", array()), "id", array()) == twig_get_attribute($this->env, $this->source, $context["i"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Наименование у поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_product_name\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_product_name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена поставщика</label>
                                <div class=\"col-sm-3\"><input name=\"price_supplier\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_supplier", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Артикул</label>
                                <div class=\"col-sm-3\"><input name=\"supplier_article\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_article", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-error\"><label class=\"col-sm-4 control-label\">Дата поступления на склад поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_date_arrive\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "supplier_date_arrive", array()), "Y-m-d"), "html", null, true);
        echo "\" type=\"date\" class=\"form-control\"></div>
                            </div>

                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Товар временно отсутствует</label>
                                <div class=\"col-sm-3\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"available\" ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", array())) {
            echo " checked ";
        }
        echo " type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Отображать на сайте</label>
                                <div class=\"col-sm-3\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"active\" ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", array())) {
            echo " checked ";
        }
        echo " type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Теги, через запятую:</label>
                                <div class=\"col-sm-8\"><input value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tags", array()), "html", null, true);
        echo "\" name=\"tags\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Основное изображение</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                        ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", array())) {
            // line 126
            echo "                                        <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", array()), "html", null, true);
            echo "\" alt=\"\">
                                        <a href=\"/product/edit/";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "html", null, true);
            echo "/deletemainimage\" class=\"btn btn-danger\" type=\"button\">X</a>
                                        ";
        }
        // line 129
        echo "                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                            <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Дополнительные изображения</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
";
        // line 142
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "advancedImages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 143
            echo "                                            <img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "href", array()), "html", null, true);
            echo "\" alt=\"\">
                                            <a href=\"/product/edit/";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "html", null, true);
            echo "/deleteimage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\" type=\"button\">X</a>
                                            <br><br>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImages\" class=\"btn btn-primary\">
                                            <input type=\"file\" multiple name=\"image_advanced[]\" id=\"inputImages\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <hr>

                    <div class=\"col-sm-12\" style=\"\">
                        <div class=\"col-sm-6\" style=\"\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Физические характеристики</label>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Количество в упаковке</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo "\" name=\"pack_count\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Количество в коробке</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "box_count", array()), "html", null, true);
        echo "\" name=\"box_count\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <br>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Вес упаковки, кг</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_weight", array()), "html", null, true);
        echo "\" name=\"pack_weight\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Вес коробки, кг</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "box_weight", array()), "html", null, true);
        echo "\" name=\"box_weight\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <br>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Объем упаковки, м3</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_volume", array()), "html", null, true);
        echo "\" name=\"pack_volume\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Объем коробки, м3</label>
                                <div class=\"col-sm-3\"><input value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "box_volume", array()), "html", null, true);
        echo "\" name=\"box_volume\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"clearfix\"></div>

                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Длина, см</label>
                                <div class=\"col-sm-2\"><input value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "length", array()), "html", null, true);
        echo "\" name=\"length\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Ширина, см</label>
                                <div class=\"col-sm-2\"><input value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "width", array()), "html", null, true);
        echo "\" name=\"width\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Высота, см</label>
                                <div class=\"col-sm-2\"><input value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "height", array()), "html", null, true);
        echo "\" name=\"height\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Диаметр, мм</label>
                                <div class=\"col-sm-2\"><input value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "diameter", array()), "html", null, true);
        echo "\" name=\"diameter\" type=\"text\" class=\"form-control\"></div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Описание товара</label>
                                <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Материал</label>
                                <div class=\"col-sm-4\"><input name=\"material\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "material", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Цвет</label>
                                <div class=\"col-sm-4\"><input name=\"color\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "color", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\"></div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class=\"clearfix\"></div>
                    <br>
                    <input type=\"text\" name=\"sort\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sort", array()), "html", null, true);
        echo "\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Сохранить изменения\">
                    <a href=\"/product/\" class=\"btn btn-primary\" type=\"submit\">Назад в каталог</a>
                    <a href=\"/product/delete/";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-danger\" type=\"submit\">Удалить товар</a>
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
        return array (  477 => 214,  471 => 211,  460 => 203,  455 => 201,  449 => 198,  440 => 192,  435 => 190,  430 => 188,  425 => 186,  417 => 181,  412 => 179,  405 => 175,  400 => 173,  393 => 169,  388 => 167,  366 => 147,  355 => 144,  350 => 143,  345 => 142,  331 => 129,  326 => 127,  321 => 126,  319 => 125,  311 => 120,  301 => 115,  290 => 109,  281 => 103,  275 => 100,  270 => 98,  264 => 95,  258 => 91,  243 => 89,  239 => 88,  229 => 80,  223 => 78,  221 => 77,  211 => 72,  203 => 66,  188 => 64,  184 => 63,  171 => 55,  165 => 54,  159 => 53,  153 => 52,  141 => 42,  135 => 41,  132 => 40,  117 => 38,  112 => 37,  110 => 36,  99 => 35,  95 => 34,  87 => 29,  81 => 26,  76 => 24,  70 => 21,  65 => 19,  59 => 16,  54 => 14,  48 => 11,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <form action=\"{{ formAction }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-content\">
                    <br>
                    <div class=\"col-lg-6\">
                        <div class=\"form-horizontal\">
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Название</label>
                                <div class=\"col-sm-8\"><input name=\"name\" value=\"{{ product.name }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Артикул</label>
                                <div class=\"col-sm-3\"><input name=\"article\" value=\"{{ product.article }}\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Цена за шт</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.price_site }}\" name=\"price_site\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена на сайте опт.</label>
                                <div class=\"col-sm-3\"><input name=\"price_site_opt\" value=\"{{ product.price_site_opt }}\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">От, шт</label>
                                <div class=\"col-sm-3\"><input name=\"price_site_opt_count\" value=\"{{ product.price_site_opt_count }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Количество на складе</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.count_current }}\" name=\"count_current\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Резерв</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.count_reserve }}\" name=\"count_reserve\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Критичный остаток</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.count_minimal }}\" name=\"count_minimal\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Категории</label>
                                <div class=\"col-sm-8\"><br>
                                    <select style=\"height: 320px; margin-top: -15px\" class=\"form-control\" multiple name=\"category_extra[]\" style=\"height: 200px\">
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
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Особоые свойства</label>

                            </div>
                            <div class=\"form-horizontal\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-10\">
                                            <div class=\"i-checks\"><label> <input name=\"share\" type=\"checkbox\" {% if product.share %} checked {% endif %}> <i></i> Акция </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"hit\" type=\"checkbox\" {% if product.hit %} checked {% endif %}> <i></i> Хит </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"new\" type=\"checkbox\" {% if product.new %} checked {% endif %}> <i></i> Новинка </label></div>
                                            <div class=\"i-checks\"><label> <input name=\"kit\" type=\"checkbox\" {% if product.kit %} checked {% endif %}> <i></i> Цена за комплект </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-10\">
                                            <div class=\"i-checks\"><label>  <i></i> Особые свойства: </label></div>
                                            {% for i in additional %}
                                                <div class=\"i-checks\"><label> <input {% if i.id in additionals %} checked {% endif %} name=\"additional[{{ i.id }}]\" type=\"checkbox\"> {{ i.name }} </label></div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"col-sm-10\">
                                        <div class=\"i-checks\"><label>  <i></i> Логотипирование: </label></div>
                                        <div class=\"i-checks\"><label> <input name=\"logo\" type=\"checkbox\" {% if product.logo %} checked {% endif %}> <i></i> Товар с логотипом </label></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
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
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Наименование у поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_product_name\" value=\"{{ product.supplier_product_name }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Цена поставщика</label>
                                <div class=\"col-sm-3\"><input name=\"price_supplier\" value=\"{{ product.price_supplier }}\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Артикул</label>
                                <div class=\"col-sm-3\"><input name=\"supplier_article\" value=\"{{ product.supplier_article }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group has-error\"><label class=\"col-sm-4 control-label\">Дата поступления на склад поставщика</label>
                                <div class=\"col-sm-8\"><input name=\"supplier_date_arrive\" value=\"{{ product.supplier_date_arrive | date('Y-m-d') }}\" type=\"date\" class=\"form-control\"></div>
                            </div>

                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Товар временно отсутствует</label>
                                <div class=\"col-sm-3\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"available\" {% if product.available %} checked {% endif %} type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Отображать на сайте</label>
                                <div class=\"col-sm-3\">
                                    <label class=\"checkbox-inline\">
                                        <input name=\"active\" {% if product.active %} checked {% endif %} type=\"checkbox\" value=\"option1\" id=\"inlineCheckbox1\">
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Теги, через запятую:</label>
                                <div class=\"col-sm-8\"><input value=\"{{ product.tags }}\" name=\"tags\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Основное изображение</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
                                        {% if product.image %}
                                        <img style=\"max-width: 200px; max-height: 200px\" src=\"/files/{{ product.image }}\" alt=\"\">
                                        <a href=\"/product/edit/{{ product.id }}/deletemainimage\" class=\"btn btn-danger\" type=\"button\">X</a>
                                        {% endif %}
                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImage\" class=\"btn btn-primary\">
                                            <input type=\"file\" accept=\"image/*\" name=\"image\" id=\"inputImage\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-4 control-label\">Дополнительные изображения</label>
                                <div class=\"col-md-6\">
                                    <div class=\"img-preview img-preview-sm\" style=\"width: 200px; height: 200px\">
{#                                        {{ dump(product.advancedImages) }}#}
                                        {% for i in product.advancedImages %}
                                            <img style=\"max-width: 50px; max-height: 50px\" src=\"/files/mini/{{ i.href }}\" alt=\"\">
                                            <a href=\"/product/edit/{{ product.id }}/deleteimage/{{ i.id }}\" class=\"btn btn-danger\" type=\"button\">X</a>
                                            <br><br>
                                        {% endfor %}
                                    </div>
                                    <div class=\"btn-group\">
                                        <label title=\"Upload image file\" for=\"inputImages\" class=\"btn btn-primary\">
                                            <input type=\"file\" multiple name=\"image_advanced[]\" id=\"inputImages\" class=\"hide\">
                                            Выбрать
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <hr>

                    <div class=\"col-sm-12\" style=\"\">
                        <div class=\"col-sm-6\" style=\"\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Физические характеристики</label>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Количество в упаковке</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.pack_count }}\" name=\"pack_count\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Количество в коробке</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.box_count }}\" name=\"box_count\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <br>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Вес упаковки, кг</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.pack_weight }}\" name=\"pack_weight\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Вес коробки, кг</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.box_weight }}\" name=\"box_weight\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <br>
                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Объем упаковки, м3</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.pack_volume }}\" name=\"pack_volume\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-3 control-label\">Объем коробки, м3</label>
                                <div class=\"col-sm-3\"><input value=\"{{ product.box_volume }}\" name=\"box_volume\" type=\"text\" class=\"form-control\"></div>
                            </div>
                            <div class=\"clearfix\"></div>

                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Длина, см</label>
                                <div class=\"col-sm-2\"><input value=\"{{ product.length }}\" name=\"length\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Ширина, см</label>
                                <div class=\"col-sm-2\"><input value=\"{{ product.width }}\" name=\"width\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Высота, см</label>
                                <div class=\"col-sm-2\"><input value=\"{{ product.height }}\" name=\"height\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Диаметр, мм</label>
                                <div class=\"col-sm-2\"><input value=\"{{ product.diameter }}\" name=\"diameter\" type=\"text\" class=\"form-control\"></div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\" style=\"\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Описание товара</label>
                                <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\">{{ product.description }}</textarea>
                            </div>
                            <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Материал</label>
                                <div class=\"col-sm-4\"><input name=\"material\" value=\"{{ product.material }}\" type=\"text\" class=\"form-control\"></div>
                                <label for=\"inputValue\" class=\"col-sm-2 control-label\">Цвет</label>
                                <div class=\"col-sm-4\"><input name=\"color\" value=\"{{ product.color }}\" type=\"text\" class=\"form-control\"></div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class=\"clearfix\"></div>
                    <br>
                    <input type=\"text\" name=\"sort\" value=\"{{ product.sort }}\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Сохранить изменения\">
                    <a href=\"/product/\" class=\"btn btn-primary\" type=\"submit\">Назад в каталог</a>
                    <a href=\"/product/delete/{{ product.id }}\" class=\"btn btn-danger\" type=\"submit\">Удалить товар</a>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </form>
    </div>
{% endblock %}", "product/edit.twig", "/var/www/u0742521/data/www/eco/App/Admin/View/product/edit.twig");
    }
}
