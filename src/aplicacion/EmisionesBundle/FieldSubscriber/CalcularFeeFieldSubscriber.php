<?php
namespace aplicacion\EmisionesBundle\FieldSubscriber;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use aplicacion\EmisionesBundle\Utilitarios\CalculoFee;
use Symfony\Component\Form\FormFactoryInterface;
class CalcularFeeFieldSubscriber implements EventSubscriberInterface{
     protected $calculoFee;
    /**
     * @param FormFactoryInterface $factory 
     */
    public function __construct(FormFactoryInterface $factory,CalculoFee $calculoFee )
    {
        $this->factory = $factory;
        $this->calculoFee = $calculoFee;
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

   public function preSubmit(FormEvent $event){
        $data = $event->getData();
        $formulario = $event->getForm();
        $dataform =$formulario->getData();
        $aerolinea = $data['aerolineaEntidad'];
        $procesadaEmergencia =$dataform->getProcesadaEmergencia();
        if($procesadaEmergencia){
            $procesadaEmergencia =1;
        }else{
            $procesadaEmergencia=0;
        }
        $tipoBoleto = $dataform->getTipoBoleto();
        $tipoServicio=$dataform->getTipo();;
        
        
        $valoresFee = $this->calculoFee->calcularFee(
                $procesadaEmergencia, $aerolinea, $tipoBoleto, $tipoServicio,'F');
        
        
       /* $formulario->add('feeEmergenciaServicios', 'text',
                array('required'=>true,
                      'attr'=>array('class' => 'form-control input-smv  saesasda',
                      'readOnly'=>true,
                      'valFee' => $valoresFee['fee'],
                      'valFeeEmer' => $valoresFee['feeEmergente'])
        ));*/
        
       /* $formulario->add($this->factory->createNamed('is_admin', 'text', '1', array(
            'property_path' => false,
            'required' => false
        )));*/
    }
}
