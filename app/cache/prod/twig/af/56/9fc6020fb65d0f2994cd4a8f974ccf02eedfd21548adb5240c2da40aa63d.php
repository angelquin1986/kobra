<?php

/* EmisionesBundle:Counter/Mail:mail.html.twig */
class __TwigTemplate_af569fc6020fb65d0f2994cd4a8f974ccf02eedfd21548adb5240c2da40aa63d extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
  ";
        // line 11
        $this->env->loadTemplate("EmisionesBundle:Menu:submenucounter.html.twig")->display($context);
        echo "                         
 ";
    }

    // line 14
    public function block_titlepage($context, array $blocks = array())
    {
        // line 15
        echo "     <h1>
        Dashboard
        <small>Enviar email</small>
    </h1>
 ";
    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 22
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Emisiones</li>
     <li class=\"active\">Enviar email</li>
 ";
    }

    // line 27
    public function block_area($context, array $blocks = array())
    {
        // line 28
        echo "      ";
        // line 29
        echo "     <div class=\"col-md-12\">

       <div class=\"box box-primary\">
           <form id=\"sendmail\" method=\"post\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("counter_enviar_email");
        echo "\" enctype=\"multipart/form-data\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\"><i class=\"fa fa-envelope\"></i> Enviar email </h3>
                    <div class=\"pull-right box-tools\">                      
                                        
                        <button  type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-sign-in\"></i> Enviar</button>                                        
                       </div>
                </div>
                
                <div class=\"box-body\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">Para:</span>
                                     ";
        // line 45
        $context["cont"] = 0;
        echo "   ";
        $context["contCash"] = 0;
        // line 46
        echo "                                    
                                    ";
        // line 47
        $context["dirs"] = ((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "email") . ";") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "usuario"), "email")) . ";emisiones@mymtravel.com;");
        // line 48
        echo "                                    
                                    ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado"), "id") == 3)) {
            // line 50
            echo "                                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "id") == 363)) {
                // line 51
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ciudadDestino"), "id") == 1)) {
                    // line 52
                    echo "                                                ";
                    $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "erick.betancourt@mymtravel.com;");
                    // line 53
                    echo "                                            ";
                }
                // line 54
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ciudadDestino"), "id") == 2)) {
                    // line 55
                    echo "                                                ";
                    $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "alexandra.cuesta@mymtravel.com;");
                    // line 56
                    echo "                                            ";
                }
                // line 57
                echo "                                        ";
            } else {
                // line 58
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
                foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
                    echo "                                        
                                                    ";
                    // line 59
                    if ((($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Tarjeta Credito") && ((isset($context["cont"]) ? $context["cont"] : null) == 0))) {
                        // line 60
                        echo "                                                        ";
                        $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                        // line 61
                        echo "                                                    ";
                    }
                    // line 62
                    echo "                                                    ";
                    if ((($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "DETB") || ($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Pago Directo"))) {
                        // line 63
                        echo "                                                        ";
                        $context["contCash"] = ((isset($context["contCash"]) ? $context["contCash"] : null) + 1);
                        // line 64
                        echo "                                                    ";
                    }
                    // line 65
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                                        
                                                ";
                // line 66
                $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "facturacion@mymtravel.com;");
                // line 67
                echo "
                                                ";
                // line 68
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isPilotPlan") == false) && ((isset($context["cont"]) ? $context["cont"] : null) > 0))) {
                    // line 69
                    echo "                                                    ";
                    $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "vtc@mymtravel.com;");
                    // line 70
                    echo "                                                ";
                }
                // line 71
                echo "                                                ";
                if ((((isset($context["contCash"]) ? $context["contCash"] : null) > 0) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ciudadDestino"), "id") == 1))) {
                    // line 72
                    echo "                                                    ";
                    $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "caja@mymtravel.com;");
                    // line 73
                    echo "                                                ";
                }
                // line 74
                echo "                                                ";
                if ((((isset($context["contCash"]) ? $context["contCash"] : null) > 0) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ciudadDestino"), "id") == 2))) {
                    // line 75
                    echo "                                                    ";
                    $context["dirs"] = ((isset($context["dirs"]) ? $context["dirs"] : null) . "cajagye@mymtravel.com;");
                    // line 76
                    echo "                                                ";
                }
                // line 77
                echo "                                         ";
            }
            // line 78
            echo "                                       
                                    ";
        }
        // line 80
        echo "                                    <input readonly=\"true\" required=\"true\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["dirs"]) ? $context["dirs"] : null), "html", null, true);
        echo "\" style=\"color: blue;font-size: 16px;\" type=\"email\"  placeholder=\"Email TO\" class=\"form-control input-sm\" name=\"email_to\" id=\"email_to\">
                                 
                                    <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Campo Obligatorio\" class=\"input-group-addon\"><b style=\"color: red;\">*</b></span>
                                    <input  type=\"hidden\" name=\"sender\" id=\"sender\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
        echo "\">
                                    <input  type=\"hidden\" name=\"entity\" id=\"entity\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "\">
                               </div>
                            </div>
                        
                       ";
        // line 100
        echo "                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">Asunto:</span>
                                    <input required=\"true\" type=\"text\" placeholder=\"Asunto\" class=\"form-control input-sm\" name=\"email_subject\" id=\"email_subject\">
                                    <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Campo Obligatorio\"class=\"input-group-addon\"><b style=\"color: red;\">*</b></span>
                                </div>
                            </div>
                       
                            <div class=\"form-group\">
                                <textarea style=\"height: 300px;font-size: 18px;\" placeholder=\"Mensaje\" class=\"form-control input-sm\" id=\"email_message\" name=\"email_message\">
                               
                                </textarea>
                            </div>
                        
                            
                                
                   
                   </div>
                 
                    <div class=\"box-footer\">
                        <div class=\"form-group\">                              
                                <input id=\"upl\" type=file name=\"upl\" style=\"visibility:hidden;position:absolute;top:0;left:0\" onchange=\"document.getElementById('info').innerHTML=this.value+'&nbsp;&nbsp;&nbsp;'+ Math.round(this.files[0].size/1024*100)/100+' KB'\">  
                                <button class=\"btn btn-xs btn-primary\" type=button onclick=\"this.form.upl.click()\"><i class=\"fa fa-paperclip\"></i> <span id=\"info\" >Adjuntar Archivos</span></button>                               
                                <p class=\"help-block\">Para adjuntar m&uacute;ltiples archivos comprimalos en un solo fichero.</p>
                            </div> 
                            
                    </div>
               </form>             
            
            </div><!-- /.box -->
                            

                            

     </div>
     
  ";
    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        // line 138
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      ";
        // line 140
        $this->env->loadTemplate("EmisionesBundle:Snippets:exportarpdf.html.twig")->display($context);
        // line 141
        echo "  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Counter/Mail:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 83,  210 => 80,  206 => 78,  203 => 77,  200 => 76,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  182 => 70,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 65,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  140 => 58,  137 => 57,  134 => 56,  131 => 55,  128 => 54,  125 => 53,  122 => 52,  119 => 51,  116 => 50,  114 => 49,  111 => 48,  109 => 47,  106 => 46,  102 => 45,  86 => 32,  81 => 29,  79 => 28,  76 => 27,  69 => 22,  66 => 21,  58 => 15,  55 => 14,  49 => 11,  44 => 10,  36 => 5,  33 => 4,);
    }
}
