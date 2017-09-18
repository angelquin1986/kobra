<?php

/* EmisionesBundle:Caja:dashboard.html.twig */
class __TwigTemplate_f0cca02aa7ead36a84be4d094cf796327f73ec343dbc7f9f5785f1fc85cb5194 extends Twig_Template
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
        ";
        // line 8
        if (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 9
            $this->env->loadTemplate("EmisionesBundle:Menu:caja.html.twig")->display($context);
            // line 10
            echo "        ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
        ";
            // line 11
            $this->env->loadTemplate("EmisionesBundle:Menu:supervisorcobranza.html.twig")->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo " ";
    }

    // line 15
    public function block_titlepage($context, array $blocks = array())
    {
        // line 16
        echo "     <h1>
        Dashboard
        <small>";
        // line 18
        if (twig_in_filter("ROLE_CAJA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            echo " 
                Caja
        ";
        } elseif (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 20
            echo " 
        Cobranza ";
        }
        // line 22
        echo "        </small>
    </h1>
 ";
    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 27
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
 ";
    }

    // line 30
    public function block_area($context, array $blocks = array())
    {
        // line 31
        echo "     <div class=\"col-xs-12\">
         <div class=\"row\">
             <form id=\"formrango\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("dashboard_cobranza");
        echo "\" method=\"POST\">
                <button id=\"daterange\" class=\"btn btn-sm btn-primary btn-block\">
                       <i class=\"fa fa-calendar\"></i> Hoy
                       <i class=\"fa fa-caret-down\"></i>
                </button>
                <input type=\"hidden\" id=\"inicio\" name=\"inicio\" value=\"";
        // line 38
        if ((isset($context["inicio"]) ? $context["inicio"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["inicio"]) ? $context["inicio"] : null), "html", null, true);
        }
        echo "\"/>
                <input type=\"hidden\" id=\"fin\" name=\"fin\" value=\"";
        // line 39
        if ((isset($context["fin"]) ? $context["fin"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : null), "html", null, true);
        }
        echo "\"/>
             </form> 
            <br> 
         </div>
    <div class=\"row\">
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-blue-gradient\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["sinconciliar"]) ? $context["sinconciliar"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                     No Conciliadas
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-bag\"></i>
                                </div>
                                <a class=\"small-box-footer\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
                                   Detalle <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-yellow-gradient\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["pendientepago"]) ? $context["pendientepago"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        Pendientes Pago
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-clock\"></i>
                                </div>
                                <a class=\"small-box-footer\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
                                   Detalle <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-green-gradient\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["pagoconfirmado"]) ? $context["pagoconfirmado"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        Pago Confirmado
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-checkmark\"></i>
                                </div>
                                <a class=\"small-box-footer\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
                                   Detalle <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-red-gradient\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["anuladas"]) ? $context["anuladas"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        Anuladas
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-trash-b\"></i>
                                </div>
                                <a class=\"small-box-footer\" href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("EmisionesBundle_queue_manger");
        echo "\">
                                   Detalle <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
        </div>
        <br>                          
       <div class=\"row\">
           <div id=\"pie-container\" class=\"col-lg-6 col-xs-12 col-sm-12\">
                <div id=\"pieconciliacion\" style=\"height: 380px;\"></div>
            </div><!-- ./col -->
            <div class=\"col-lg-6 col-xs-12\">
                            <div class=\"box\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-list-alt\"></i> Lista Negra de Agencias</h3>
                                    <div class=\"box-tools\">
                                        
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body table-responsive no-padding\">
                                    <table id=\"blacklist\" class=\"table table-hover\">
                                        <thead>
                                            <tr>
                                            <th>Nombre Agencia</th>
                                             ";
        // line 139
        if (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
            // line 140
            echo "                                                <th>Acci&oacute;n</th>
                                             ";
        }
        // line 142
        echo "                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blacklist"]) ? $context["blacklist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 146
            echo "                                         <tr>
                                            <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "nombre"), "html", null, true);
            echo "</td>
                                                ";
            // line 148
            if (twig_in_filter("ROLE_SUPERVISOR_COBRANZA", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "roles"))) {
                // line 149
                echo "                                                 <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supervisor_cobranza_member_unmember_agencia", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id"), "id_empresa" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "id"), "referencia" => "dashboard_cobranza")), "html", null, true);
                echo "\">Quitar</a></td>
                                                ";
            }
            // line 151
            echo "                                            
                                         </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                        
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
       </div>
</div>
  ";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/highcharts-more.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
      <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/1.10.4/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script type=\"text/javascript\">
          \$('#blacklist').dataTable(
           {
                \"bInfo\": false,
                \"bJQueryUI\": true,
                \"iDisplayLength\": 5,
                \"bFilter\": true,
                \"processing\": true,
                \"bLengthChange\": false,
                \"oLanguage\": {
                     \"sEmptyTable\": \"No existen datos para mostrar.\",
                     \"sSearch\":'Buscar: ',
                     \"oPaginate\": {
                             \"sNext\": \"<i class='fa fa-arrow-right'></i>\",
                             \"sPrevious\": \"<i class='fa fa-arrow-left'></i>\",
                             \"sLast\": \"Fin\",
                             \"sFirst\": \"inicio\"
                         },
                     \"sInfo\": \" _START_ al _END_ de _TOTAL_ \",
                     \"sInfoEmpty\": \"Mostrando 0 al 0 de 0 elementos\",
                     \"sLengthMenu\": \"Mostrar _MENU_ elementos\",
                     \"sLoadingRecords\": \"Cargando...\",
                     \"sProcessing\": \"Procesando...\",
                     \"sZeroRecords\": \"No se encontraron coincidencias\",
                     \"sInfoFiltered\": \"(filtrado de un total de _MAX_ elementos)\",
                     }
         }      
            ); 
          \$(document).ready(function(){
              ";
        // line 200
        if ((isset($context["inicio"]) ? $context["inicio"] : null)) {
            // line 201
            echo "                    \$('#inicio').val(\"";
            echo twig_escape_filter($this->env, (isset($context["inicio"]) ? $context["inicio"] : null), "html", null, true);
            echo "\");
                ";
        } else {
            // line 203
            echo "                    \$('#inicio').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm'));
                ";
        }
        // line 205
        echo "
                ";
        // line 206
        if ((isset($context["fin"]) ? $context["fin"] : null)) {
            // line 207
            echo "                    \$('#fin').val(\"";
            echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : null), "html", null, true);
            echo "\");
                ";
        } else {
            // line 208
            echo "   
                    \$('#fin').val(moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
                ";
        }
        // line 211
        echo "                    
            ";
        // line 212
        if (((isset($context["inicio"]) ? $context["inicio"] : null) && (isset($context["fin"]) ? $context["fin"] : null))) {
            // line 213
            echo "                    \$('#daterange').html('<i class=\"fa fa-calendar\"></i> '+ \"";
            echo twig_escape_filter($this->env, (isset($context["inicio"]) ? $context["inicio"] : null), "html", null, true);
            echo "\" + ' - ' + \"";
            echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : null), "html", null, true);
            echo "\" +' <i class=\"fa fa-caret-down\"></i>');
                    \$('#daterange').val(\"";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["inicio"]) ? $context["inicio"] : null), "html", null, true);
            echo "\" + ' - ' + \"";
            echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : null), "html", null, true);
            echo "\");
                ";
        } else {
            // line 216
            echo "                    \$('#daterange').html('<i class=\"fa fa-calendar\"></i> '+ moment().hours(0).minutes(0).seconds(0).format('H:mm MMMM D, YYYY') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#daterange').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
            ";
        }
        // line 219
        echo "              //Boton de rango del Pie
            \$('#daterange').daterangepicker(
                        {
                            timePicker: true,
                            timePickerIncrement: 5,
                            timePicker12Hour:false,
                            format: 'MM/DD/YYYY H:mm',
                            ranges: {
                                'Hoy': [moment().hours(0).minutes(0).seconds(0), moment().hours(23).minutes(59).seconds(0)],
                                'Ayer': [moment().subtract('days', 1).hours(0).minutes(0).seconds(0), moment().subtract('days', 1).hours(23).minutes(59).seconds(0)],
                                'Ultimos 7 dias': [moment().subtract('days', 6).hours(0).minutes(0).seconds(0), moment().hours(23).minutes(59).seconds(0)],
                                'Ultimos 30 dias': [moment().subtract('days', 29).hours(0).minutes(0).seconds(0), moment().hours(23).minutes(59).seconds(0)],
                                'Este Mes': [moment().startOf('month').hours(0).minutes(0).seconds(0), moment().endOf('month').hours(23).minutes(59).seconds(0)],
                                'Mes Anterior': [moment().subtract('month', 1).startOf('month').hours(0).minutes(0).seconds(0), moment().subtract('month', 1).endOf('month').hours(23).minutes(59).seconds(0)]
                            },
                            startDate: moment(),
                            endDate: moment()
                        },
                function(start, end) {
                   // \$('#reportrange').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    \$('#daterange').html('<i class=\"fa fa-calendar\"></i> '+ start.format('H:mm MMMM D, YYYY') + ' - ' + end.format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#daterange').val(start.format('MM/DD/YYYY H:mm') + ' - ' + end.format('MM/DD/YYYY H:mm'));
                    \$('#inicio').val(start.format('MM/DD/YYYY H:mm'));
                    \$('#fin').val(end.format('MM/DD/YYYY H:mm'));
                    //Cargar la grafica con las fechas seleccionadas                   
                    \$('form#formrango').submit();
                }
                );
         
          
          
          loadPie();
          });
           
           function loadPie()
                {
                   
                    //Mostrar la mascara para preparar la carga de datos
                    
                    // Build the chart
                     ";
        // line 259
        $context["total"] = ((((isset($context["sinconciliar"]) ? $context["sinconciliar"] : null) + (isset($context["pendientepago"]) ? $context["pendientepago"] : null)) + (isset($context["pagoconfirmado"]) ? $context["pagoconfirmado"] : null)) + (isset($context["anuladas"]) ? $context["anuladas"] : null));
        // line 260
        echo "                    \$('#pieconciliacion').highcharts({
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false
                            },
                            title: {
                                text: 'Porcentajes Estado Conciliacion (Total: '+";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "+' Ordenes)'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                        style: {
                                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                        },
                                        connectorColor: 'silver'
                                    }
                                }
                            },
                            series: [{
                                type: 'pie',
                                name: 'Ordenes',
                                data: ";
        // line 289
        echo (isset($context["datapie"]) ? $context["datapie"] : null);
        echo "
                            }]
                        });
                 
                }
      </script>
";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Caja:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 289,  461 => 267,  452 => 260,  450 => 259,  408 => 219,  403 => 216,  396 => 214,  389 => 213,  387 => 212,  384 => 211,  379 => 208,  373 => 207,  371 => 206,  368 => 205,  364 => 203,  358 => 201,  356 => 200,  323 => 170,  319 => 169,  315 => 168,  311 => 167,  307 => 166,  302 => 165,  299 => 164,  287 => 154,  279 => 151,  273 => 149,  271 => 148,  267 => 147,  264 => 146,  260 => 145,  255 => 142,  251 => 140,  249 => 139,  222 => 115,  210 => 106,  197 => 96,  185 => 87,  172 => 77,  160 => 68,  147 => 58,  135 => 49,  120 => 39,  114 => 38,  106 => 33,  102 => 31,  99 => 30,  94 => 27,  91 => 26,  85 => 22,  81 => 20,  75 => 18,  71 => 16,  68 => 15,  64 => 13,  61 => 12,  59 => 11,  54 => 10,  52 => 9,  48 => 8,  43 => 7,  36 => 4,  33 => 3,);
    }
}
