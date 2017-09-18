<?php

/* EmisionesBundle:Caja:conciliarmanual.html.twig */
class __TwigTemplate_4d4e3c3968de912cfd5655d115b7aa55158bacb29ca834a0cca66a447f7d7e69 extends Twig_Template
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

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "        
    
    ";
        // line 12
        if (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 13
            $this->env->loadTemplate("EmisionesBundle:Menu:caja.html.twig")->display($context);
            // line 14
            echo "    ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 15
            $this->env->loadTemplate("EmisionesBundle:Menu:supervisorcobranza.html.twig")->display($context);
            // line 16
            echo "    ";
        }
        // line 17
        echo " ";
    }

    // line 19
    public function block_titlepage($context, array $blocks = array())
    {
        // line 20
        echo "     <h1>
        Dashboard
        <small>M&oacute;dulo Caja</small>
    </h1>
 ";
    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 27
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Conciliar Orden</li>
     <li class=\"active\">Manual</li>
 ";
    }

    // line 32
    public function block_area($context, array $blocks = array())
    {
        // line 33
        echo "     <div class=\"col-sm-12\">
          <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab_1\">Conciliar</a></li>
                                    <li class=\"\"><a data-toggle=\"tab\" href=\"#tab_2\">Formas de Pago</a></li>
                                     <li class=\"\"><a data-toggle=\"tab\" href=\"#tab_3\">Documento de Respaldo</a></li>
                                     <h4 style=\"margin-right: 10px;\" class=\" pull-right\"><i class=\"fa fa-suitcase\"></i> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "html", null, true);
        echo "&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "agencia"), "ruc"), "html", null, true);
        echo "</h4>
                                </ul>
                                <div class=\"tab-content\">
                                    <div id=\"tab_1\" class=\"tab-pane active\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\" style=\"height: 200px;\">
                                                            <label class=\"control-label\"> Historial</label>
                                                            <br>
                                                             ";
        // line 47
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "detalleAprobacion");
        echo "
                                                        </div>
                                         </div>
                                        <hr>
                                        <form action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operador_conciliar_manual", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"POST\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-12\">
                                                    <div class=\"col-sm-3 form-group\">
                                                        <label class=\"control-label\"> Conciliar</label>
                                                        <select name=\"aprobadoCaja\" id=\"aprobadoCaja\" class=\"form-control\" size=\"5\">
                                                            ";
        // line 57
        if (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 58
            echo "                                                                ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aprobadoCaja") == "Pendiente Pago")) {
                // line 59
                echo "                                                                    <option selected=\"selected\" value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option  value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aprobadoCaja") == "Pago Confirmado")) {
                // line 62
                echo "                                                                    <option  value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option selected=\"selected\" value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                ";
            } else {
                // line 65
                echo "                                                                    <option  value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option  value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                ";
            }
            // line 68
            echo "                                                            ";
        }
        // line 69
        echo "                                                            ";
        if (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 70
            echo "                                                                ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aprobadoCaja") == "Pendiente Pago")) {
                // line 71
                echo "                                                                    <option selected=\"selected\" value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option  value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                    <option  value='Anulada'>ANULADA</option>
                                                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aprobadoCaja") == "Pago Confirmado")) {
                // line 75
                echo "                                                                    <option  value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option selected=\"selected\" value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                    <option  value='Anulada'>ANULADA</option>
                                                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aprobadoCaja") == "Anulada")) {
                // line 79
                echo "                                                                    <option  value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option  value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                    <option selected=\"selected\" value='Anulada'>ANULADA</option>
                                                                ";
            } else {
                // line 83
                echo "                                                                    <option  value='Pendiente Pago'>PENDIENTE PAGO</option>
                                                                    <option  value='Pago Confirmado'>PAGO CONFIRMADO</option>
                                                                    <option  value='Anulada'>ANULADA</option>
                                                                ";
            }
            // line 87
            echo "                                                            ";
        }
        // line 88
        echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-sm-9 form-group\">
                                                        <label class=\"control-label\"> Detalle</label>
                                                        <textarea style=\"height: 150px;\" name=\"detalleAprobacion\" id=\"detalleAprobacion\" class=\"form-control\"></textarea>
                                                    </div>
                                                    
                                                    ";
        // line 95
        if (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 96
            echo "                                                    <div class='row'>
                                                        ";
            // line 97
            if (((isset($context["anulacionGenerada"]) ? $context["anulacionGenerada"] : null) != "No Generada")) {
                // line 98
                echo "                                                            <hr>
                                                            <b style=\"margin-left: 30px;\">";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["anulacionGenerada"]) ? $context["anulacionGenerada"] : null), "html", null, true);
                echo "</b>
                                                            <hr>
                                                        ";
            }
            // line 102
            echo "                                                    </div>
                                                    ";
        }
        // line 104
        echo "                                                    <div class=\"box-footer \">
                                                        ";
        // line 105
        if (((isset($context["anulacionGenerada"]) ? $context["anulacionGenerada"] : null) == "No Generada")) {
            // line 106
            echo "                                                            <button class=\"btn btn-sm btn-primary\" type=\"submit\"><i class=\"fa fa-check\"></i> Aceptar</button>                                                        
                                                        ";
        }
        // line 108
        echo "                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- /.tab-pane -->
                                    <div id=\"tab_2\" class=\"tab-pane\">";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                             ";
            // line 118
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Tarjeta Credito")) {
                // line 119
                echo "                                              <div class=\"box box-solid box-primary\">
                                                 <div class=\"box-header \">                                    
                                                     <h3 class=\"box-title pull-right\"><i class=\"fa fa-credit-card\"></i> Tarjeta de Cr&eacute;dito</h3>
                                                 </div><!-- /.box-header -->
                                                 <div class=\"box-body\">
                                                     <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                         <tbody>

                                                             <tr>
                                                            <th>Emisor VTC</th>
                                                            <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "emisorVtc"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Aerolinea</th>
                                                            <td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "aerolinea"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Banco Emisor Tarjeta</th>
                                                            <td><b class=\"text-red\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "bancoEmisorTarjeta"), "html", null, true);
                echo "</b></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Tarjeta</th>
                                                            <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>N&uacute;mero Tarjeta</th>
                                                            <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Propietario</th>
                                                            <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "propietario"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vence</th>
                                                            <td>";
                // line 153
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "vence"), "m/Y"), "html", null, true);
                echo "</td>
                                                        </tr>          
                                                        <tr>
                                                            <th>Tipo Pago</th>
                                                            <td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Plazo</th>
                                                            <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "plazo"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tipo Autorizaci&oacute;n</th>
                                                            <td>";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                   
                                                        <tr>
                                                            <th>N&uacute;mero Autorizaci&oacute;n</th>
                                                            <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroAutorizacion"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Tarjeta</th>
                                                            <td>\$ ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Inter&eacute;s Tarjeta</th>
                                                            <td>\$ ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "interesTarjeta"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor Total</th>
                                                            <td>\$ ";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valorTotal"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Paga a Pasajeros</th>
                                                            <td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "pagoPasajeros"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 194
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 198
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "DETB")) {
                // line 199
                echo "                                            <div class=\"box box-solid box-primary\">
                                            <div class=\"box-header \">                                    
                                                <h3 class=\"box-title pull-right\"><i class=\"fa fa-barcode\"></i> ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</h3>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                <table class=\"table table-responsive table-bordered table-condensed table-striped\">
                                                        <tbody>
                                                            <tr>
                                                                <th>Banco</th>
                                                                <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "banco"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>N&uacute;mero Documento</th>
                                                                <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "numeroDocumento"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Valor</th>
                                                                <td>";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Transacci&oacute;n</th>
                                                                <td>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "transaccion"), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 227
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        foreach ($context['_seq'] as $context["_key"] => $context["fp"]) {
            echo " 
                                        ";
            // line 230
            if (($this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipo") == "Pago Directo")) {
                // line 231
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
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "tipoPago"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Valor</th>
                                                            <td>";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fp"]) ? $context["fp"] : null), "valor"), "html", null, true);
                echo "</td>
                                                        </tr>        
                                                    </tbody>
                                                </table>
                                            </div><!-- /.box-body -->
                                          </div>
                                        ";
            }
            // line 252
            echo "                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                                    </div><!-- /.tab-pane -->
                                    <div id=\"tab_3\" class=\"tab-pane\">
                                        ";
        // line 255
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto")) {
            // line 256
            echo "                                            <hr>
                                            <a onclick=\"openAdjunto('";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "');\" href=\"#\"><i class=\"fa fa-download\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adjunto"), "html", null, true);
            echo "</a><hr>
                                            ";
            // line 259
            echo "                                        ";
        } else {
            // line 260
            echo "                                            <h3>No existe Documento de respaldo para esta orden.</h3>
                                        ";
        }
        // line 262
        echo "                                        
                                    </div>
                                </div><!-- /.tab-content -->
                            </div>
              
                
                
               
     </div>
   
 ";
    }

    // line 273
    public function block_javascripts($context, array $blocks = array())
    {
        // line 274
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
        return "EmisionesBundle:Caja:conciliarmanual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 274,  507 => 273,  493 => 262,  489 => 260,  486 => 259,  480 => 257,  477 => 256,  475 => 255,  471 => 253,  465 => 252,  455 => 245,  448 => 241,  436 => 231,  434 => 230,  428 => 229,  422 => 227,  412 => 220,  405 => 216,  398 => 212,  391 => 208,  381 => 201,  377 => 199,  375 => 198,  369 => 197,  363 => 194,  352 => 186,  345 => 182,  338 => 178,  331 => 174,  324 => 170,  316 => 165,  309 => 161,  302 => 157,  295 => 153,  288 => 149,  281 => 145,  274 => 141,  267 => 137,  260 => 133,  253 => 129,  241 => 119,  239 => 118,  233 => 117,  225 => 108,  221 => 106,  219 => 105,  216 => 104,  212 => 102,  206 => 99,  203 => 98,  201 => 97,  198 => 96,  196 => 95,  187 => 88,  184 => 87,  178 => 83,  172 => 79,  166 => 75,  160 => 71,  157 => 70,  154 => 69,  151 => 68,  146 => 65,  141 => 62,  136 => 59,  133 => 58,  131 => 57,  122 => 51,  115 => 47,  102 => 39,  94 => 33,  91 => 32,  84 => 27,  81 => 26,  73 => 20,  70 => 19,  66 => 17,  63 => 16,  61 => 15,  56 => 14,  54 => 13,  50 => 12,  46 => 10,  43 => 9,  36 => 5,  33 => 4,);
    }
}
