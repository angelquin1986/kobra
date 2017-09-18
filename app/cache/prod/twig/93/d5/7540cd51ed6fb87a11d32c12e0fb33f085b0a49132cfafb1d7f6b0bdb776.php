<?php

/* EmisionesBundle:Counter/Emision:edit.html.twig */
class __TwigTemplate_93d57540cd51ed6fb87a11d32c12e0fb33f085b0a49132cfafb1d7f6b0bdb776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BaseBundle:Masters:index.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
   ";
        // line 4
        $this->env->loadTemplate("EmisionesBundle:Menu:submenucounter.html.twig")->display($context);
        echo "  
 ";
    }

    // line 8
    public function block_titlepage($context, array $blocks = array())
    {
        // line 9
        echo "     <h1>
        Ordenes
        <small>Procesar</small>
    </h1>
 ";
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 16
        echo "     <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li> <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\"><i class=\"fa fa-align-justify\"></i> Ordenes</a></li>
     <li class=\"active\">Procesar</li>
 ";
    }

    // line 21
    public function block_area($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"col-md-12\">

                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <div class=\"pull-right box-tools pull-left\">                                        
                                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-circle btn-sm btn-bg bg-blue\" data-original-title=\"Cola\"><i class=\"fa fa-sort-numeric-asc\"></i></a>
                                    </div>
                                        <h3 class=\"box-title pull-right\"><i class=\"fa fa-suitcase\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "ruc"), "html", null, true);
        echo "</h3>
                                </div><hr>
                 <form  action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("counter_emision_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
                                <div class=\"box-body\">                                    
                                   <div class=\"row\"> 
                                       ";
        // line 35
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto")) {
            // line 36
            echo "                                                    <div class=\"col-md-12\">
                                                        <a onclick=\"openAdjunto('";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "');\" href=\"#\"><i class=\"fa fa-clipboard\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "</a>
                                                        <br><br>
                                                    </div> 
                                                ";
        }
        // line 41
        echo "                                <div class=\"col-md-6\">    
                                    <div class=\"form-group\" >
                                         <label>N&uacute;mero de Orden:</label>
                                        <div class=\"input-group\" >
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-file-o\"></i>
                                            </div>                                            
                                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "numeroOrden"), 'widget');
        echo "                                              
                                        </div><!-- /.input group -->
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "numeroOrden"), 'errors');
        echo "
                                    </div>
                                    <!-- Date dd/mm/yyyy -->
                                    <div class=\"form-group\">
                                        <label>Agente:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-user\"></i>
                                            </div> 
                                
                                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "agente"), 'widget');
        echo "
                                                <div id=\"wrap\"> </div>  
                                        </div><!-- /.input group -->
                                       <div>
                                            <span class=\"\"><i class=\"fa fa-envelope\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "email"), "html", null, true);
        echo "</span>
                                            <span class=\"\" style=\"margin-left: 20px;\"> <i class=\"fa fa-mobile\"></i> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "celular"), "html", null, true);
        echo "</span>
                                            <span class=\"\" style=\"margin-left: 20px;\"> <i class=\"fa fa-phone-square\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "telefono"), "html", null, true);
        echo "-Ext:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "ext"), "html", null, true);
        echo "</span>
                                       </div>
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "agente"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    <div class=\"form-group\">
                                        <label>Gds:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-cogs\"></i>
                                            </div>                                                                
                                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "gds"), 'widget');
        echo "
                                                <div id=\"wrap\"> </div>                                            
                                        </div><!-- /.input group -->
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "gds"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    

                                    <!-- Date mm/dd/yyyy -->
                                    <div class=\"form-group\">
                                         <label>Tipo Boleto:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-file-o\"></i>
                                            </div>
                                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipoBoleto"), 'widget');
        echo "
                                                <div id=\"wrap\"> </div>
                                        </div><!-- /.input group -->
                                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipoBoleto"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                      <!-- Date mm/dd/yyyy -->
                                    <div class=\"form-group\">
                                         <label>Fecha Solicitud:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-calendar\"></i>
                                            </div>
                                            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fecha"), 'widget');
        echo "
                                                <div id=\"wrap\"> </div>
                                        </div><!-- /.input group -->
                                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fecha"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                    <div class=\"form-group\">
                                         <label>Estado:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-tag\"></i>
                                            </div>
                                            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estado"), 'widget');
        echo "
                                        </div><!-- /.input group -->
                                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estado"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                    <div class=\"form-group\">
                                        <label>FEE Servicios:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-money\"></i>
                                            </div>
                                           ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "feeServicios"), 'widget');
        echo "                                            
                                        </div><!-- /.input group -->
                                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "feeServicios"), 'errors');
        echo "
                                    </div>
                                    
                                     <div class=\"form-group\">
                                         <label>Record GDS:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-barcode\"></i>
                                            </div>
                                            ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "recordGds"), 'widget');
        echo "                                                
                                        </div><!-- /.input group -->
                                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "recordGds"), 'errors');
        echo "
                                    </div><!-- /.form group -->

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                         <label>Nuevo Record GDS:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-barcode\"></i>
                                            </div>
                                            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "recordNew"), 'widget');
        echo "                                                
                                        </div><!-- /.input group -->
                                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "recordNew"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                     <div class=\"form-group\">
                                         <label>Tour Code:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-barcode\"></i>
                                            </div>
                                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tourcode"), 'widget');
        echo "                                                                                        
                                        </div><!-- /.input group -->
                                        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tourcode"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                </div>
                                    
                                 <div class=\"col-md-6\">  
                                     <div class=\"form-group\">
                                         <label>Ciudad Destino:</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-map-marker\"></i>
                                            </div>
                                            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ciudadDestino"), 'widget');
        echo "
                                                 <div id=\"wrap\"> </div>
                                        </div><!-- /.input group -->
                                        ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "ciudadDestino"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                     <div class=\"form-group\">
                                        <label>Reserva PNR:</label>
                                        <div class=\"input-group\">
                                            ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "reservaPnr"), 'widget');
        echo "
                                                                                         
                                        </div><!-- /.input group -->
                                         ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "reservaPnr"), 'errors');
        echo "
                                    </div><!-- /.form group -->
                                    
                                    
                                     <div class=\"form-group\">
                                        <label>Tarifa Reserva:</label>
                                        <div class=\"input-group\">
                                            
                                            ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tarifaReserva"), 'widget');
        echo "
                                            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tarifaReserva"), 'errors');
        echo "
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                 </div>
                               </div>
                                    <div class=\"form-group\">
                                        <label>Observaciones:</label>
                                            ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "observaciones"), 'widget');
        echo "
                                            ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "observaciones"), 'errors');
        echo "
                                       
                                    </div><!-- /.form group -->
                                    
                                     <div class=\"form-group\">
                                        <label>Comentarios M&M:</label>
                                            ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "comentario"), 'widget');
        echo "
                                            ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "comentario"), 'errors');
        echo "
                                       
                                    </div>";
        // line 213
        echo "<hr>
                                   ";
        // line 214
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 215
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Tarjeta Credito")) {
                // line 216
                echo "                                         <div class=\"box box-solid box-primary\">
                                            <div class=\"box-header \">                                    
                                                <h3 class=\"box-title pull-right\"><i class=\"fa fa-credit-card\"></i> Tarjeta de Cr&eacute;dito</h3>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                
                                                <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                    <tbody>

                                                        <tr>
                                                            <th>Emisor VTC</th>
                                                            <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "emisorVtc"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Aerolinea</th>
                                                            <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "aerolinea"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Banco Emisor Tarjeta</th>
                                                            <td><b class=\"text-red\">";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "bancoEmisorTarjeta"), "html", null, true);
                echo "</b></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Tarjeta</th>
                                                            <td>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>N&uacute;mero Tarjeta</th>
                                                            <td>";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Propietario</th>
                                                            <td>";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "propietario"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vence</th>
                                                            <td>";
                // line 251
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "vence"), "m/Y"), "html", null, true);
                echo "</td>
                                                        </tr>          
                                                        <tr>
                                                            <th>Tipo Pago</th>
                                                            <td>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Plazo</th>
                                                            <td>";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "plazo"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Autorizaci&oacute;n</th>
                                                            <td>";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>C&oacute;digo Seguridad</th>
                                                            <td>";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "pin"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>N&uacute;mero Autorizaci&oacute;n</th>
                                                            <td>";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Tarjeta</th>
                                                            <td>\$ ";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Inter&eacute;s Tarjeta</th>
                                                            <td>\$ ";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "interesTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Total</th>
                                                            <td>\$ ";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTotal"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Paga a Pasajeros</th>
                                                            <td>";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "pagoPasajeros"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 295
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 299
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "DETB")) {
                // line 300
                echo "                                            <div class=\"box box-solid box-primary\">
                                            <div class=\"box-header \">                                    
                                                <h3 class=\"box-title pull-right\"><i class=\"fa fa-barcode\"></i> ";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</h3>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                        <tbody>
                                                            <tr>
                                                                <th>Banco</th>
                                                                <td>";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "banco"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>N&uacute;mero Documento</th>
                                                                <td>";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroDocumento"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Valor</th>
                                                                <td>";
                // line 317
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Transacci&oacute;n</th>
                                                                <td>";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 328
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 331
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Pago Directo")) {
                // line 332
                echo "                                            <div class=\"box box-solid box-primary\">
                                            <div class=\"box-header \">                                    
                                                <h3 class=\"box-title pull-right\"><i class=\"fa fa-money\"></i> Pago Directo</h3>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                    <tbody>

                                                        <tr>
                                                            <th>Tipo Pago</th>
                                                            <td>";
                // line 342
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor</th>
                                                            <td>";
                // line 346
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                        </tr>        
                                                    </tbody>
                                                </table>
                                            </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 353
            echo "                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                                    
                                    
                              
                                </div><!-- /.box-body -->
                                <div class=\"box-footer\">
                                    ";
        // line 359
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
                                    ";
        // line 360
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "
                                        <button type=\"submit\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-save\"></i> &nbsp;CONFIRMAR </button> 
                                </div>
                             </form>
                            </div><!-- /.box -->
                            

                        </div>
    
    
    
";
    }

    // line 372
    public function block_javascripts($context, array $blocks = array())
    {
        // line 373
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script type=\"text/javascript\">
      function openAdjunto(adjunto)
        {
           window.open(String(adjunto)); 
        }
     </script>
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Counter/Emision:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 373,  659 => 372,  643 => 360,  639 => 359,  632 => 354,  626 => 353,  616 => 346,  609 => 342,  597 => 332,  595 => 331,  589 => 330,  583 => 328,  573 => 321,  566 => 317,  559 => 313,  552 => 309,  542 => 302,  538 => 300,  536 => 299,  530 => 298,  524 => 295,  513 => 287,  506 => 283,  499 => 279,  492 => 275,  485 => 271,  478 => 267,  471 => 263,  464 => 259,  457 => 255,  450 => 251,  443 => 247,  436 => 243,  429 => 239,  422 => 235,  415 => 231,  408 => 227,  395 => 216,  393 => 215,  387 => 214,  384 => 213,  379 => 209,  375 => 208,  366 => 202,  362 => 201,  351 => 193,  347 => 192,  336 => 184,  330 => 181,  321 => 175,  315 => 172,  301 => 161,  296 => 159,  284 => 150,  279 => 148,  267 => 139,  262 => 137,  250 => 128,  245 => 126,  233 => 117,  228 => 115,  216 => 106,  210 => 103,  197 => 93,  191 => 90,  177 => 79,  171 => 76,  160 => 68,  153 => 66,  149 => 65,  145 => 64,  138 => 60,  125 => 50,  120 => 48,  111 => 41,  102 => 37,  99 => 36,  97 => 35,  91 => 32,  84 => 30,  79 => 28,  72 => 23,  69 => 21,  62 => 17,  57 => 16,  54 => 15,  46 => 9,  43 => 8,  37 => 4,  32 => 3,);
    }
}
