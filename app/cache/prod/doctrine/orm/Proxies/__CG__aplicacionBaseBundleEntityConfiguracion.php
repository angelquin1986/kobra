<?php

namespace Proxies\__CG__\aplicacion\BaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Configuracion extends \aplicacion\BaseBundle\Entity\Configuracion implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'id', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'lastCounter', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'nombre', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'descripcion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoPrimeraAlerta', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'feeEmergencia', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoSegundaAlerta', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRespuestaPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRespuestaNormal', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'emailViaticos', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'emailVacaciones', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'empresa', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'activa', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoAnulacion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoEmision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'inicioHorarioAtencion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'finHorarioAtencion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRevision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoCash', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoVtc', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoLocal', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRemota', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoPorPasajero', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionNoPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionEmision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionRevision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionAnulacion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionSVI', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionNOSVI');
        }

        return array('__isInitialized__', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'id', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'lastCounter', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'nombre', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'descripcion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoPrimeraAlerta', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'feeEmergencia', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoSegundaAlerta', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRespuestaPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRespuestaNormal', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'emailViaticos', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'emailVacaciones', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'empresa', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'activa', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoAnulacion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoEmision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'inicioHorarioAtencion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'finHorarioAtencion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRevision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoCash', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoFomaPagoVtc', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoLocal', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoRemota', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'tiempoPorPasajero', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionNoPlanPiloto', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionEmision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionRevision', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionAnulacion', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionSVI', '' . "\0" . 'aplicacion\\BaseBundle\\Entity\\Configuracion' . "\0" . 'ponderacionNOSVI');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Configuracion $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailViaticos($emailViaticos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailViaticos', array($emailViaticos));

        return parent::setEmailViaticos($emailViaticos);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailViaticos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailViaticos', array());

        return parent::getEmailViaticos();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailVacaciones($emailVacaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailVacaciones', array($emailVacaciones));

        return parent::setEmailVacaciones($emailVacaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailVacaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailVacaciones', array());

        return parent::getEmailVacaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiva($activa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiva', array($activa));

        return parent::setActiva($activa);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiva', array());

        return parent::getActiva();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoAnulacion($tiempoAnulacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoAnulacion', array($tiempoAnulacion));

        return parent::setTiempoAnulacion($tiempoAnulacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoAnulacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoAnulacion', array());

        return parent::getTiempoAnulacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoEmision($tiempoEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoEmision', array($tiempoEmision));

        return parent::setTiempoEmision($tiempoEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoEmision', array());

        return parent::getTiempoEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoRevision($tiempoRevision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoRevision', array($tiempoRevision));

        return parent::setTiempoRevision($tiempoRevision);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoRevision', array());

        return parent::getTiempoRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoFomaPagoCash($tiempoFomaPagoCash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoFomaPagoCash', array($tiempoFomaPagoCash));

        return parent::setTiempoFomaPagoCash($tiempoFomaPagoCash);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoFomaPagoCash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoFomaPagoCash', array());

        return parent::getTiempoFomaPagoCash();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoFomaPagoPlanPiloto($tiempoFomaPagoPlanPiloto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoFomaPagoPlanPiloto', array($tiempoFomaPagoPlanPiloto));

        return parent::setTiempoFomaPagoPlanPiloto($tiempoFomaPagoPlanPiloto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoFomaPagoPlanPiloto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoFomaPagoPlanPiloto', array());

        return parent::getTiempoFomaPagoPlanPiloto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoFomaPagoVtc($tiempoFomaPagoVtc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoFomaPagoVtc', array($tiempoFomaPagoVtc));

        return parent::setTiempoFomaPagoVtc($tiempoFomaPagoVtc);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoFomaPagoVtc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoFomaPagoVtc', array());

        return parent::getTiempoFomaPagoVtc();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoLocal($tiempoLocal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoLocal', array($tiempoLocal));

        return parent::setTiempoLocal($tiempoLocal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoLocal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoLocal', array());

        return parent::getTiempoLocal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoRemota($tiempoRemota)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoRemota', array($tiempoRemota));

        return parent::setTiempoRemota($tiempoRemota);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoRemota()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoRemota', array());

        return parent::getTiempoRemota();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoPorPasajero($tiempoPorPasajero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoPorPasajero', array($tiempoPorPasajero));

        return parent::setTiempoPorPasajero($tiempoPorPasajero);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoPorPasajero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoPorPasajero', array());

        return parent::getTiempoPorPasajero();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastCounter(\aplicacion\EmisionesBundle\Entity\Usuariointerno $lastCounter = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastCounter', array($lastCounter));

        return parent::setLastCounter($lastCounter);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastCounter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastCounter', array());

        return parent::getLastCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpresa(\aplicacion\BaseBundle\Entity\Empresa $empresa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpresa', array($empresa));

        return parent::setEmpresa($empresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpresa', array());

        return parent::getEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoRespuestaPlanPiloto($tiempoRespuestaPlanPiloto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoRespuestaPlanPiloto', array($tiempoRespuestaPlanPiloto));

        return parent::setTiempoRespuestaPlanPiloto($tiempoRespuestaPlanPiloto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoRespuestaPlanPiloto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoRespuestaPlanPiloto', array());

        return parent::getTiempoRespuestaPlanPiloto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoRespuestaNormal($tiempoRespuestaNormal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoRespuestaNormal', array($tiempoRespuestaNormal));

        return parent::setTiempoRespuestaNormal($tiempoRespuestaNormal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoRespuestaNormal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoRespuestaNormal', array());

        return parent::getTiempoRespuestaNormal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionPlanPiloto($ponderacionPlanPiloto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionPlanPiloto', array($ponderacionPlanPiloto));

        return parent::setPonderacionPlanPiloto($ponderacionPlanPiloto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionPlanPiloto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionPlanPiloto', array());

        return parent::getPonderacionPlanPiloto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionNoPlanPiloto($ponderacionNoPlanPiloto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionNoPlanPiloto', array($ponderacionNoPlanPiloto));

        return parent::setPonderacionNoPlanPiloto($ponderacionNoPlanPiloto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionNoPlanPiloto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionNoPlanPiloto', array());

        return parent::getPonderacionNoPlanPiloto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionEmision($ponderacionEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionEmision', array($ponderacionEmision));

        return parent::setPonderacionEmision($ponderacionEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionEmision', array());

        return parent::getPonderacionEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionRevision($ponderacionRevision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionRevision', array($ponderacionRevision));

        return parent::setPonderacionRevision($ponderacionRevision);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionRevision', array());

        return parent::getPonderacionRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionAnulacion($ponderacionAnulacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionAnulacion', array($ponderacionAnulacion));

        return parent::setPonderacionAnulacion($ponderacionAnulacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionAnulacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionAnulacion', array());

        return parent::getPonderacionAnulacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setInicioHorarioAtencion($inicioHorarioAtencion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInicioHorarioAtencion', array($inicioHorarioAtencion));

        return parent::setInicioHorarioAtencion($inicioHorarioAtencion);
    }

    /**
     * {@inheritDoc}
     */
    public function getInicioHorarioAtencion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInicioHorarioAtencion', array());

        return parent::getInicioHorarioAtencion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinHorarioAtencion($finHorarioAtencion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinHorarioAtencion', array($finHorarioAtencion));

        return parent::setFinHorarioAtencion($finHorarioAtencion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinHorarioAtencion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinHorarioAtencion', array());

        return parent::getFinHorarioAtencion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionSVI($ponderacionSVI)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionSVI', array($ponderacionSVI));

        return parent::setPonderacionSVI($ponderacionSVI);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionSVI()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionSVI', array());

        return parent::getPonderacionSVI();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonderacionNOSVI($ponderacionNOSVI)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonderacionNOSVI', array($ponderacionNOSVI));

        return parent::setPonderacionNOSVI($ponderacionNOSVI);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonderacionNOSVI()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonderacionNOSVI', array());

        return parent::getPonderacionNOSVI();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoPrimeraAlerta($tiempoPrimeraAlerta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoPrimeraAlerta', array($tiempoPrimeraAlerta));

        return parent::setTiempoPrimeraAlerta($tiempoPrimeraAlerta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoPrimeraAlerta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoPrimeraAlerta', array());

        return parent::getTiempoPrimeraAlerta();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoSegundaAlerta($tiempoSegundaAlerta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoSegundaAlerta', array($tiempoSegundaAlerta));

        return parent::setTiempoSegundaAlerta($tiempoSegundaAlerta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoSegundaAlerta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoSegundaAlerta', array());

        return parent::getTiempoSegundaAlerta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeeEmergencia($feeEmergencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeeEmergencia', array($feeEmergencia));

        return parent::setFeeEmergencia($feeEmergencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeeEmergencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeeEmergencia', array());

        return parent::getFeeEmergencia();
    }

}
