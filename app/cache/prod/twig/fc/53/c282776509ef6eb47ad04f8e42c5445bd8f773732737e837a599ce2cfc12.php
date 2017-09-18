<?php

/* EmisionesBundle:Caja:indexAgencias.html.twig */
class __TwigTemplate_fc53c282776509ef6eb47ad04f8e42c5445bd8f773732737e837a599ce2cfc12 extends Twig_Template
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

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
        ";
        // line 10
        $this->env->loadTemplate("EmisionesBundle:Menu:supervisorcobranza.html.twig")->display($context);
        // line 11
        echo " ";
    }

    // line 13
    public function block_titlepage($context, array $blocks = array())
    {
        // line 14
        echo "     <h1>
        Dashboard
        <small>Agentes</small>
    </h1>
 ";
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "     <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
     <li class=\"\">Supervisor</li>
     <li class=\"active\">Agencias</li>
 ";
    }

    // line 26
    public function block_area($context, array $blocks = array())
    {
        // line 27
        echo "     <div class=\"col-sm-12 \">
     <div class=\"box box-primary\" >
                                <div class=\"box-header\">
                                    <div class=\"pull-right box-tools pull-left\">
                                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("supervisor_new_agencia");
        echo "\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-circle btn-sm btn-bg bg-blue\" data-original-title=\"Adicionar Agencia\"><i class=\"fa fa-plus\"></i></a>
                                        <a href=\"#\" onclick=\"table.ajax.reload();\" title=\"\" data-toggle=\"tooltip\"  class=\"btn btn-sm btn-bg bg-navy btn-circle\" data-original-title=\"Actualizar\"><i class=\"fa fa-refresh\"></i></a>
                                    </div>
                                    <h3 class=\"box-title pull-right\">Todas las agencias</h3>
                                </div><!-- /.box-header -->
                                <hr>
                                <div class=\"box-body table-responsive\">
 
                                    <table id=\"agencias\"   class=\"table table-bordered table-striped\" cellspacing=\"0\" width=\"100%\">
                                        <thead>
                                            <tr>
                                                
                                               
                                                <th>Nombre</th>
                                                <th>Ruc</th>
                                                <th>Email</th>
                                                <th >Tel&eacute;fono</th>
                                                <th>Ciudad</th>
                                                <th>Acciones</th>  
                                               
                                            </tr>
                                        </thead>

                                      
                                    </table>
                                </div><!-- /.box-body -->
     </div><!-- /.box -->
         </div>
  ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/1.10.4/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
           <script type=\"text/javascript\">
       
                    
                    \$(document).ready(function() {
                        
                  table = \$('#agencias').DataTable( {
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
        // line 92
        echo $this->env->getExtension('routing')->getPath("supervisor_cobranza_load_agencias_ajax");
        echo "\",
                    \"type\":\"POST\",
                    \"data\": function ( d ) {
                            d.empresa_id = ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "empresa"), "id"), "html", null, true);
        echo ";                           
                        }
                },
                
        \"columns\": [
          
            { \"data\": \"nombre\",\"sortable\":true ,\"width\":'40%'},
            { \"data\": \"ruc\",\"sortable\":true ,\"width\":'10%'},
            { \"data\": \"email\" ,\"sortable\":true, \"width\": '10%'},
            { \"data\": \"telefono\" ,\"sortable\":true, \"width\": '10%'},
            { \"data\": \"ciudad\" ,\"sortable\":true,\"width\":'10%'},
            {
                                    \"mData\": null,
                                    \"bSortable\": false,
                                    \"sWidth\":\"10%\",
                                    \"mRender\": function (data, type, full) 
                                    {
                                        
                                            result= '<a style=\"margin-left:7px;\" data-original-title=\"Agregar/Eliminar\" data-toggle=\"tooltip\" title=\"Agregar/Eliminar\" href='+full.memberUnmember+' >' +full.member+ '</a>'
                                                
                                            
                                            ;
                                        
                                        return result; 
                                    }
                                }
            
        ],
        \"order\": []
    } );
                    ";
        // line 191
        echo "                       window.setInterval(function()
                            { 
                            table.ajax.reload();
                            }, 120000);
          
                    } );
                   
        
         
        </script>
  ";
    }

    public function getTemplateName()
    {
        return "EmisionesBundle:Caja:indexAgencias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 191,  171 => 95,  165 => 92,  134 => 64,  130 => 63,  125 => 62,  122 => 61,  89 => 31,  83 => 27,  80 => 26,  73 => 21,  70 => 20,  62 => 14,  59 => 13,  55 => 11,  53 => 10,  48 => 9,  41 => 5,  36 => 4,  33 => 3,);
    }
}
