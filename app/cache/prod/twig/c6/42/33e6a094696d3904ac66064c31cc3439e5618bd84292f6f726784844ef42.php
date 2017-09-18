<?php

/* EmisionesBundle:Menu:counter.html.twig */
class __TwigTemplate_c64233e6a094696d3904ac66064c31cc3439e5618bd84292f6f726784844ef42 extends Twig_Template
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
        echo "                        <li class=\"\">
                            <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                       
                        <li class=\"active\">
                            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
                                <i class=\"fa fa-th\"></i> <span>Panel Control</span>
                            </a>
                        </li>
                         <li class=\"\">
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("counter_render_reporte");
        echo "\">
                                <i class=\"fa fa-bar-chart-o\"></i> <span> Reportes</span>
                            </a>
                        </li>
                       
                        
                        ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Menu:counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  31 => 8,  22 => 2,  19 => 1,);
    }
}
