<?php

namespace aplicacion\RestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
/**
* @Method({"POST"})
*/
class DefaultController extends FOSRestController{
    
    public function indexAction(Request $request){
       //tomar los datos del header de la peticion
       $data = json_decode($request->getContent(), true);
       
       $this->container->get('logger')->error('calcularFee',  array('inicio' => $data));
             
       $feeServices = $this->get('FeeServices');
       $origen ='F';
       $this->container->get('logger')->error('tomar primer numero del formulario',  array('numero' => substr($data['idnumeroOrden'],0,1)));
       if($data['idnumeroOrden'] && substr($data['idnumeroOrden'],0,1)!='1'){
           $origen ='E';
       }
       $feeResultado = $feeServices->calcularFee(
                $data['idProcesadaEmergencia'], $data['aerolinea'],$data['idTipoBoleto'],$data['idTipo'],$origen);
        
        $view = View::create();
        $view->setData($feeResultado);
        
        return $this->handleView($view);
    }
}
