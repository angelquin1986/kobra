<?php

/* EmisionesBundle:SupervisorAdministrarAgentes/AsignarManual:asignarmanual.html.twig */
class __TwigTemplate_ee809c260a940bca710fa874f9fe0481ce874a67123c3f11162c9fd344f40074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BaseBundle:Masters:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'titlepage' => array($this, 'block_titlepage'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'area' => array($this, 'block_area'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseBundle:Masters:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  
 ";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "       ";
        $this->env->loadTemplate("EmisionesBundle:Menu:supervisor.html.twig")->display($context);
        // line 11
        echo " ";
    }

    // line 13
    public function block_titlepage($context, array $blocks = array())
    {
        // line 14
        echo "     <h1>
        Dashboard
        <small>Supervisor</small>
    </h1>
 ";
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Asignar Orden</li>
     <li class=\"active\">Manual</li>
 ";
    }

    // line 26
    public function block_area($context, array $blocks = array())
    {
        // line 27
        echo "     <div class=\"col-sm-12\">
          
              <div class=\"box box-primary\">
               <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supervisor_asignar_manual", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" method=\"POST\">
                
                                <div class=\"box-header\">
                                    <div class=\"pull-right box-tools pull-left\">
                                        
                                        <a href=\"\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-circle btn-sm btn-bg bg-navy\" data-original-title=\"Actualizar\"><i class=\"fa fa-refresh\"></i></a>
                                    </div>
                                    <h3 class=\"box-title pull-right\">Asignacion Manual</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body \">
                                    <div class=\"form-group\" >
                                            <label>Counters Habilitados</label>
                                            <select size=\"15\" class=\"form-control\" name=\"counters\" id=\"counters\">
                                                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["counters"]) ? $context["counters"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 44
            echo "                                                    ";
            if (($this->getAttribute((isset($context["orden"]) ? $context["orden"] : null), "usuario") && ($this->getAttribute($this->getAttribute((isset($context["orden"]) ? $context["orden"] : null), "usuario"), "id") == $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "id")))) {
                // line 45
                echo "                                                        <option selected=\"true\" class=\"text-info\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "apellidos"), "html", null, true);
                echo "</option>
                                                    ";
            } else {
                // line 47
                echo "                                                        <option class=\"text-info\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ec"]) ? $context["ec"] : null), "apellidos"), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 49
            echo "                                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                                                       <option class=\"text-red\" value=\"-1\">No existen counters dispponibles para asignar esta orden...</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                            </select>
                                      </div>

                                        <button class=\"btn btn-sm btn-primary\" type=\"submit\"><i class=\"fa fa-check\"></i> Asignar</button>
                                    
                                </div><!-- /.box-body -->
                </form>
                </div><!-- /.box -->
               
     </div>
   
 ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:SupervisorAdministrarAgentes/AsignarManual:asignarmanual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  130 => 50,  125 => 49,  115 => 47,  105 => 45,  102 => 44,  97 => 43,  81 => 30,  76 => 27,  73 => 26,  66 => 21,  63 => 20,  55 => 14,  52 => 13,  48 => 11,  45 => 10,  42 => 9,  35 => 5,  32 => 4,);
    }
}
