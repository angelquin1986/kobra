<?php

/* EmisionesBundle:SupervisorAdministrarAgentes/AdministrarAgentes:edit.html.twig */
class __TwigTemplate_8d6e5b760f8a48d43ccbb921d01be3b240278b8a40baebf9774785ad4aecc86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BaseBundle:Masters:master.html.twig");

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
        return "BaseBundle:Masters:master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
           ";
        // line 8
        echo "           
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
          ";
        // line 14
        $this->env->loadTemplate("EmisionesBundle:Menu:supervisor.html.twig")->display($context);
        // line 15
        echo " ";
    }

    // line 17
    public function block_titlepage($context, array $blocks = array())
    {
        // line 18
        echo "     <h1>
        Dashboard
        <small>Agentes</small>
    </h1>
 ";
    }

    // line 24
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 25
        echo "     <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"active\">Editar Agente</li>
 ";
    }

    // line 29
    public function block_area($context, array $blocks = array())
    {
        // line 30
        echo "   <div class=\"col-sm-12 \"> 
     <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <div class=\"pull-left box-tools\">                                        
                                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agente");
        echo "\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-sm btn-bg bg-blue btn-circle\" data-original-title=\"Registrar\"><i class=\"fa fa-plus\"></i></a>
                                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("supervisor_index_agentes");
        echo "\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-sm btn-bg bg-navy btn-circle\" data-original-title=\"Listar\"><i class=\"fa fa-list\"></i></a>
                                    </div>
                                    <h3 class=\"box-title pull-right\">Editar Agente</h3>
                                   
                                </div><!-- /.box-header -->
                                <div class=\"box-body table-responsive\">
                                    <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supervisor_agente_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " method=\"post\" >
                                      
                                        <div style=\"margin-left: 40%;\" class=\"form-group\">
                                                <img style=\"width: 20%;\" alt=\"User Image\" id=\"userimage\" class=\"img-responsive img-rounded img-thumbnail\" src=\"
                                                     ";
        // line 45
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto")) {
            // line 46
            echo "                                                        ";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/usuarios/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto")), "html", null, true);
            echo "
                                                     ";
        } else {
            // line 48
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/usuarios/no-avatar.png"), "html", null, true);
            echo "
                                                     ";
        }
        // line 50
        echo "                                                     \">
                                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "foto"), 'widget');
        echo "
                                                <button class=\"btn btn-xs btn-primary\" type=button onclick=\"this.form.aplicacion_emisionesbundle_agente_foto.click()\"><i class=\"fa fa-picture-o\"></i> <span id=\"info\" >Subir Foto</span></button>
                                                <p class=\"help-block\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "foto"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                <label >";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                <label >";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username"), 'errors');
        echo "</p>
                                            </div>
                                        
                                           ";
        // line 71
        echo "                                            
                                            <div class=\"form-group\">
                                                 <label >";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.surname", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.ci", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ci"), 'widget');
        echo "
                                                 <p class=\"help-block\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ci"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.sex", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "sexo"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "sexo"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.movil", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "celular"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "celular"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.ext", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ext"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ext"), 'errors');
        echo "</p>
                                            </div>
                                            <div class=\"form-group\">
                                                 <label >";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.agency", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "agencia"), 'widget');
        echo "
                                                <p class=\"help-block\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "agencia"), 'errors');
        echo "</p>
                                            </div>
                                             
                                       ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
                                            <div class=\"box-footer\">                                                               
                                                <button type=\"submit\"   class=\"btn btn-sm bg-blue-gradient \"><i class=\"fa fa-refresh\"></i> Actualizar Agente</button>  

                                            
                                            </div>
                                    </form>
                                
                                    
                                </div><!-- /.box-body -->
     </div><!-- /.box -->
       </div>
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:SupervisorAdministrarAgentes/AdministrarAgentes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 113,  275 => 110,  271 => 109,  267 => 108,  261 => 105,  257 => 104,  253 => 103,  247 => 100,  243 => 99,  239 => 98,  233 => 95,  229 => 94,  225 => 93,  219 => 90,  215 => 89,  211 => 88,  205 => 85,  201 => 84,  197 => 83,  191 => 80,  187 => 79,  183 => 78,  177 => 75,  173 => 74,  169 => 73,  165 => 71,  159 => 63,  155 => 62,  151 => 61,  145 => 58,  141 => 57,  137 => 56,  131 => 53,  126 => 51,  123 => 50,  117 => 48,  111 => 46,  109 => 45,  100 => 41,  91 => 35,  87 => 34,  81 => 30,  78 => 29,  70 => 25,  67 => 24,  59 => 18,  56 => 17,  52 => 15,  50 => 14,  45 => 13,  40 => 8,  35 => 6,  32 => 5,);
    }
}
