<?php

/* EmisionesBundle:QueueManager:grid.html.twig */
class __TwigTemplate_012fb3fd4a624586289160cd767380b8e9e9dda5b834406a6f9c9825d77e8fbc extends Twig_Template
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
   <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/datetimepicker/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
     <style type=\"text/css\">
         <!--
         .grid table
         {
            
             border-collapse: collapse;
             color: #555555;
             font-size: 13px;
             width: 100%;
         }

         .grid td, .grid th
         {
             border: 1px solid #D4E0EE;
             padding: 3px 7px 2px 7px;
         }
         .grid th
         {
             background-color: #E6EDF5;
             vertical-align: top;
         }

         .grid th a {
             color: #4F76A3;
             text-decoration: none;
         }

         .grid th a.grid-reset {
             margin-left: 5px;
             font-weight: normal;
         }

         .grid tr.even
         {
             background-color: #FCFDFE;
         }

         .grid tr.odd {
             background-color: #F7F9FC;

         }

         .grid_header, .grid_footer {
             margin: 5px 0;
         }

         /* Icons for order */
         /* You can find this icons in the images directory of the docuementation */
         th div {
             height: 10px;
             width: 20px;
             float: right;
             padding-top: 4px;
         }

         .grid th div.sort_up {
             background: transparent url(\"data:image/gif;base64,R0lGODlhFwAKAIABAJCQkO/v7yH+EUNyZWF0ZWQgd2l0aCBHSU1QACH5BAEKAAEALAAAAAAXAAoAAAIajI+py+0GwGsxTmVDvlqe/YCQ52wmyaXqUQAAOw==\") no-repeat bottom left;
         }

         .grid th div.sort_down {
             background: transparent url(\"data:image/gif;base64,R0lGODlhFwAKAHAAACH5BAEAAAIALAAAAAAXAAoAgQAAAJCQkAAAAAAAAAIalI+py60RDpTRiZmwvdXozXkdKH6keKZqUwAAOw==\") no-repeat bottom left;
         }

         /* Boolean column */
         .grid .grid_boolean_true {
             background: transparent url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACl0lEQVR42q2T60uTYRiH/Tv2bnttAwlkRCGChFD7FCQSm2ZDMQ/L0nRnj7TNGDbTooychzFSSssstdqc8zB1anNrSpm47FVCzH3pQLVhdLBfzztoJlifvOEHz4fnuu7nGBe311XgOyLMnTmsz/akMBljB8OSEVFY4kpkJM5Efbp9v/C/cJ43VSrzJId0HhluBy3oW+mKpnOpGSWuExD30iFxDy3dFSZdpZkTSZHr80Y41/phe3UDpvnKaNixY60PjbNVOGTjRZJtvJ2SHE+KINOdtMHC7MSaQBkq/CXQzJ6DjqScpNp3HvY3D3B5ugIiC3dDdJMriAlk7iSDajwr2pmFWVDlPQPFTCEU0wVQTxfCvT4Ig1cJB5Hk9hxDwjWuISbIGBExncFmWINNqPAVQ/lUTsB8KKdIPPmYeOsCW6HIOtpeNMI234j4ei4TExy3J2w+Wr2L2oAGWm8RWckAlj4uQDVZiPH1oSj8c+sH2p5fgWGyGH3BTvCN1GZMIH5Ib/avdMPoV6HWr8Xnb5+i0Iev72KwZa4ealc29O6z6A92gF/zt6CHZm4tNKF98Sp0U3KYfdWIfP8Shbd+bcHy7BLKnFnQEEFLoA7tXjPoKmp7C6l3+Ab5QBrsq/dRPSmH2n0adTPlWH6/iLa5BpQOnoTCcQo6Zw7sr7uRbj0KupLaPsRkK09wgFyN2aPBY+YeKkfzoB3OgWpIBqWDDQtn48lyF4xDxeCrORu0mhLseAuJTVxpfAMVMbnL4CCS1oAZ+tEiXBiWo5VswU5gvbMIvFJOhMC7v8Z9DVwpbaJCkg4x2v1m9L60onfBCovXhLSWVPAVnBCt+gf8p+iLXCFtoPR0DcXwtZwwX8UJk44MiZ4upYR7/nt/A+w9sdKFchsrAAAAAElFTkSuQmCC\") no-repeat bottom left;
             display: inline-block;
             text-indent: 16px;
             width: 16px;
             overflow: hidden;
         }

         .grid .grid_boolean_false {
             background: transparent url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACSElEQVR42q2Ty0vUURTHv/5SJ1SmUaGckUYdG5FyVdAicGMkFAXBtEl8gJseIP0FEVEtbNNiFm0iMMUgGKhVIUj0oqKFQ40N2TwwdewxOik6zcy953tbmD/HxFV9d/dwz+f7PXAO8I8q+bugb1xspjFdhuwlWUcSJL+SvEfhaPXgcHxbQOH6hYChCa6WlLvLm/eh1OkEAKjlJWSjUVjZpXlSBvbcehDaAshfOx8w5FB+t7eyosUPSU2DqWkAgOX2wvI0YPljFLmpD6sU6fPefhSyAbmr53wkXxTqvJ7KlhYUXo0BACou3wEArFzpB2hQ3t6JpcgkVqITKSHb/XefJCwAENHdWcux0WwMDI09GjUh2iA7/hjO1v0wVbUerVQ3AFgAoLXucfj9kNkkDA0oBkZzE4BKIAUin4hjV2sblFI9xYD6MpcLeiYJo2k7rksKhKi1ei4WR5mrBlrp+g2A0jBi7MZ1RzUV2RhB/YEIASG0VihKoOby6UVY7gY7qiji18txrDy8b7tTEaV7G5FNp6GVnitOMPwz8h47PI32Z1GEs/8Sqk6fBRUhmhAhHI0+fA+/g9Z62AYopUYKC6lUZjKCio7jNmQxeBMLwUGIrL1dJ07iRySMzMznlNZ6ZNMiTXZ3BCgy5DpwuLK6tQ25ZAK5WBzGGDiafHA0+ZCOhPHl9dgqyb6jTz+FtqzyxJkjASGDO2s87tq2g3C4qmEMkMss4tvEW2RmY/MkB449mwpte0xvTh1qJtlFYS8pm4+JHO18Hovjf+o3Xg+XX4ZLBPIAAAAASUVORK5CYII=\") no-repeat bottom left;
             display: inline-block;
             text-indent: 16px;
             width: 16px;
             overflow: hidden;
         }

         /* Alignement */
         .grid .align-left {
             text-align: left;
         }

         .grid .align-center {
             text-align: center;
         }

         .grid .align-right {
             text-align: right;
         }

         /* Column filter */
         .grid .grid-filter-operator select{
             width: 70px;

         }

         .grid .grid-filter-input-query input, .grid .grid-filter-select-query select{
             width: 50px;
         }

         .grid .grid-filter-input-query-to, .grid .grid-filter-select-query-to{
             margin-left: 77px;
             display: block;
         }

         /* Grid Search */

         .grid-search {
             border: 1px solid #D4E0EE;
             padding: 10px;
         }

         .grid-search label{
             width: 80px;
             display: inline-block;
             text-align: right;
         }

         .grid-search select, .grid-search .grid-filter-input-query input {
             width: 150px;
         }
         -->
     </style>
 ";
    }

    // line 136
    public function block_sidebar($context, array $blocks = array())
    {
        // line 137
        echo "  
    
    ";
        // line 139
        if (twig_in_filter("ROLE_SUPERVISOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 140
            echo "        ";
            $this->env->loadTemplate("EmisionesBundle:Menu:supervisor.html.twig")->display($context);
            // line 141
            echo "    ";
        } elseif (twig_in_filter("ROLE_COUNTER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 142
            $this->env->loadTemplate("EmisionesBundle:Menu:counter.html.twig")->display($context);
            // line 143
            echo "    ";
        } elseif (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 144
            $this->env->loadTemplate("EmisionesBundle:Menu:caja.html.twig")->display($context);
            // line 145
            echo "    ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 146
            $this->env->loadTemplate("EmisionesBundle:Menu:supervisorcobranza.html.twig")->display($context);
            // line 147
            echo "    ";
        }
        // line 148
        echo "       
 ";
    }

    // line 151
    public function block_titlepage($context, array $blocks = array())
    {
        // line 152
        echo "     <h1>
        Dashboard
        <small>Supervisor</small>
    </h1>
 ";
    }

    // line 158
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 159
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Solicitudes</li>
    ";
        // line 161
        if (twig_in_filter("ROLE_SUPERVISOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 162
            echo "     <li class=\"active\">Supervisor</li>
    ";
        } elseif (twig_in_filter("ROLE_COUNTER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 163
            echo " 
     <li class=\"active\">Counter</li>
    ";
        }
        // line 166
        echo "    
 ";
    }

    // line 169
    public function block_area($context, array $blocks = array())
    {
        // line 170
        echo "     
     <div class=\"col-md-12\">
        <div class=\"row\">
             <div class=\"col-md-12\">
            <span  class=\"text-green col-md-3\"><i style=\"font-size: 18px;\" class=\"ion ion-ios7-alarm\"></i> ";
        // line 174
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["configuracionactiva"]) ? $context["configuracionactiva"] : null), "tiempoPrimeraAlerta") / 60), "html", null, true);
        echo " (min) para Tiempo L&iacute;mite</span>
            <span  class=\"text-orange col-md-3\"><i style=\"font-size: 18px;\" class=\"ion ion-ios7-alarm\"></i> ";
        // line 175
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["configuracionactiva"]) ? $context["configuracionactiva"] : null), "tiempoSegundaAlerta") / 60), "html", null, true);
        echo " (min) para Tiempo L&iacute;mite</span>
            <span style=\"color:red; \" class=\"col-md-3\"  ><i style=\"font-size: 18px;\" class=\"ion ion-ios7-alarm\"></i> En Tiempo L&iacute;mite</span>
            <span  class=\"text-black col-md-3\"><i style=\"font-size: 18px;\" class=\"ion ion-ios7-alarm\"></i> Incumpliendo SLA</span>
         </div>
             </div>
         ";
        // line 180
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid((isset($context["grid"]) ? $context["grid"] : null));
        echo "
      
   </div>
         
  ";
    }

    // line 186
    public function block_javascripts($context, array $blocks = array())
    {
        // line 187
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datetimepicker/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datetimepicker/locales/bootstrap-datetimepicker.es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <script type=\"text/javascript\">
           \$(function () {
                 \$(\".datetime\").datetimepicker({
                    format: \"dd-mm-yyyy HH:ii\",
                    inline: true,
                    language:'es',
                    autoclose: true,
                    todayBtn: true,

                });
                window.setInterval(function()
                            { 
                             \$('#";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "hash"), "html", null, true);
        echo "').submit();
                            }, 60000);
            });
            
            
   
</script> 
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:QueueManager:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 203,  291 => 190,  287 => 189,  281 => 187,  278 => 186,  269 => 180,  261 => 175,  257 => 174,  251 => 170,  248 => 169,  243 => 166,  238 => 163,  234 => 162,  232 => 161,  228 => 159,  225 => 158,  217 => 152,  214 => 151,  209 => 148,  206 => 147,  204 => 146,  199 => 145,  197 => 144,  192 => 143,  190 => 142,  185 => 141,  182 => 140,  180 => 139,  176 => 137,  173 => 136,  41 => 6,  36 => 5,  33 => 4,);
    }
}
