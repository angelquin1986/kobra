<?php

namespace aplicacion\EmisionesBundle\Controller;

use aplicacion\EmisionesBundle\Entity\Agente;
use aplicacion\EmisionesBundle\Entity\Anulacion;
use aplicacion\EmisionesBundle\Entity\Emision;
use aplicacion\EmisionesBundle\Entity\Revision;
use aplicacion\EmisionesBundle\Entity\Tarjetacredito;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\BlankColumn;
use APY\DataGridBundle\Grid\Column\TextColumn;
use APY\DataGridBundle\Grid\Export\CSVExport;
use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Aerolinea controller.
 *
 */
class GlobalController extends Controller
{

    public function GridAction()
    {
	//$this->container->get('logger')->error('Local variables',  $this->getUser()->getAgente());
        //$this->container->get('logger')->error('empresa:', array('empresa' => $$this->getUser()->getEmpresa()));
        $em=  $this->getDoctrine()->getManager();

        $idAgencia =$this->consultarAgenciasPorIdAgente($this->getUser()->getId());
        //solla para pruebas
        //$idAgencia= $this->consultarAgenciasPorIdAgente(542);
        //$configuracionActiva=  $em->getRepository('BaseBundle:Configuracion')->findOneBy(array('empresa'=>  
	//$this->getUser()->getEmpresa(),'activa'=>true));
         $configuracionActiva=  $em->getRepository('BaseBundle:Configuracion')->findOneBy(array('activa'=>true));
        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('EmisionesBundle:Orden');
        // Get a Grid instance
        $grid = $this->get('grid');
        /*Esconder de la cola global estas columnas que son para el dashboard*/
        $grid->hideColumns('slaIncumplido');
        $grid->hideColumns('procesedAt');
        $grid->hideColumns('horaAsignacion');
        $grid->hideColumns('tiempoRealProcesamiento');
        $grid->hideColumns('tiempoRealProcesamiento');
        $grid->hideColumns('agente.agencia.id');
        
         /*Esconder de la cola global estas columnas que son para el dashboard*/
        $source->manipulateRow(
            function ($row) 
            {       
                // Change the output of the new column with your own code at entity.
                $row->setField('tipo', $row->getEntity()->getTipo());
                return $row;
            }
        );
        $tableAlias = $source->getTableAlias();
        $source->manipulateQuery(
            function ($query) use ($tableAlias)
            {
                if($this->getUser()->hasRole('ROLE_CAJA')){
                    $query->andWhere($tableAlias .'.modificadoSupervisorCobros = false');
                }
                 //if($this->getUser()->hasRole('ROLE_AGENTE_AGENCIA') ){
                 //$query->andWhere($tableAlias .'.modificadoSupervisorCobros = false');
                  //  $grid->setPermanentFilters(array(
                   // 'agente.agencia' => $idAgencia));
               // }
                $query->orderBy($tableAlias .'.prioridad', 'DESC');                
            }
        );
        // Attach the source to the grid
        $grid->setSource($source);
        // Set the selector of the number of items per page
        $grid->setDefaultFilters(array(
            'estado.nombre'=>'Pendiente',         
            'fecha' => array('operator' => 'btwe','from' => date('d-m-Y 00:00'), 'to' => date('d-m-Y 23:59')) // Range filter with the operator 'tbw'   
            ));
        $procesarSupervisor = new RowAction('<i style="margin-left:3px;" class="fa fa-gear"></i>', 'counter_emision_edit');
        $procesarSupervisor->setRole('ROLE_SUPERVISOR');
        $procesarSupervisor->manipulateRender(
            function ($action, $row)
            {            
               if ($row->getEntity() instanceof Anulacion) {
                    $action->setRoute('counter_anulacion_edit');
                }
                if ($row->getEntity() instanceof Emision) {
                    $action->setRoute('counter_emision_edit');
                }
                if ($row->getEntity() instanceof Revision) {
                    $action->setRoute('counter_revision_edit');
                }
                return $action;
            }
        );
        
        $procesar = new RowAction('<i class="fa fa-gear"></i>', 'counter_emision_edit');
        $procesar->setRole('ROLE_COUNTER');
        $procesar->manipulateRender(
            function ($action, $row)
            {            
            /*Agregar condicion para si la orden tien un estado diferente al incial redireccione a solo lectura*/
            if ($row->getEntity()->getEstado()->getNombre()=='Pendiente') 
            {
               if ($row->getEntity() instanceof Anulacion) {
                    $action->setRoute('counter_anulacion_edit');
                }
                if ($row->getEntity() instanceof Emision) {
                    $action->setRoute('counter_emision_edit');
                }
                if ($row->getEntity() instanceof Revision) {
                    $action->setRoute('counter_revision_edit');
                } 
            }
            else
            {
               if ($row->getEntity() instanceof Anulacion) {
                    $action->setRoute('counter_anulacion_show');
                }
                if ($row->getEntity() instanceof Emision) {
                    $action->setRoute('counter_emision_show');
                }
                if ($row->getEntity() instanceof Revision) {
                    $action->setRoute('counter_revision_show');
                }  
            }                
                return $action;
            }
        );
        
        $rowAsignarAction=new RowAction('<i style="margin-left:3px;" class="fa fa-gears"></i>','supervisor_asignar_manual');
        $rowAsignarAction->setRole('ROLE_SUPERVISOR');        
        $rowConciliarAction=new RowAction('<i style="margin-left:7px;" class="fa fa-book"></i>','operador_conciliar_manual');
        $rowConciliarAction->setRole(array("ROLE_CAJA","ROLE_SUPERVISOR_COBRANZA"));
        $rowShow=new RowAction('<i style="margin-left:3px;" class="text-aqua fa fa-eye"></i>','counter_emision_show');
        $rowShow->setRole(array('ROLE_SUPERVISOR','ROLE_AGENTE_AGENCIA'));
        $rowShow->manipulateRender(
            function ($action, $row)
            { if ($row->getEntity() instanceof Anulacion) {
                    $action->setRoute('counter_anulacion_show');
                }
                if ($row->getEntity() instanceof Emision) {
                    $action->setRoute('counter_emision_show');
                }
                if ($row->getEntity() instanceof Revision) {
                    $action->setRoute('counter_revision_show');
                }
                return $action;
            }
        );
        $TypeColumn = new BlankColumn(array('operatorsVisible'=>true,'filterable' => false,'type'=>'text','title'=>'Tipo','align'=>'center','size'=>8));
        $TypeColumn->setId('tipo') ;
        $grid->addColumn($TypeColumn,11);
        $AlertColumn = new TextColumn(array('id' => 'alerta', 'sortable' => false, 'filterable' => false,'title'=>'Alerta','align'=>'center','size'=>15, 'source' => false));
        $AlertColumn->manipulateRenderCell(function($value, $row, $router) {
	if(!$row->getEntity()->isTimeToFirsAlert() && !$row->getEntity()->isTimeToSecondAlert() && !$row->getEntity()->isLimitHour() && !$row->getEntity()->isOutOfTimeAlert())
           {
               return $row->getEntity()->timeSinceArrive();
           }
	    if($row->getEntity()->getEstado()->getId()==3 || $row->getEntity()->getEstado()->getId()==1)
            {
                return ' ';
            }
            if($row->getEntity()->isTimeToFirsAlert())
            {
               echo '<b class="text-green"><i class="ion ion-ios7-alarm"></i> '.$row->getEntity()->timeSinceArrive().'</b>';
            }
            if($row->getEntity()->isTimeToSecondAlert())
            {
                //print_r('segunda alerta');exit;
                echo '<b class="text-orange"><i class="ion ion-ios7-alarm"></i> '.$row->getEntity()->timeSinceArrive().'</b>';
            }
            if($row->getEntity()->isLimitHour())
            {
                //print_r('tiempo limite');exit;
                echo '<b style="color:red;"><i class="ion ion-ios7-alarm"></i> '.$row->getEntity()->timeSinceArrive().'</b>';
            }
            if($row->getEntity()->isOutOfTimeAlert())
            {
                //print_r('incumpleindo');exit;
               echo '<b class="text-black"><i class="ion ion-ios7-alarm"></i> '.$row->getEntity()->timeSinceArrive().'</b>';
            }
        }
        );
        $detalleColumn=$grid->getColumn('detalleAprobacion')->setExport(true);                
        $AlertColumn->setExport(false);
        $AlertColumn->setRole(array('ROLE_SUPERVISOR','ROLE_COUNTER','ROLE_AGENTE_AGENCIA'));
        $csvExport=new CSVExport('CSV Export');
        $csvExport->setRole(array('ROLE_SUPERVISOR','ROLE_SUPERVISOR_COBRANZA','ROLE_AGENTE_AGENCIA'));
        //Permanent filters for counters
        //filtro obligado para las personas que tengan  role  ROLE_COUNTER
        if($this->getUser()->hasRole('ROLE_COUNTER') && !$this->getUser()->hasRole('ROLE_AGENTE_AGENCIA') ){
            $grid->setPermanentFilters(array(
            'usuario.username' => $this->getUser()->getUsername()));
        }
       if($this->getUser()->hasRole('ROLE_CAJA') || $this->getUser()->hasRole('ROLE_SUPERVISOR_COBRANZA') && !$this->getUser()->hasRole('ROLE_AGENTE_AGENCIA')){
            $grid->setPermanentFilters(array(
            'estado.nombre' => 'Procesada'));
        }
        
        /**
         * filtro solo cuando tiene el perdil de agente de agencia
         */
        $this->container->get('logger')->error('perfilAgenteAgencia:', array('agencia' => $this->getUser()->getRoles()));
        if($this->getUser()->hasRole('ROLE_AGENTE_AGENCIA')){
            if(!$idAgencia){
               $idAgencia = 'no mostrar nada';
            }
            $grid->setPermanentFilters(array(
            'agente.agencia.id' => (string)$idAgencia));
        }
        
        
        $grid->addColumn($AlertColumn,4);
        //cuando  existe el perfil agente agencia  no tiene acciones
        if(!$this->getUser()->hasRole('ROLE_AGENTE_AGENCIA')){
         //   $grid->addRowAction($rowShow);
        //    $grid->addRowAction($rowAsignarAction);
        //    $grid->addRowAction($rowConciliarAction);
        //    $grid->addRowAction($procesar);
        //    $grid->addRowAction($procesarSupervisor); 
        }
        $grid->addRowAction($rowShow);
        $grid->addRowAction($rowAsignarAction);
        $grid->addRowAction($rowConciliarAction);
        $grid->addRowAction($procesar);
        $grid->addRowAction($procesarSupervisor);
        $grid->addExport($csvExport);
        return $grid->getGridResponse('EmisionesBundle:QueueManager:grid.html.twig',array('configuracionactiva'=>$configuracionActiva));
    }
    
    /**
     * Metodo para buscar en base la agencia por el id agente retorna una collecion de agencias
     */
    public function consultarAgenciasPorIdAgente($idUsuarioAgente){
        
        $em =  $this->getDoctrine()->getManager();
        $agente=$em->getRepository('EmisionesBundle:Agente')->findOneBy(array('id'=> $idUsuarioAgente));
        /**$idAgencia = array();
        if($agentes){
            foreach ($agentes as $agente) {
                array_push($idAgencia,$agente->getIdAgencia());
            }
        }*/
       if($agente instanceof Agente){
           $this->container->get('logger')->info('agencias:', array('agencia' => $agente->getIdAgencia()));
           return   $agente->getIdAgencia(); 
       }else{
            $this->container->get('logger')->info('El usuario no es un agente');
           return null;
       }
      
    }
    public function getValorMonetarioOrden($idOrden)
    {
        $em=  $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EmisionesBundle:Orden')->find($idOrden);
        if(!$entity)
        {
            return -1;//error
        }
        $total=0;
        foreach ($entity->getFormasPagos() as $fp) {
            if($fp instanceof Tarjetacredito)
            {
                $total+=$fp->getValorTotal();
            }
            else
            {
                $total+=$fp->getValor();
            }
        }
       return $total;
    }
}
