<?php

/* BaseBundle:Masters:index.html.twig */
class __TwigTemplate_0298e54dcc81abf9dc8367aefe55c32f215dbf19ee43d266b7983f06996ce15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BaseBundle:Masters:master.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'titlepage' => array($this, 'block_titlepage'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'area' => array($this, 'block_area'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseBundle:Masters:master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 

     
                        ";
        // line 6
        if (twig_in_filter("ROLE_AGENTE_EXTERNO", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 7
            echo "                            ";
            $this->env->loadTemplate("EmisionesBundle:Menu:agente.html.twig")->display($context);
            // line 8
            echo "                        ";
        } elseif (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 9
            echo "                            ";
            $this->env->loadTemplate("EmisionesBundle:Menu:caja.html.twig")->display($context);
            // line 10
            echo "                        ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 11
            echo "                            ";
            $this->env->loadTemplate("EmisionesBundle:Menu:supervisorcobranza.html.twig")->display($context);
            // line 12
            echo "                        ";
        } else {
            // line 13
            echo "                            <li class=\"active\">
                            <a href=\"\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
            echo "\">
                                <i class=\"fa fa-plane\"></i> <span>Emisiones</span> 
                            </a>
                        </li>
                        <li>
                            <a href=\"http://200.90.157.236/hotelintegrator/index.php?r=site/login\">
                                <i class=\"fa fa-globe\"></i> <span>SVI</span> 
                            </a>
                        </li>
                        <li>
                            <a href=\"http://mym2013.sysaidit.com/\">
                                <i class=\"fa fa-wrench\"></i> <span>Sysaid</span> 
                            </a>
                        </li>
                        
                        <li>
                            <a href=\"http://mym2013.sysaidit.com/\">
                                <i class=\"fa fa-users\"></i> <span>Reservar Sal&oacute;n</span> 
                            </a>
                        </li>
                        
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-sitemap\"></i> <span>Organigrama</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-sitemap\"></i> <span>M&M</span>
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-bookmark\"></i>Areas</a></li>
                                        <li><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organigrama", array("empresa" => 1, "tipo" => "empleado")), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> Empleados</a></li>
                                        
                                    </ul>
                                </li> 
                                <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-archive\"></i> M&M</a></li>
                                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-archive\"></i> Lujor</a></li>
                                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-archive\"></i> HRG</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a href=\"pages/widgets.html\">
                                <i class=\"fa fa-phone-square\"></i> <span>Directorio</span> 
                            </a>
                        </li>
                        <li>
                            <a href=\"pages/widgets.html\">
                                <i class=\"fa fa-film\"></i> <span>Videoteca</span> 
                            </a>
                        </li>
                        
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-pencil-square-o\"></i> <span>Solicitudes</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"\"><i class=\"fa fa-calendar\"></i> Vacaciones</a></li>
                                <li><a href=\"\"><i class=\"fa fa-cutlery\"></i> Vi&aacute;ticos</a></li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 84
        echo "                        ";
        // line 95
        echo " ";
    }

    // line 97
    public function block_titlepage($context, array $blocks = array())
    {
        // line 98
        echo "     <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
 ";
    }

    // line 104
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 105
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"active\">Dashboard</li>
 ";
    }

    // line 109
    public function block_area($context, array $blocks = array())
    {
        // line 110
        echo "      
  ";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Masters:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 110,  163 => 109,  157 => 105,  154 => 104,  146 => 98,  143 => 97,  139 => 95,  103 => 53,  52 => 11,  46 => 9,  43 => 8,  40 => 7,  38 => 6,  31 => 3,  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 83,  210 => 80,  206 => 78,  203 => 77,  200 => 76,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  182 => 70,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 65,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  140 => 58,  137 => 84,  134 => 56,  131 => 55,  128 => 54,  125 => 53,  122 => 52,  119 => 51,  116 => 50,  114 => 49,  111 => 48,  109 => 47,  106 => 46,  102 => 45,  86 => 32,  81 => 29,  79 => 28,  76 => 27,  69 => 22,  66 => 19,  58 => 13,  55 => 12,  49 => 10,  44 => 10,  36 => 5,  33 => 4,);
    }
}
