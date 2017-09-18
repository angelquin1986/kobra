<?php

namespace Proxies\__CG__\aplicacion\EmisionesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Orden extends \aplicacion\EmisionesBundle\Entity\Orden implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'fecha', 'horaAsignacion', 'procesedAt', 'tiempoRealProcesamiento', 'slaIncumplido', 'numeroOrden', 'prioridad', 'procesadaEmergencia', 'numPasajeros', 'tipoBoleto', 'comentario', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'agente', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'usuario', 'estado', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'empresa', 'recordGds', 'recordNew', 'tourcode', 'tiempoProceso', 'feeServicios', 'observaciones', 'detalleAprobacion', 'aprobadoCaja', 'modificadoSupervisorCobros', 'adjunto', 'gds', 'ciudadDestino', 'formasPagos', 'tipoPago');
        }

        return array('__isInitialized__', 'id', 'fecha', 'horaAsignacion', 'procesedAt', 'tiempoRealProcesamiento', 'slaIncumplido', 'numeroOrden', 'prioridad', 'procesadaEmergencia', 'numPasajeros', 'tipoBoleto', 'comentario', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'agente', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'usuario', 'estado', '' . "\0" . 'aplicacion\\EmisionesBundle\\Entity\\Orden' . "\0" . 'empresa', 'recordGds', 'recordNew', 'tourcode', 'tiempoProceso', 'feeServicios', 'observaciones', 'detalleAprobacion', 'aprobadoCaja', 'modificadoSupervisorCobros', 'adjunto', 'gds', 'ciudadDestino', 'formasPagos', 'tipoPago');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Orden $proxy) {
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
    public function isOutOfTimeAlert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isOutOfTimeAlert', array());

        return parent::isOutOfTimeAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function isTimeToFirsAlert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTimeToFirsAlert', array());

        return parent::isTimeToFirsAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function getRealTimeToFailSLA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRealTimeToFailSLA', array());

        return parent::getRealTimeToFailSLA();
    }

    /**
     * {@inheritDoc}
     */
    public function getSLA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSLA', array());

        return parent::getSLA();
    }

    /**
     * {@inheritDoc}
     */
    public function isTimeToSecondAlert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTimeToSecondAlert', array());

        return parent::isTimeToSecondAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function isLimitHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLimitHour', array());

        return parent::isLimitHour();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeLimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeLimit', array());

        return parent::getTimeLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function isPilotPlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPilotPlan', array());

        return parent::isPilotPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function timeOfProcess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'timeOfProcess', array());

        return parent::timeOfProcess();
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', array());

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function timeSinceArrive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'timeSinceArrive', array());

        return parent::timeSinceArrive();
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
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoBoleto($tipoBoleto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoBoleto', array($tipoBoleto));

        return parent::setTipoBoleto($tipoBoleto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoBoleto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoBoleto', array());

        return parent::getTipoBoleto();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', array($comentario));

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', array());

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecordGds($recordGds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordGds', array($recordGds));

        return parent::setRecordGds($recordGds);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordGds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordGds', array());

        return parent::getRecordGds();
    }

    /**
     * {@inheritDoc}
     */
    public function setTourcode($tourcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTourcode', array($tourcode));

        return parent::setTourcode($tourcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getTourcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTourcode', array());

        return parent::getTourcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeeServicios($feeServicios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeeServicios', array($feeServicios));

        return parent::setFeeServicios($feeServicios);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeeServicios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeeServicios', array());

        return parent::getFeeServicios();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgente(\aplicacion\EmisionesBundle\Entity\Agente $agente = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgente', array($agente));

        return parent::setAgente($agente);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgente', array());

        return parent::getAgente();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(\aplicacion\EmisionesBundle\Entity\Estadoorden $estado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setGds(\aplicacion\EmisionesBundle\Entity\Gds $gds = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGds', array($gds));

        return parent::setGds($gds);
    }

    /**
     * {@inheritDoc}
     */
    public function getGds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGds', array());

        return parent::getGds();
    }

    /**
     * {@inheritDoc}
     */
    public function addFormasPago(\aplicacion\EmisionesBundle\Entity\Formapago $formasPagos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFormasPago', array($formasPagos));

        return parent::addFormasPago($formasPagos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFormasPago(\aplicacion\EmisionesBundle\Entity\Formapago $formasPagos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFormasPago', array($formasPagos));

        return parent::removeFormasPago($formasPagos);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormasPagos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormasPagos', array());

        return parent::getFormasPagos();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroOrden($numeroOrden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroOrden', array($numeroOrden));

        return parent::setNumeroOrden($numeroOrden);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroOrden', array());

        return parent::getNumeroOrden();
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
    public function setUsuario(\aplicacion\EmisionesBundle\Entity\Usuariointerno $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiudadDestino(\aplicacion\EmisionesBundle\Entity\Ciudad $ciudadDestino = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiudadDestino', array($ciudadDestino));

        return parent::setCiudadDestino($ciudadDestino);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiudadDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiudadDestino', array());

        return parent::getCiudadDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumPasajeros($numPasajeros)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumPasajeros', array($numPasajeros));

        return parent::setNumPasajeros($numPasajeros);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumPasajeros()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumPasajeros', array());

        return parent::getNumPasajeros();
    }

    /**
     * {@inheritDoc}
     */
    public function setHoraAsignacion($horaAsignacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoraAsignacion', array($horaAsignacion));

        return parent::setHoraAsignacion($horaAsignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoraAsignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraAsignacion', array());

        return parent::getHoraAsignacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcesadaEmergencia($procesadaEmergencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcesadaEmergencia', array($procesadaEmergencia));

        return parent::setProcesadaEmergencia($procesadaEmergencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcesadaEmergencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcesadaEmergencia', array());

        return parent::getProcesadaEmergencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdjunto($adjunto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdjunto', array($adjunto));

        return parent::setAdjunto($adjunto);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjunto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjunto', array());

        return parent::getAdjunto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridad($prioridad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridad', array($prioridad));

        return parent::setPrioridad($prioridad);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridad', array());

        return parent::getPrioridad();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetalleAprobacion($detalleAprobacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetalleAprobacion', array($detalleAprobacion));

        return parent::setDetalleAprobacion($detalleAprobacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetalleAprobacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetalleAprobacion', array());

        return parent::getDetalleAprobacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAprobadoCaja($aprobadoCaja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAprobadoCaja', array($aprobadoCaja));

        return parent::setAprobadoCaja($aprobadoCaja);
    }

    /**
     * {@inheritDoc}
     */
    public function getAprobadoCaja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAprobadoCaja', array());

        return parent::getAprobadoCaja();
    }

    /**
     * {@inheritDoc}
     */
    public function setCajaGeneroAnulacion($cajaGeneroAnulacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCajaGeneroAnulacion', array($cajaGeneroAnulacion));

        return parent::setCajaGeneroAnulacion($cajaGeneroAnulacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCajaGeneroAnulacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCajaGeneroAnulacion', array());

        return parent::getCajaGeneroAnulacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setModificadoSupervisorCobros($modificadoSupervisorCobros)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModificadoSupervisorCobros', array($modificadoSupervisorCobros));

        return parent::setModificadoSupervisorCobros($modificadoSupervisorCobros);
    }

    /**
     * {@inheritDoc}
     */
    public function getModificadoSupervisorCobros()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModificadoSupervisorCobros', array());

        return parent::getModificadoSupervisorCobros();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoProceso($tiempoProceso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoProceso', array($tiempoProceso));

        return parent::setTiempoProceso($tiempoProceso);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoProceso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoProceso', array());

        return parent::getTiempoProceso();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcesedAt($procesedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcesedAt', array($procesedAt));

        return parent::setProcesedAt($procesedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcesedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcesedAt', array());

        return parent::getProcesedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoRealProcesamiento($tiempoRealProcesamiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoRealProcesamiento', array($tiempoRealProcesamiento));

        return parent::setTiempoRealProcesamiento($tiempoRealProcesamiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoRealProcesamiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoRealProcesamiento', array());

        return parent::getTiempoRealProcesamiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlaIncumplido($slaIncumplido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlaIncumplido', array($slaIncumplido));

        return parent::setSlaIncumplido($slaIncumplido);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlaIncumplido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlaIncumplido', array());

        return parent::getSlaIncumplido();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoPago($tipoPago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoPago', array($tipoPago));

        return parent::setTipoPago($tipoPago);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoPago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoPago', array());

        return parent::getTipoPago();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecordNew($recordNew)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordNew', array($recordNew));

        return parent::setRecordNew($recordNew);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordNew', array());

        return parent::getRecordNew();
    }

}
