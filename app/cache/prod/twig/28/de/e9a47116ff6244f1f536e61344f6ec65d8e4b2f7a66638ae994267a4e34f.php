<?php

/* base.html.twig */
class __TwigTemplate_28dee9a47116ff6244f1f536e61344f6ec65d8e4b2f7a66638ae994267a4e34f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'titlepage' => array($this, 'block_titlepage'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'area' => array($this, 'block_area'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        $this->displayBlock('html', $context, $blocks);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"skin-blue\"  >
        
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 153
        echo "            
        ";
        // line 154
        $this->env->loadTemplate("EmisionesBundle:Snippets:acercade.html.twig")->display($context);
        // line 155
        echo "    
        ";
        // line 156
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "    </body>
</html>
";
    }

    // line 2
    public function block_html($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/css-iconos-metros-ui/iconFont.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
           
        ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "            <header class=\"header\">
                ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "                
            </header> 
      
      
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"left-side sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar \">
                    <!-- Sidebar user panel -->
                    ";
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 40
            echo "                        <div class=\"user-panel\">
                           
                        ";
            // line 42
            if (((twig_in_filter("ROLE_SUPERVISOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles")) || twig_in_filter("ROLE_COUNTER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) || twig_in_filter("ROLE_USUARIO_INTERNO", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles")))) {
                echo "    
                        <div class=\"text-center image\">
                           ";
                // line 44
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "logo")) {
                    // line 45
                    echo "                                <img style=\"width: 140px;height: 61px;border: 0px;\" class=\"img-thumbnail \" src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/empresas/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "logo")), "html", null, true);
                    echo "\" alt=\"Logo Empresa\"/>
                                ";
                } else {
                    // line 47
                    echo "                                <img style=\"width: 100px;height: 70px;border: 0px;\" class=\"img-thumbnail \" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/empresas/No-Logo.gif"), "html", null, true);
                    echo "\" alt=\"Logo Empresa\"/>
                           ";
                }
                // line 48
                echo "   
                               
                        </div>
                       <div class=\"pull-left info\">
                            <p class=\"text-info text-center\">";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "razonsocial"), "html", null, true);
                echo "</p>

                        </div>
                        ";
            }
            // line 56
            echo "                        
                       ";
            // line 57
            if (twig_in_filter("ROLE_AGENTE_EXTERNO", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
                echo "    
                        <div class=\"text-center image\">
                           ";
                // line 59
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "agencia"), "logo")) {
                    // line 60
                    echo "                                <img style=\"width: 140px;height: 61px;border: 0px;\" class=\"img-thumbnail \" src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/agencias/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "agencia"), "logo")), "html", null, true);
                    echo "\" alt=\"Logo Agencia\"/>
                                ";
                } else {
                    // line 62
                    echo "                                <img style=\"width: 100px;height: 70px;border: 0px;\" class=\"img-thumbnail \" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/agencias/No-Logo.gif"), "html", null, true);
                    echo "\" alt=\"Logo Agencia\"/>
                           ";
                }
                // line 63
                echo "   
                               
                        </div>
                       <div class=\"pull-left info\">
                            <p class=\"text-info\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "agencia"), "nombre"), "html", null, true);
                echo "</p>

                        </div>
                        ";
            }
            // line 71
            echo "                        
                       </div>
                    ";
        }
        // line 74
        echo "                    <!-- search form -->
                   ";
        // line 83
        echo "                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                    
                        ";
        // line 87
        $this->displayBlock('sidebar', $context, $blocks);
        // line 90
        echo "                        
                    </ul>
                </section>
            </aside>
         
            <aside class=\"right-side\">
                    
                 <section class=\"content-header\">
                     ";
        // line 98
        $this->displayBlock('titlepage', $context, $blocks);
        // line 101
        echo "                    
                     
                    <ol class=\"breadcrumb\">
                        ";
        // line 104
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 106
        echo "   
                    </ol>
                </section>
                    
                 <section class=\"content\">

                    <!-- Small boxes (Stat box) -->
                    <div class=\"row\">
                       ";
        // line 114
        echo "  
                        ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 116
            echo "                            <div class=\"alert alert-success alert-dismissable\" style=\"width: 95%; margin-left: 2%;\">
                                        <i class=\"fa fa-check\"></i>
                                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                                        <b>Informaci&oacute;n!</b> ";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                         </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                      ";
        echo "      
                        ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 124
            echo "                            <div class=\"alert alert-danger alert-dismissable\" style=\"width: 95%; margin-left: 2%;\">
                                        <i class=\"fa fa-ban\"></i>
                                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                                        <b>Error!</b> ";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                                    </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo " 
                       ";
        // line 130
        echo "      
                        ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 132
            echo "                            <div class=\"alert alert-info alert-dismissable\" style=\"width: 95%; margin-left: 2%;\">
                                        <i class=\"fa fa-info-circle\"></i>
                                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                                        <b>Informaci&oacute;n!</b> ";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                                    </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                      ";
        echo "  
                            
                        ";
        // line 141
        echo "                              
                   
                             
                        ";
        // line 144
        $this->displayBlock('area', $context, $blocks);
        // line 147
        echo "                      
                    </div>
                 </section>
            </aside>
        
        ";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "                    
                ";
    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
        // line 88
        echo "                            
                        ";
    }

    // line 98
    public function block_titlepage($context, array $blocks = array())
    {
        // line 99
        echo "                         
                     ";
    }

    // line 104
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 105
        echo "                         
                        ";
    }

    // line 144
    public function block_area($context, array $blocks = array())
    {
        // line 145
        echo "                            
                        ";
    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        // line 157
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/jquery-2.1.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datepicker/locales/bootstrap-datepicker.es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 171
        echo "            ";
        // line 172
        echo "          
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 172,  453 => 171,  449 => 169,  445 => 168,  441 => 167,  437 => 166,  433 => 165,  429 => 164,  425 => 163,  421 => 162,  417 => 161,  413 => 160,  405 => 158,  400 => 157,  397 => 156,  392 => 145,  384 => 105,  381 => 104,  376 => 99,  373 => 98,  368 => 88,  360 => 28,  357 => 27,  348 => 147,  346 => 144,  336 => 138,  327 => 135,  322 => 132,  318 => 131,  315 => 130,  312 => 129,  303 => 127,  298 => 124,  294 => 123,  290 => 122,  281 => 119,  276 => 116,  272 => 115,  269 => 114,  259 => 106,  257 => 104,  252 => 101,  250 => 98,  240 => 90,  232 => 83,  229 => 74,  224 => 71,  211 => 63,  205 => 62,  199 => 60,  192 => 57,  189 => 56,  162 => 44,  153 => 40,  151 => 39,  138 => 27,  135 => 26,  132 => 25,  121 => 16,  117 => 15,  113 => 14,  101 => 11,  97 => 10,  93 => 9,  88 => 8,  85 => 7,  67 => 174,  65 => 156,  62 => 155,  60 => 154,  45 => 20,  32 => 2,  29 => 1,  534 => 426,  418 => 312,  415 => 311,  409 => 159,  406 => 306,  398 => 300,  395 => 299,  389 => 144,  383 => 270,  377 => 265,  371 => 243,  365 => 87,  359 => 231,  353 => 226,  347 => 221,  341 => 141,  333 => 294,  329 => 293,  309 => 276,  300 => 270,  292 => 265,  280 => 256,  264 => 243,  255 => 237,  246 => 231,  238 => 87,  231 => 222,  227 => 221,  219 => 216,  214 => 215,  196 => 6,  193 => 5,  186 => 210,  176 => 48,  170 => 47,  148 => 180,  142 => 179,  129 => 175,  126 => 174,  120 => 172,  118 => 171,  105 => 12,  82 => 147,  75 => 28,  73 => 2,  59 => 15,  57 => 153,  54 => 8,  48 => 21,  166 => 110,  163 => 109,  157 => 42,  154 => 104,  146 => 98,  143 => 97,  139 => 95,  103 => 163,  52 => 5,  46 => 9,  43 => 7,  40 => 7,  38 => 5,  31 => 3,  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 67,  210 => 80,  206 => 10,  203 => 9,  200 => 76,  197 => 59,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  182 => 52,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 45,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  147 => 59,  140 => 30,  137 => 177,  134 => 56,  131 => 176,  128 => 54,  125 => 17,  122 => 52,  119 => 51,  116 => 50,  114 => 49,  111 => 166,  109 => 13,  106 => 46,  102 => 45,  86 => 149,  81 => 29,  79 => 5,  76 => 27,  69 => 22,  66 => 19,  58 => 13,  55 => 25,  49 => 10,  44 => 10,  36 => 5,  33 => 4,);
    }
}
