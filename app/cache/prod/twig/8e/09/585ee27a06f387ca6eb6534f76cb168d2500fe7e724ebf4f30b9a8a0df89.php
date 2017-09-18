<?php

/* EmisionesBundle:SupervisorAdministrarAgentes:supervisoremisiones.html.twig */
class __TwigTemplate_8e09585ee27a06f387ca6eb6534f76cb168d2500fe7e724ebf4f30b9a8a0df89 extends Twig_Template
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

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
       ";
        // line 12
        $this->env->loadTemplate("EmisionesBundle:Menu:supervisor.html.twig")->display($context);
        // line 13
        echo " ";
    }

    // line 15
    public function block_titlepage($context, array $blocks = array())
    {
        // line 16
        echo "     <h1>
        Dashboard
        <small>Supervisor</small>
    </h1>
 ";
    }

    // line 22
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 23
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Solicitudes</li>
     <li class=\"active\">Supervisor</li>
 ";
    }

    // line 28
    public function block_area($context, array $blocks = array())
    {
        // line 29
        echo "     
     <div class=\"col-md-12\"> 
         ";
        // line 32
        echo "         
      <div class=\"row\">  
          <div class=\"col-md-5\"> 
              <div id=\"pie-container\" class=\"box  box-primary\">
                                <div class=\"box-header\">                                   
                                    <div class=\"box-tools pull-left\">                                        
                                        <button onclick=\"loadPie();\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Actualizar\"  class=\"btn btn-sm btn-bg bg-navy btn-circle \"><i class=\"fa fa-refresh\"></i></button>                                        
                                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("supervisor_report_porcentaje_vs_estados");
        echo "\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Maximizar\"  class=\"btn btn-sm btn-bg bg-orange btn-circle \"><i class=\"fa fa-expand\"></i></a>                                        
                                    </div>
                                    <div class=\"box-tools pull-right\">                                       
                                       <button id=\"piedaterange\" class=\"btn btn-sm btn-primary pull-right\">
                                                <i class=\"fa fa-calendar\"></i> Hoy
                                                <i class=\"fa fa-caret-down\"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class=\"box-body\">
                                    <div id=\"pie\" style=\"min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto\"></div>
                                </div><!-- /.box-body -->
                            </div>
          
          </div>
              
          <div class=\"col-md-7\"> 
              <div id=\"bar-container\" class=\"box box-primary\">
                                <div class=\"box-header\">
                                   
                                     <div class=\"box-tools pull-left\">                                        
                                        <button onclick=\"loadBar();\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Actualizar\"  class=\"btn btn-sm btn-bg bg-navy btn-circle\"><i class=\"fa fa-refresh\"></i></button>                                        
                                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("supervisor_report_estados_vs_counters");
        echo "\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Maximizar\"  class=\"btn btn-sm btn-bg bg-orange btn-circle \"><i class=\"fa fa-expand\"></i></a>                                        
                                    </div>
                                    <div class=\"box-tools pull-right\">
                                        <button id=\"bardaterange\" class=\"btn btn-sm btn-primary pull-right\">
                                                <i class=\"fa fa-calendar\"></i> Hoy
                                                <i class=\"fa fa-caret-down\"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class=\"box-body\">
                                    <div id=\"bar\"  style=\" height: 400px;  margin: 0 auto\"></div>
                                    
                                </div><!-- /.box-body -->
                            </div>
          
          </div>
              
      </div>
      
      <div class=\"row\"> 
          <div class=\"col-md-12\"> 
              <div id=\"line-container\" class=\"box box-primary\">
                                <div class=\"box-header\">                                    
                                    <div class=\"box-tools pull-left\">                                        
                                        <button onclick=\"loadLine();\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Actualizar\"  class=\"btn btn-sm btn-bg bg-navy btn-circle\"><i class=\"fa fa-refresh\"></i></button>                                        
                                        <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("supervisor_report_tipos_vs_counters");
        echo "\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Maximizar\"  class=\"btn btn-sm btn-bg bg-orange btn-circle \"><i class=\"fa fa-expand\"></i></a>                                        
                                    </div>
                                    <div class=\"box-tools pull-right\">
                                        <button id=\"linedaterange\" class=\"btn btn-sm btn-primary pull-right\">
                                                <i class=\"fa fa-calendar\"></i> Hoy
                                                <i class=\"fa fa-caret-down\"></i>
                                            </button>
                                       
                                    </div>
                                </div>
                                <div class=\"box-body\">
                                    <div id=\"line\" style=\"height: 400px; margin: 0 auto\"></div>
                                </div><!-- /.box-body -->
                            </div>
          
          </div>
      </div>
   </div>
         
  ";
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     ";
        // line 111
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/highcharts-more.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
      
      <script type=\"text/javascript\">
          
           //Incluir usuario emergencias en reporte
                var emergenciaChooser = \$(\"#emergencia-chooser-btn\");
                \$(\"#emergencia-chooser > li > a\").click(function(e) {
                    e.preventDefault();                   
                    //Get a id to set of btn value
                    currlinkId= \$(this).attr(\"id\");
                    emergenciaChooser
                            .attr('value',currlinkId)
                            //.css({\"background-color\": currColor, \"border-color\": currColor})
                            .html(\$(this).html()+' <span class=\"caret\"></span>');                 
                });
          
          \$(document).ready(function(){
          //Poner mas bonitos los colores
          // Radialize the colors Pintar el grafico
            Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                    stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            });
         ";
        // line 155
        echo "
              //Seteando el texto del boton y el valor para posteriormente ejecutar la funcion ajax y cargar datos
              //Boton de rango del Pie
                \$('#piedaterange').html('<i class=\"fa fa-calendar\"></i> '+ moment().hours(0).minutes(0).seconds(0).format('H:mm MMMM D, YYYY') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                \$('#piedaterange').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
                \$('#piedaterange').daterangepicker(
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
                    \$('#piedaterange').html('<i class=\"fa fa-calendar\"></i> '+ start.format('H:mm MMMM D, YYYY') + ' - ' + end.format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#piedaterange').val(start.format('MM/DD/YYYY H:mm') + ' - ' + end.format('MM/DD/YYYY H:mm'));
                    //Cargar el grafico para las fechas seleccionadas                   
                    //loadPie()
                }
                );
                    
              //Seteando el texto del boton y el valor para posteriormente ejecutar la funcion ajax y cargar datos
              //Boton de rango del Column Bar
                \$('#bardaterange').html('<i class=\"fa fa-calendar\"></i> '+ moment().hours(0).minutes(0).seconds(0).format('H:mm MMMM D, YYYY') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                \$('#bardaterange').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
                \$('#bardaterange').daterangepicker(
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
                    \$('#bardaterange').html('<i class=\"fa fa-calendar\"></i> '+ start.format('H:mm MMMM D, YYYY') + ' - ' + end.format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#bardaterange').val(start.format('MM/DD/YYYY H:mm') + ' - ' + end.format('MM/DD/YYYY H:mm'));
                    //Cargar el grafico para las fechas seleccionadas 
                    //loadBar()
                    
                }
                );
                    
              //Seteando el texto del boton y el valor para posteriormente ejecutar la funcion ajax y cargar datos
              //Boton de rango del line
                \$('#linedaterange').html('<i class=\"fa fa-calendar\"></i> '+ moment().hours(0).minutes(0).seconds(0).format('H:mm MMMM D, YYYY') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                \$('#linedaterange').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
                \$('#linedaterange').daterangepicker(
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
                    \$('#linedaterange').html('<i class=\"fa fa-calendar\"></i> '+ start.format('H:mm MMMM D, YYYY') + ' - ' + end.format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#linedaterange').val(start.format('MM/DD/YYYY H:mm') + ' - ' + end.format('MM/DD/YYYY H:mm'));
                    //Cargar el grafico para las fechas seleccionadas 
                    //loadLine()
                    
                }
                );

           //Seteando el texto del boton y el valor para posteriormente ejecutar la funcion ajax y cargar datos
              //Boton de rango del line
                \$('#timeaverage').html('<i class=\"fa fa-calendar\"></i> '+ moment().hours(0).minutes(0).seconds(0).format('H:mm MMMM D, YYYY') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                \$('#timeaverage').val(moment().hours(0).minutes(0).seconds(0).format('MM/DD/YYYY H:mm') + ' - ' + moment().hours(23).minutes(59).seconds(0).format('MM/DD/YYYY H:mm'));
                \$('#timeaverage').daterangepicker(
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
                    \$('#timeaverage').html('<i class=\"fa fa-calendar\"></i> '+ start.format('H:mm MMMM D, YYYY') + ' - ' + end.format('H:mm MMMM D, YYYY')+' <i class=\"fa fa-caret-down\"></i>');
                    \$('#timeaverage').val(start.format('MM/DD/YYYY H:mm') + ' - ' + end.format('MM/DD/YYYY H:mm'));
                    //Cargar el grafico para las fechas seleccionadas 
                   // loadTimeAverage();
                    
                }
                );
                    
                    
             //Cargar los datos de los reportes
               loadPie();
               loadBar();
               loadLine();
               loadTimeAverage();
            });
            
            
            function loadPie()
                {
                    //Mostrar la mascara para preparar la carga de datos
                    \$('#pie-container').append('<div id=\"piemask\" class=\"overlay\"></div>');
                    \$('#pie-container').append('<div id=\"pieloader\" class=\"loading-img\"></div>');
                      \$.ajax({
                            url: '";
        // line 294
        echo $this->env->getExtension('routing')->getPath("supervisor_load_pie");
        echo "',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                rango: \$('#piedaterange').val()                                
                                ";
        // line 300
        echo "                            },                          
                            success: function(result) {                                     
                                    var total=0;
                                    for(i=0;i<result.length;i++)
                                        {
                                            total+=result[i]['y'];
                                        }
                                    // Build the chart
                                    \$('#pie').highcharts({
                                        chart: {
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false
                                        },
                                        title: {
                                            text: 'Porcentajes Vs Estados ( '+total+' Ordenes)'
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
                                            data: result
                                        }]
                                    });
                              //Quitar la mascara para que se ve ael reporte
                                \$('#piemask').remove();
                                \$('#pieloader').remove();
                            }
                            });
                     
                   
                }
                
           function loadBar()
                {
                    //Mostrar la mascara para preparar la carga de datos
                    \$('#bar-container').append('<div id=\"barmask\" class=\"overlay\"></div>');
                    \$('#bar-container').append('<div id=\"barloader\" class=\"loading-img\"></div>');
                      \$.ajax({
                           url: '";
        // line 355
        echo $this->env->getExtension('routing')->getPath("supervisor_load_bar");
        echo "',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                rangobar: \$('#bardaterange').val()                                
                                ";
        // line 361
        echo "                            },                          
                            success: function(result) {                                     
                               // Build the chart
                                \$('#bar').highcharts({
                                            chart: {
                                                type: 'column'
                                            },
                                            title: {
                                                text: 'Estados de Solicitudes Vs Counters'
                                            },
                                            xAxis: {
                                                categories: result['categories']
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Solicitudes'
                                                }
                                            },
                                            tooltip: {
                                                headerFormat: '<b style=\"font-size:12px\">{point.key}</b><table>',
                                                pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                                                    '<td style=\"padding:0\"><b>{point.y:f} </b></td></tr>',
                                                footerFormat: '</table>',
                                                shared: true,
                                                useHTML: true
                                            },
                                            plotOptions: {
                                                column: {
                                                    pointPadding: 0.2,
                                                    borderWidth: 0
                                                }
                                            },
                                            series: result['datos']
                                        });  
                              //Quitar la mascara para que se ve ael reporte
                                \$('#barmask').remove();
                                \$('#barloader').remove();
                            }
                            });                     
                }
                
                function loadLine()
                {
                    //Mostrar la mascara para preparar la carga de datos
                    \$('#line-container').append('<div id=\"linemask\" class=\"overlay\"></div>');
                    \$('#line-container').append('<div id=\"lineloader\" class=\"loading-img\"></div>');
                      \$.ajax({
                            url: '";
        // line 409
        echo $this->env->getExtension('routing')->getPath("supervisor_load_line");
        echo "',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                rangoline: \$('#linedaterange').val()                                
                                ";
        // line 415
        echo "                            },                          
                            success: function(result) {                                     
                                \$('#line').highcharts({
                                        title: {
                                            text: 'Tipos de Solicitudes Vs Counters',
                                            x: -20 //center
                                        },

                                        xAxis: {
                                            categories: result['categories']
                                        },
                                        yAxis: {
                                            min: 0,
                                            tickInterval: null,
                                            title: {
                                                text: 'Solicitudes'
                                            },
                                            plotLines: [{                                               
                                                value: 0,
                                                width: 1,
                                                color: '#808080'
                                            }]
                                        },
                                        tooltip: {
                                            valueSuffix: ' '//Sufijo despues de los valores
                                        },
                                        legend: {
                                            layout: 'vertical',
                                            align: 'right',
                                            verticalAlign: 'middle',
                                            borderWidth: 0
                                        },
                                        series: result['datos']
                                    });
                                  
                              //Quitar la mascara para que se ve ael reporte
                                \$('#linemask').remove();
                                \$('#lineloader').remove();
                            }
                            });
                     
                   
                }

      </script>
          

                
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:SupervisorAdministrarAgentes:supervisoremisiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 415,  482 => 409,  432 => 361,  424 => 355,  367 => 300,  359 => 294,  218 => 155,  187 => 113,  183 => 112,  178 => 111,  173 => 108,  170 => 107,  146 => 86,  118 => 61,  93 => 39,  84 => 32,  80 => 29,  77 => 28,  70 => 23,  67 => 22,  59 => 16,  56 => 15,  52 => 13,  50 => 12,  45 => 11,  36 => 5,  33 => 4,);
    }
}
