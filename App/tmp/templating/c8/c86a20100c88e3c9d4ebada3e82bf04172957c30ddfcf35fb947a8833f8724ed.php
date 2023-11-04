<?php

/* product.twig */
class __TwigTemplate_1c6db888599671df5790dfa3c31a1830a49a001def19e2329bba998122a7b5b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "product.twig", 1);
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
        echo "    <div class=\"product-single\">
        <div class=\"product\">
            <div class=\"left\">
                <div class=\"im\" style=\"height: 330px\">
                    <img class=\"product-image\" src=\"/files/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", array()), "html", null, true);
        echo "\" alt=\"\">
                </div>
                ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "advancedImages", array()))) {
            // line 10
            echo "                <br>
                <div class=\"galley\" style=\"margin-top: 10px; cursor: pointer\">
                    <img class=\"gallery-image\" data-name=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", array()), "html", null, true);
            echo "\" style=\"max-width: 100px; max-height: 100px\" src=\"/files/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", array()), "html", null, true);
            echo "\" alt=\"\">
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "advancedImages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "                        <img class=\"gallery-image\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "href", array()), "html", null, true);
                echo "\" style=\"max-width: 100px; max-height: 100px\" src=\"/files/mini/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "href", array()), "html", null, true);
                echo "\" alt=\"image-1\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                </div>
                ";
        }
        // line 18
        echo "            </div>
            <div class=\"right\">
                <h1 class=\"name\">";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", array());
        echo "</h1>
                <div class=\"article\">Артикул: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "article", array()), "html", null, true);
        echo "</div>
                <div class=\"price\">Цена за 1 шт. <i>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_site", array()), "html", null, true);
        echo " руб.</i></div>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"count-value\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo "\" data-multiply-value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo "\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo "\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo "\">-</span>
                    </span>
                </span>
                <div class=\"cart-add\">в корзину</div>
                <i class=\"in-cart\" style=\"margin-top: 0\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                <div class=\"params\">
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                                class=\"shop_param_value\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "box_count", array()), "html", null, true);
        echo " штук</span></div>
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                                class=\"shop_param_value\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pack_count", array()), "html", null, true);
        echo " шт.</span></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"product\">
            <div class=\"params-name\">Описание:</div>
            <div class=\"params\">
                <div class=\"shop_param\" style=\"margin-top: 10px\">
                    ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"bread\">
        <h1>С ЭТИМ ТОВАРОМ ОБЫЧНО ПОКУПАЮТ</h1>
    </div>
    <ul class=\"index-catalog product\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["similar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "            <li>
            <span class=\"product\">
                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "alias", array()), "html", null, true);
            echo "\">
                    <div class=\"img\">
                        <img class=\"image\" src=\"/files/mini/";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <span class=\"name\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["i"], "name", array());
            echo "</span>
                </a>
                <span class=\"price\">Цена: <i>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price_site", array()), "html", null, true);
            echo " руб.</i></span>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\" class=\"count-value\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\" data-multiply-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "pack_count", array()), "html", null, true);
            echo "\">-</span>
                    </span>
                </span>
                <span class=\"cart-add\">в корзину</span>
                <i class=\"in-cart\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
            </span>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </ul>
    <div class=\"clear\"></div>

    <script>
        \$('.gallery-image').mouseenter(e => {
            \$('.product-image').attr('src', `/files/\${\$(e.target).data('name')}`)
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 76,  189 => 68,  185 => 67,  177 => 66,  171 => 63,  166 => 61,  161 => 59,  154 => 57,  150 => 55,  146 => 54,  134 => 45,  122 => 36,  117 => 34,  107 => 27,  103 => 26,  95 => 25,  89 => 22,  85 => 21,  81 => 20,  77 => 18,  73 => 16,  62 => 14,  58 => 13,  52 => 12,  48 => 10,  46 => 9,  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}
{% block content %}
    <div class=\"product-single\">
        <div class=\"product\">
            <div class=\"left\">
                <div class=\"im\" style=\"height: 330px\">
                    <img class=\"product-image\" src=\"/files/{{ product.image }}\" alt=\"\">
                </div>
                {% if product.advancedImages is not empty %}
                <br>
                <div class=\"galley\" style=\"margin-top: 10px; cursor: pointer\">
                    <img class=\"gallery-image\" data-name=\"{{ product.image }}\" style=\"max-width: 100px; max-height: 100px\" src=\"/files/{{ product.image }}\" alt=\"\">
                    {% for i in product.advancedImages %}
                        <img class=\"gallery-image\" data-name=\"{{ i.href }}\" style=\"max-width: 100px; max-height: 100px\" src=\"/files/mini/{{ i.href }}\" alt=\"image-1\">
                    {% endfor %}
                </div>
                {% endif %}
            </div>
            <div class=\"right\">
                <h1 class=\"name\">{{ product.name | raw }}</h1>
                <div class=\"article\">Артикул: {{ product.article }}</div>
                <div class=\"price\">Цена за 1 шт. <i>{{ product.price_site }} руб.</i></div>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"{{ product.id }}\" class=\"count-value\" type=\"text\" value=\"{{ product.pack_count }}\" data-multiply-value=\"{{ product.pack_count }}\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"{{ product.pack_count }}\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"{{ product.pack_count }}\">-</span>
                    </span>
                </span>
                <div class=\"cart-add\">в корзину</div>
                <i class=\"in-cart\" style=\"margin-top: 0\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
                <div class=\"params\">
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в коробке</span></span><span
                                class=\"shop_param_value\">{{ product.box_count }} штук</span></div>
                    <div class=\"shop_param\"><span class=\"td_fir\"><span>Количество товара в упаковке</span></span><span
                                class=\"shop_param_value\">{{ product.pack_count }} шт.</span></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"product\">
            <div class=\"params-name\">Описание:</div>
            <div class=\"params\">
                <div class=\"shop_param\" style=\"margin-top: 10px\">
                    {{ product.description }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"bread\">
        <h1>С ЭТИМ ТОВАРОМ ОБЫЧНО ПОКУПАЮТ</h1>
    </div>
    <ul class=\"index-catalog product\">
        {% for i in similar %}
            <li>
            <span class=\"product\">
                <a href=\"{{ path }}/{{ i.alias }}\">
                    <div class=\"img\">
                        <img class=\"image\" src=\"/files/mini/{{ i.image }}\" alt=\"\">
                    </div>
                    <span class=\"name\">{{ i.name | raw }}</span>
                </a>
                <span class=\"price\">Цена: <i>{{ i.price_site }} руб.</i></span>
                <span class=\"count\">
                    <span class=\"price-cont count-container\">
                        <input data-product=\"{{ i.id }}\" class=\"count-value\" type=\"text\" value=\"{{ i.pack_count }}\" data-multiply-value=\"{{ i.pack_count }}\">
                        <span class=\"plus count-plus-btn\" data-plus-value=\"{{ i.pack_count }}\">+</span>
                        <span class=\"minus count-minus-btn\" data-minus-value=\"{{ i.pack_count }}\">-</span>
                    </span>
                </span>
                <span class=\"cart-add\">в корзину</span>
                <i class=\"in-cart\">Добавлено в <a href=\"/korzina-tovarov\">корзину</a></i>
            </span>
            </li>
        {% endfor %}
    </ul>
    <div class=\"clear\"></div>

    <script>
        \$('.gallery-image').mouseenter(e => {
            \$('.product-image').attr('src', `/files/\${\$(e.target).data('name')}`)
        })
    </script>
{% endblock %}", "product.twig", "/var/www/u0742521/data/www/eco/App/Site/View/product.twig");
    }
}
