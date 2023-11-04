<?php

/* profile.twig */
class __TwigTemplate_f7d57f78a238682ed6d28d3cd1ed1d394a4e800097a19884314f288208788b4b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "profile.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <form method=\"POST\" action=\"/profile?main=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3 ><b>Основная информация</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Название компании:</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>ФИО руководителя:</label>
                                <input class=\"form-control\" name=\"fio\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "fio", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Контактные телефоны (с кодом города):</label>
                                <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Почта:</label>
                                <input class=\"form-control\" name=\"email\" type=\"text\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Изменить</button>
                            </div>
                        </form>
                        <br>
                        <form method=\"POST\" action=\"/profile?face=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3><b>Юрлицо</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Тип</label>
                                <select class=\"form-control company-type\" name=\"company_type\" >
                                    <option value=\"ooo\" ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_type", array()) == "ooo")) {
            echo "selected";
        }
        echo " >ООО</option>
                                    <option value=\"ip\" ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_type", array()) == "ip")) {
            echo "selected";
        }
        echo ">ИП</option>
                                </select>
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Название</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_r", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>ИНН</label>
                                <input class=\"form-control\" name=\"inn\" type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "inn", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label class=\"change-for-ip\">ОГРН</label>
                                <input class=\"form-control\" name=\"ogrn\" type=\"text\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "ogrn", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Юридический адрес</label>
                                <input class=\"form-control\" name=\"firm_address\" type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "firm_address", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Фактический адрес</label>
                                <input class=\"form-control\" name=\"fact_address\" type=\"text\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "fact_address", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Расчетный счет</label>
                                <input class=\"form-control\" name=\"account_r\" type=\"text\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_r", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Коррсчет</label>
                                <input class=\"form-control\" name=\"account_k\" type=\"text\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_k", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>БИК</label>
                                <input class=\"form-control\" name=\"bik\" type=\"text\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bik", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Банк</label>
                                <input class=\"form-control\" name=\"bank\" type=\"text\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bank", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row hide-for-ip\">
                                <label>Ген. Директор</label>
                                <input class=\"form-control\" name=\"director\" type=\"text\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "director", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>По Доверенности</label>
                                <input class=\"form-control\" name=\"dover\" type=\"text\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "dover", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Добавить</button>
                            </div>
                        </form>
                        <br>
                        <form method=\"POST\" action=\"/profile?address=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3><b>Адреса</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Юрлицо</label>
                                <select class=\"form-control\" name=\"company\">
                                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["company"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 124
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                </select>
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Название</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Город:</label>
                                <input class=\"form-control\" name=\"city\" type=\"text\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Улица, проспект и пр.:</label>
                                <input class=\"form-control\" name=\"street\" type=\"text\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "street", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Номер дома:</label>
                                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "house", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col-sm-4\">
                                    <label>Строение:</label>
                                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "block", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col-sm-4\">
                                    <label>офис:</label>
                                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "office", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <label>Телефон</label>
                                <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phone", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Время работы Вашей компании:</label>
                                <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "work_time", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Пропуск:</label>
                                <input class=\"form-control\" name=\"pass\" type=\"text\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "pass", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Комментарий:</label>
                                <input class=\"form-control\" name=\"comment\" type=\"text\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "comment", array()), "html", null, true);
        echo "\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Добавить</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"col-sm-2\">

                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <h3 ><b>Юрлицо</b></h3>
                            <p></p>
                            ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["company"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 191
            echo "
                                <div>Тип - ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "company_type", array()) == "ip")) {
                echo "ИП";
            } else {
                echo "ООО";
            }
            echo "</div>
                                <div>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</div>
                                <div>Расчетный счет - ";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "account_r", array()), "html", null, true);
            echo "</div>
                                <div>Коррсчет - ";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "account_k", array()), "html", null, true);
            echo "</div>
                                <div>ИНН - ";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "inn", array()), "html", null, true);
            echo "</div>
                                <div>ОГРН - ";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ogrn", array()), "html", null, true);
            echo "</div>
                                <div>БИК - ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "bik", array()), "html", null, true);
            echo "</div>
                                <div>Банк - ";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "bank", array()), "html", null, true);
            echo "</div>
                                <div>Ген. Директор - ";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "director", array()), "html", null, true);
            echo "</div>
                                <div>Юридический адрес - ";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "firm_address", array()), "html", null, true);
            echo "</div>
                                <div>Фактический адрес - ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "fact_address", array()), "html", null, true);
            echo "</div>
                                <div>По доверенности - ";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dover", array()), "html", null, true);
            echo "</div>
                                <div><a href=\"/profile/remove?face=";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Удалить</a></div>
                                <br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                        </div>
                        <div class=\"row\">
                            <h3 ><b>Адреса</b></h3>
                            <p></p>
                            ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["address"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 212
            echo "                                <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getCompany", array()), "name", array()), "html", null, true);
            echo "</div>
                                <div>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", array()), "html", null, true);
            echo "</div>
                                <div>Адрес - ";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "city", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "street", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "house", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "block", array()), "html", null, true);
            echo "</div>
                                <div><a href=\"/profile/remove?address=";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", array()), "html", null, true);
            echo "\">Удалить</a></div>
                                <br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('.company-type').change(e => {

            if (\$(e.target).val() === 'ooo') {
                \$('.change-for-ip').text('ОГРН');
                \$('.hide-for-ip').show();
            }
            if (\$(e.target).val() === 'ip') {
                \$('.change-for-ip').text('ОГРНИП');
                \$('.hide-for-ip').hide();
            }
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 218,  419 => 215,  409 => 214,  405 => 213,  400 => 212,  396 => 211,  390 => 207,  381 => 204,  377 => 203,  373 => 202,  369 => 201,  365 => 200,  361 => 199,  357 => 198,  353 => 197,  349 => 196,  345 => 195,  341 => 194,  337 => 193,  329 => 192,  326 => 191,  322 => 190,  304 => 175,  296 => 170,  288 => 165,  280 => 160,  272 => 155,  265 => 151,  258 => 147,  249 => 141,  241 => 136,  233 => 131,  226 => 126,  215 => 124,  211 => 123,  191 => 106,  183 => 101,  175 => 96,  167 => 91,  159 => 86,  151 => 81,  143 => 76,  135 => 71,  127 => 66,  119 => 61,  111 => 56,  100 => 50,  94 => 49,  74 => 32,  66 => 27,  58 => 22,  50 => 17,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <div class=\"wrapper wrapper-content  animated fadeInRight\">
        <div class=\"row  border-bottom white-bg dashboard-header\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <form method=\"POST\" action=\"/profile?main=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3 ><b>Основная информация</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Название компании:</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"{{ user.name }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>ФИО руководителя:</label>
                                <input class=\"form-control\" name=\"fio\" type=\"text\" value=\"{{ client.fio }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Контактные телефоны (с кодом города):</label>
                                <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"{{ client.phone }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Почта:</label>
                                <input class=\"form-control\" name=\"email\" type=\"text\" value=\"{{ client.email }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Изменить</button>
                            </div>
                        </form>
                        <br>
                        <form method=\"POST\" action=\"/profile?face=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3><b>Юрлицо</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Тип</label>
                                <select class=\"form-control company-type\" name=\"company_type\" >
                                    <option value=\"ooo\" {% if company.company_type == 'ooo' %}selected{% endif %} >ООО</option>
                                    <option value=\"ip\" {% if company.company_type == 'ip' %}selected{% endif %}>ИП</option>
                                </select>
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Название</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"{{ company.account_r }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>ИНН</label>
                                <input class=\"form-control\" name=\"inn\" type=\"text\" value=\"{{ company.inn }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label class=\"change-for-ip\">ОГРН</label>
                                <input class=\"form-control\" name=\"ogrn\" type=\"text\" value=\"{{ company.ogrn }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Юридический адрес</label>
                                <input class=\"form-control\" name=\"firm_address\" type=\"text\" value=\"{{ company.firm_address }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Фактический адрес</label>
                                <input class=\"form-control\" name=\"fact_address\" type=\"text\" value=\"{{ company.fact_address }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Расчетный счет</label>
                                <input class=\"form-control\" name=\"account_r\" type=\"text\" value=\"{{ company.account_r }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Коррсчет</label>
                                <input class=\"form-control\" name=\"account_k\" type=\"text\" value=\"{{ company.account_k }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>БИК</label>
                                <input class=\"form-control\" name=\"bik\" type=\"text\" value=\"{{ company.bik }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Банк</label>
                                <input class=\"form-control\" name=\"bank\" type=\"text\" value=\"{{ company.bank }}\">
                                <p></p>
                            </div>
                            <div class=\"row hide-for-ip\">
                                <label>Ген. Директор</label>
                                <input class=\"form-control\" name=\"director\" type=\"text\" value=\"{{ company.director }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>По Доверенности</label>
                                <input class=\"form-control\" name=\"dover\" type=\"text\" value=\"{{ company.dover }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Добавить</button>
                            </div>
                        </form>
                        <br>
                        <form method=\"POST\" action=\"/profile?address=1\" class=\"form-withlogo cart\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <h3><b>Адреса</b></h3>
                                <p></p>
                                <br>
                            </div>
                            <div class=\"row\">
                                <label>Юрлицо</label>
                                <select class=\"form-control\" name=\"company\">
                                    {% for i in company %}
                                        <option value=\"{{ i.id }}\">{{ i.name }}</option>
                                    {% endfor %}
                                </select>
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Название</label>
                                <input class=\"form-control\" name=\"name\" type=\"text\" value=\"{{ client.name }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Город:</label>
                                <input class=\"form-control\" name=\"city\" type=\"text\" value=\"{{ client.city }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Улица, проспект и пр.:</label>
                                <input class=\"form-control\" name=\"street\" type=\"text\" value=\"{{ client.street }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Номер дома:</label>
                                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"{{ client.house }}\">
                                </div>
                                <div class=\"col-sm-4\">
                                    <label>Строение:</label>
                                    <input class=\"form-control\" name=\"block\" type=\"text\" value=\"{{ client.block }}\">
                                </div>
                                <div class=\"col-sm-4\">
                                    <label>офис:</label>
                                    <input class=\"form-control\" name=\"house\" type=\"text\" value=\"{{ client.office }}\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <label>Телефон</label>
                                <input class=\"form-control\" name=\"phone\" type=\"text\" value=\"{{ address.phone }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Время работы Вашей компании:</label>
                                <input class=\"form-control\" name=\"work_time\" type=\"text\" value=\"{{ client.work_time }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Пропуск:</label>
                                <input class=\"form-control\" name=\"pass\" type=\"text\" value=\"{{ client.pass }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <label>Комментарий:</label>
                                <input class=\"form-control\" name=\"comment\" type=\"text\" value=\"{{ client.comment }}\">
                                <p></p>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"client\">Добавить</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"col-sm-2\">

                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <h3 ><b>Юрлицо</b></h3>
                            <p></p>
                            {% for i in company %}

                                <div>Тип - {% if i.company_type == 'ip' %}ИП{% else %}ООО{% endif %}</div>
                                <div>{{ i.name }}</div>
                                <div>Расчетный счет - {{ i.account_r }}</div>
                                <div>Коррсчет - {{ i.account_k }}</div>
                                <div>ИНН - {{ i.inn }}</div>
                                <div>ОГРН - {{ i.ogrn }}</div>
                                <div>БИК - {{ i.bik }}</div>
                                <div>Банк - {{ i.bank }}</div>
                                <div>Ген. Директор - {{ i.director }}</div>
                                <div>Юридический адрес - {{ i.firm_address }}</div>
                                <div>Фактический адрес - {{ i.fact_address }}</div>
                                <div>По доверенности - {{ i.dover }}</div>
                                <div><a href=\"/profile/remove?face={{ i.id }}\">Удалить</a></div>
                                <br>
                            {% endfor %}
                        </div>
                        <div class=\"row\">
                            <h3 ><b>Адреса</b></h3>
                            <p></p>
                            {% for i in address %}
                                <div>{{ i.getCompany.name }}</div>
                                <div>{{ i.name }}</div>
                                <div>Адрес - {{ i.city }} {{ i.street }} {{ i.house }} {{ i.block }}</div>
                                <div><a href=\"/profile/remove?address={{ i.id }}\">Удалить</a></div>
                                <br>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('.company-type').change(e => {

            if (\$(e.target).val() === 'ooo') {
                \$('.change-for-ip').text('ОГРН');
                \$('.hide-for-ip').show();
            }
            if (\$(e.target).val() === 'ip') {
                \$('.change-for-ip').text('ОГРНИП');
                \$('.hide-for-ip').hide();
            }
        })
    </script>
{% endblock %}", "profile.twig", "/var/www/u0742521/data/www/eco/App/Client/View/profile.twig");
    }
}
