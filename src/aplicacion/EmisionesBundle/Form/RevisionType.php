<?php

namespace aplicacion\EmisionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RevisionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('numeroOrden','text',array('attr'=>array('class' => 'form-control input-sm','readOnly'=>true)))
           ->add('tarjet','text',array('attr'=>array('class' => 'form-control input-sm','readOnly'=>true)))
           ->add('agente', 'entity', array(
                'class' => 'EmisionesBundle:Agente',
                'property'=>'getNombreCompleto',
                'attr'=> array('class' => 'form-control input-sm')
             ))
          ->add('gds', 'entity', array(
                'class' => 'EmisionesBundle:Gds',
                'property'=>'nombre',
                'attr'=> array('class' => 'form-control input-sm')
             ))
           ->add('tipoBoleto','text',array('attr'=>array('class' => 'form-control input-sm')))
            ->add('estado', 'entity', array(
                'class' => 'EmisionesBundle:Estadoorden',
                'property'=>'nombre',
                'attr'=> array('class' => 'form-control input-sm','size'=>7,'style'=>'height:70px;')
             ))
            ->add('ciudadDestino', 'entity', array(
                'class' => 'EmisionesBundle:Ciudad',
                'property'=>'nombre',
                'attr'=> array('class' => 'form-control input-sm')
             ))
            ->add('recordGds','text',array('attr'=>array('class' => 'form-control input-sm ','readOnly'=>true)))
            ->add('recordNew','text',array('required'=>true,'attr'=>array('class' => 'form-control input-sm ')))
            ->add('tourcode','text',array('required'=>false,'attr'=>array('class' => 'form-control input-sm','readOnly'=>true)))
            ->add('feeServicios','text',array('attr'=>array('class' => 'form-control input-sm')))
            ->add('fecha','datetime',array('widget'=>'single_text', 'format' => 'dd-MM-yyyy  --  H:m:s','attr'=>array('class' => 'form-control input-sm')))
            ->add('reservaPnr','textarea',array('attr'=>array('id'=>'reservapnr','class'=>'form-control','cols'=>80,'readonly'=>true,'style'=>'height:370px;')))
            ->add('tarifaReserva','textarea',array('attr'=>array('id'=>'tarifareserva','class'=>'form-control','cols'=>80,'readonly'=>true,'style'=>'height:240px;')))
            ->add('observaciones','textarea',array('required'=>false,'attr'=>array('id'=>'observaciones','class'=>'form-control','readonly'=>true,'style'=>'height:100px;')))
            ->add('comentario','textarea',array('required'=>false,'attr'=>array('id'=>'comentario','class'=>'form-control','style'=>'height:100px;')))
            
            
           // ->add('reservaPnr')
           // ->add('tarifaReserva')
            ->add('datosBoleto','textarea',array('attr'=>array('id'=>'datosBoleto','class'=>'form-control','readonly'=>true,'style'=>'height:100px;')))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'aplicacion\EmisionesBundle\Entity\Revision'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aplicacion_emisionesbundle_revision';
    }
}
