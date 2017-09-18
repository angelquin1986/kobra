<?php

/* EmisionesBundle:Menu:supervisor.html.twig */
class __TwigTemplate_3a45c1099a5983c08a022f41b6ccc7bdb9e23e3842061df83bd20c0b47410108 extends Twig_Template
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
        echo "                    <li class=\"\">
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
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_supervisor_dashboard");
        echo "\">
                                <i class=\"fa fa-th\"></i> <span>Panel Control</span>
                            </a>
                        </li>
                       
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"fa fa-cogs\"></i> <span>Configuraciones</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">            
                                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("feriado");
        echo "\"><i class=\"fa fa-calendar\"></i>Feriados</a></li>
                                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supervisor_empresa_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "id"))), "html", null, true);
        echo "\"><i class=\"fa fa-suitcase\"></i>Mi Empresa</a></li>
                                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("supervisor_index_daemons");
        echo "\"><i class=\"fa fa-linux\"></i> Daemons</a></li>
                                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("supervisor_index_configuraciones");
        echo "\"><i class=\"fa fa-cog\"></i> Par&aacute;matros Globales</a></li>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("supervisor_index_plan_piloto");
        echo "\"><i class=\"ion ion-plane\"></i> Planes Pilotos</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"ion ion-android-contact\"></i> <span>Administrar Counters</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">            
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("supervisor_index_counters");
        echo "\"><i class=\"fa fa-list\"></i>Listar</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("supervisor_new_counter");
        echo "\"><i class=\"fa fa-plus\"></i>Registrar</a></li>
                           
                                
                            </ul>
                        </li>
     
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"fa fa-user\"></i> <span>Administrar Agentes</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">            
                                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("supervisor_index_agentes");
        echo "\"><i class=\"fa fa-list\"></i>Listar</a></li>
                                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agente");
        echo "\"><i class=\"fa fa-plus\"></i>Registrar</a></li>
                           
                                
                            </ul>
                        </li>
                        
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"fa fa-briefcase\"></i> <span>Administrar Agencias</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">            
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("supervisor_index_agencias");
        echo "\"><i class=\"fa fa-list\"></i>Listar</a></li>
                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agencia");
        echo "\"><i class=\"fa fa-plus\"></i>Adicionar</a></li>
                           
                                
                            </ul>
                        </li>
                       
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\"><i class=\"fa fa-sort-amount-asc\"></i> Cola</a></li>
                        
                       
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"ion ion-stats-bars\"></i> <span>Reportes</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">                               
                                <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("supervisor_report_porcentaje_vs_estados");
        echo "\"><i class=\"fa  fa-puzzle-piece\"></i>Porcentaje Vs Estados</a></li>
                                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("supervisor_report_estados_vs_counters");
        echo "\"><i class=\"fa  fa-puzzle-piece\"></i>Estados Vs Counters</a></li>
                                 <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("supervisor_load_incumplimientoSla");
        echo "\"><i class=\"fa  fa-puzzle-piece\"></i>Incumplimientos SLA</a></li>
                                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("supervisor_report_tipos_vs_counters");
        echo "\"><i class=\"fa  fa-puzzle-piece\"></i> Tipos Vs Counters</a></li>                               
                            </ul>
                        </li>
                        <li class=\"treeview\" >
                            <a href=\"#\">
                                <i class=\"fa fa-film\"></i> <span>Turoriales</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">            
                                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("supervisor_index_agentes");
        echo "\"><i class=\"fa fa-film\"></i>Administrar Agentes</a></li>
                                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agente");
        echo "\"><i class=\"fa fa-film\"></i>Administrar Agencias</a></li>
                           
                                
                            </ul>
                        </li>
                        <li class=\"active\">
                            <a href=\"#\">
                                <i class=\"icon-file-pdf\"></i> <span>Manual de Usuario</span>
                            </a>
                        </li>";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Menu:supervisor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 89,  162 => 88,  150 => 79,  146 => 78,  142 => 77,  138 => 76,  126 => 67,  117 => 61,  113 => 60,  98 => 48,  94 => 47,  79 => 35,  75 => 34,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  31 => 8,  22 => 2,  19 => 1,  307 => 203,  291 => 190,  287 => 189,  281 => 187,  278 => 186,  269 => 180,  261 => 175,  257 => 174,  251 => 170,  248 => 169,  243 => 166,  238 => 163,  234 => 162,  232 => 161,  228 => 159,  225 => 158,  217 => 152,  214 => 151,  209 => 148,  206 => 147,  204 => 146,  199 => 145,  197 => 144,  192 => 143,  190 => 142,  185 => 141,  182 => 140,  180 => 139,  176 => 137,  173 => 136,  41 => 6,  36 => 5,  33 => 4,);
    }
}
