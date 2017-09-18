<?php

/* EmisionesBundle:SupervisorAdministrarAgentes/AdministrarAgentes:index.html.twig */
class __TwigTemplate_5adf9a1cfc9400205f212d1427815b403580c9cb17c60679eec7e2a8ad8c490c extends Twig_Template
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
            <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
           
        ";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
        ";
        // line 11
        $this->env->loadTemplate("EmisionesBundle:Menu:supervisor.html.twig")->display($context);
        // line 12
        echo " ";
    }

    // line 14
    public function block_titlepage($context, array $blocks = array())
    {
        // line 15
        echo "     <h1>
        Dashboard
        <small>Agentes</small>
    </h1>
 ";
    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 22
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Supervisor</li>
     <li class=\"active\">Agentes</li>
 ";
    }

    // line 27
    public function block_area($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"col-sm-12 \"> 
     <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <div class=\"pull-left box-tools\">
                                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agente");
        echo "\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-sm btn-bg bg-blue btn-circle\" data-original-title=\"Registrar\"><i class=\"fa fa-plus\"></i></a>
                                        <a href=\"#\" onclick=\"table.ajax.reload();\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-sm btn-bg bg-navy btn-circle\" data-original-title=\"Actualizar\"><i class=\"fa fa-refresh\"></i></a>
                                    </div>
                                    <h3 class=\"box-title pull-right\">Todos los agentes</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body table-responsive\">
                                    <hr>
                                    <table id=\"agentes\"   class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                                        <thead>
                                            <tr>
                                                
                                                <th>Agencia</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Email</th>
                                                <th >Sexo</th>
                                                <th>Celular</th>                                                
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                      
                                    </table>
                                </div><!-- /.box-body -->
     </div><!-- /.box -->
        </div>
  ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/1.10.4/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
           <script type=\"text/javascript\">
                    \$(document).ready(function() {
                  table = \$('#agentes').DataTable( {
           \"processing\": true,
           \"serverSide\": true,           
           \"oLanguage\": {
                \"sEmptyTable\": \"No existen datos para mostrar.\",
                \"sSearch\":'Buscar: ',
                \"oPaginate\": {
                        \"sNext\": \"Siguiente\",
                        \"sPrevious\": \"Anterior\",
                        \"sLast\": \"Fin\",
                        \"sFirst\": \"inicio\"
                    },
                \"sInfo\": \"Mostrando _START_ al _END_ de _TOTAL_ elementos\",
                \"sInfoEmpty\": \"Mostrando 0 al 0 de 0 elementos\",
                \"sLengthMenu\": \"Mostrar _MENU_ elementos\",
                \"sLoadingRecords\": \"Cargando...\",
                \"sProcessing\": \"Procesando...\",
                \"sZeroRecords\": \"No se encontraron coincidencias\",
                \"sInfoFiltered\": \"(filtrado de un total de _MAX_ elementos)\",
                },
        \"ajax\": 
                {
                    \"url\":\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("load_agentes_ajax");
        echo "\",
                    \"type\":\"POST\",
                    \"data\": function ( d ) {
                            d.empresa_id = ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "id"), "html", null, true);
        echo ";                           
                        }
                },
                
        \"columns\": [
          
            { \"data\": \"agencia\",\"sortable\":true ,\"width\":'30%'},
            { \"data\": \"nombre\",\"sortable\":true ,\"width\":'15%'},
            { \"data\": \"usuario\" ,\"sortable\":true, \"width\": '10%'},
            { \"data\": \"email\" ,\"sortable\":true, \"width\": '10%'},
            {
                                    \"mData\": null,
                                    \"bSortable\": false,
                                    \"width\": '5%',
                                    \"mRender\": function (data, type, full) 
                                    {
                                        //var idagente=full[0];
                                        //alert(full.agencia)
                                        if(full.sexo=='fa fa-male')
                                            {
                                               return '<i style=\"text-align:center; color:#001f3f !important;\" class=\"'+full.sexo+'\"></i>'; 
                                            }
                                        else
                                            {
                                                return '<i style=\"text-align:center; color:#85144b !important;\" class=\"'+full.sexo+'\"></i>'; 
                                            }
                                        
                                    }
           },
           {\"mData\" : \"celular\",\"sWidth\":\"10%\"},
           {
                                    \"mData\": null,
                                    \"bSortable\": false,
                                    \"sWidth\":\"10%\",
                                    \"mRender\": function (data, type, full) 
                                    {
                                        //var idagente=full[0];
                                        //alert(full.agencia)
\t\t\t\t\t\t\t\t\t\tadmins = '<a style=\"margin-left:3px; \" title=\"\" data-toggle=\"tooltip\" class=\"\" href='+full.lockUnlock+' > <i class=\"'+full.bloqueado+'\"></i>' + '</a>';

                                        return '<a style=\"margin-left:3px;\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Remove\" href='+'\"'+full.editar+'\"'+' ><i class=\"fa fa-edit\"></i>' + '</a>'
                                              +'<a style=\"margin-left:3px;\"  class=\"\"href='+'\"'+full.chpass+'\"'+' > <i class=\"fa fa-key\"></i>' + '</a>'
\t\t\t\t\t\t\t\t\t\t\t  + admins +'<a style=\"margin-left:3px; \" title=\"\" data-toggle=\"tooltip\" class=\"\" href='+full.unableEnable+' > <i class=\"'+full.habilitado+'\"></i>' + '</a>'
                                    ; 
                                    }
           }
            
        ],
        \"order\": []
    } );
                   ";
        // line 221
        echo "                        window.setInterval(function()
                            { 
                            table.ajax.reload();
                            }, 120000);
                       
          
                    } );
                   
            
               
         
        </script>
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:SupervisorAdministrarAgentes/AdministrarAgentes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 221,  166 => 91,  160 => 88,  132 => 63,  128 => 62,  123 => 61,  120 => 60,  89 => 32,  83 => 28,  80 => 27,  73 => 22,  70 => 21,  62 => 15,  59 => 14,  55 => 12,  53 => 11,  48 => 10,  41 => 5,  36 => 4,  33 => 3,);
    }
}
