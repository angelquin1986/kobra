<?php

/* EmisionesBundle:Snippets:exportarpdf.html.twig */
class __TwigTemplate_f886a5dbc4a5b0d3c225819ba96b823e81a103df21b3744394fa82b81ca54b82 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
              function cerrar()
              {
                  \$('#mask').remove();                  
              }
              function openDocument(url)
              {
                  window.open(\"http://kobra.mymtravel.com\"+url.toString());
              }
           \$(document).ready(function(){
               \$(\"#pdf\").click(function(){
                  
                   \$( \"body\" ).append(
                           '<div class=\"modal in\" id=\"mask\" style=\"width:100%; height:100%; display: block;background: #333;opacity:0.9;\" aria-hidden=\"false\">'
                           +'<div class=\"modal-content\" style=\"margin-left:40%;margin-top:25%;width:20%;\">'
                           +'<div id=\"result\" class=\"modal-body\"><button onclick=\"cerrar()\" id=\"btnclose\" type=\"button\" class=\"pull-right close\" style=\"visibility: hidden;margin-top:-15px;margin-right:-15px;\"><i class=\"fa fa-times-circle\"></i></button>'
                           +'<p id=\"msg\" style=\"margin-top:10px;\"><img style=\"margin-left:10px;width:20px;height:20px;\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/img/ajax-loader.gif"), "html", null, true);
        echo "\" atl=\"\" />'
                           +'<span  > Generando Documento ....<span></p></div></div></div>');
                  
                    \$.ajax({
                        url:\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("counter_exportar_pdf");
        echo "\",
                        method:'post',
                        data:{
                            'nombre':'";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo")) . twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fecha"), "d-M-Y_H-i-s")), "html", null, true);
        echo "',
                            'title':'";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numeroOrden"), "html", null, true);
        echo "',
                            'style':'<style type=\"text/css\">'
                                        +'  table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }'
                                        + '   table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}'
                                        + '  div.note {border: solid 1mm #DDDDDD;background-color: #EEEEEE; padding: 2mm; border-radius: 2mm; width: 100%; }'
                                        + '  ul.main { width: 95%; list-style-type: square; }'
                                        + ' ul.main li { padding-bottom: 2mm; }'
                                        + ' h1 { text-align: center; font-size: 20mm}'
                                        + ' h3 { text-align: center; font-size: 14mm}'
                                        + 'table.reference, table.tecspec {font-size: 100%; border-collapse: collapse;width: 100%;}'
                                        + 'table.reference tr.inpar {background-color: #f1f1f1;}'
                                        + 'table.reference th {background-color: #555555;border: 1px solid #555555;color: #ffffff;padding: 3px;text-align: left;vertical-align: top;}'
                                        + 'table.reference tr.par {background-color: #ffffff;}'
                                
                                        +'</style>',
                            'content':'<br/><br/><br/<br/><br/<br/><br/><br/><br/><br/>'+
                                    'Estimado(a): ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agente"), "nombre"), "html", null, true);
        echo " a continuacion se detalla la informaci&oacute;n de su orden:<br/><br/><br/><br/>'
                                        +' <table  class=\"reference\" style=\"font-size: 10px;border: 0.5px solid #DDDDFF !important;max-width: 100%;\">'
                                        +'<tbody>'
                                        + '<tr>'
                                        +    '<th style=\"width:50%\">Datos de la Orden</th> <th style=\"width:50%\">Valores</th> '
                                        +'</tr>'
                                        + '<tr class=\"inpar\">'
                                        +    '<td>Tipo Boleto: </td> <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoBoleto"), "html", null, true);
        echo "</td> '
                                        +'</tr>'
                                        +'<tr class=\"par\">'
                                        +   '<td>Fecha Solicitud: </td> <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fecha"), "d-M-Y H:i:s"), "html", null, true);
        echo "</td>'
                                        +'</tr>'
                                        +'<tr class=\"inpar\">'
                                        +  ' <td>Gds: </td> <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "gds"), "html", null, true);
        echo "</td>'
                                        +'</tr>'
                                         +'<tr class=\"par\">'
                                        +    '<td>Estado: </td> <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado"), "html", null, true);
        echo "</td>'
                                        +'</tr>'
                                        +'<tr class=\"inpar\">'
                                        +   '<td>Record Gds: </td> <td>";
        // line 60
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "recordGds"), array("
" => " ", "" => " ")), "html", null, true);
        echo "</td> '
                                        +'</tr>'
                                        +' <tr class=\"par\">'
                                        +    '<td>Tour Code: </td> <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tourcode"), "html", null, true);
        echo "</td> '
                                        +'</tr>'
                                        +' <tr class=\"inpar\">'
                                        +    '<td>FEE Servicios: </td> <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "feeServicios"), "html", null, true);
        echo "</td> '
                                        +'</tr>'
                                    ";
        // line 68
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo") == "Emision") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo") == "Revision"))) {
            // line 69
            echo "                                        +' <tr class=\"par\">'
                                        +    '<td>Reserva PNR: </td> <td>";
            // line 70
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "reservaPnr"), array("
" => " ", "" => " ")), "html", null, true);
            echo "</td> '
                                        +'</tr>'
                                        +'<tr class=\"inpar\">'
                                        + '  <td>Tarifa Reserva: </td> <td>";
            // line 73
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tarifaReserva"), array("
" => " ", "" => " ")), "html", null, true);
            echo "</td> '
                                        + ' </tr>'
                                    ";
        }
        // line 76
        echo "                                        +' <tr class=\"par\">'
                                        +    '<td>Comentarios M&M: </td> <td>";
        // line 77
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comentario")) {
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "comentario"), array("
" => " ", "" => " ")), "html", null, true);
        } else {
            echo "No existen Comentarios.";
        }
        echo "</td> '
                                        +' </tr>'
                                        +'<tr class=\"inpar\">'
                                        +   '<td>Observaciones: </td> <td>";
        // line 80
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observaciones"), array("
" => " ", "" => " ")), "html", null, true);
        echo "</td> '
                                        +' </tr>'
                                    ";
        // line 82
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo") == "Revision")) {
            // line 83
            echo "                                        +' <tr class=\"par\">'
                                        +    '<td>Datos Boleto: </td> <td>";
            // line 84
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datosBoleto"), array("
" => " ", "" => " ")), "html", null, true);
            echo "</td> '
                                        +' </tr>'
                                    ";
        }
        // line 87
        echo "                                    ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo") == "Anulacion")) {
            // line 88
            echo "                                        +' <tr class=\"par\">'
                                        +    '<td>Datos Boleto: </td> <td>";
            // line 89
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datosBoleto"), array("
" => " ", "" => " ")), "html", null, true);
            echo "</td> '
                                        +' </tr>'
                                        +' <tr class=\"inpar\">'
                                        +    '<td>VTC: </td> <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vtc"), "html", null, true);
            echo "</td> '
                                        +' </tr>'
                                    ";
        }
        // line 95
        echo "                                        
                                        +'</tbody></table>'
                                
                                        
                                ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formasPagos"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 100
            echo "                                  
                                    +'<br/><br/>'
                                    
                                        +'<table  class=\"reference\" style=\"font-size: 10px;border: 0.5px solid #DDDDFF !important;max-width: 100%;\">'
                                        +'<tbody>'
                                        
                                ";
            // line 107
            echo "                                ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipo") == "Tarjeta Credito")) {
                // line 108
                echo "                                    +'<tr><th colspan=6 style=\"width:20%;\">Forma de Pago: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipo"), "html", null, true);
                echo "</th></tr>'
                                
                                      
                                        + '<tr class=\"inpar\">'
                                        +    '<th style=\"width: 16.5%\">Emisor VTC: </th> <td style=\"width: 16.5%\">";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "emisorVtc"), "html", null, true);
                echo "</td> '
                                        +   '<th style=\"width: 16.5%\">Aerolinea: </th> <td style=\"width: 16.5%\">";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "aerolinea"), "html", null, true);
                echo "</td>'
                                        +  ' <th style=\"width: 16.5%\">Banco Emite Tarjeta: </th> <td style=\"width: 16.5%\">";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "bancoEmisorTarjeta"), "html", null, true);
                echo "</td>'
                                        +'</tr>'
                                      
                                        +'<tr class=\"par\">'
                                        +    '<th style=\"width: 16.5%\">Tipo Tarjeta: </th> <td style=\"width: 16.5%\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipoTarjeta"), "html", null, true);
                echo "</td>'
                                        +   '<th style=\"width: 16.5%\">N&uacute;mero Tarjeta: </th> <td style=\"width: 16.5%\">";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "numeroTarjeta"), "html", null, true);
                echo "</td> '
                                        +    '<th style=\"width: 16.5%\">Propietario: </th> <td style=\"width: 16.5%\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "propietario"), "html", null, true);
                echo "</td> '
                                        +'</tr>'
                                       
                                        +' <tr class=\"inpar\">'
                                        +    '<th style=\"width: 16.5%\">Vence: </th> <td style=\"width: 16.5%\">";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "vence"), "d-M-Y"), "html", null, true);
                echo "</td> '
                                        +    '<th style=\"width: 16.5%\">Tipo Pago: </th> <td style=\"width: 16.5%\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipoPago"), "html", null, true);
                echo "</td> '
                                        + '  <th style=\"width: 16.5%\">Plazo: </th> <td style=\"width: 16.5%\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "plazo"), "html", null, true);
                echo "</td> '
                                        +'</tr>'
                                       
                                        +' <tr class=\"par\">'
                                        +    '<th style=\"width: 16.5%\">Tipo Autorizaci&oacute;n: </th> <td style=\"width: 16.5%\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipoAutorizacion"), "html", null, true);
                echo "</td> '
                                        +   '<th style=\"width: 16.5%\">N&uacute;mero Autorizaci&oacute;n: </th> <td style=\"width: 16.5%\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "numeroAutorizacion"), "html", null, true);
                echo "</td> '
                                         + '  <th style=\"width: 16.5%\">Valor Tarjeta: </th> <td style=\"width: 16.5%\">\$ ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "valorTarjeta"), "html", null, true);
                echo "</td> '
                                        +' </tr>'
                                       
                                        +' <tr class=\"inpar\">'
                                        +    '<th style=\"width: 16.5%\">Inter&eacute;s Tarjeta: </th> <td style=\"width: 16.5%\">\$ ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "interesTarjeta"), "html", null, true);
                echo "</td> '
                                        + '  <th style=\"width: 16.5%\">Valor Total: </th> <td style=\"width: 16.5%\">\$ ";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "valorTotal"), "html", null, true);
                echo "</td> '
                                        +    '<th style=\"width: 16.5%\">Paga a: </th> <td style=\"width: 16.5%\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pagoPasajeros"), "html", null, true);
                echo "</td> '
                                        +' </tr>'
                              
                                ";
            }
            // line 142
            echo "                              ";
            echo "   
                                  
                                ";
            // line 144
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipo") == "Pago Directo")) {
                // line 145
                echo "                                    +'<tr><th colspan=4 style=\"width:20%;\">Forma de Pago: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipo"), "html", null, true);
                echo "</th></tr>'
                                        + '<tr class=\"inpar\">'
                                        +    '<th style=\"width: 25%\">Tipo Pago: </th> <td style=\"width: 25%\"> ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipoPago"), "html", null, true);
                echo "</td> '
                                         +   '<th style=\"width: 25%\">Valor: </th> <td style=\"width: 25%\"> \$";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "valor"), "html", null, true);
                echo "</td>'
                                        +'</tr>'
                                ";
            }
            // line 151
            echo "                                
                                ";
            // line 152
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tipo") == "DETB")) {
                // line 153
                echo "                                    +'<tr><th colspan=6 style=\"width:20%;\">Forma de Pago: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "transaccion"), "html", null, true);
                echo "</th></tr>'
                                   
                                        + '<tr class=\"inpar\">'
                                        +   '<th style=\"width: 16.5%\">Banco: </th> <td style=\"width: 16.5%\">";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "banco"), "html", null, true);
                echo "</td> '
                                        +   '<th style=\"width: 16.5%\">Nro. Documento: </th> <td style=\"width: 16.5%\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "numeroDocumento"), "html", null, true);
                echo "</td>'
                                        +   '<th style=\"width: 16.5%\">Valor: </th> <td style=\"width: 16.5%\">\$ ";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "valor"), "html", null, true);
                echo "</td> '
                                        +'</tr>'
                                      
                                ";
            }
            // line 162
            echo "                             
                                        +'</tbody></table>'
                                +'<br/><br/>'
                               
                                
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 168
            echo "                                    +'<p>No existen Formas de Pago para esta Orden...</p>'
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                        },
                        success:function(result){
                            
                           // alert(result);
                            \$('#btnclose').css({ \"visibility\": \"visible\"});
                            \$('#msg').remove();
                            \$('#result').append('<p style=\"color:green;\"><b>Documento PDF generado satisfactoriamente.</b></p>'
                                    +'<p><a href=\"#\" onclick=\"openDocument('+\"'\"+result.toString()+\"'\"+')\" ><i class=\"fa fa-file\"></i> Abrir Documento</a>');
                            
                            
                        }});
                
                  }); 
        
        });
        </script>";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Snippets:exportarpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 170,  362 => 168,  352 => 162,  345 => 158,  337 => 156,  330 => 153,  328 => 152,  325 => 151,  319 => 148,  307 => 144,  302 => 142,  295 => 138,  291 => 137,  287 => 136,  265 => 126,  261 => 125,  242 => 118,  235 => 114,  216 => 107,  208 => 100,  184 => 89,  181 => 88,  178 => 87,  171 => 84,  168 => 83,  160 => 80,  127 => 68,  50 => 24,  37 => 17,  51 => 27,  21 => 2,  130 => 55,  99 => 37,  91 => 51,  71 => 25,  53 => 16,  47 => 14,  41 => 12,  39 => 11,  35 => 14,  25 => 3,  22 => 2,  19 => 1,  455 => 172,  453 => 171,  449 => 169,  445 => 168,  441 => 167,  437 => 166,  433 => 165,  429 => 164,  425 => 163,  421 => 162,  417 => 161,  413 => 160,  405 => 158,  400 => 157,  397 => 156,  392 => 145,  384 => 105,  381 => 104,  376 => 99,  373 => 98,  368 => 88,  360 => 28,  357 => 27,  348 => 147,  346 => 144,  336 => 138,  327 => 135,  322 => 132,  318 => 131,  315 => 147,  312 => 129,  303 => 127,  298 => 124,  294 => 123,  290 => 122,  281 => 119,  276 => 131,  272 => 130,  269 => 114,  259 => 106,  257 => 124,  252 => 101,  250 => 120,  240 => 90,  232 => 83,  229 => 74,  224 => 71,  211 => 63,  205 => 62,  199 => 60,  192 => 57,  189 => 56,  162 => 44,  153 => 40,  151 => 39,  138 => 27,  135 => 26,  132 => 70,  121 => 16,  117 => 15,  113 => 14,  101 => 11,  97 => 54,  93 => 9,  88 => 8,  85 => 48,  67 => 23,  65 => 156,  62 => 155,  60 => 154,  45 => 20,  32 => 2,  29 => 1,  534 => 426,  418 => 312,  415 => 311,  409 => 159,  406 => 306,  398 => 300,  395 => 299,  389 => 144,  383 => 270,  377 => 265,  371 => 243,  365 => 87,  359 => 231,  353 => 226,  347 => 221,  341 => 157,  333 => 294,  329 => 293,  309 => 145,  300 => 270,  292 => 265,  280 => 132,  264 => 243,  255 => 237,  246 => 119,  238 => 87,  231 => 113,  227 => 112,  219 => 108,  214 => 215,  196 => 6,  193 => 5,  186 => 210,  176 => 48,  170 => 47,  148 => 180,  142 => 179,  129 => 69,  126 => 174,  120 => 172,  118 => 171,  105 => 12,  82 => 147,  75 => 41,  73 => 26,  59 => 18,  57 => 153,  54 => 25,  48 => 21,  166 => 82,  163 => 109,  157 => 42,  154 => 104,  146 => 76,  143 => 97,  139 => 73,  103 => 57,  52 => 5,  46 => 9,  43 => 7,  40 => 7,  38 => 5,  31 => 3,  279 => 141,  277 => 140,  271 => 138,  268 => 137,  228 => 100,  221 => 84,  217 => 67,  210 => 80,  206 => 10,  203 => 99,  200 => 76,  197 => 95,  194 => 74,  191 => 92,  188 => 72,  185 => 71,  182 => 52,  179 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 45,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 77,  147 => 59,  140 => 30,  137 => 177,  134 => 56,  131 => 176,  128 => 54,  125 => 17,  122 => 66,  119 => 49,  116 => 63,  114 => 49,  111 => 44,  109 => 60,  106 => 46,  102 => 45,  86 => 149,  81 => 29,  79 => 28,  76 => 27,  69 => 22,  66 => 19,  58 => 13,  55 => 25,  49 => 10,  44 => 21,  36 => 5,  33 => 8,);
    }
}
