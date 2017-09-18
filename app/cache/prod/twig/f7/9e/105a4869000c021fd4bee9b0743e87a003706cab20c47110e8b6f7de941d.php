<?php

/* EmisionesBundle:Menu:supervisorcobranza.html.twig */
class __TwigTemplate_f79e105a4869000c021fd4bee9b0743e87a003706cab20c47110e8b6f7de941d extends Twig_Template
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
        echo "
     <li class=\"active\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("dashboard_cobranza");
        echo "\">
            <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
        </a>
    </li>                 
    <li class=\"\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
            <i class=\"fa fa-book\"></i> <span>Conciliar</span>
        </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("supervisor_cobranza_index_agencias");
        echo "\">
            <i class=\"fa fa-lock\"></i> <span> Bloquear/Habilitar</span>
        </a>
    </li>
                       ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Menu:supervisorcobranza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  31 => 8,  23 => 3,  19 => 1,  486 => 289,  461 => 267,  452 => 260,  450 => 259,  408 => 219,  403 => 216,  396 => 214,  389 => 213,  387 => 212,  384 => 211,  379 => 208,  373 => 207,  371 => 206,  368 => 205,  364 => 203,  358 => 201,  356 => 200,  323 => 170,  319 => 169,  315 => 168,  311 => 167,  307 => 166,  302 => 165,  299 => 164,  287 => 154,  279 => 151,  273 => 149,  271 => 148,  267 => 147,  264 => 146,  260 => 145,  255 => 142,  251 => 140,  249 => 139,  222 => 115,  210 => 106,  197 => 96,  185 => 87,  172 => 77,  160 => 68,  147 => 58,  135 => 49,  120 => 39,  114 => 38,  106 => 33,  102 => 31,  99 => 30,  94 => 27,  91 => 26,  85 => 22,  81 => 20,  75 => 18,  71 => 16,  68 => 15,  64 => 13,  61 => 12,  59 => 11,  54 => 10,  52 => 9,  48 => 8,  43 => 7,  36 => 4,  33 => 3,);
    }
}
