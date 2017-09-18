<?php

/* EmisionesBundle:Counter/Emision:show.html.twig */
class __TwigTemplate_4f7b66a20e71327371f87c79eadebdd70275f48bfffd028473afd794f7a59123 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
         ";
        // line 3
        $this->env->loadTemplate("EmisionesBundle:Menu:submenucounter.html.twig")->display($context);
        // line 4
        echo " ";
    }

    // line 8
    public function block_titlepage($context, array $blocks = array())
    {
        // line 9
        echo "     <h1>
        Ordenes
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
     <li class=\"active\">Detalle</li>
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
        echo "&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "ruc"), "html", null, true);
        echo "</h3>
                                </div>
                                    <hr>
                                    <div class=\"box-body\">
                                        <table class=\"table table-bordered table-responsive table-condensed table-hover table-striped\">
                                            <thead>
                                                
                                            <th style=\"width: 15%;\">Atributos</th><th>Valor</th>
                                            </thead> 
                                            ";
        // line 39
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto")) {
            // line 40
            echo "                                                <tr>
                                                    <th>Adjunto</th>
                                                    <td>
                                                        <a onclick=\"openAdjunto('";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "');\" href=\"#\"><i class=\"fa fa-clipboard\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "</a>
                                                    </td>
                                                </tr>
                                            ";
        }
        // line 47
        echo "                                            <tr>
                                                <th>N&uacute;mero de Orden</th>
                                                <td>
                                                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "gettipo"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numeroOrden"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th>Fecha de Solicitud</th>
                                                <td>
                                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fecha"), "d - M - Y"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Agente</th>
                                                <td>
                                                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "html", null, true);
        echo "
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <th>Counter</th>
                                                <td>
                                                    ";
        // line 69
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "usuario")) {
            // line 70
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "usuario"), "html", null, true);
            echo "
                                                    ";
        } else {
            // line 72
            echo "                                                    <b class=\"text-red\">NO ASIGNADA</b>
                                                    ";
        }
        // line 74
        echo "                                                </td>                                               
                                            </tr>
                                            <tr>
                                                 <th>Prioridad</th>
                                                <td>
                                                    ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prioridad"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>GDS</th>
                                                <td>
                                                    ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "gds"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ciudad</th>
                                                <td>
                                                    ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "ciudadDestino"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                             <th>FEE de Servicios</th>
                                                <td>
                                                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "feeServicios"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de Boleto</th>
                                                <td>
                                                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoBoleto"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                            <th>PNR</th>
                                                <td>
                                                    <textarea readonly=\"true\" style=\"max-width: 98%;min-width: 99%;width: 98%;min-height: 350px;max-height: 350px;\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reservaPnr"), "html", null, true);
        echo "</textarea>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                            <th>Tarifa Reserva</th>
                                                <td>
                                                    <textarea readonly=\"true\" style=\"max-width: 98%;min-width: 99%;width: 98%;min-height: 350px;max-height: 350px;\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tarifaReserva"), "html", null, true);
        echo "</textarea>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Estado</th>
                                                <td>
                                                    <b class=\"text-orange\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado"), "html", null, true);
        echo "</b>
                                                </td>
                                            </tr>
                                            <tr>
                                            <th>Comentarios M&M</th>
                                                <td>
                                                    ";
        // line 128
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comentario")) {
            // line 129
            echo "                                                        <textarea readonly=\"true\" style=\"max-width: 98%;min-width: 99%;width: 98%;min-height: 250px;max-height: 250px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comentario"), "html", null, true);
            echo "</textarea>                                                       
                                                     ";
        } else {
            // line 131
            echo "                                                        --
                                                     ";
        }
        // line 133
        echo "                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Record GDS</th>
                                                <td>
                                                    ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "recordGds"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Nuevo Record GDS</th>
                                                <td>
                                                    ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "recordNew"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                            <th>Observaciones</th>
                                                <td>
                                                    ";
        // line 151
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observaciones")) {
            // line 152
            echo "                                                        <textarea readonly=\"true\" style=\"max-width: 98%;min-width: 99%;width: 98%;min-height: 250px;max-height: 250px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observaciones"), "html", null, true);
            echo "</textarea>                                                       
                                                     ";
        } else {
            // line 154
            echo "                                                        --
                                                     ";
        }
        // line 156
        echo "                                                </td>
                                            </tr>
                                             <tr>
                                                <th>Tour Code</th>
                                                <td>
                                                    ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tourcode"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr>
                                             <th>N&uacute;mero de Pasajeros </th>
                                                <td>
                                                    ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numPasajeros"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                        
                                        </table>";
        // line 174
        echo "<hr>
                                   ";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 176
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Tarjeta Credito")) {
                // line 177
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
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "emisorVtc"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Aerolinea</th>
                                                            <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "aerolinea"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Banco Emisor Tarjeta</th>
                                                            <td><b class=\"text-red\">";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "bancoEmisorTarjeta"), "html", null, true);
                echo "</b></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Tarjeta</th>
                                                            <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>N&uacute;mero Tarjeta</th>
                                                            <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Propietario</th>
                                                            <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "propietario"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vence</th>
                                                            <td>";
                // line 211
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "vence"), "m/Y"), "html", null, true);
                echo "</td>
                                                        </tr>          
                                                        <tr>
                                                            <th>Tipo Pago</th>
                                                            <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Plazo</th>
                                                            <td>";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "plazo"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Autorizaci&oacute;n</th>
                                                            <td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>C&oacute;digo Seguridad</th>
                                                            <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "pin"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>N&uacute;mero Autorizaci&oacute;n</th>
                                                            <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Tarjeta</th>
                                                            <td>\$ ";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Inter&eacute;s Tarjeta</th>
                                                            <td>\$ ";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "interesTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Total</th>
                                                            <td>\$ ";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTotal"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Paga a Pasajeros</th>
                                                            <td>";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "pagoPasajeros"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 255
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 259
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "DETB")) {
                // line 260
                echo "                                            <div class=\"box box-solid box-primary\">
                                            <div class=\"box-header \">                                    
                                                <h3 class=\"box-title pull-right\"><i class=\"fa fa-barcode\"></i> ";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</h3>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                        <tbody>
                                                            <tr>
                                                                <th>Banco</th>
                                                                <td>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "banco"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>N&uacute;mero Documento</th>
                                                                <td>";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroDocumento"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Valor</th>
                                                                <td>";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Transacci&oacute;n</th>
                                                                <td>";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 288
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 291
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Pago Directo")) {
                // line 292
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
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor</th>
                                                            <td>";
                // line 306
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                        </tr>        
                                                    </tbody>
                                                </table>
                                            </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 313
            echo "                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                    </div>
                            </div><!-- /.box -->

                            

                        </div>
    
    
    
";
    }

    // line 325
    public function block_javascripts($context, array $blocks = array())
    {
        // line 326
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
        return "EmisionesBundle:Counter/Emision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 326,  573 => 325,  560 => 314,  554 => 313,  544 => 306,  537 => 302,  525 => 292,  523 => 291,  517 => 290,  511 => 288,  501 => 281,  494 => 277,  487 => 273,  480 => 269,  470 => 262,  466 => 260,  464 => 259,  458 => 258,  452 => 255,  441 => 247,  434 => 243,  427 => 239,  420 => 235,  413 => 231,  406 => 227,  399 => 223,  392 => 219,  385 => 215,  378 => 211,  371 => 207,  364 => 203,  357 => 199,  350 => 195,  343 => 191,  336 => 187,  324 => 177,  322 => 176,  316 => 175,  313 => 174,  306 => 167,  297 => 161,  290 => 156,  286 => 154,  280 => 152,  278 => 151,  268 => 144,  259 => 138,  252 => 133,  248 => 131,  242 => 129,  240 => 128,  231 => 122,  222 => 116,  212 => 109,  203 => 103,  194 => 97,  185 => 91,  176 => 85,  167 => 79,  160 => 74,  156 => 72,  150 => 70,  148 => 69,  139 => 63,  130 => 57,  118 => 50,  113 => 47,  104 => 43,  99 => 40,  97 => 39,  83 => 30,  78 => 28,  71 => 23,  68 => 21,  61 => 17,  56 => 16,  53 => 15,  46 => 9,  43 => 8,  39 => 4,  37 => 3,  32 => 2,);
    }
}
