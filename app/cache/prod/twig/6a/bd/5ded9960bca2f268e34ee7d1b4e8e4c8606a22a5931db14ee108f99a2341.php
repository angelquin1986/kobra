<?php

/* EmisionesBundle:Menu:submenucounter.html.twig */
class __TwigTemplate_6abd5ded9960bca2f268e34ee7d1b4e8e4c8606a22a5931db14ee108f99a2341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "                        ";
        if (twig_in_filter("ROLE_COUNTER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 2
            echo "                            <li class=\"active\">
                            <a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
            echo "\">
                                <i class=\"fa fa-th\"></i> <span>Panel Control</span>
                            </a>
                            </li>
                            <!--Agregado para no permitir modificar la orden una vez cambiado su estado inicial-->
                            ";
            // line 8
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado") == "Pendiente")) {
                // line 9
                echo "                            <li class=\"\">
                            <a href=\"                            
                                    ";
                // line 11
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Emision")) {
                    // line 12
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_emision_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Revision")) {
                    // line 14
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_revision_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                     ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Anulacion")) {
                    // line 16
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_anulacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                    ";
                }
                // line 18
                echo "                                ";
                echo "\">
                                <i class=\"ion ion-document-text\"></i> <span> Orden</span>
                            </a>
                          </li>
                          ";
            } else {
                // line 23
                echo "                            <li class=\"\">
                            <a href=\"                            
                                    ";
                // line 25
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Emision")) {
                    // line 26
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_emision_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Revision")) {
                    // line 28
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_revision_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                     ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTipo") == "Anulacion")) {
                    // line 30
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_anulacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "
                                    ";
                }
                // line 32
                echo "                                ";
                echo "\">
                                <i class=\"ion ion-eye\"></i> <span> Detalle Orden</span>
                            </a>
                          </li>  
                          ";
            }
            // line 37
            echo "                          <!--Agregado para no permitir modificar la orden una vez cambiado su estado inicial-->
                        <li class=\"\">
                            <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("counter_render_reporte");
            echo "\">
                                <i class=\"ion ion-stats-bars\"></i> <span> Reportes</span>
                            </a>
                        </li>
                        <li class=\"\">
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_render_email", array("entity" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-envelope\"></i> <span>Enviar Email Agente</span>
                            </a>
                        </li>
                        ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 49
            echo "                            <li class=\"active\">
                                <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
            echo "\">
                                    <i class=\"fa fa-sort-amount-asc\"></i> <span>Cola</span>
                                </a>
                            </li>
                        ";
        }
        // line 55
        echo "
                        
                       ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Menu:submenucounter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  99 => 37,  91 => 32,  71 => 25,  53 => 16,  47 => 14,  41 => 12,  39 => 11,  35 => 9,  25 => 3,  22 => 2,  19 => 1,  455 => 172,  453 => 171,  449 => 169,  445 => 168,  441 => 167,  437 => 166,  433 => 165,  429 => 164,  425 => 163,  421 => 162,  417 => 161,  413 => 160,  405 => 158,  400 => 157,  397 => 156,  392 => 145,  384 => 105,  381 => 104,  376 => 99,  373 => 98,  368 => 88,  360 => 28,  357 => 27,  348 => 147,  346 => 144,  336 => 138,  327 => 135,  322 => 132,  318 => 131,  315 => 130,  312 => 129,  303 => 127,  298 => 124,  294 => 123,  290 => 122,  281 => 119,  276 => 116,  272 => 115,  269 => 114,  259 => 106,  257 => 104,  252 => 101,  250 => 98,  240 => 90,  232 => 83,  229 => 74,  224 => 71,  211 => 63,  205 => 62,  199 => 60,  192 => 57,  189 => 56,  162 => 44,  153 => 40,  151 => 39,  138 => 27,  135 => 26,  132 => 25,  121 => 16,  117 => 15,  113 => 14,  101 => 11,  97 => 10,  93 => 9,  88 => 8,  85 => 30,  67 => 23,  65 => 156,  62 => 155,  60 => 154,  45 => 20,  32 => 2,  29 => 1,  534 => 426,  418 => 312,  415 => 311,  409 => 159,  406 => 306,  398 => 300,  395 => 299,  389 => 144,  383 => 270,  377 => 265,  371 => 243,  365 => 87,  359 => 231,  353 => 226,  347 => 221,  341 => 141,  333 => 294,  329 => 293,  309 => 276,  300 => 270,  292 => 265,  280 => 256,  264 => 243,  255 => 237,  246 => 231,  238 => 87,  231 => 222,  227 => 221,  219 => 216,  214 => 215,  196 => 6,  193 => 5,  186 => 210,  176 => 48,  170 => 47,  148 => 180,  142 => 179,  129 => 175,  126 => 174,  120 => 172,  118 => 171,  105 => 12,  82 => 147,  75 => 28,  73 => 26,  59 => 18,  57 => 153,  54 => 8,  48 => 21,  166 => 110,  163 => 109,  157 => 42,  154 => 104,  146 => 98,  143 => 97,  139 => 95,  103 => 39,  52 => 5,  46 => 9,  43 => 7,  40 => 7,  38 => 5,  31 => 3,  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 67,  210 => 80,  206 => 10,  203 => 9,  200 => 76,  197 => 59,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  182 => 52,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 45,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  140 => 30,  137 => 177,  134 => 56,  131 => 176,  128 => 54,  125 => 17,  122 => 50,  119 => 49,  116 => 50,  114 => 49,  111 => 44,  109 => 13,  106 => 46,  102 => 45,  86 => 149,  81 => 29,  79 => 28,  76 => 27,  69 => 22,  66 => 19,  58 => 13,  55 => 25,  49 => 10,  44 => 10,  36 => 5,  33 => 8,);
    }
}
