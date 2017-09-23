<?php

namespace aplicacion\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AplicacionController extends Controller
{
    
    public function indexAction()
    {
         $this->container->get('logger')->error('Local variables',  $this->getUser()->getRoles());
        //echo '<script>console.log('+$this->getUser()+')</script>';
        if( in_array('ROLE_CAJA', $this->getUser()->getRoles()) || in_array('ROLE_SUPERVISOR_COBRANZA', $this->getUser()->getRoles()))
        {
           return $this->redirect($this->generateUrl('dashboard_cobranza'));
        }
        else if ( in_array('ROLE_AGENTE_EXTERNO', $this->getUser()->getRoles())) 
        {
            return $this->redirect($this->generateUrl('agente_vista_agente'));
        }
        else{
            if ( in_array('ROLE_ADMINISTRADOR', $this->getUser()->getRoles()))  {
                return $this->redirect($this->generateUrl('supervisor_agentes_agencias'));
            }
        }
        return $this->render('BaseBundle:Masters:index.html.twig');

    }
   
    public function lockScreenAction()
    {
        return $this->render('BaseBundle:Masters:lockScreen.html.twig');

    }
    public function organigramaAction($empresa,$tipo)
    {
        
        return $this->render('BaseBundle:Organigrama:'.$tipo.'.html.twig',
                array(
                    'empresa'=>$empresa                   
                ));

    }
}
